<?php
$hero = get_field('hero');
?>

<section class="bg-cream-light py-12 px-5 sm:py-[60px] sm:px-8 md:px-16 lg:px-[112px]">
    <div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-[80px]">

        <div class="w-full flex flex-col gap-8 lg:gap-[37px]" data-aos="fade-up" data-aos-duration="700">
            <div class="flex flex-col gap-4">

                <div class="bg-navy px-3 py-[5px] w-fit flex items-center gap-2">
                    <span class="w-[6px] h-[6px] bg-yellow shrink-0"></span>

                    <span
                        class="font-manrope font-extrabold text-[11px] uppercase tracking-[1.98px] text-yellow whitespace-nowrap">
                        <?php echo esc_html($hero['badge']); ?>
                    </span>
                </div>

                <h1 class="font-manrope font-extrabold text-[36px] sm:text-[40px] xl:text-[48px] leading-[1.1] tracking-[-1.24px] text-navy">

                    <span class="bg-yellow-300 inline box-decoration-clone px-1">
                        <?php echo esc_html($hero['titulo_destaque']); ?>
                    </span><br>

                    <?php echo esc_html($hero['titulo']); ?>
                </h1>

                <p class="font-inter font-normal text-[16px] sm:text-[18px] leading-[1.55] text-slate pt-2 max-w-[520px]">
                    <?php echo esc_html($hero['descricao']); ?>
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3">
                <div class="bg-yellow-300 px-[10px] py-[6px] shrink-0 flex items-center">
                    <span
                        class="font-manrope font-extrabold text-[12px] uppercase tracking-[0.72px] text-navy whitespace-nowrap">
                        <?php echo esc_html($hero['oferta']); ?>
                    </span>
                </div>

                <div class="flex items-baseline gap-2 flex-nowrap">
                    <span
                        class="font-manrope font-bold text-[14px] sm:text-[16px] text-slate line-through whitespace-nowrap">
                        de <?php echo esc_html($hero['preco_anterior']); ?>
                    </span>

                    <span class="font-manrope font-bold text-[14px] text-slate whitespace-nowrap">
                        por
                    </span>

                    <div class="flex items-baseline text-navy whitespace-nowrap">
                        <span class="font-manrope font-extrabold text-[32px] sm:text-[40px] tracking-[-0.8px]">
                            R$ <?php echo esc_html($hero['preco']); ?>
                        </span>

                        <span
                            class="font-manrope font-extrabold text-[16px] sm:text-[18px] tracking-[-0.8px] self-start mt-1 ml-0.5">
                            ,<?php echo esc_html($hero['centavos']); ?>
                        </span>

                        <span class="font-manrope font-bold text-[14px] sm:text-[16px] text-slate ml-1">
                            /mês
                        </span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                <a href="<?php echo esc_url($hero['link_cta_principal']); ?>"
                    class="w-full sm:w-auto bg-whatsapp hover:bg-whatsapp-hover text-white font-manrope font-extrabold text-base sm:text-[18px] tracking-[0.18px] min-h-[60px] px-6 sm:px-8 py-4 rounded-[10px] shadow-[0px_4px_0px_0px_#1FAE54] flex items-center justify-center gap-3 transition-all active:translate-y-[2px] active:shadow-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/whats.svg" alt=""
                        aria-hidden="true" class="w-6 h-6 object-contain shrink-0">

                    <?php echo esc_html($hero['cta_principal']); ?>
                </a>

                <a href="<?php echo esc_url($hero['link_cta_secundario']); ?>"
                    class="w-full sm:w-auto bg-transparent hover:bg-navy/5 text-navy font-manrope font-extrabold text-[16px] tracking-[0.16px] min-h-[60px] px-6 rounded-[10px] border-2 border-navy flex items-center justify-center transition-colors">

                    <?php echo esc_html($hero['cta_secundario']); ?>
                </a>
            </div>
        </div>

        <div class="w-full lg:max-w-[805px] flex flex-col gap-4 lg:gap-[25px]" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">

            <div class="grid grid-cols-2 gap-4 lg:gap-[18px]">
                <div class="overflow-hidden">
                    <img src="<?php echo esc_url($hero['imagem_1']); ?>" alt="Ponta Negra Natal"
                        class="w-full h-auto block">
                </div>

                <div class="overflow-hidden">
                    <img src="<?php echo esc_url($hero['imagem_2']); ?>" alt="Arena das Dunas Natal"
                        class="w-full h-auto block">
                </div>
            </div>

            <div class="grid grid-cols-[1fr_1.9fr] gap-4 lg:gap-[18px]">
                <div class="overflow-hidden aspect-[0.89/1] lg:aspect-[0.885/1]">
                    <img src="<?php echo esc_url($hero['imagem_3']); ?>" alt="Natal RN"
                        class="w-full h-full object-cover block">
                </div>

                <div class="overflow-hidden aspect-[1.78/1] lg:aspect-[1.71/1]">
                    <img src="<?php echo esc_url($hero['imagem_4']); ?>" alt="Praia dos Artistas Natal"
                        class="w-full h-full object-cover block">
                </div>
            </div>
        </div>
    </div>
</section>