<?php

$footer = get_field('footer');

if (!is_array($footer)) {
    $footer = array();
}

$logo = $footer['logo'] ?? '';
$descricao = $footer['descricao'] ?? '';
$endereco = $footer['endereco'] ?? '';
$telefone = $footer['telefone'] ?? '';
$telefone_link = $footer['telefone_link'] ?? '';
$email = $footer['email'] ?? '';
$email_link = $footer['email_link'] ?? '';
$privacidade = $footer['privacidade'] ?? '';
$termos = $footer['termos'] ?? '';

?>

<footer class="w-full bg-cream-light px-6 pt-16 pb-8 md:px-12 md:pt-[88px] md:pb-10 lg:px-[112px]">
    <div class="mx-auto max-w-[1440px]">

        <div
            class="mb-12 grid grid-cols-1 items-start gap-y-10 md:mb-16 md:grid-cols-2 md:gap-x-12 lg:grid-cols-[319px_220px_300px_360px] lg:gap-x-8">

            <div class="flex w-full max-w-[319px] flex-col">
                <?php if ($logo): ?>
                    <div class="mb-5 md:mb-6">
                        <img src="<?php echo esc_url($logo); ?>" alt="Endereço Virtual Natal" class="h-8 w-auto">
                    </div>
                <?php endif; ?>

                <?php if ($descricao): ?>
                    <p class="font-inter text-[14px] font-normal leading-[21.7px] text-navy">
                        <?php echo esc_html($descricao); ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Navegação -->
            <nav aria-label="Navegação principal" class="flex flex-col">
                <h2 class="mb-4 font-manrope text-[12px] font-extrabold uppercase tracking-[1.68px] text-blue">
                    Navegação
                </h2>

                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="#planos"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Planos e preços
                        </a>
                    </li>

                    <li>
                        <a href="#bairros"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Bairros
                        </a>
                    </li>

                    <li>
                        <a href="#depoimentos"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Depoimentos
                        </a>
                    </li>

                    <li>
                        <a href="#duvidas"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Dúvidas
                        </a>
                    </li>

                    <li>
                        <a href="#conteudos"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Conteúdos
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- SEO Local -->
            <div class="flex flex-col">
                <h2 class="mb-4 font-manrope text-[12px] font-extrabold uppercase tracking-[1.68px] text-blue">
                    SEO Local
                </h2>

                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="#"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Endereço Comercial em Natal
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Escritório Virtual em Natal
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Endereço Fiscal com IE em Natal
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Abrir CNPJ em Natal
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                            Transferir CNPJ para Natal
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contato -->
            <div class="flex flex-col">
                <h2 class="mb-4 font-manrope text-[12px] font-extrabold uppercase tracking-[1.68px] text-blue">
                    Contato
                </h2>

                <address class="not-italic">
                    <ul class="flex flex-col gap-3 md:gap-2">

                        <?php if ($endereco): ?>
                            <li class="flex items-start gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/geo.svg" alt=""
                                    aria-hidden="true" class="mt-1 h-4 w-4 shrink-0">

                                <span class="font-inter text-[14px] font-normal leading-[19.6px] text-navy">
                                    <?php echo nl2br(esc_html($endereco)); ?>
                                </span>
                            </li>
                        <?php endif; ?>

                        <?php if ($telefone): ?>
                            <li class="flex items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone.svg" alt=""
                                    aria-hidden="true" class="h-4 w-4 shrink-0">

                                <a href="<?php echo esc_url($telefone_link ?: 'tel:' . preg_replace('/\D+/', '', $telefone)); ?>"
                                    class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                                    <?php echo esc_html($telefone); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($email): ?>
                            <li class="flex items-start gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/envelope.svg"
                                    alt="" aria-hidden="true" class="mt-0.5 h-4 w-4 shrink-0">

                                <a href="<?php echo esc_url($email_link ?: 'mailto:' . $email); ?>"
                                    class="break-all font-inter text-[14px] font-normal leading-[19.6px] text-navy transition-colors hover:text-blue sm:break-normal">
                                    <?php echo esc_html($email); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </address>
            </div>
        </div>

        <!-- Rodapé inferior -->
        <div class="flex flex-col items-center justify-between gap-4 border-t border-navy pt-6 md:flex-row">

            <p class="text-center font-inter text-[12px] font-normal leading-[18.6px] text-navy md:text-left">
                &copy; <?php echo date('Y'); ?> Endereço Virtual Natal. Todos os direitos reservados.
            </p>

            <nav aria-label="Links legais" class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2">

                <a href="<?php echo esc_url($privacidade ?: '#'); ?>"
                    class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                    Política de privacidade
                </a>

                <a href="<?php echo esc_url($termos ?: '#'); ?>"
                    class="font-inter text-[14px] font-normal text-navy transition-colors hover:text-blue">
                    Termos de uso
                </a>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>