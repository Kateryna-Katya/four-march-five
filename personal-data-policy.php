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
            <h1 data-aos="fade-right">Политика обработки персональных данных</h1>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up">
                Настоящая политика (далее — «Политика») определяет порядок и условия обработки данных, 
                предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), 
                для обеспечения безопасности в рамках передовой цифровой инфраструктуры.
            </p>
            <p data-aos="fade-up">
                1.1. Оператор считает своей приоритетной задачей соблюдение прав и свобод граждан при 
                обработке данных, обеспечивая экспертную поддержку и защиту частной жизни Пользователей в 
                <strong>Италии</strong> и странах ЕС.
            </p>
            <p data-aos="fade-up">
                1.2. Политика распространяется на всю информацию, которую Оператор получает о посетителях 
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия</h2>
            <ul class="legal-list">
                <li data-aos="fade-left" data-aos-delay="100">
                    <strong>Веб-сайт</strong> — цифровая платформа, доступная по адресу <strong><?= $fullDomain ?></strong>.
                </li>
                <li data-aos="fade-left" data-aos-delay="200">
                    <strong>Персональные данные</strong> — любая информация, прямо относящаяся к Пользователю.
                </li>
                <li data-aos="fade-left" data-aos-delay="300">
                    <strong>Безопасность</strong> — защита данных от неправомерного доступа, уничтожения или изменения.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li data-aos="fade-up">
                    <strong>Предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам <strong>Италии</strong>).</li>
                    </ul>
                </li>
                <li data-aos="fade-up">
                    <strong>Автоматически собираемые:</strong>
                    <ul>
                        <li>Анонимные данные о визитах (файлы «cookie»), IP-адрес и тип браузера для улучшения работы блога.</li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки</h2>
            <ul>
                <li data-aos="fade-up">Предоставление доступа к AI-инструментам для реальных задач.</li>
                <li data-aos="fade-up">Установление обратной связи для бесплатной консультации по всем вопросам.</li>
                <li data-aos="fade-up">Заключение договоров на экспертные услуги и стратегии роста.</li>
                <li data-aos="fade-up">
                    Информирование о новых решениях. Отказаться от рассылок можно, написав на 
                    <a href="mailto:support@<?= $fullDomain ?>" class="text-primary">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2 data-aos="fade-up">5. Правовые основания</h2>
            <p data-aos="fade-up">
                Обработка данных на сайте <strong><?= $domainTitle ?></strong> осуществляется только при наличии 
                добровольного согласия Пользователя или разрешении сохранения файлов «cookie» в настройках вашего браузера.
            </p>

            <h2 data-aos="fade-up">6. Безопасность и GDPR</h2>
            <ul>
                <li data-aos="fade-up">
                    Мы внедряем технологии нового поколения для защиты данных в соответствии с регламентом **GDPR**.
                </li>
                <li data-aos="fade-up">
                    Персональные данные Пользователя никогда не передаются третьим лицам без законных на то оснований.
                </li>
                <li data-aos="fade-up">
                    Пользователь может в любой момент отозвать свое согласие, направив уведомление Оператору.
                </li>
            </ul>

            <h2 data-aos="fade-up">7. Контактная информация</h2>
            <p data-aos="fade-up">
                Разъяснения по любым вопросам обработки данных на <strong><?= $domainTitle ?></strong>:
                <br><br>
                <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-primary">support@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697638510" class="text-primary">+39 06 9763 8510</a><br>
                <strong>Адрес:</strong> Via del Corso, 184, 00186 Roma RM, Italy
            </p>

            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);">
                <p style="font-size: 0.9rem; opacity: 0.6; color: var(--text-muted);">Актуальная версия от 04 Марта 2026 года</p>
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