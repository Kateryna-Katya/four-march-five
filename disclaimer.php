<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> | Карьерный апгрейд и рост
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath d='M20 80 L80 20 M80 20 H50 M80 20 V50' stroke='%23FACC15' stroke-width='12' stroke-linecap='round' stroke-linejoin='round'/%3E%3Ccircle cx='20' cy='80' r='12' fill='%23EF4444'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="./#hero" class="nav__link">Главная</a></li>
                    <li class="nav__item"><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li class="nav__item"><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li class="nav__item"><a href="./#blog" class="nav__link">Блог</a></li>
                    <li class="nav__item"><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-right">Отказ от ответственности (Дисклеймер)</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                <strong>Общая информация:</strong> Все материалы, статьи и экспертные сведения, 
                опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно 
                информационно-ознакомительный характер. Они не являются и не должны рассматриваться 
                как персональная юридическая рекомендация, профессиональный финансовый совет или 
                публичная оферта. Мы предоставляем решения, которые меняют правила игры, но их применение 
                требует индивидуального подхода.
            </p>

            <p data-aos="fade-up" data-aos-delay="200">
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает 
                безусловных гарантий относительно точности или актуальности представленной в блоге информации. 
                Любые упоминания потенциального карьерного роста, стратегий пассивного дохода или прошлых 
                успешных кейсов наших клиентов не гарантируют аналогичных результатов в будущем. 
                Индивидуальные итоги вашей деятельности зависят от множества факторов, включая динамику 
                рынка труда в <strong>Италии</strong> и странах ЕС, и могут отличаться от приведенных примеров.
            </p>

            <p data-aos="fade-up" data-aos-delay="300">
                <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong> 
                и экспертная поддержка не несут ответственности за любые прямые или косвенные убытки, 
                возникшие в результате использования наших методологий. Вся ответственность за использование 
                предложенных AI-инструментов для реальных задач и стратегических решений лежит исключительно на 
                пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из проверенных 
                источников, актуальных в Европе на 2026 год.
            </p>

            <p data-aos="fade-up" data-aos-delay="400">
                <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на 
                кардинальное изменение профессионального статуса или инвестиции в собственное развитие, 
                сопряжена с определенным уровнем риска. Перед принятием важных решений мы настоятельно 
                рекомендуем оценить перспективы проекта и получить 
                <a href="./#contact" class="text-primary">бесплатную консультацию по всем вопросам</a> 
                у наших специалистов.
            </p>

            <p data-aos="fade-up" data-aos-delay="500">
                <strong>Подтверждение пользователя:</strong> Продолжая использовать сайт 
                <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, 
                вы находитесь в здравом уме, действуете по собственной воле и полностью принимаете все 
                упомянутые условия данного отказа от ответственности. Платформа уже доступна в Европе 
                для тех, кто готов к осознанному росту.
            </p>

            <div class="pages-footer" data-aos="fade-in" data-aos-delay="600" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);">
                <p style="font-size: 0.9rem; opacity: 0.6; color: var(--text-muted);">Последнее обновление: Март 2026</p>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>
                <p class="footer__description">
                    Инновационная технология вашего карьерного продвижения. Мы меняем правила игры на рынке труда
                    Европы.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategy">Стратегия</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                    <li><a href="./#blog">Блог</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Personal Data</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <div class="footer__contact-item">
                    <span>Телефон:</span>
                    <a href="tel:+390697638510">+39 06 9763 8510</a>
                </div>
                <div class="footer__contact-item">
                    <span>Email:</span>
                    <a href="mailto:hello@<?= $fullDomain ?>">hello@
                        <?= $fullDomain ?>
                    </a>
                </div>
                <div class="footer__contact-item">
                    <span>Адрес:</span>
                    <p>Via del Corso, 184, 00186 Roma RM, Italy</p>
                </div>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
<div class="mobile-menu" id="mobile-menu">
    <div class="container">
        <nav class="mobile-nav">
            <ul class="mobile-nav__list">
                <li><a href="./#hero" class="mobile-nav__link">Главная</a></li>
                <li><a href="./#strategy" class="mobile-nav__link">Стратегия</a></li>
                <li><a href="./#cases" class="mobile-nav__link">Кейсы</a></li>
                <li><a href="./#blog" class="mobile-nav__link">Блог</a></li>
                <li><a href="./#reviews" class="mobile-nav__link">Отзывы</a></li>
                <li><a href="./#contact" class="mobile-nav__link mobile-nav__link--cta">Запросить доступ</a></li>
            </ul>
        </nav>
        <div class="mobile-menu__footer">
            <p>Via del Corso, 184, Roma</p>
            <a href="tel:+390697638510">+39 06 9763 8510</a>
        </div>
    </div>
</div>

<div class="cookie" id="cookie-popup">
    <div class="cookie__container">
        <p class="cookie__text">
            Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.
        </p>
        <button class="btn btn--header cookie__btn" id="cookie-accept">Принять</button>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>