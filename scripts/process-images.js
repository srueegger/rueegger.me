#!/usr/bin/env node

/**
 * Image Processing Script for rueegger.me
 *
 * Generates responsive images in multiple sizes and formats (AVIF, WebP, JPEG)
 * from source images for optimal web performance.
 *
 * Usage: node scripts/process-images.js
 * Or via npm: npm run build:images
 */

const sharp = require('sharp');
const { glob } = require('glob');
const fs = require('fs');
const path = require('path');

// Configuration
const config = {
  sourceDir: 'media/source',
  outputDir: 'public/media/generated',

  // Image size presets for different use cases
  sizes: {
    // Blog hero images (post.php) - max-w-4xl container (896px)
    hero: [480, 768, 1024, 1536],

    // Blog thumbnails (blog.php) - md:w-48 (192px)
    thumbnail: [200, 400, 600],

    // Blog cards (index.php) - ~400px per card in 3-column grid
    card: [400, 600, 800, 1200],

    // Profile and general images
    profile: [400, 600, 800, 1200]
  },

  // Quality settings (lower = smaller file, 100 = maximum quality)
  // These values are optimized for best quality/size ratio
  quality: {
    avif: 82,  // AVIF has best compression, can use lower quality
    webp: 88,  // WebP is good middle ground
    jpeg: 85   // JPEG is fallback for old browsers
  },

  // Output formats in order of preference
  formats: ['avif', 'webp', 'jpeg']
};

/**
 * Get the size preset for an image based on its path
 */
function getSizePreset(imagePath) {
  const filename = path.basename(imagePath).toLowerCase();

  // Profile image
  if (filename.includes('samuel-rueegger')) {
    return 'profile';
  }

  // Blog images - use card size for blog listings/cards
  if (imagePath.includes('/blog/')) {
    return 'card';
  }

  // Default to card size
  return 'card';
}

/**
 * Process a single image file
 */
async function processImage(sourcePath, outputBasePath, sizes) {
  const ext = path.extname(sourcePath);
  const basename = path.basename(sourcePath, ext);
  const relativeDir = path.dirname(path.relative(config.sourceDir, sourcePath));
  const outputDir = path.join(config.outputDir, relativeDir);

  // Ensure output directory exists
  if (!fs.existsSync(outputDir)) {
    fs.mkdirSync(outputDir, { recursive: true });
  }

  console.log(`Processing: ${path.relative(process.cwd(), sourcePath)}`);

  // Get original image metadata
  const image = sharp(sourcePath);
  const metadata = await image.metadata();

  // Process each size
  for (const width of sizes) {
    // Skip if source image is smaller than target width
    if (metadata.width < width) {
      console.log(`  ⊘ Skipping ${width}w (source is ${metadata.width}px wide)`);
      continue;
    }

    // Process each format
    for (const format of config.formats) {
      const outputPath = path.join(outputDir, `${basename}-${width}w.${format}`);

      try {
        await sharp(sourcePath)
          .resize(width, null, {
            withoutEnlargement: true,
            fit: 'inside'
          })
          [format]({ quality: config.quality[format] })
          .toFile(outputPath);

        const stats = fs.statSync(outputPath);
        const sizeKB = (stats.size / 1024).toFixed(1);
        console.log(`  ✓ ${width}w ${format.toUpperCase()}: ${sizeKB} KB`);
      } catch (error) {
        console.error(`  ✗ Error creating ${width}w ${format}:`, error.message);
      }
    }
  }

  console.log('');
}

/**
 * Main processing function
 */
async function processAllImages() {
  console.log('🖼️  Image Processing Starting...\n');
  console.log('Source directory:', config.sourceDir);
  console.log('Output directory:', config.outputDir);
  console.log('Formats:', config.formats.join(', ').toUpperCase());
  console.log('Quality settings:', JSON.stringify(config.quality, null, 2));
  console.log('\n' + '='.repeat(60) + '\n');

  // Find all images in source directory
  const pattern = path.join(config.sourceDir, '**', '*.{jpg,jpeg,png,webp}');
  const images = await glob(pattern, { nodir: true });

  if (images.length === 0) {
    console.log('⚠️  No images found in source directory!');
    console.log('   Please add images to:', path.resolve(config.sourceDir));
    return;
  }

  console.log(`Found ${images.length} source image(s)\n`);

  // Process each image
  let processedCount = 0;
  let errorCount = 0;

  for (const imagePath of images) {
    try {
      const preset = getSizePreset(imagePath);
      const sizes = config.sizes[preset];
      await processImage(imagePath, config.outputDir, sizes);
      processedCount++;
    } catch (error) {
      console.error(`✗ Failed to process ${imagePath}:`, error.message);
      errorCount++;
    }
  }

  console.log('='.repeat(60));
  console.log('✅ Processing complete!');
  console.log(`   Processed: ${processedCount} images`);
  if (errorCount > 0) {
    console.log(`   Errors: ${errorCount}`);
  }
  console.log('');
}

// Run the script
processAllImages().catch(error => {
  console.error('Fatal error:', error);
  process.exit(1);
});
