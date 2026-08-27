<?php

$promocao = get_field('promocao_anual');

if (!is_array($promocao)) {
    return;
}

$badge = $promocao['badge'] ?? '';
$titulo = $promocao['titulo'] ?? '';
$titulo_destaque = $promocao['titulo_destaque'] ?? '';
$descricao = $promocao['descricao'] ?? '';

$card_label = $promocao['card_label'] ?? '';
$preco = $promocao['preco'] ?? '';
$preco_descricao = $promocao['preco_descricao'] ?? '';

$cta = $promocao['cta'] ?? '';
$link = $promocao['link'] ?? '';

if (
    empty($badge) &&
    empty($titulo) &&
    empty($titulo_destaque) &&
    empty($descricao) &&
    empty($card_label) &&
    empty($preco) &&
    empty($preco_descricao) &&
    empty($cta) &&
    empty($link)
) {
    return;
}

?>

<section class="w-full bg-cream-light py-10 px-6 md:px-28 border-t border-b border-cream-dark/40">
    <div class="max-w-[1440px] mx-auto">
        <div
            class="relative flex flex-col items-center justify-between gap-12 overflow-hidden border-[4px] border-yellow bg-navy p-8 md:p-14 lg:flex-row"
            data-aos="fade-up">

            <div
                class="pointer-events-none absolute -top-[56px] right-[-100px] z-0 hidden h-[380px] w-[380px] bg-[linear-gradient(45deg,rgba(0,0,0,0)_0%,rgba(0,0,0,0)_2.98%,rgba(255,214,10,0.12)_2.98%,rgba(255,214,10,0.12)_3.54%)] lg:block"
                aria-hidden="true">
            </div>

            <div class="flex flex-col max-w-[580px] relative z-10"
                data-aos="fade-right">

                <?php if ($badge): ?>
                    <div class="inline-flex items-center gap-2 bg-yellow px-3 py-1.5 self-start mb-6">
                        <span class="font-manrope font-extrabold text-[12px] text-navy tracking-[1.92px] uppercase">
                            <?php echo esc_html($badge); ?>
                        </span>
                    </div>
                <?php endif; ?>

                <?php if ($titulo || $titulo_destaque): ?>
                    <h2
                        class="font-manrope font-extrabold text-[36px] md:text-[48px] text-white leading-[1.05] tracking-[-0.96px] mb-4">

                        <?php if ($titulo): ?>
                            <?php echo esc_html($titulo); ?>
                        <?php endif; ?>

                        <?php if ($titulo_destaque): ?>
                            <span class="block text-yellow">
                                <?php echo esc_html($titulo_destaque); ?>
                            </span>
                        <?php endif; ?>
                    </h2>
                <?php endif; ?>

                <?php if ($descricao): ?>
                    <p class="font-inter font-normal text-[17px] text-muted leading-[26.35px]">
                        <?php echo esc_html($descricao); ?>
                    </p>
                <?php endif; ?>
            </div>

            <div
                class="w-full max-w-full lg:w-[454px] bg-white border-[3px] border-yellow p-8 flex flex-col justify-between shadow-2xl relative z-10"
                data-aos="fade-left"
                data-aos-delay="150">

                <div>
                    <?php if ($card_label): ?>
                        <span
                            class="font-manrope font-extrabold text-[11px] text-slate tracking-[1.98px] uppercase block mb-3">
                            <?php echo esc_html($card_label); ?>
                        </span>
                    <?php endif; ?>

                    <?php if ($preco): ?>
                        <div class="flex items-baseline gap-1 mb-2">

                            <span class="font-manrope font-extrabold text-[24px] text-navy leading-[24px]">
                                R$
                            </span>

                            <span
                                class="font-manrope font-extrabold text-[56px] md:text-[64px] text-navy leading-[64px] tracking-[-1.92px]">
                                <?php echo esc_html($preco); ?>
                            </span>

                        </div>
                    <?php endif; ?>

                    <?php if ($preco_descricao): ?>
                        <p class="font-inter font-normal text-[14px] text-slate leading-[20.3px]">

                            <?php
                            $preco_destaque = 'R$ 57,50/mês';

                            if (strpos($preco_descricao, $preco_destaque) !== false) {

                                $partes = explode($preco_destaque, $preco_descricao, 2);

                                echo esc_html($partes[0]);

                                echo '<strong class="text-navy font-bold">'
                                    . esc_html($preco_destaque)
                                    . '</strong>';

                                if (!empty($partes[1])) {
                                    echo '<br>' . esc_html(ltrim($partes[1]));
                                }

                            } else {

                                echo esc_html($preco_descricao);

                            }
                            ?>
                        </p>
                    <?php endif; ?>
                </div>

                <?php if ($cta): ?>
                    <div class="mt-8">
                        <a
                            href="<?php echo esc_url($link ?: '#contato'); ?>"
                            class="flex h-[51px] w-full items-center justify-center gap-2 rounded-[10px] bg-whatsapp font-manrope text-[16px] font-extrabold text-white shadow-[0px_4px_0px_0px_#1FAE54] transition-all hover:bg-whatsapp-hover active:translate-y-[2px] active:shadow-[0px_2px_0px_0px_#1FAE54]">

                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/whats.svg"
                                alt=""
                                class="w-5 h-5 object-contain">

                            <?php echo esc_html($cta); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>