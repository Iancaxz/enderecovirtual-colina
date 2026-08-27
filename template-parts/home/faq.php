<?php

$faq = get_field('faq');

if (!is_array($faq)) {
    return;
}

$badge = $faq['badge'] ?? '';
$titulo = $faq['titulo'] ?? '';
$titulo_destaque = $faq['titulo_destaque'] ?? '';

$itens = array();

for ($i = 1; $i <= 6; $i++) {
    $item = $faq['item_' . $i] ?? array();

    if (!is_array($item)) {
        continue;
    }

    $pergunta = trim($item['pergunta'] ?? '');
    $resposta = trim($item['resposta'] ?? '');

    if ($pergunta !== '' && $resposta !== '') {
        $itens[] = array(
            'pergunta' => $pergunta,
            'resposta' => $resposta,
        );
    }
}

if (
    $badge === '' &&
    $titulo === '' &&
    $titulo_destaque === '' &&
    empty($itens)
) {
    return;
}

?>

<section class="w-full bg-cream-light py-[92px] px-6 md:px-[112px] border-b border-cream-dark/40" id="duvidas">
    <div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row justify-between gap-12 lg:gap-20">

        <div class="w-full lg:max-w-[450px] flex flex-col" data-aos="fade-right">

            <?php if ($badge): ?>
                <div class="inline-flex items-center gap-2 bg-navy px-3 py-[5px] self-start mb-6">
                    <span class="w-1.5 h-1.5 bg-yellow" aria-hidden="true"></span>

                    <span class="font-manrope font-extrabold text-[11px] text-yellow tracking-[1.98px] uppercase">
                        <?php echo esc_html($badge); ?>
                    </span>
                </div>
            <?php endif; ?>

            <?php if ($titulo || $titulo_destaque): ?>
                <h2
                    class="font-manrope font-extrabold text-[36px] md:text-[44px] leading-[46.2px] tracking-[-0.88px] text-navy">

                    <?php if ($titulo_destaque): ?>
                        <span class="text-blue">
                            <?php echo esc_html($titulo_destaque); ?>
                        </span>
                    <?php endif; ?>

                    <?php if ($titulo): ?>
                        <?php echo esc_html($titulo); ?>
                    <?php endif; ?>

                </h2>
            <?php endif; ?>
        </div>

        <!-- Acordeão -->
        <?php if (!empty($itens)): ?>
            <div id="faq-accordion" class="w-full lg:w-[741px] flex flex-col border-t border-cream-dark">

                <?php foreach ($itens as $index => $item): ?>
                    <?php
                    $is_first = ($index === 0);
                    $delay = $index * 100;
                    ?>

                    <div class="faq-item border-b border-cream-dark py-6" data-aos="fade-up"
                        data-aos-delay="<?php echo $delay; ?>">

                        <button type="button"
                            class="faq-button w-full flex items-center justify-between gap-6 text-left group focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue focus-visible:ring-offset-2"
                            aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>">

                            <span
                                class="font-manrope font-extrabold text-[17px] text-navy group-hover:text-blue transition-colors">
                                <?php echo esc_html($item['pergunta']); ?>
                            </span>

                            <svg aria-hidden="true"
                                class="faq-icon w-5 h-5 text-blue <?php echo $is_first ? 'rotate-180' : 'rotate-0'; ?> transition-transform duration-300 shrink-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <div class="faq-content grid <?php echo $is_first ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'; ?> transition-all duration-300 ease-in-out"
                            aria-hidden="<?php echo $is_first ? 'false' : 'true'; ?>">

                            <div class="overflow-hidden">

                                <p class="font-inter font-normal text-[15px] text-slate leading-[24px] pt-3">
                                    <?php echo esc_html($item['resposta']); ?>
                                </p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>