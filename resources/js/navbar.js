// Function 1
document.addEventListener('DOMContentLoaded', function () {
    const keys = ['products', 'platforms', 'learn', 'company', 'lang', 'lang-mob'];

    function isLargeScreen() {
        return window.innerWidth >= 768;
    }

    function fadeIn(element, icon) {
        element.classList.remove('hidden');
        icon.classList.remove('rotate-180');
        setTimeout(() => {
            element.classList.remove('md:opacity-0');
        }, 50); // Adding a short delay to allow the browser to process the display change
    }

    function fadeOut(element, icon) {
        element.classList.add('md:opacity-0');
        icon.classList.add('rotate-180');
        element.addEventListener('transitionend', () => {
            element.classList.add('hidden');
        }, { once: true });
    }

    keys.forEach(key => {
        const btn = document.getElementById(`dd-${key}__btn`);
        const element = document.getElementById(`dd-${key}`);
        const icon = document.getElementById(`dd-${key}__icon`);

        if (btn && element) {
            // Show the dropdown when the mouse is over the button
            btn.addEventListener('mouseover', function () {
                if (isLargeScreen()) {
                    fadeIn(element, icon);
                }
            });

            // Hide the dropdown when the mouse leaves the button and the dropdown
            const hideDropdown = () => {
                fadeOut(element, icon);
            };

            btn.addEventListener('mouseleave', function (event) {
                // Check if the mouse is still over the dropdown
                if (!element.contains(event.relatedTarget) && isLargeScreen()) {
                    hideDropdown();
                }
            });

            element.addEventListener('mouseleave', function (event) {
                // Check if the mouse is still over the button
                if (!btn.contains(event.relatedTarget) && isLargeScreen()) {
                    hideDropdown();
                }
            });
        }
    });

    keys.forEach(key => {
        const btnMobile = document.getElementById(`dd-${key}__btn`);
        const icon = document.getElementById(`dd-${key}__icon`);
        if (btnMobile) {
            btnMobile.addEventListener('click', function () {
                if (!isLargeScreen()) {
                    const element = document.getElementById(`dd-${key}`);
                    if (element) {
                        element.classList.toggle('hidden');
                        icon.classList.toggle('rotate-180');
                    }
                }
            });
        }
    });
});

const navMenu = document.getElementById('navbar-sticky')
const burger = document.getElementById('burger');

burger.addEventListener('click', () => {
    navMenu.classList.toggle('hidden')
})
