document.addEventListener("DOMContentLoaded", function () {
    const openMobileMenu = document.getElementById('open-mobile-menu');
    const closeMobileMenu = document.getElementById('close-mobile-menu');
    const mobileServices = document.getElementById('mobile-services');
    const mobileMap = document.getElementById('mobile-map');
    const navMobileMenuWrap = document.getElementById('nav-mobile-menu-wrap');

    function hideMobileMenu() {
        if (navMobileMenuWrap.classList.contains('active')) {
            navMobileMenuWrap.classList.remove('active');
            document.body.classList.remove('fixed');
        }
    }

    function showMobileMenu() {
        navMobileMenuWrap.classList.add('active');
        document.body.classList.add('fixed');
    }

    openMobileMenu.addEventListener('click', showMobileMenu);
    if(mobileServices) {
        mobileServices.addEventListener('click', hideMobileMenu);
    }
    closeMobileMenu.addEventListener('click', hideMobileMenu);
    mobileMap.addEventListener('click', hideMobileMenu);
    navMobileMenuWrap.addEventListener('click', hideMobileMenu)
});
