<!DOCTYPE html>
<html lang="<?= $i18n->getLang() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= e($metaDescription ?? ($i18n->getLang() === 'de' ? 'Samuel Rüegger - Web-Entwickler, AI-Experte und Tech-Kreativer. Moderne Webentwicklung, KI-Integration und technische Innovation.' : 'Samuel Rüegger - Web Developer, AI Expert & Tech Creative. Modern web development, AI integration, and technical innovation.')) ?>">
    <meta name="author" content="Samuel Rüegger">
    <meta name="keywords" content="<?= e($metaKeywords ?? 'Web Development, AI, Artificial Intelligence, PHP, JavaScript, Linux, Technology') ?>">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="<?= isset($ogType) ? e($ogType) : 'website' ?>">
    <meta property="og:url" content="<?= isset($ogUrl) ? e($ogUrl) : e($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>">
    <meta property="og:title" content="<?= e($pageTitle ?? 'Samuel Rüegger - Web Developer & AI Expert') ?>">
    <meta property="og:description" content="<?= e($metaDescription ?? ($i18n->getLang() === 'de' ? 'Web-Entwickler, AI-Experte und Tech-Kreativer' : 'Web Developer, AI Expert & Tech Creative')) ?>">
    <meta property="og:image" content="<?= isset($ogImage) ? e($ogImage) : e($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . asset('images/samuel-rueegger.jpg')) ?>">
    <meta property="og:locale" content="<?= $i18n->getLang() === 'de' ? 'de_CH' : 'en_US' ?>">
    <meta property="og:site_name" content="Samuel Rüegger">

<?php if (isset($articlePublishedTime) && $articlePublishedTime): ?>
    <meta property="article:published_time" content="<?= e($articlePublishedTime) ?>">
<?php endif; ?>

<?php if (isset($articleAuthor) && $articleAuthor): ?>
    <meta property="article:author" content="<?= e($articleAuthor) ?>">
<?php endif; ?>

<?php if (isset($articleTags) && is_array($articleTags)): ?>
    <?php foreach ($articleTags as $tag): ?>
    <meta property="article:tag" content="<?= e($tag) ?>">
    <?php endforeach; ?>
<?php endif; ?>

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@srueegger">
    <meta name="twitter:creator" content="@srueegger">
    <meta name="twitter:title" content="<?= e($pageTitle ?? 'Samuel Rüegger - Web Developer & AI Expert') ?>">
    <meta name="twitter:description" content="<?= e($metaDescription ?? ($i18n->getLang() === 'de' ? 'Web-Entwickler, AI-Experte und Tech-Kreativer' : 'Web Developer, AI Expert & Tech Creative')) ?>">
    <meta name="twitter:image" content="<?= isset($ogImage) ? e($ogImage) : e($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . asset('images/samuel-rueegger.jpg')) ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('favicon.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('apple-touch-icon.png') ?>">
    <link rel="manifest" href="<?= asset('site.webmanifest') ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">

    <!-- Font Awesome Pro -->
    <script src="https://kit.fontawesome.com/3770a9ceab.js" crossorigin="anonymous"></script>

    <title><?= e($pageTitle ?? 'Samuel Rüegger - Web Developer & AI Expert') ?></title>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <?php include __DIR__ . '/navigation.php'; ?>

    <!-- Main Content -->
    <main class="min-h-screen">
