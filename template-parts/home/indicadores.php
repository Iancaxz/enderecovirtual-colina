<?php

$indicadores = get_field('indicadores') ?: array();

$indicador_1 = $indicadores['indicador_1'] ?? array();
$indicador_2 = $indicadores['indicador_2'] ?? array();
$indicador_3 = $indicadores['indicador_3'] ?? array();

?>
<section class="bg-navy border-t-4 border-yellow py-6 px-5 sm:px-8 md:px-16 lg:px-[112px]">
    <div class="max-w-[1350px] mx-auto grid grid-cols-1 sm:grid-cols-3 items-center gap-6 sm:gap-0">
        <!-- Indicador 1 -->
        <div class="flex flex-col gap-1.5 sm:pr-6"
            data-aos="fade-up">

            <div class="flex items-center gap-3">
                <span class="font-manrope font-extrabold text-[28px] tracking-[-0.56px] text-yellow leading-none">
                    <?php echo esc_html($indicador_1['valor'] ?? ''); ?>
                </span>

                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icons/star.svg'); ?>"
                    alt="Avaliação: <?php echo esc_attr($indicador_1['valor'] ?? ''); ?> de 5 estrelas"
                    class="w-[74px] h-[14px] object-contain">
            </div>

            <span class="font-inter font-bold text-[11px] uppercase tracking-[1.32px] text-muted leading-[17.05px]">
                <?php echo esc_html($indicador_1['descricao'] ?? ''); ?>
            </span>
        </div>

        <!-- Indicador 2 -->
        <div class="flex flex-col gap-1.5 sm:border-l sm:border-white/10 w-full lg:w-auto lg:pl-6"
            data-aos="fade-up"
            data-aos-delay="100">

            <span class="font-manrope font-extrabold text-[28px] tracking-[-0.56px] text-yellow leading-none">
                <?php echo esc_html($indicador_2['valor'] ?? ''); ?>
            </span>

            <span class="font-inter font-bold text-[11px] uppercase tracking-[1.32px] text-muted leading-[17.05px]">
                <?php echo esc_html($indicador_2['descricao'] ?? ''); ?>
            </span>
        </div>

        <!-- Indicador 3 -->
        <div class="flex flex-col gap-1.5 sm:border-l sm:border-white/10 w-full lg:w-auto lg:pl-6"
            data-aos="fade-up"
            data-aos-delay="200">

            <span class="font-manrope font-extrabold text-[28px] tracking-[-0.56px] text-yellow leading-none">
                <?php echo esc_html($indicador_3['valor'] ?? ''); ?>
            </span>

            <span class="font-inter font-bold text-[11px] uppercase tracking-[1.32px] text-muted leading-[17.05px]">
                <?php echo esc_html($indicador_3['descricao'] ?? ''); ?>
            </span>
        </div>
    </div>
</section>