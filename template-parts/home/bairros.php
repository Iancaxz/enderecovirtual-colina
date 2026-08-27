<?php

$bairros = get_field('bairros');

if (!is_array($bairros)) {
    return;
}

$badge = $bairros['badge'] ?? '';
$titulo_destaque = $bairros['titulo_destaque'] ?? '';
$titulo_complemento = $bairros['titulo'] ?? '';

$card_1 = $bairros['card_1'] ?? [];
$card_2 = $bairros['card_2'] ?? [];
$card_3 = $bairros['card_3'] ?? [];

if (
    empty($badge) &&
    empty($titulo_destaque) &&
    empty($titulo_complemento) &&
    empty($card_1) &&
    empty($card_2) &&
    empty($card_3)
) {
    return;
}

?>
<section class="bg-white px-6 py-16 md:px-12 md:py-20 lg:px-[112px] border-b border-cream-dark/20" id="bairros">
    <div class="mx-auto flex max-w-[1216px] flex-col items-center gap-10">
        <div class="flex flex-col items-center gap-4 text-center"
            data-aos="fade-up">

            <?php if ($badge): ?>
                <div class="flex w-fit items-center gap-2 bg-navy px-3 py-[5px]">
                    <span
                        class="h-[6px] w-[6px] bg-yellow"
                        aria-hidden="true">
                    </span>

                    <span
                        class="font-manrope text-[11px] font-extrabold uppercase leading-[11px] tracking-[1.98px] text-yellow">
                        <?php echo esc_html($badge); ?>
                    </span>
                </div>
            <?php endif; ?>


            <?php if ($titulo_destaque || $titulo_complemento): ?>
                <h2 class="max-w-[780px] text-center font-manrope text-[32px] font-extrabold leading-[1.05] tracking-[-0.88px] text-navy md:text-[44px]">

                    <?php if ($titulo_destaque): ?>
                        <span class="text-blue">
                            <?php echo esc_html($titulo_destaque); ?>
                        </span>
                    <?php endif; ?>

                    <?php if ($titulo_complemento): ?>
                        <?php echo esc_html($titulo_complemento); ?>
                    <?php endif; ?>
                </h2>
            <?php endif; ?>
        </div>

        <!-- Cards -->
        <div class="grid w-full grid-cols-1 border border-cream-dark lg:grid-cols-3">

            <!-- Card 1 -->
            <article
                class="flex flex-col bg-white p-6 pb-10 md:p-8 md:pb-12 border-b border-cream-dark lg:min-h-[478px] lg:border-b-0 lg:border-r"
                data-aos="fade-right">

                <div class="flex flex-col gap-6">
                    <?php if (!empty($card_1['icone'])): ?>
                        <div
                            class="flex h-[50px] w-[50px] shrink-0 items-center justify-center bg-blue-light p-[13px]">
                            <img
                                src="<?php echo esc_url($card_1['icone']); ?>"
                                alt=""
                                aria-hidden="true"
                                class="h-6 w-6 object-contain">
                        </div>
                    <?php endif; ?>

                    <div class="flex flex-col gap-3">
                        <?php if (!empty($card_1['titulo'])): ?>
                            <h3
                                class="font-manrope text-[20px] font-extrabold leading-6 tracking-[-0.4px] text-navy">

                                <?php echo esc_html($card_1['titulo']); ?>

                            </h3>
                        <?php endif; ?>

                        <?php if (!empty($card_1['descricao'])): ?>
                            <p
                                class="font-inter text-[15px] font-normal leading-[23.25px] text-slate">

                                <?php echo esc_html($card_1['descricao']); ?>

                            </p>
                        <?php endif; ?>
                    </div>
                </div>


                <ul class="mt-6 flex flex-col gap-3">
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <?php
                        $beneficio = $card_1['beneficio_' . $i] ?? '';

                        if (!$beneficio) {
                            continue;
                        }
                        ?>

                        <li class="flex items-start gap-2.5 font-inter text-[15px] font-normal leading-[23.25px] text-slate">
                            <svg
                                class="mt-0.5 h-5 w-5 shrink-0 text-green-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                                aria-hidden="true">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7">
                                </path>

                            </svg>

                            <span>
                                <?php echo esc_html($beneficio); ?>
                            </span>
                        </li>
                    <?php endfor; ?>
                </ul>
            </article>


            <!-- Card 2 -->
            <article
                class="flex flex-col bg-white p-6 pb-10 md:p-8 md:pb-12 border-b border-cream-dark lg:min-h-[478px] lg:border-b-0 lg:border-r"
                data-aos="fade-up"
                data-aos-delay="150">

                <div class="flex flex-col gap-6">
                    <?php if (!empty($card_2['icone'])): ?>

                        <div
                            class="flex h-[50px] w-[50px] shrink-0 items-center justify-center bg-blue-light p-[13px]">

                            <img
                                src="<?php echo esc_url($card_2['icone']); ?>"
                                alt=""
                                aria-hidden="true"
                                class="h-6 w-6 object-contain">

                        </div>
                    <?php endif; ?>

                    <div class="flex flex-col gap-3">
                        <?php if (!empty($card_2['titulo'])): ?>

                            <h3
                                class="font-manrope text-[20px] font-extrabold leading-6 tracking-[-0.4px] text-navy">

                                <?php echo esc_html($card_2['titulo']); ?>

                            </h3>
                        <?php endif; ?>

                        <?php if (!empty($card_2['descricao'])): ?>
                            <p
                                class="font-inter text-[15px] font-normal leading-[23.25px] text-slate">

                                <?php echo esc_html($card_2['descricao']); ?>

                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <ul class="mt-6 flex flex-col gap-3">
                    <?php for ($i = 1; $i <= 3; $i++): ?>

                        <?php
                        $beneficio = $card_2['beneficio_' . $i] ?? '';

                        if (!$beneficio) {
                            continue;
                        }
                        ?>

                        <li class="flex items-start gap-2.5 font-inter text-[15px] font-normal leading-[23.25px] text-slate">

                            <svg
                                class="mt-0.5 h-5 w-5 shrink-0 text-green-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                                aria-hidden="true">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7">
                                </path>

                            </svg>

                            <span>
                                <?php echo esc_html($beneficio); ?>
                            </span>
                        </li>
                    <?php endfor; ?>
                </ul>
            </article>

            <!-- Card 3 -->
            <article
                class="flex flex-col bg-white p-6 pb-10 md:p-8 md:pb-12 lg:min-h-[478px]"
                data-aos="fade-left">

                <div class="flex flex-col gap-6">
                    <?php if (!empty($card_3['icone'])): ?>

                        <div
                            class="flex h-[50px] w-[50px] shrink-0 items-center justify-center bg-blue-light p-[13px]">

                            <img
                                src="<?php echo esc_url($card_3['icone']); ?>"
                                alt=""
                                aria-hidden="true"
                                class="h-6 w-6 object-contain">

                        </div>

                    <?php endif; ?>

                    <div class="flex flex-col gap-3">
                        <?php if (!empty($card_3['titulo'])): ?>

                            <h3
                                class="font-manrope text-[20px] font-extrabold leading-6 tracking-[-0.4px] text-navy">

                                <?php echo esc_html($card_3['titulo']); ?>

                            </h3>

                        <?php endif; ?>

                        <?php if (!empty($card_3['descricao'])): ?>

                            <p
                                class="font-inter text-[15px] font-normal leading-[23.25px] text-slate">

                                <?php echo esc_html($card_3['descricao']); ?>

                            </p>

                        <?php endif; ?>
                    </div>
                </div>

                <ul class="mt-6 flex flex-col gap-3">
                    <?php for ($i = 1; $i <= 3; $i++): ?>

                        <?php
                        $beneficio = $card_3['beneficio_' . $i] ?? '';

                        if (!$beneficio) {
                            continue;
                        }

                        ?>

                        <li
                            class="flex items-start gap-2.5 font-inter text-[15px] font-normal leading-[23.25px] text-slate">

                            <svg
                                class="mt-0.5 h-5 w-5 shrink-0 text-green-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                                aria-hidden="true">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7">
                                </path>

                            </svg>

                            <span>
                                <?php echo esc_html($beneficio); ?>
                            </span>
                        </li>
                    <?php endfor; ?>
                </ul>
            </article>
        </div>
    </div>
</section>