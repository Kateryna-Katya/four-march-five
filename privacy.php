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
            <h1 data-aos="fade-right">Политика конфиденциальности</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Настоящая политика конфиденциальности распространяется на персональные данные, 
                предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг 
                по карьерному консалтингу, так и для других взаимодействий в рамках нашей передовой цифровой инфраструктуры. 
                Мы обеспечиваем техническую поддержку и экспертное сопровождение на всех этапах вашего развития.
            </p>

            <p data-aos="fade-up" data-aos-delay="200">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения 
                в действующие положения. Эти обновления имеют приоритет над текущими условиями. Обратите внимание, 
                что наши материалы могут содержать ссылки на ресурсы третьих лиц (например, AI-инструменты), 
                которые имеют собственные правила. В таких случаях <strong><?= $domainTitle ?></strong> не несет 
                ответственности за политику сторонних компаний. Предоставляя свои данные, вы даете полное согласие 
                на их обработку методами, которые меняют правила игры в сфере безопасности.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает данные исключительно с вашего согласия 
                для предоставления качественных услуг: доступа к аналитике, участия в стратегических сессиях 
                и внедрения инноваций. Мы используем передовые протоколы шифрования, чтобы предотвратить любые утечки.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75 лет. В остальных случаях 
                платформа хранит информацию до завершения своей деятельности или до момента официального 
                отзыва согласия пользователем. Уничтожение или обезличивание данных происходит сразу после 
                достижения целей обработки или по вашему запросу.
            </p>

            <h2 data-aos="fade-up">Техническая информация</h2>
            <ul class="legal-list">
                <li data-aos="fade-left">Время доступа и IP-адрес;</li>
                <li data-aos="fade-left">Источники перехода на ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li data-aos="fade-left">Посещаемые страницы и просмотры рекламных блоков;</li>
                <li data-aos="fade-left">Номер телефона (в случае звонка по контактам в <strong>Италии</strong>).</li>
            </ul>

            <p data-aos="fade-up">
                При регистрации мы собираем данные, необходимые для персонализации услуг: имя, 
                e-mail и контактный телефон для оперативной связи.
            </p>

            <h2 data-aos="fade-up">Информация о действиях пользователя</h2>
            <ul>
                <li data-aos="fade-up">Сведения о контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                <li data-aos="fade-up">Данные о запросах через формы обратной связи;</li>
                <li data-aos="fade-up">Произведенные платежи в соответствии с законодательством ЕС.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки</h2>
            <ul>
                <li data-aos="fade-up">Предоставление экспертной поддержки и доступа к платформе;</li>
                <li data-aos="fade-up">Учет пожеланий при разработке новых технологических решений;</li>
                <li data-aos="fade-up">Информирование о материалах в блоге и акциях через e-mail.</li>
            </ul>

            <h2 data-aos="fade-up">Передача данных третьим лицам</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не передает данные третьим лицам, за исключением случаев 
                прямого согласия пользователя, требований компетентных органов <strong>Италии</strong> 
                или ситуаций стратегического слияния компании.
            </p>

            <h2 data-aos="fade-up">Cookies и точечные маркеры</h2>
            <p data-aos="fade-up">
                Файлы cookie помогают нам анализировать трафик и сохранять ваши предпочтения 
                (например, настройки региона <strong>Италия</strong>), делая использование 
                <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете отключить их 
                в настройках браузера в любое время.
            </p>

            <h2 data-aos="fade-up">Права пользователя (GDPR)</h2>
            <p data-aos="fade-up">
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии 
                с нормами GDPR, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a><br>
                <strong>Адрес офиса:</strong> Via del Corso, 184, 00186 Roma RM, Italy
            </p>
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