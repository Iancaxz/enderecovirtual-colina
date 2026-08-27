<?php

$planos = get_field('planos');

if (!is_array($planos)) {
    return;
}

$badge = $planos['badge'] ?? '';
$titulo = $planos['titulo'] ?? '';
$titulo_destaque = $planos['titulo_destaque'] ?? '';
$descricao = $planos['descricao'] ?? '';

$plano_1 = $planos['plano_1'] ?? [];
$plano_2 = $planos['plano_2'] ?? [];
$plano_3 = $planos['plano_3'] ?? [];

/*
 * Não exibe a seção se não houver nenhum conteúdo
 */
if (
    empty($badge) &&
    empty($titulo) &&
    empty($titulo_destaque) &&
    empty($descricao) &&
    empty($plano_1['titulo']) &&
    empty($plano_2['titulo']) &&
    empty($plano_3['titulo'])
) {
    return;
}

?>

<section class="bg-cream-light px-6 py-18 md:px-16 lg:px-[112px]" id="planos">
    <div class="mx-auto flex max-w-[1216px] flex-col items-center gap-12">

        <div class="flex flex-col items-center gap-4 text-center" data-aos="fade-up">
            <?php if ($badge): ?>
                <div class="flex w-fit items-center gap-2 bg-navy px-3 py-[5px]">
                    <span class="h-[6px] w-[6px] bg-yellow" aria-hidden="true"></span>

                    <span
                        class="font-manrope text-[11px] font-extrabold uppercase leading-[11px] tracking-[1.98px] text-yellow">
                        <?php echo esc_html($badge); ?>
                    </span>
                </div>
            <?php endif; ?>

            <?php if ($titulo || $titulo_destaque): ?>
                <h2
                    class="font-manrope text-[32px] font-extrabold leading-[1.05] tracking-[-0.88px] text-navy md:text-[44px]">

                    <?php if ($titulo): ?>
                        <?php echo esc_html($titulo); ?>
                    <?php endif; ?>

                    <?php if ($titulo_destaque): ?>
                        <span class="text-blue">
                            <?php echo esc_html($titulo_destaque); ?>
                        </span>
                    <?php endif; ?>

                </h2>
            <?php endif; ?>

            <?php if ($descricao): ?>
                <p class="max-w-[800px] font-inter text-[16px] font-normal leading-[26.35px] text-slate md:text-[17px]">
                    <?php echo esc_html($descricao); ?>
                </p>
            <?php endif; ?>

        </div>

        <!-- Cards -->
        <div class="grid w-full grid-cols-1 items-stretch gap-6 lg:grid-cols-3">

            <!-- Card 1 -->
            <?php if (!empty($plano_1['titulo'])): ?>
                <div class="relative flex flex-col justify-between border-2 border-navy bg-white p-6 md:p-8"
                    data-aos="fade-right">
                    <div class="flex flex-col gap-6">
                        <div>
                            <h3
                                class="mb-2 font-manrope text-[22px] font-extrabold leading-[26.4px] tracking-[-0.44px] text-navy">
                                <?php echo esc_html($plano_1['titulo']); ?>
                            </h3>

                            <?php if (!empty($plano_1['descricao'])): ?>
                                <p class="font-inter text-[14px] font-normal leading-[21.7px] text-slate">
                                    <?php echo esc_html($plano_1['descricao']); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                        <!-- Preço -->
                        <div class="flex items-start gap-1 text-navy">

                            <span
                                class="font-manrope text-[48px] font-extrabold leading-[48px] tracking-[-1.44px] sm:text-[56px] sm:leading-[56px] sm:tracking-[-1.68px]">
                                R$ <?php echo esc_html($plano_1['preco'] ?? ''); ?>
                            </span>

                            <?php if (!empty($plano_1['centavos'])): ?>
                                <div class="flex flex-col">

                                    <span
                                        class="font-manrope text-[20px] font-extrabold leading-[22px] tracking-[-1px] sm:text-[22px]">
                                        ,<?php echo esc_html($plano_1['centavos']); ?>
                                    </span>

                                    <span
                                        class="ml-8 whitespace-nowrap font-inter text-[13px] font-bold leading-[21.7px] text-slate sm:ml-10 sm:text-[14px]">
                                        /mês
                                    </span>

                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($plano_1['periodo'])): ?>
                            <span class="-mt-4 font-inter text-[13px] font-normal text-slate">
                                <?php echo esc_html($plano_1['periodo']); ?>
                            </span>
                        <?php endif; ?>

                        <!-- Benefícios -->
                        <ul class="flex flex-col gap-3 pt-2">
                            <?php for ($i = 1; $i <= 6; $i++): ?>

                                <?php
                                $beneficio = $plano_1['beneficio_' . $i] ?? '';

                                if (empty($beneficio)) {
                                    continue;
                                }

                                $is_negative = ($i >= 5);
                                ?>

                                <li
                                    class="flex items-center gap-3 font-inter text-[15px] <?php echo $is_negative ? 'text-gray-light' : 'text-navy'; ?>">
                                    <?php if ($is_negative): ?>
                                        <svg class="h-5 w-5 shrink-0 text-gray-light" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />

                                        </svg>
                                    <?php else: ?>

                                        <svg class="h-5 w-5 shrink-0 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />

                                        </svg>

                                    <?php endif; ?>

                                    <span>
                                        <?php echo esc_html($beneficio); ?>
                                    </span>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <!-- CTA -->
                    <?php if (!empty($plano_1['cta'])): ?>
                        <div class="pt-8">

                            <a href="<?php echo esc_url($plano_1['link'] ?? '#contato'); ?>"
                                class="flex h-[51px] w-full items-center justify-center rounded-[10px] border-2 border-navy font-manrope text-[16px] font-extrabold text-navy transition-colors hover:bg-navy hover:text-white">

                                <?php echo esc_html($plano_1['cta']); ?>

                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Card 2 -->
            <?php if (!empty($plano_2['titulo'])): ?>

                <div class="relative mt-6 flex flex-col justify-between border-2 border-navy bg-navy p-6 shadow-xl md:p-8 lg:mt-0"
                    data-aos="fade-up" data-aos-delay="150">
                    <?php if (!empty($plano_2['badge'])): ?>
                        <div
                            class="absolute -top-5 left-1/2 -translate-x-1/2 whitespace-nowrap bg-yellow px-3 py-2 font-manrope text-[11px] font-extrabold uppercase tracking-[1.98px] text-navy shadow-sm">

                            <?php echo esc_html($plano_2['badge']); ?>

                        </div>
                    <?php endif; ?>

                    <div class="flex flex-col gap-6 pt-2">
                        <div>
                            <h3
                                class="mb-2 font-manrope text-[22px] font-extrabold leading-[26.4px] tracking-[-0.44px] text-white">

                                <?php echo esc_html($plano_2['titulo']); ?>

                            </h3>

                            <?php if (!empty($plano_2['descricao'])): ?>

                                <p class="font-inter text-[14px] font-normal leading-[21.7px] text-muted">

                                    <?php echo esc_html($plano_2['descricao']); ?>

                                </p>
                            <?php endif; ?>
                        </div>

                        <!-- Preço -->
                        <div>
                            <?php if (!empty($plano_2['preco_anterior'])): ?>

                                <span class="mb-2 block font-inter text-[14px] text-muted line-through">

                                    de R$ <?php echo esc_html($plano_2['preco_anterior']); ?>

                                </span>
                            <?php endif; ?>

                            <div class="flex items-start gap-1 text-yellow">
                                <span
                                    class="font-manrope text-[48px] font-extrabold leading-[48px] tracking-[-1.44px] sm:text-[56px] sm:leading-[56px] sm:tracking-[-1.68px]">

                                    R$ <?php echo esc_html($plano_2['preco'] ?? ''); ?>

                                </span>

                                <?php if (!empty($plano_2['centavos'])): ?>

                                    <div class="flex flex-col">

                                        <span
                                            class="font-manrope text-[20px] font-extrabold leading-[22px] tracking-[-1px] sm:text-[22px]">

                                            ,<?php echo esc_html($plano_2['centavos']); ?>

                                        </span>

                                        <span
                                            class="ml-8 whitespace-nowrap font-inter text-[13px] font-bold leading-[21.7px] text-muted sm:ml-10 sm:text-[14px]">
                                            /mês
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($plano_2['periodo'])): ?>
                                <span class="font-inter text-[13px] font-normal text-white/55">

                                    <?php echo esc_html($plano_2['periodo']); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <!-- Benefícios -->
                        <ul class="flex flex-col gap-3 pt-2">
                            <?php for ($i = 1; $i <= 6; $i++): ?>

                                <?php
                                $beneficio = $plano_2['beneficio_' . $i] ?? '';

                                if (empty($beneficio)) {
                                    continue;
                                }
                                ?>

                                <li class="flex items-center gap-3 font-inter text-[15px] text-white">

                                    <svg class="h-5 w-5 shrink-0 text-yellow" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" aria-hidden="true">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />

                                    </svg>

                                    <span>
                                        <?php echo esc_html($beneficio); ?>
                                    </span>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <!-- CTA -->
                    <?php if (!empty($plano_2['cta'])): ?>
                        <div class="pt-8">

                            <a href="<?php echo esc_url($plano_2['link'] ?? '#contato'); ?>"
                                class="flex h-[51px] w-full items-center justify-center gap-2 rounded-[10px] bg-whatsapp hover:bg-whatsapp-hover font-manrope text-[16px] font-extrabold text-white shadow-[0px_4px_0px_0px_#1FAE54] transition-all active:translate-y-[2px] active:shadow-[0px_2px_0px_0px_#1FAE54]">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/whats.svg" alt=""
                                    class="h-6 w-6 object-contain">

                                <?php echo esc_html($plano_2['cta']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Card 3 -->
            <?php if (!empty($plano_3['titulo'])): ?>
                <div class="relative mt-3 flex flex-col justify-between border-2 border-navy bg-white p-6 md:p-8 lg:mt-0"
                    data-aos="fade-left">
                    <div class="flex flex-col gap-6">
                        <div>
                            <h3
                                class="mb-2 font-manrope text-[22px] font-extrabold leading-[26.4px] tracking-[-0.44px] text-navy">

                                <?php echo esc_html($plano_3['titulo']); ?>

                            </h3>

                            <?php if (!empty($plano_3['descricao'])): ?>

                                <p class="font-inter text-[14px] font-normal leading-[21.7px] text-slate">

                                    <?php echo esc_html($plano_3['descricao']); ?>

                                </p>
                            <?php endif; ?>
                        </div>

                        <!-- Preço -->
                        <div class="flex items-start gap-1 text-navy">
                            <span
                                class="font-manrope text-[48px] font-extrabold leading-[48px] tracking-[-1.44px] sm:text-[56px] sm:leading-[56px] sm:tracking-[-1.68px]">

                                R$ <?php echo esc_html($plano_3['preco'] ?? ''); ?>
                            </span>

                            <?php if (!empty($plano_3['centavos'])): ?>
                                <div class="flex flex-col">
                                    <span
                                        class="font-manrope text-[20px] font-extrabold leading-[22px] tracking-[-1px] sm:text-[22px]">

                                        ,<?php echo esc_html($plano_3['centavos']); ?>
                                    </span>

                                    <span
                                        class="ml-8 whitespace-nowrap font-inter text-[13px] font-bold leading-[21.7px] text-slate sm:ml-10 sm:text-[14px]">
                                        /mês
                                    </span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($plano_3['periodo'])): ?>
                            <span class="-mt-4 font-inter text-[13px] font-normal text-slate">

                                <?php echo esc_html($plano_3['periodo']); ?>
                            </span>
                        <?php endif; ?>

                        <!-- Benefícios -->
                        <ul class="flex flex-col gap-3 pt-2">
                            <?php for ($i = 1; $i <= 6; $i++): ?>

                                <?php
                                $beneficio = $plano_3['beneficio_' . $i] ?? '';

                                if (empty($beneficio)) {
                                    continue;
                                }
                                ?>

                                <li class="flex items-center gap-3 font-inter text-[15px] text-navy">

                                    <svg class="h-5 w-5 shrink-0 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" aria-hidden="true">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />

                                    </svg>

                                    <span>
                                        <?php echo esc_html($beneficio); ?>
                                    </span>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <!-- CTA -->
                    <?php if (!empty($plano_3['cta'])): ?>
                        <div class="pt-8">
                            <a href="<?php echo esc_url($plano_3['link'] ?? '#contato'); ?>"
                                class="flex h-[51px] w-full items-center justify-center rounded-[10px] border-2 border-navy font-manrope text-[16px] font-extrabold text-navy transition-colors hover:bg-navy hover:text-white">

                                <?php echo esc_html($plano_3['cta']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>