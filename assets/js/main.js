console_log('theme loaded');document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('site-navbar');
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-black/30', 'backdrop-blur-lg');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('bg-black/30', 'backdrop-blur-lg');
            navbar.classList.add('bg-transparent');
        }
    });

    toggleBtn.addEventListener('click', function () {
        mobileMenu.classList.toggle('max-h-96');
        mobileMenu.classList.toggle('opacity-100');
        mobileMenu.classList.toggle('max-h-0');
        mobileMenu.classList.toggle('opacity-0');
    });
});