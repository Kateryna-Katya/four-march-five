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
            <h1 data-aos="fade-right">Политика возврата средств</h1>
            
            <h2 data-aos="fade-up">Условия для оформления возврата</h2>
            <p data-aos="fade-up">
                В <strong><?= $domainTitle ?></strong> мы ценим ваше стремление к росту. Вы можете претендовать на полный или частичный возврат средств в следующих ситуациях:
            </p>
            <ul>
                <li data-aos="fade-left" data-aos-delay="100">
                    <strong>Несоответствие программы описанию:</strong> Если содержание предоставленной консультации или экспертного материала существенно отличается от программы «карьерного апгрейда», заявленной на <strong><?= $fullDomain ?></strong> на момент покупки.
                </li>
                <li data-aos="fade-left" data-aos-delay="200">
                    <strong>Технические неисправности:</strong> При возникновении критических проблем на нашей платформе, которые делают использование AI-инструментов или доступ к сессиям невозможным и не были устранены в течение 48 часов.
                </li>
                <li data-aos="fade-left" data-aos-delay="300">
                    <strong>«Период охлаждения»:</strong> Если вы решили отказаться от участия в программе в течение 14 календарных дней с момента оплаты, при условии, что вы еще не получили доступ к ключевым методологиям (более 50% курса).
                </li>
            </ul>

            <h2 data-aos="fade-up">Процедура запроса</h2>
            <p data-aos="fade-up">
                Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните следующие шаги:
            </p>
            <ol class="custom-list">
                <li data-aos="fade-up">Отправьте письмо на наш email: <a href="mailto:support@<?= $fullDomain ?>" class="text-primary">support@<?= $fullDomain ?></a>.</li>
                <li data-aos="fade-up">Укажите тему: «Запрос на возврат средств: <?= $domainTitle ?>».</li>
                <li data-aos="fade-up">В теле письма укажите ваше имя, дату оплаты и точное название консалтингового пакета.</li>
                <li data-aos="fade-up">Подробно опишите причину отказа — это поможет нам улучшить качество нашего сервиса в Европе.</li>
            </ol>

            <h2 data-aos="fade-up">Сроки и способ возврата</h2>
            <p data-aos="fade-up">
                После одобрения запроса возврат денежных средств будет произведен в течение 7–14 рабочих дней. 
                Средства возвращаются тем же способом, которым была совершена транзакция. Обратите внимание, что фактический срок зачисления зависит от регламента вашего банка в <strong>Италии</strong> или стране пребывания.
            </p>

            <h2 data-aos="fade-up">Исключения и ограничения</h2>
            <p data-aos="fade-up">Возврат не может быть осуществлен, если:</p>
            <ul>
                <li data-aos="fade-left">Запрос подан по истечении 14 дней с момента оплаты.</li>
                <li data-aos="fade-left">Вы уже изучили или скачали более 50% материалов выбранной программы.</li>
                <li data-aos="fade-left">Причиной являются технические проблемы на стороне пользователя (ПО, нестабильный интернет).</li>
                <li data-aos="fade-left">Были нарушены правила использования платформы <strong><?= $domainTitle ?></strong>.</li>
            </ul>

            <h2 data-aos="fade-up">Свяжитесь с нами</h2>
            <p data-aos="fade-up">
                По всем вопросам, связанным с возвратом или условиями консультаций:
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697638510" class="text-primary">+39 06 9763 8510</a><br>
                <strong>Адрес:</strong> Via del Corso, 184, 00186 Roma RM, Italy
            </p>

            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);">
                <p style="font-size: 0.9rem; opacity: 0.6;">Документ актуален на Март 2026 года для пользователей ЕС.</p>
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