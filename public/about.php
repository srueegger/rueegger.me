<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;
use App\MarkdownParser;

$i18n = new I18n('../content');
$parser = new MarkdownParser();

$pageTitle = $i18n->getLang() === 'de' ? 'Über mich - Samuel Rüegger' : 'About Me - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de'
    ? 'Erfahre mehr über Samuel Rüegger - Web-Entwickler, AI-Experte und Tech-Kreativer. Meine Geschichte, Technologien und Philosophie.'
    : 'Learn more about Samuel Rüegger - Web Developer, AI Expert & Tech Creative. My story, technologies, and philosophy.';

include '../includes/header.php';

// Load content
$content = $i18n->loadContent('pages/about');
$html = $content ? $parser->parse($content) : '';
?>

<div class="pt-24 pb-20 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 md:p-12 animate-on-scroll">
            <div class="prose prose-lg dark:prose-invert max-w-none">
                <?= $html ?>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
