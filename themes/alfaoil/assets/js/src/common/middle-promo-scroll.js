document.addEventListener('DOMContentLoaded', function () {
    const factsList = document.querySelector('.facts-list');
    window.addEventListener('scroll', function() {
        // console.log(pageYOffset)
        if (window.innerWidth < 992) {
            document.querySelector('.footer-site-map').style.opacity = '0';
            if (pageYOffset > document.querySelector('.footer').offsetTop - 600) {
                document.querySelector('.footer-site-map').classList.add('animate__animated');
                document.querySelector('.footer-site-map').classList.add('animate__fadeInUp');
                document.querySelector('.footer-site-map').classList.add('animate__faster');
            }
        }
        if (window.innerWidth > 992) {
            document.querySelector('.footer-site-map').style.opacity = '0';
            if (pageYOffset > document.querySelector('.footer').offsetTop - 600) {
                document.querySelector('.footer-site-map').classList.add('animate__animated');
                document.querySelector('.footer-site-map').classList.add('animate__fadeInUp');
                document.querySelector('.footer-site-map').classList.add('animate__faster');
                document.querySelector('.footer-site-map').style.setProperty('--animate-duration', '0.4s');
            }
            document.querySelector('.footer-contacts-item.phones-wrapper').style.opacity = '0';
            if (pageYOffset > document.querySelector('.footer').offsetTop - 600) {
                document.querySelector('.footer-contacts-item.phones-wrapper').classList.add('animate__animated');
                document.querySelector('.footer-contacts-item.phones-wrapper').classList.add('animate__fadeInUp');
                document.querySelector('.footer-contacts-item.phones-wrapper').classList.add('animate__faster');
                document.querySelector('.footer-contacts-item.phones-wrapper').style.setProperty('--animate-duration', '0.6s');
            }
            document.querySelector('.footer-contacts-item.footer-address').style.opacity = '0';
            if (pageYOffset > document.querySelector('.footer').offsetTop - 600) {
                document.querySelector('.footer-contacts-item.footer-address').classList.add('animate__animated');
                document.querySelector('.footer-contacts-item.footer-address').classList.add('animate__fadeInUp');
                document.querySelector('.footer-contacts-item.footer-address').classList.add('animate__faster');
                document.querySelector('.footer-contacts-item.footer-address').style.setProperty('--animate-duration', '0.8s');
            }
            document.querySelector('.connection-form-wrap').style.opacity = '0';
            if (pageYOffset > document.querySelector('.footer').offsetTop - 600) {
                document.querySelector('.connection-form-wrap').classList.add('animate__animated');
                document.querySelector('.connection-form-wrap').classList.add('animate__fadeInUp');
                document.querySelector('.connection-form-wrap').classList.add('animate__faster');
                document.querySelector('.connection-form-wrap').style.setProperty('--animate-duration', '1s');
            }
        }
        if(document.querySelector('.service-wrapper')) {
            if (window.innerWidth > 992) {
                document.querySelector('.service-wrapper').style.opacity = '0';
                factsList.children[0].style.opacity = '0';
                factsList.children[1].style.opacity = '0';
                factsList.children[2].style.opacity = '0';
                factsList.children[3].style.opacity = '0';
                factsList.children[4].style.opacity = '0';
                document.querySelector('.services-section-bottom-title').style.opacity = '0';
                document.querySelector('.button-facts').style.opacity = '0';
                document.querySelector('.facts-right-content').style.opacity = '0';
                if (pageYOffset > 250) {
                    document.querySelector('.service-wrapper').classList.add('animate__animated');
                    document.querySelector('.service-wrapper').classList.add('animate__fadeInUp');
                }
                if (pageYOffset > 700) {
                    document.querySelector('.services-section-bottom-title').classList.add('animate__animated');
                    document.querySelector('.services-section-bottom-title').classList.add('animate__fadeInUp');
                }
                if (pageYOffset > 1000) {
                    factsList.children[0].classList.add('animate__animated');
                    factsList.children[0].classList.add('animate__fadeInUp');
                }
                if (pageYOffset > 1100) {
                    factsList.children[1].classList.add('animate__animated');
                    factsList.children[1].classList.add('animate__fadeInUp');
                }
                if (pageYOffset > 1200) {
                    factsList.children[2].classList.add('animate__animated');
                    factsList.children[2].classList.add('animate__fadeInUp');
                }
                if (pageYOffset > 1300) {
                    factsList.children[3].classList.add('animate__animated');
                    factsList.children[3].classList.add('animate__fadeInUp');
                }
                if (pageYOffset > 1400) {
                    factsList.children[4].classList.add('animate__animated');
                    factsList.children[4].classList.add('animate__fadeInUp');
                }
                if (pageYOffset > 1500) {
                    document.querySelector('.facts-right-content').classList.add('animate__animated');
                    document.querySelector('.facts-right-content').classList.add('animate__fadeInUp');
                }
                if (pageYOffset > 1600) {
                    document.querySelector('.button-facts').classList.add('animate__animated');
                    document.querySelector('.button-facts').classList.add('animate__fadeInUp');
                }
            }
        }
        if(document.querySelector('.about-company-bottom-section')) {
            if (window.innerWidth > 992) {
                document.querySelector('.about-company-bottom-section').style.opacity = '0';
                if (pageYOffset > document.querySelector('.about-company-bottom-section').offsetTop - 400) {
                    document.querySelector('.about-company-bottom-section').classList.add('animate__animated');
                    document.querySelector('.about-company-bottom-section').classList.add('animate__fadeInUp');
                }
            }
        }
    });
});
