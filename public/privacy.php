<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;
use App\MarkdownParser;

$i18n = new I18n('../content');
$parser = new MarkdownParser();

$pageTitle = $i18n->getLang() === 'de' ? 'Datenschutz - Samuel Rüegger' : 'Privacy - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de'
    ? 'Datenschutzerklärung von rueegger.me - Informationen zur Datenverarbeitung und Ihren Rechten.'
    : 'Privacy policy of rueegger.me - Information about data processing and your rights.';

// OG meta tags
$ogImage = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/images/samuel-rueegger.jpg';
$ogUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ogType = 'website';

include '../includes/header.php';

$content = $i18n->loadContent('pages/privacy');
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
