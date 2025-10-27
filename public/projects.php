<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;

$i18n = new I18n('../content');

$pageTitle = $i18n->getLang() === 'de' ? 'Projekte - Samuel Rüegger' : 'Projects - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de'
    ? 'Portfolio und Projekte von Samuel Rüegger - Web-Entwicklung, AI-Integration und innovative Tech-Lösungen.'
    : 'Portfolio and projects by Samuel Rüegger - Web development, AI integration, and innovative tech solutions.';

include '../includes/header.php';

// Define projects
$projects = [
    [
        'title_de' => 'AI-Integration Suite',
        'title_en' => 'AI Integration Suite',
        'desc_de' => 'Modulares Framework zur Integration von Claude AI und OpenAI in bestehende Webanwendungen. Inkl. Prompt-Management, Rate-Limiting und Caching.',
        'desc_en' => 'Modular framework for integrating Claude AI and OpenAI into existing web applications. Includes prompt management, rate limiting, and caching.',
        'tech' => ['PHP', 'Laravel', 'Vue.js', 'Claude API', 'Redis'],
        'icon' => '🤖'
    ],
    [
        'title_de' => 'Modern CMS Platform',
        'title_en' => 'Modern CMS Platform',
        'desc_de' => 'Headless CMS mit REST/GraphQL API, Multi-Tenancy, Media-Management und Role-Based Access Control.',
        'desc_en' => 'Headless CMS with REST/GraphQL API, multi-tenancy, media management, and role-based access control.',
        'tech' => ['PHP', 'Symfony', 'TypeScript', 'PostgreSQL', 'Docker'],
        'icon' => '📝'
    ],
    [
        'title_de' => 'E-Commerce-Optimierung',
        'title_en' => 'E-Commerce Optimization',
        'desc_de' => 'Performance-Optimierung eines großen Online-Shops: Reduktion der Ladezeit um 70%, Implementierung von Service Workers und Progressive Web App Features.',
        'desc_en' => 'Performance optimization of a large online shop: 70% load time reduction, service worker implementation, and Progressive Web App features.',
        'tech' => ['JavaScript', 'Webpack', 'PWA', 'Tailwind CSS', 'Redis'],
        'icon' => '🛒'
    ],
    [
        'title_de' => 'DevOps Automation Pipeline',
        'title_en' => 'DevOps Automation Pipeline',
        'desc_de' => 'CI/CD-Pipeline mit automatisierten Tests, Code-Quality-Checks, Security-Scans und Multi-Stage-Deployments auf Kubernetes.',
        'desc_en' => 'CI/CD pipeline with automated testing, code quality checks, security scans, and multi-stage deployments on Kubernetes.',
        'tech' => ['GitLab CI', 'Docker', 'Kubernetes', 'Terraform', 'Ansible'],
        'icon' => '🚀'
    ],
    [
        'title_de' => 'Real-Time Analytics Dashboard',
        'title_en' => 'Real-Time Analytics Dashboard',
        'desc_de' => 'Echtzeit-Dashboard für Business Analytics mit WebSocket-Verbindungen, interaktiven Charts und Daten-Visualisierung.',
        'desc_en' => 'Real-time business analytics dashboard with WebSocket connections, interactive charts, and data visualization.',
        'tech' => ['Node.js', 'Vue.js', 'Socket.io', 'Chart.js', 'MongoDB'],
        'icon' => '📊'
    ],
    [
        'title_de' => 'Open Source Contributions',
        'title_en' => 'Open Source Contributions',
        'desc_de' => 'Aktive Beiträge zu verschiedenen Open-Source-Projekten: Bug-Fixes, Feature-Entwicklung und Dokumentation.',
        'desc_en' => 'Active contributions to various open-source projects: bug fixes, feature development, and documentation.',
        'tech' => ['GitHub', 'Various', 'Community', 'Documentation'],
        'icon' => '💚'
    ]
];
?>

<div class="pt-24 pb-20 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                    <?= $i18n->getLang() === 'de' ? 'Meine Projekte' : 'My Projects' ?>
                </span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                <?= $i18n->getLang() === 'de'
                    ? 'Eine Auswahl meiner Arbeiten – von AI-Integration bis DevOps-Automation'
                    : 'A selection of my work – from AI integration to DevOps automation'
                ?>
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php
            $delay = 0;
            foreach ($projects as $project):
                $title = $i18n->getLang() === 'de' ? $project['title_de'] : $project['title_en'];
                $desc = $i18n->getLang() === 'de' ? $project['desc_de'] : $project['desc_en'];
            ?>
            <article class="card animate-on-scroll animation-delay-<?= $delay ?>">
                <div class="flex items-start space-x-4">
                    <div class="text-5xl"><?= $project['icon'] ?></div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold mb-3"><?= e($title) ?></h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4"><?= e($desc) ?></p>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($project['tech'] as $tech): ?>
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 rounded-full text-sm">
                                <?= e($tech) ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php
            $delay = ($delay + 200) % 600;
            endforeach;
            ?>
        </div>

        <!-- GitHub CTA -->
        <div class="mt-16 text-center animate-on-scroll">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 md:p-12 max-w-3xl mx-auto">
                <div class="text-6xl mb-6">🔗</div>
                <h2 class="text-3xl font-bold mb-4">
                    <?= $i18n->getLang() === 'de' ? 'Mehr auf GitHub' : 'More on GitHub' ?>
                </h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    <?= $i18n->getLang() === 'de'
                        ? 'Entdecke meine Open-Source-Projekte und Contributions auf GitHub'
                        : 'Discover my open-source projects and contributions on GitHub'
                    ?>
                </p>
                <a href="https://github.com/srueegger" target="_blank" rel="noopener noreferrer"
                   class="btn btn-primary">
                    <svg class="inline-block w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    GitHub Profile
                </a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
