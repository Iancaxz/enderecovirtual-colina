<?php

$endereco = get_field('endereco');

if (!is_array($endereco)) {
    return;
}

$titulo = $endereco['titulo'] ?? '';
$descricao = $endereco['descricao'] ?? '';

$imagem_1 = $endereco['imagem_1'] ?? '';
$imagem_2 = $endereco['imagem_2'] ?? '';
$imagem_3 = $endereco['imagem_3'] ?? '';
$imagem_4 = $endereco['imagem_4'] ?? '';
$imagem_5 = $endereco['imagem_5'] ?? '';
$imagem_6 = $endereco['imagem_6'] ?? '';
$imagem_7 = $endereco['imagem_7'] ?? '';

if (
    empty($titulo) &&
    empty($descricao) &&
    empty($imagem_1) &&
    empty($imagem_2) &&
    empty($imagem_3) &&
    empty($imagem_4) &&
    empty($imagem_5) &&
    empty($imagem_6) &&
    empty($imagem_7)
) {
    return;
}

?>

<section class="bg-white py-16 px-6 md:py-20 md:px-8 lg:px-[112px]">
    <div class="max-w-[1216px] mx-auto flex flex-col items-center gap-10 md:gap-12">

        <div class="flex flex-col items-center text-center gap-3"
            data-aos="fade-up">

            <?php if ($titulo): ?>
                <h2
                    class="font-manrope font-extrabold text-[32px] md:text-[44px] text-navy leading-[1.1] tracking-[-0.88px]">
                    <?php echo esc_html($titulo); ?>
                </h2>
            <?php endif; ?>

            <?php if ($descricao): ?>
                <p class="font-inter font-normal text-[16px] text-[#54607A] leading-[150%]">
                    <?php echo esc_html($descricao); ?>
                </p>
            <?php endif; ?>

        </div>

        <div class="w-full">
            <div class="hidden lg:flex flex-nowrap justify-center items-center gap-6">
                <!-- Left -->
                <div class="flex flex-col gap-6 w-[330px] shrink-0" data-aos="fade-right">
                    <div class="grid grid-cols-2 gap-6">
                        <?php if ($imagem_1): ?>
                            <div class="w-[153px] h-[178px]">
                                <img src="<?php echo esc_url($imagem_1); ?>" alt="Área externa"
                                    class="w-full h-full object-cover">
                            </div>
                        <?php endif; ?>

                        <?php if ($imagem_2): ?>
                            <div class="w-[153px] h-[178px]">
                                <img src="<?php echo esc_url($imagem_2); ?>" alt="Estrutura"
                                    class="w-full h-full object-cover">
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if ($imagem_3): ?>
                        <div class="w-[330px] h-[240px]">
                            <img src="<?php echo esc_url($imagem_3); ?>" alt="Área interna"
                                class="w-full h-full object-cover">
                        </div>
                    <?php endif; ?>
                </div>

                <?php if ($imagem_4): ?>
                    <div class="w-[460px] h-[442px] shrink-0"
                        data-aos="fade-up"
                        data-aos-delay="150">
                        <img src="<?php echo esc_url($imagem_4); ?>" alt="Prédio comercial no Tirol, Natal"
                            class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <!-- Right -->
                <div class="flex flex-col gap-6 w-[330px] shrink-0" data-aos="fade-left">

                    <?php if ($imagem_5): ?>
                        <div class="w-[330px] h-[240px]">
                            <img src="<?php echo esc_url($imagem_5); ?>" alt="Recepção" class="w-full h-full object-cover">
                        </div>
                    <?php endif; ?>

                    <div class="grid grid-cols-2 gap-6">
                        <?php if ($imagem_6): ?>
                            <div class="w-[153px] h-[178px]">
                                <img src="<?php echo esc_url($imagem_6); ?>" alt="Detalhe do ambiente"
                                    class="w-full h-full object-cover">
                            </div>
                        <?php endif; ?>

                        <?php if ($imagem_7): ?>
                            <div class="w-[153px] h-[178px]">
                                <img src="<?php echo esc_url($imagem_7); ?>" alt="Detalhe da estrutura"
                                    class="w-full h-full object-cover">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Tablet -->
            <div class="hidden md:grid lg:hidden grid-cols-6 gap-5"
                data-aos="fade-up">

                <?php if ($imagem_4): ?>
                    <div class="col-span-6 aspect-[460/442]">
                        <img src="<?php echo esc_url($imagem_4); ?>" alt="Prédio comercial no Tirol, Natal"
                            class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_1): ?>
                    <div class="col-span-3 aspect-[153/178]">
                        <img src="<?php echo esc_url($imagem_1); ?>" alt="Área externa" class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_2): ?>
                    <div class="col-span-3 aspect-[153/178]">
                        <img src="<?php echo esc_url($imagem_2); ?>" alt="Estrutura" class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_3): ?>
                    <div class="col-span-3 aspect-[330/240]">
                        <img src="<?php echo esc_url($imagem_3); ?>" alt="Área interna" class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_5): ?>
                    <div class="col-span-3 aspect-[330/240]">
                        <img src="<?php echo esc_url($imagem_5); ?>" alt="Recepção" class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_6): ?>
                    <div class="col-span-3 aspect-[153/178]">
                        <img src="<?php echo esc_url($imagem_6); ?>" alt="Detalhe do ambiente"
                            class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_7): ?>
                    <div class="col-span-3 aspect-[153/178]">
                        <img src="<?php echo esc_url($imagem_7); ?>" alt="Detalhe da estrutura"
                            class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>
            </div>

            <!-- Celular -->
            <div class="grid md:hidden grid-cols-2 gap-4"
                data-aos="fade-up">

                <?php if ($imagem_4): ?>
                    <div class="col-span-2 aspect-[4/3]">
                        <img src="<?php echo esc_url($imagem_4); ?>" alt="Prédio comercial no Tirol, Natal"
                            class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_1): ?>
                    <div class="aspect-[153/178]">
                        <img src="<?php echo esc_url($imagem_1); ?>" alt="Área externa" class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_2): ?>
                    <div class="aspect-[153/178]">
                        <img src="<?php echo esc_url($imagem_2); ?>" alt="Estrutura" class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_3): ?>
                    <div class="col-span-2 aspect-[330/240]">
                        <img src="<?php echo esc_url($imagem_3); ?>" alt="Área interna" class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_5): ?>
                    <div class="col-span-2 aspect-[330/240]">
                        <img src="<?php echo esc_url($imagem_5); ?>" alt="Recepção" class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_6): ?>
                    <div class="aspect-[153/178]">
                        <img src="<?php echo esc_url($imagem_6); ?>" alt="Detalhe do ambiente"
                            class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <?php if ($imagem_7): ?>
                    <div class="aspect-[153/178]">
                        <img src="<?php echo esc_url($imagem_7); ?>" alt="Detalhe da estrutura"
                            class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>