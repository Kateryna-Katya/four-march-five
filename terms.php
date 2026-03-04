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
            <h1 data-aos="fade-right">Условия использования</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования 
                (далее — «Условия») представляют собой юридически обязывающий договор между вами 
                (далее — «Пользователь») и <strong><?= $domainTitle ?></strong> (далее — «Компания»). 
                Пожалуйста, внимательно ознакомьтесь с ними. Используя нашу передовую цифровую инфраструктуру 
                и любые связанные с ней услуги, вы подтверждаете свое полное согласие с данными Условиями. 
                Если вы не согласны, вы должны прекратить использование сайта.
            </p>

            <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
            <p data-aos="fade-up">
                Компания предоставляет Пользователю доступ к платформе <strong><?= $fullDomain ?></strong> 
                и её функционалу, включая: доступ к инновационным материалам блога, AI-инструментам для 
                реальных задач, экспертным консультациям и стратегиям роста на базе инноваций (далее — «Услуги»).
            </p>

            <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
            <p data-aos="fade-up">
                Вы обязуетесь использовать сайт исключительно в законных целях. При использовании платформы 
                <strong><?= $domainTitle ?></strong> <strong>запрещается</strong>:
            </p>
            <ul>
                <li data-aos="fade-left" data-aos-delay="100">Публиковать информацию, которая нарушает законодательство ЕС или права третьих лиц.</li>
                <li data-aos="fade-left" data-aos-delay="200">Предпринимать действия, которые могут нарушить работу цифровой инфраструктуры или безопасность платформы.</li>
                <li data-aos="fade-left" data-aos-delay="300">Использовать ботов для сбора данных без нашего письменного разрешения.</li>
                <li data-aos="fade-left" data-aos-delay="400">Предоставлять недостоверную информацию при запросе доступа к консалтинговым сессиям.</li>
            </ul>

            <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
            <p data-aos="fade-up">
                Весь контент на сайте <strong><?= $fullDomain ?></strong>, включая программный код, графику и методологии, 
                является объектом интеллектуальной собственности Компании. Вам предоставляется ограниченная лицензия 
                для личного профессионального развития. Любое копирование или распространение контента, который меняет 
                правила игры, без нашего согласия строго запрещено.
            </p>

            <h2 data-aos="fade-up">4. Ограничение ответственности</h2>
            <p data-aos="fade-up">
                Услуги предоставляются по принципу «как есть». Мы не даем гарантий, что сайт будет работать бесперебойно 
                в условиях динамичного рынка <strong>Италии</strong> и ЕС. Компания не несет ответственности за прямые 
                или косвенные убытки, возникшие в результате использования предложенных стратегий или невозможности 
                доступа к платформе <strong><?= $domainTitle ?></strong>.
            </p>

            <h2 data-aos="fade-up">5. Изменения условий</h2>
            <p data-aos="fade-up">
                Мы оставляем за собой право изменять настоящие Условия. Все обновления вступают в силу с момента публикации. 
                Ваше дальнейшее использование <strong><?= $fullDomain ?></strong> после правок означает автоматическое 
                согласие с новой редакцией.
            </p>

            <h2 data-aos="fade-up">6. Разрешение споров</h2>
            <p data-aos="fade-up">
                Все разногласия стороны стремятся разрешить путем переговоров. В случае недостижения согласия, 
                спор подлежит рассмотрению в соответствии с действующим законодательством по месту регистрации 
                Компании в <strong>Италии</strong>.
            </p>

            <h2 data-aos="fade-up">7. Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы по данным Условиям:
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697638510" class="text-primary">+39 06 9763 8510</a><br>
                <strong>Адрес:</strong> Via del Corso, 184, 00186 Roma RM, Italy
            </p>

            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);">
                <p style="font-size: 0.9rem; opacity: 0.6; color: var(--text-muted);">Редакция действительна на Март 2026 года.</p>
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