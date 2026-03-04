document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true
    });

    // 2. Header Scroll Effect
    const header = document.querySelector('#header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // 3. Anime.js Logo Animation
    anime({
        targets: '.logo__dot',
        scale: [1, 1.5, 1],
        opacity: [1, 0.5, 1],
        duration: 2000,
        loop: true,
        easing: 'easeInOutSine'
    });

    // 4. Mobile Menu Toggle (Basic)
    const burger = document.querySelector('#burger');
    const nav = document.querySelector('#nav');

    burger.addEventListener('click', () => {
        // Здесь можно добавить более сложную анимацию появления меню
        console.log('Mobile menu clicked');
    });
});
// 5. Anime.js: Hero Image Animation
    // Плавное покачивание и легкий зум основного изображения
    anime({
        targets: '.js-hero-img',
        translateY: [-15, 15], // Движение вверх-вниз
        scale: [1, 1.03],      // Легкое пульсирование
        rotate: [-1, 1],       // Минимальный поворот
        duration: 5000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine'
    });

    // Анимация плавающей карточки (чуть быстрее и в противофазе)
    anime({
        targets: '.js-hero-card',
        translateY: [20, -20],
        translateX: [-5, 5],
        duration: 4000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutQuad',
        delay: 500 // Задержка для рассинхрона
    });
    // 6. Anime.js: Case Cards Hover Effect
    const caseCards = document.querySelectorAll('.js-case-card');

    caseCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            anime({
                targets: card,
                scale: 1.02,
                duration: 400,
                easing: 'easeOutCubic'
            });
            // Анимируем текст внутри при наведении
            anime({
                targets: card.querySelector('.case-card__title'),
                translateX: 10,
                color: '#FACC15', // Gold color on hover
                duration: 300,
                easing: 'easeOutQuad'
            });
        });

        card.addEventListener('mouseleave', () => {
            anime({
                targets: card,
                scale: 1.0,
                duration: 400,
                easing: 'easeOutCubic'
            });
            anime({
                targets: card.querySelector('.case-card__title'),
                translateX: 0,
                color: '#F8FAFC',
                duration: 300,
                easing: 'easeOutQuad'
            });
        });
    });
    // 7. Anime.js: Blog Links Hover
    const blogLinks = document.querySelectorAll('.js-blog-link');
    blogLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            anime({
                targets: link.querySelector('span'),
                translateX: [0, 10, 0],
                duration: 600,
                loop: true,
                easing: 'easeInOutQuad'
            });
        });
        link.addEventListener('mouseleave', () => {
            anime.remove(link.querySelector('span'));
            anime({
                targets: link.querySelector('span'),
                translateX: 0,
                duration: 300
            });
        });
    });

    // 8. Anime.js: Review Cards Pulse
    anime({
        targets: '.js-review-card',
        borderColor: [
            { value: 'rgba(255, 255, 255, 0.05)', duration: 2000 },
            { value: 'rgba(239, 68, 68, 0.2)', duration: 2000 }
        ],
        loop: true,
        direction: 'alternate',
        easing: 'linear'
    });
    // 9. Contact Form Logic
    const contactForm = document.querySelector('#contact-form');
    const phoneInput = document.querySelector('.js-phone-input');
    const captchaText = document.querySelector('#captcha-question');
    const captchaInput = document.querySelector('#captcha-answer');
    const successMsg = document.querySelector('#form-success');
    
    // Generate Simple Math Captcha
    let num1 = Math.floor(Math.random() * 10) + 1;
    let num2 = Math.floor(Math.random() * 10) + 1;
    let captchaResult = num1 + num2;
    if(captchaText) captchaText.innerText = `${num1} + ${num2}`;

    // Phone Validation (Numbers only)
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // Validate Captcha
        if (parseInt(captchaInput.value) !== captchaResult) {
            alert('Ошибка в капче. Попробуйте снова.');
            return;
        }

        // Simulate AJAX
        const btn = document.querySelector('.js-btn-submit');
        btn.innerText = 'Отправка...';
        btn.disabled = true;

        setTimeout(() => {
            contactForm.reset();
            btn.style.display = 'none';
            successMsg.style.display = 'block';
            
            // Anime.js Success Animation
            anime({
                targets: successMsg,
                translateY: [20, 0],
                opacity: [0, 1],
                duration: 600,
                easing: 'easeOutCubic'
            });
        }, 1500);
    });
    // 10. Mobile Menu Logic
    const burger = document.querySelector('#burger');
    const mobileMenu = document.querySelector('#mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    burger.addEventListener('click', () => {
        const isActive = mobileMenu.classList.toggle('mobile-menu--active');
        burger.classList.toggle('burger--active');
        
        // Disable scroll when menu is open
        document.body.style.overflow = isActive ? 'hidden' : '';

        if (isActive) {
            // Anime.js Staggered links
            anime({
                targets: '.mobile-nav__link',
                translateY: [30, 0],
                opacity: [0, 1],
                delay: anime.stagger(100, {start: 300}),
                easing: 'easeOutExpo'
            });
        }
    });

    // Close menu on link click
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('mobile-menu--active');
            burger.classList.remove('burger--active');
            document.body.style.overflow = '';
        });
    });

    // 11. Cookie Popup Logic
    const cookiePopup = document.querySelector('#cookie-popup');
    const cookieAccept = document.querySelector('#cookie-accept');

    // Show popup if not accepted
    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie--show');
        }, 2000);
    }

    cookieAccept.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('cookie--show');
        
        // Small feedback animation
        anime({
            targets: cookiePopup,
            scale: 0.9,
            opacity: 0,
            duration: 400,
            easing: 'easeInBack'
        });
    });