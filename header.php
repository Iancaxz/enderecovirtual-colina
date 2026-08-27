<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-slate-50 text-slate-800 antialiased'); ?>>
    <?php wp_body_open(); ?>

    <header class="sticky top-0 z-50 bg-cream-light border-b border-cream-dark">

        <div class="h-[73px] max-w-[1440px] w-full mx-auto px-5 md:px-28 lg:px-36 flex items-center justify-between">

            <div class="flex items-center">
                <?php
                if (function_exists('the_custom_logo') && has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-enderecovirtual.svg"
                            alt="<?php bloginfo('name'); ?>" class="h-10 w-auto object-contain">
                    </a>
                    <?php
                }
                ?>
            </div>

            <nav class="hidden md:flex items-center justify-center gap-8 font-manrope font-bold text-navy">
                <a href="#planos" class="hover:text-slate-600 transition-colors">
                    Planos
                </a>

                <a href="#bairros"
                    class="hover:text-slate-600 transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-navy">
                    Bairros
                </a>

                <a href="#duvidas" class="hover:text-slate-600 transition-colors">
                    Dúvidas
                </a>
            </nav>

            <div class="hidden md:flex">
                <a href="#contato"
                    class="bg-whatsapp hover:bg-whatsapp-hover text-white font-manrope font-extrabold text-sm h-[37px] w-[127px] rounded-[10px] shadow-[0px_2px_0px_0px_#1FAE54] flex items-center justify-center gap-2 transition-all active:translate-y-[1px] active:shadow-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/whats.svg" alt=""
                        class="w-4 h-4 object-contain">

                    <span>WhatsApp</span>
                </a>
            </div>

            <button id="mobile-menu-button" type="button"
                class="md:hidden relative z-[60] flex h-10 w-10 items-center justify-center text-navy"
                aria-label="Abrir menu" aria-expanded="false" aria-controls="mobile-menu">

                <span class="relative flex h-7 w-7 items-center justify-center">
                    <!-- Hambúrguer -->
                    <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg"
                        class="absolute h-6 w-6 rotate-0 opacity-100 transition-all duration-300 ease-in-out"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <!-- X -->
                    <svg id="close-icon" xmlns="http://www.w3.org/2000/svg"
                        class="absolute h-6 w-6 rotate-90 opacity-0 transition-all duration-300 ease-in-out" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </button>
        </div>
    </header>


    <!-- Menu mobile -->
    <div id="mobile-menu"
        class="md:hidden fixed inset-0 z-40 bg-cream-light pt-[73px] overflow-y-auto opacity-0 invisible -translate-y-3 transition-[opacity,transform] duration-300 ease-out">

        <nav class="min-h-full px-5 pt-10 flex flex-col font-manrope font-bold text-navy">

            <a href="#planos" class="py-5 border-b border-cream-dark">
                Planos
            </a>

            <a href="#bairros" class="py-5 border-b border-cream-dark">
                Bairros
            </a>

            <a href="#duvidas" class="py-5 border-b border-cream-dark">
                Dúvidas
            </a>

            <a href="#contato"
                class="mt-6 bg-whatsapp hover:bg-whatsapp-hover text-white font-manrope font-extrabold text-[13px] h-[40px] w-[140px] rounded-[10px] shadow-[0px_2px_0px_0px_#1FAE54] flex items-center justify-center gap-2">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/whats.svg" alt=""
                    class="w-[15px] h-[15px] object-contain">

                <span>WhatsApp</span>

            </a>
        </nav>
    </div>