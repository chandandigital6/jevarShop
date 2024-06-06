document.addEventListener('DOMContentLoaded', () => {
    AOS.init({

    });

    // Removed the slider functionality

    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
});
