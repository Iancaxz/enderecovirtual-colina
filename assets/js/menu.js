document.addEventListener('DOMContentLoaded', function () {

    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (!button || !menu || !menuIcon || !closeIcon) {
        return;
    }

    // Abre o menu e bloqueia a rolagem da página
    function openMenu() {

        menu.classList.remove('invisible');

        requestAnimationFrame(function () {
            menu.classList.remove('opacity-0', '-translate-y-3');
            menu.classList.add('opacity-100', 'translate-y-0');
        });

        menuIcon.classList.remove('rotate-0', 'opacity-100');
        menuIcon.classList.add('-rotate-90', 'opacity-0');

        closeIcon.classList.remove('rotate-90', 'opacity-0');
        closeIcon.classList.add('rotate-0', 'opacity-100');

        button.setAttribute('aria-expanded', 'true');
        button.setAttribute('aria-label', 'Fechar menu');

        document.documentElement.classList.add('overflow-hidden');
        document.body.classList.add('overflow-hidden');
    }

    // Fecha o menu e restaura a rolagem da página
    function closeMenu() {

        menu.classList.remove('opacity-100', 'translate-y-0');
        menu.classList.add('opacity-0', '-translate-y-3');

        menuIcon.classList.remove('-rotate-90', 'opacity-0');
        menuIcon.classList.add('rotate-0', 'opacity-100');

        closeIcon.classList.remove('rotate-0', 'opacity-100');
        closeIcon.classList.add('rotate-90', 'opacity-0');

        button.setAttribute('aria-expanded', 'false');
        button.setAttribute('aria-label', 'Abrir menu');

        document.documentElement.classList.remove('overflow-hidden');
        document.body.classList.remove('overflow-hidden');

        setTimeout(function () {
            if (button.getAttribute('aria-expanded') === 'false') {
                menu.classList.add('invisible');
            }
        }, 300);
    }

    button.addEventListener('click', function () {
        const isOpen = button.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    // Fecha o menu ao selecionar uma opção
    menu.querySelectorAll('a').forEach(function (link) {

        link.addEventListener('click', function () {
            closeMenu();
        });

    });

    // Fecha o menu ao mudar para desktop
    window.addEventListener('resize', function () {

        if (window.innerWidth >= 768) {
            closeMenu();
        }

    });
});