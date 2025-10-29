#!/usr/bin/env php
<?php
/**
 * Blog Image Downloader
 * Downloads images from forum articles and saves them locally
 */

// Image mappings: article slug => image URLs
$imageMap = [
    'ubuntu-25-10-warum-der-wechsel-von-initramfs-tools-zu-dracut-wichtig-ist' => [
        'https://forum.linuxguides.de/core/index.php?media/56-initramfs-png/',
    ],
    'iphone-air-das-duennste-iphone-aller-zeiten-mein-3-tage-fazit' => [
        'https://forum.linuxguides.de/core/index.php?media/53-img-20250927-182529444-jpg/',
        'https://forum.linuxguides.de/core/_data/public/files/61/fe/25112-61feb6fe4a306f1af84d741702dcaa340204138757734fd30264cb6929ebea2f-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/2d/2f/25113-2d2ffd4ee1980dab346599fde58a2d366659f70edd134e8e2e34ab462e593f25-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/1a/59/25114-1a59b1f56746cc1d5dde365153e0b4697e239d1a2434a72732dcc55b9e8016b8-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/8e/85/25115-8e85c1629d6200d5d3868a62b73dfef8a480a780c1c92061651121792e9a8077-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/32/f9/25116-32f96ba1cb0a379ae5d1590592baaabb17bc6654b4dbb777270844f64318233a-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/7c/c9/25117-7cc911543c462958605962262da5548e9af19011be2cc3eed558b0182b278255-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/1a/ab/25118-1aab85beec2cdb564d928e8fafbe44b728685de7a8965521ac9cfd266bacce14-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/83/17/25119-8317a421f68f4fcf7d87466b199132f3591bc3954b099ca13fe9f445d44b6769-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/09/b3/25120-09b3246046de59cb476ba17fec7e4c6346bc7ad9b20963b4b47c73b44a02d26e-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/32/01/25122-32015c2ab98813c74f3d13d8d56e10c0bc9b2f5593ad861d6e31f4df9a3d622f-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/02/7c/25121-027c751b877c798b52f5c3e3bd5a639e454fd37d0eef4eb4f2dccec0dd29c5f7-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/ae/92/25126-ae92ce9564dabc1d18a25a18801d9767e2dbf3a503755597d51559079a2fef09-variant.webp',
    ],
    'gradia-die-beste-screenshot-app-fuer-gnome' => [
        'https://forum.linuxguides.de/core/index.php?media/49-71225d25-7542-4d4e-b4a3-96973928eecf-png/',
        'https://forum.linuxguides.de/core/_data/public/files/fd/59/24091-fd5901544993869ccc005a07c4beed61efa5bad33976fa8fa7e94fab4ba367e0-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/db/23/24093-db239ad3367fb10bbe4a1338d712b50343258b58f96358724002c4fa20a853b4-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/c4/2d/24094-c42d977b5edc436c01d51f3349feabe0ee0b69924c2c5af180f67f68bb590085-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/d7/4f/24092-d74fdfe42b9979c263aaf0ad59a2f0b31a9c1df1e50fe2fd53e12bda4d94bf0c-variant.webp',
    ],
    'proton-lumo-im-vergleich-mit-chatgpt-gemini-perplexity-und-mistral' => [
        'https://forum.linuxguides.de/core/index.php?media/48-chatgpt-image-16-aug-2025-20-03-16-png/',
    ],
    'zwei-monate-mit-tuxedo-os-eindr

uecke-eines-linux-veteranen' => [
        'https://forum.linuxguides.de/core/index.php?media/47-bildschirmfoto-20250813-232219-png/',
        'https://forum.linuxguides.de/core/_data/public/files/86/ad/23799-86ad118ea36bff830354e40c6542ed6bb19c7db9bc61d57198b7e75247260152-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/99/8c/23797-998c896611017913717459703717f39823e85be4b22b94d1ddd893c0d1b06a3e-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/fd/3e/23798-fd3e328313e070b215cae1fb9bfa0e0b92d4154555ef4105b0157522d90c73be-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/f8/3d/23800-f83d05ded5312a8150bea7956b14b000645078e8e5e07d7a8add028aa5157503-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/7d/16/23801-7d16f114c52e4266a88ac30fd67a93f242b842afca38661302c5b37646c3d5d1-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/a7/22/23802-a7221b223d2b61f00e3fdcb9419ac837ec3a59ecbea8bbd5b5a8f9d51c365c3e-variant.webp',
    ],
    'die-schlacht-um-den-desktop-eine-geschichte-von-freiheit-verrat-und-visionen' => [
        'https://forum.linuxguides.de/core/index.php?file-download/21633/', // KDE 1.0
        'https://forum.linuxguides.de/core/index.php?file-download/21634/', // GNOME 1.x
    ],
    'shortwave-die-beste-internetradio-app-fuer-linux' => [
        'https://forum.linuxguides.de/core/index.php?media/26-dall-e-2025-03-08-18-08-20-a-cozy-vintage-living-room-with-a-classic-shortwave-r/',
        'https://forum.linuxguides.de/core/_data/public/files/3e/59/18523-3e5998c5191f97606c449700a68d0b3de19a02086de9e2af421acc8aa5f80aeb-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/12/6f/18524-126fdffe90f805484b7db99a2bd835129484e7e5eda9f0bbbf05b1692d619d55-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/c0/cb/18525-c0cb245671ee6636c1e27362b922d3797ad0a2b65e1d8082204c7aa3ac340b0d-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/e5/84/18526-e584d1e3a01b4f60d76da987a6456a992406533a1fffaee06be0a518e8e0f27b-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/69/a6/18527-69a63bd26e277ce537561b4551963e7894eddd0d852c20d059dd19e10e02577f-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/4e/43/18528-4e432424bcdee1e63e6b858bdcf1baed85ddc378595e6d91a4d5c63c62657b3b-variant.webp',
        'https://forum.linuxguides.de/core/_data/public/files/c9/f4/18529-c9f4f7efb82ec519f76103104adb54a32ebd8634d64488c720df93312c22f1d2-variant.webp',
    ],
];

$targetDir = __DIR__ . '/public/media/blog/';

// Create target directory if it doesn't exist
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

echo "🖼️  Blog Image Downloader\n";
echo "========================\n\n";

$totalDownloaded = 0;
$totalFailed = 0;

foreach ($imageMap as $slug => $urls) {
    if (empty($urls)) {
        echo "⏭️  Skipping $slug (no images)\n";
        continue;
    }

    echo "📝 Processing: $slug\n";

    foreach ($urls as $index => $url) {
        // Generate filename from URL
        $pathInfo = parse_url($url);
        $path = $pathInfo['path'] ?? '';
        $query = $pathInfo['query'] ?? '';

        // Extract meaningful filename or use index
        if (preg_match('/media\/(\d+)-([^\/]+)/', $path, $matches)) {
            $filename = $slug . '-' . $matches[2];
        } elseif (preg_match('/file-download\/(\d+)/', $path, $matches)) {
            $filename = $slug . '-image-' . $matches[1] . '.png';
        } elseif (preg_match('/([a-f0-9]{64})/', $path, $matches)) {
            $ext = pathinfo($path, PATHINFO_EXTENSION) ?: 'webp';
            $filename = $slug . '-' . ($index + 1) . '.' . $ext;
        } else {
            $ext = pathinfo($path, PATHINFO_EXTENSION) ?: 'jpg';
            $filename = $slug . '-' . ($index + 1) . '.' . $ext;
        }

        $targetPath = $targetDir . $filename;

        echo "  📥 Downloading: $url\n";
        echo "     → $filename ... ";

        // Try to download with curl
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
            CURLOPT_HTTPHEADER => [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
                'Accept-Language: de,en-US;q=0.7,en;q=0.3',
                'Referer: https://forum.linuxguides.de/',
            ],
        ]);

        $data = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        curl_close($ch);

        if ($data === false || $httpCode !== 200) {
            echo "❌ Failed (HTTP $httpCode)\n";
            $totalFailed++;
            continue;
        }

        // Check if it's actually an image
        if (!str_starts_with($contentType, 'image/')) {
            echo "⚠️  Not an image (Content-Type: $contentType)\n";
            $totalFailed++;
            continue;
        }

        // Save the file
        if (file_put_contents($targetPath, $data)) {
            $size = filesize($targetPath);
            $sizeKb = round($size / 1024, 1);
            echo "✅ Success ({$sizeKb} KB)\n";
            $totalDownloaded++;
        } else {
            echo "❌ Failed to write file\n";
            $totalFailed++;
        }
    }

    echo "\n";
}

echo "========================\n";
echo "📊 Summary:\n";
echo "   ✅ Downloaded: $totalDownloaded images\n";
echo "   ❌ Failed: $totalFailed images\n";
echo "\n";

if ($totalDownloaded > 0) {
    echo "💡 Next step: Update the blog post frontmatter with image paths\n";
    echo "   Example: image: \"/media/blog/your-image-name.png\"\n";
}
