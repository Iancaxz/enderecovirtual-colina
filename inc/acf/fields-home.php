<?php

/**
 * Campos ACF da página Home
 *
 */
function ev_register_home_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_home',
        'title' => 'Conteúdo da Home',

        'fields' => array(

            /* =========================================================
             * HERO
             * ========================================================= */

            array(
                'key' => 'field_tab_hero',
                'label' => 'Hero',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array(
                'key' => 'field_home_hero',
                'label' => 'Conteúdo do Hero',
                'name' => 'hero',
                'type' => 'group',
                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key' => 'field_hero_badge',
                        'label' => 'Badge',
                        'name' => 'badge',
                        'type' => 'text',
                        'default_value' => 'Bairros Nobres em Natal/RN',
                    ),

                    array(
                        'key' => 'field_hero_title_highlight',
                        'label' => 'Título em destaque',
                        'name' => 'titulo_destaque',
                        'type' => 'text',
                        'default_value' => 'Escolha o bairro certo',
                    ),

                    array(
                        'key' => 'field_hero_title',
                        'label' => 'Complemento do título',
                        'name' => 'titulo',
                        'type' => 'text',
                        'default_value' => 'para o CNPJ da sua empresa em Natal',
                    ),

                    array(
                        'key' => 'field_hero_description',
                        'label' => 'Descrição',
                        'name' => 'descricao',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'Nossa sede fica no Tirol, mas o bairro certo pro seu CNPJ depende do perfil do seu negócio. Documentos prontos em 15 minutos.',
                    ),

                    array(
                        'key' => 'field_hero_offer',
                        'label' => 'Oferta',
                        'name' => 'oferta',
                        'type' => 'text',
                        'default_value' => '★ Oferta de Lançamento',
                    ),

                    array(
                        'key' => 'field_hero_old_price',
                        'label' => 'Preço anterior',
                        'name' => 'preco_anterior',
                        'type' => 'text',
                        'default_value' => 'R$ 129,90',
                    ),

                    array(
                        'key' => 'field_hero_price',
                        'label' => 'Preço atual',
                        'name' => 'preco',
                        'type' => 'number',
                        'default_value' => 69,
                        'min' => 0,
                        'step' => 1,
                    ),

                    array(
                        'key' => 'field_hero_centavos',
                        'label' => 'Centavos',
                        'name' => 'centavos',
                        'type' => 'text',
                        'default_value' => '00',
                        'maxlength' => 2,
                    ),

                    array(
                        'key' => 'field_hero_cta_primary',
                        'label' => 'CTA principal',
                        'name' => 'cta_principal',
                        'type' => 'text',
                        'default_value' => 'Contratar pelo WhatsApp',
                    ),

                    array(
                        'key' => 'field_hero_cta_primary_link',
                        'label' => 'Link do CTA principal',
                        'name' => 'link_cta_principal',
                        'type' => 'url',
                    ),

                    array(
                        'key' => 'field_hero_cta_secondary',
                        'label' => 'CTA secundário',
                        'name' => 'cta_secundario',
                        'type' => 'text',
                        'default_value' => 'Ver planos',
                    ),

                    array(
                        'key' => 'field_hero_cta_secondary_link',
                        'label' => 'Link do CTA secundário',
                        'name' => 'link_cta_secundario',
                        'type' => 'url',
                    ),

                    array(
                        'key' => 'field_hero_image_1',
                        'label' => 'Imagem 1',
                        'name' => 'imagem_1',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                    ),

                    array(
                        'key' => 'field_hero_image_2',
                        'label' => 'Imagem 2',
                        'name' => 'imagem_2',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                    ),

                    array(
                        'key' => 'field_hero_image_3',
                        'label' => 'Imagem 3',
                        'name' => 'imagem_3',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                    ),

                    array(
                        'key' => 'field_hero_image_4',
                        'label' => 'Imagem 4',
                        'name' => 'imagem_4',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                    ),

                ),
            ),

            /* =========================================================
             * INDICADORES
             * ========================================================= */

            array(
                'key' => 'field_tab_indicadores',
                'label' => 'Indicadores',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array(
                'key' => 'field_home_indicadores',
                'label' => 'Conteúdo dos Indicadores',
                'name' => 'indicadores',
                'type' => 'group',
                'layout' => 'block',

                'sub_fields' => array(

                    // Indicador 1
                    array(
                        'key' => 'field_indicadores_1',
                        'label' => 'Indicador 1',
                        'name' => 'indicador_1',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_indicador_1_valor',
                                'label' => 'Valor',
                                'name' => 'valor',
                                'type' => 'text',
                                'default_value' => '4,9',
                            ),

                            array(
                                'key' => 'field_indicador_1_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'text',
                                'default_value' => 'Google Meu Negócio',
                            ),

                        ),
                    ),

                    // Indicador 2
                    array(
                        'key' => 'field_indicadores_2',
                        'label' => 'Indicador 2',
                        'name' => 'indicador_2',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_indicador_2_valor',
                                'label' => 'Valor',
                                'name' => 'valor',
                                'type' => 'text',
                                'default_value' => 'Verificada',
                            ),

                            array(
                                'key' => 'field_indicador_2_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'text',
                                'default_value' => 'Empresa cadastrada no Reclame Aqui',
                            ),

                        ),
                    ),

                    // Indicador 3
                    array(
                        'key' => 'field_indicadores_3',
                        'label' => 'Indicador 3',
                        'name' => 'indicador_3',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_indicador_3_valor',
                                'label' => 'Valor',
                                'name' => 'valor',
                                'type' => 'text',
                                'default_value' => '+1.200',
                            ),

                            array(
                                'key' => 'field_indicador_3_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'text',
                                'default_value' => 'CNPJs ativos no nosso endereço',
                            ),

                        ),
                    ),

                ),
            ),

            /* =========================================================
             * BAIRROS
             * ========================================================= */

            array(
                'key' => 'field_tab_bairros',
                'label' => 'Bairros',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array(
                'key' => 'field_home_bairros',
                'label' => 'Conteúdo da seção',
                'name' => 'bairros',
                'type' => 'group',
                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key' => 'field_bairros_badge',
                        'label' => 'Badge',
                        'name' => 'badge',
                        'type' => 'text',
                        'default_value' => 'Por que escolher esses bairros',
                    ),

                    array(
                        'key' => 'field_bairros_titulo_destaque',
                        'label' => 'Título em destaque',
                        'name' => 'titulo_destaque',
                        'type' => 'text',
                        'default_value' => 'Não é só "estar em Natal".',
                    ),

                    array(
                        'key' => 'field_bairros_titulo',
                        'label' => 'Complemento do título',
                        'name' => 'titulo',
                        'type' => 'text',
                        'default_value' => 'É estar no bairro certo, pelo motivo certo.',
                    ),

                    // Card 1
                    array(
                        'key' => 'field_bairros_card_1',
                        'label' => 'Card 1',
                        'name' => 'card_1',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_bairros_card_1_icone',
                                'label' => 'Ícone',
                                'name' => 'icone',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'medium',
                            ),

                            array(
                                'key' => 'field_bairros_card_1_titulo',
                                'label' => 'Título',
                                'name' => 'titulo',
                                'type' => 'text',
                                'default_value' => 'Localização privilegiada',
                            ),

                            array(
                                'key' => 'field_bairros_card_1_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'textarea',
                                'rows' => 4,
                                'default_value' => 'Sua empresa no Tirol, coração empresarial de Natal, no mesmo raio de escritórios, bancos e prédios corporativos da cidade.',
                            ),

                            array(
                                'key' => 'field_bairros_card_1_beneficio_1',
                                'label' => 'Benefício 1',
                                'name' => 'beneficio_1',
                                'type' => 'text',
                                'default_value' => 'Reconhecido no cartão de visita e no Google Meu Negócio',
                            ),

                            array(
                                'key' => 'field_bairros_card_1_beneficio_2',
                                'label' => 'Benefício 2',
                                'name' => 'beneficio_2',
                                'type' => 'text',
                                'default_value' => 'Fácil acesso às principais avenidas de Natal',
                            ),

                            array(
                                'key' => 'field_bairros_card_1_beneficio_3',
                                'label' => 'Benefício 3',
                                'name' => 'beneficio_3',
                                'type' => 'text',
                                'default_value' => 'Mesmo bairro de empresas consolidadas da cidade',
                            ),

                        ),
                    ),

                    // Card 2
                    array(
                        'key' => 'field_bairros_card_2',
                        'label' => 'Card 2',
                        'name' => 'card_2',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_bairros_card_2_icone',
                                'label' => 'Ícone',
                                'name' => 'icone',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'medium',
                            ),

                            array(
                                'key' => 'field_bairros_card_2_titulo',
                                'label' => 'Título',
                                'name' => 'titulo',
                                'type' => 'text',
                                'default_value' => 'Um bairro que todo mundo já conhece (e busca)',
                            ),

                            array(
                                'key' => 'field_bairros_card_2_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'textarea',
                                'rows' => 4,
                                'default_value' => 'Tirol, Petrópolis, Lagoa Nova: bairros que qualquer natalense reconhece de cabeça. Isso ajuda seu CNPJ aparecer em buscas de proximidade no Google.',
                            ),

                            array(
                                'key' => 'field_bairros_card_2_beneficio_1',
                                'label' => 'Benefício 1',
                                'name' => 'beneficio_1',
                                'type' => 'text',
                                'default_value' => 'Nome que já carrega reputação, sem precisar explicar',
                            ),

                            array(
                                'key' => 'field_bairros_card_2_beneficio_2',
                                'label' => 'Benefício 2',
                                'name' => 'beneficio_2',
                                'type' => 'text',
                                'default_value' => 'Mais busca no bairro = mais visibilidade indireta pro seu negócio',
                            ),

                            array(
                                'key' => 'field_bairros_card_2_beneficio_3',
                                'label' => 'Benefício 3',
                                'name' => 'beneficio_3',
                                'type' => 'text',
                                'default_value' => 'Reforça a percepção de empresa estabelecida',
                            ),

                        ),
                    ),

                    // Card 3
                    array(
                        'key' => 'field_bairros_card_3',
                        'label' => 'Card 3',
                        'name' => 'card_3',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_bairros_card_3_icone',
                                'label' => 'Ícone',
                                'name' => 'icone',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'medium',
                            ),

                            array(
                                'key' => 'field_bairros_card_3_titulo',
                                'label' => 'Título',
                                'name' => 'titulo',
                                'type' => 'text',
                                'default_value' => 'Facilidade pra receber encomendas e correspondências',
                            ),

                            array(
                                'key' => 'field_bairros_card_3_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'textarea',
                                'rows' => 4,
                                'default_value' => 'Bairro central tem mais cobertura de transportadora e Correios: menos devolução, entrega mais rápida. Recepção em horário comercial recebe por você.',
                            ),

                            array(
                                'key' => 'field_bairros_card_3_beneficio_1',
                                'label' => 'Benefício 1',
                                'name' => 'beneficio_1',
                                'type' => 'text',
                                'default_value' => 'Ninguém perde entrega por não atender o interfone',
                            ),

                            array(
                                'key' => 'field_bairros_card_3_beneficio_2',
                                'label' => 'Benefício 2',
                                'name' => 'beneficio_2',
                                'type' => 'text',
                                'default_value' => 'Menos atraso e devolução por estar em região central',
                            ),

                            array(
                                'key' => 'field_bairros_card_3_beneficio_3',
                                'label' => 'Benefício 3',
                                'name' => 'beneficio_3',
                                'type' => 'text',
                                'default_value' => 'Aviso automático no WhatsApp assim que a correspondência chega',
                            ),

                        ),
                    ),

                ),
            ),

            /* =========================================================
             * ENDEREÇO
             * ========================================================= */
            array(
                'key' => 'field_tab_endereco',
                'label' => 'Endereço',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array(
                'key' => 'field_home_endereco',
                'label' => 'Conteúdo da seção',
                'name' => 'endereco',
                'type' => 'group',
                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key' => 'field_endereco_titulo',
                        'label' => 'Título',
                        'name' => 'titulo',
                        'type' => 'text',
                        'default_value' => 'Um endereço real, não uma caixa postal.',
                    ),

                    array(
                        'key' => 'field_endereco_descricao',
                        'label' => 'Descrição',
                        'name' => 'descricao',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'Prédio comercial no Tirol, com recepção e estacionamento. Pode visitar quando quiser.',
                    ),

                    array(
                        'key' => 'field_endereco_imagem_1',
                        'label' => 'Imagem 1',
                        'name' => 'imagem_1',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),

                    array(
                        'key' => 'field_endereco_imagem_2',
                        'label' => 'Imagem 2',
                        'name' => 'imagem_2',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),

                    array(
                        'key' => 'field_endereco_imagem_3',
                        'label' => 'Imagem 3',
                        'name' => 'imagem_3',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),

                    array(
                        'key' => 'field_endereco_imagem_4',
                        'label' => 'Imagem 4',
                        'name' => 'imagem_4',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),

                    array(
                        'key' => 'field_endereco_imagem_5',
                        'label' => 'Imagem 5',
                        'name' => 'imagem_5',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),

                    array(
                        'key' => 'field_endereco_imagem_6',
                        'label' => 'Imagem 6',
                        'name' => 'imagem_6',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),

                    array(
                        'key' => 'field_endereco_imagem_7',
                        'label' => 'Imagem 7',
                        'name' => 'imagem_7',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                ),
            ),

            /* =========================================================
             * PLANOS
             * ========================================================= */
            array(
                'key' => 'field_tab_planos',
                'label' => 'Planos e Preços',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array(
                'key' => 'field_home_planos',
                'label' => 'Conteúdo da seção',
                'name' => 'planos',
                'type' => 'group',
                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key' => 'field_planos_badge',
                        'label' => 'Badge',
                        'name' => 'badge',
                        'type' => 'text',
                        'default_value' => 'Planos e Preços',
                    ),

                    array(
                        'key' => 'field_planos_titulo',
                        'label' => 'Título',
                        'name' => 'titulo',
                        'type' => 'text',
                        'default_value' => 'Preço justo.',
                    ),

                    array(
                        'key' => 'field_planos_titulo_destaque',
                        'label' => 'Título em destaque',
                        'name' => 'titulo_destaque',
                        'type' => 'text',
                        'default_value' => 'Sem letra miúda.',
                    ),

                    array(
                        'key' => 'field_planos_descricao',
                        'label' => 'Descrição',
                        'name' => 'descricao',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'Todos os planos incluem contrato de locação, comprovante de endereço, IPTU e aviso de correspondência no WhatsApp. Contrato de 12 meses, com 2 meses grátis no plano anual.',
                    ),

                    // Card 1

                    array(
                        'key' => 'field_planos_plano_1',
                        'label' => 'Plano 1 — Endereço Comercial',
                        'name' => 'plano_1',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_plano_1_titulo',
                                'label' => 'Título',
                                'name' => 'titulo',
                                'type' => 'text',
                                'default_value' => 'Endereço Comercial',
                            ),

                            array(
                                'key' => 'field_plano_1_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'textarea',
                                'rows' => 3,
                                'default_value' => 'Pra divulgar como endereço da empresa em site, cartão e materiais.',
                            ),

                            array(
                                'key' => 'field_plano_1_preco',
                                'label' => 'Preço',
                                'name' => 'preco',
                                'type' => 'text',
                                'default_value' => '19',
                            ),

                            array(
                                'key' => 'field_plano_1_centavos',
                                'label' => 'Centavos',
                                'name' => 'centavos',
                                'type' => 'text',
                                'default_value' => '90',
                            ),

                            array(
                                'key' => 'field_plano_1_periodo',
                                'label' => 'Período',
                                'name' => 'periodo',
                                'type' => 'text',
                                'default_value' => 'plano mensal',
                            ),

                            array(
                                'key' => 'field_plano_1_beneficio_1',
                                'label' => 'Benefício 1',
                                'name' => 'beneficio_1',
                                'type' => 'text',
                                'default_value' => 'Endereço comercial em Natal',
                            ),

                            array(
                                'key' => 'field_plano_1_beneficio_2',
                                'label' => 'Benefício 2',
                                'name' => 'beneficio_2',
                                'type' => 'text',
                                'default_value' => 'Uso em site, cartão de visita e materiais',
                            ),

                            array(
                                'key' => 'field_plano_1_beneficio_3',
                                'label' => 'Benefício 3',
                                'name' => 'beneficio_3',
                                'type' => 'text',
                                'default_value' => 'Recebimento de correspondências',
                            ),

                            array(
                                'key' => 'field_plano_1_beneficio_4',
                                'label' => 'Benefício 4',
                                'name' => 'beneficio_4',
                                'type' => 'text',
                                'default_value' => 'Notificação por WhatsApp',
                            ),

                            array(
                                'key' => 'field_plano_1_beneficio_5',
                                'label' => 'Benefício 5',
                                'name' => 'beneficio_5',
                                'type' => 'text',
                                'default_value' => 'Não serve como endereço fiscal',
                            ),

                            array(
                                'key' => 'field_plano_1_beneficio_6',
                                'label' => 'Benefício 6',
                                'name' => 'beneficio_6',
                                'type' => 'text',
                                'default_value' => 'Sem contrato pra abertura de CNPJ',
                            ),

                            array(
                                'key' => 'field_plano_1_cta',
                                'label' => 'Texto do botão',
                                'name' => 'cta',
                                'type' => 'text',
                                'default_value' => 'Quero esse plano',
                            ),

                            array(
                                'key' => 'field_plano_1_link',
                                'label' => 'Link do CTA',
                                'name' => 'link',
                                'type' => 'url',
                            ),

                        ),
                    ),

                    // Card 2

                    array(
                        'key' => 'field_planos_plano_2',
                        'label' => 'Plano 2 — Escritório Virtual',
                        'name' => 'plano_2',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_plano_2_badge',
                                'label' => 'Badge do plano',
                                'name' => 'badge',
                                'type' => 'text',
                                'default_value' => '★ Mais Contratado',
                            ),

                            array(
                                'key' => 'field_plano_2_titulo',
                                'label' => 'Título',
                                'name' => 'titulo',
                                'type' => 'text',
                                'default_value' => 'Escritório Virtual',
                            ),

                            array(
                                'key' => 'field_plano_2_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'textarea',
                                'rows' => 3,
                                'default_value' => 'Endereço fiscal completo pra abrir, regularizar ou transferir CNPJ.',
                            ),

                            array(
                                'key' => 'field_plano_2_preco_anterior',
                                'label' => 'Preço anterior',
                                'name' => 'preco_anterior',
                                'type' => 'text',
                                'default_value' => '129,90',
                            ),

                            array(
                                'key' => 'field_plano_2_preco',
                                'label' => 'Preço',
                                'name' => 'preco',
                                'type' => 'text',
                                'default_value' => '69',
                            ),

                            array(
                                'key' => 'field_plano_2_centavos',
                                'label' => 'Centavos',
                                'name' => 'centavos',
                                'type' => 'text',
                                'default_value' => '00',
                            ),

                            array(
                                'key' => 'field_plano_2_periodo',
                                'label' => 'Período / Oferta',
                                'name' => 'periodo',
                                'type' => 'text',
                                'default_value' => 'oferta de lançamento',
                            ),

                            array(
                                'key' => 'field_plano_2_beneficio_1',
                                'label' => 'Benefício 1',
                                'name' => 'beneficio_1',
                                'type' => 'text',
                                'default_value' => 'Endereço fiscal válido para CNPJ',
                            ),

                            array(
                                'key' => 'field_plano_2_beneficio_2',
                                'label' => 'Benefício 2',
                                'name' => 'beneficio_2',
                                'type' => 'text',
                                'default_value' => 'Contrato de locação + IPTU + comprovante',
                            ),

                            array(
                                'key' => 'field_plano_2_beneficio_3',
                                'label' => 'Benefício 3',
                                'name' => 'beneficio_3',
                                'type' => 'text',
                                'default_value' => 'Endereço comercial para divulgação',
                            ),

                            array(
                                'key' => 'field_plano_2_beneficio_4',
                                'label' => 'Benefício 4',
                                'name' => 'beneficio_4',
                                'type' => 'text',
                                'default_value' => 'Gestão completa de correspondências',
                            ),

                            array(
                                'key' => 'field_plano_2_beneficio_5',
                                'label' => 'Benefício 5',
                                'name' => 'beneficio_5',
                                'type' => 'text',
                                'default_value' => 'Aviso de chegada pelo WhatsApp',
                            ),

                            array(
                                'key' => 'field_plano_2_beneficio_6',
                                'label' => 'Benefício 6',
                                'name' => 'beneficio_6',
                                'type' => 'text',
                                'default_value' => 'Contratação e ativação 100% digital',
                            ),

                            array(
                                'key' => 'field_plano_2_cta',
                                'label' => 'Texto do botão',
                                'name' => 'cta',
                                'type' => 'text',
                                'default_value' => 'Contratar pelo WhatsApp',
                            ),

                            array(
                                'key' => 'field_plano_2_link',
                                'label' => 'Link do CTA',
                                'name' => 'link',
                                'type' => 'url',
                            ),

                        ),
                    ),

                    // Card 3

                    array(
                        'key' => 'field_planos_plano_3',
                        'label' => 'Plano 3 — Endereço Fiscal com IE',
                        'name' => 'plano_3',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_plano_3_titulo',
                                'label' => 'Título',
                                'name' => 'titulo',
                                'type' => 'text',
                                'default_value' => 'Endereço Fiscal com IE',
                            ),

                            array(
                                'key' => 'field_plano_3_descricao',
                                'label' => 'Descrição',
                                'name' => 'descricao',
                                'type' => 'textarea',
                                'rows' => 3,
                                'default_value' => 'Pra empresas que precisam de Inscrição Estadual em Natal/RN.',
                            ),

                            array(
                                'key' => 'field_plano_3_preco',
                                'label' => 'Preço',
                                'name' => 'preco',
                                'type' => 'text',
                                'default_value' => '169',
                            ),

                            array(
                                'key' => 'field_plano_3_centavos',
                                'label' => 'Centavos',
                                'name' => 'centavos',
                                'type' => 'text',
                                'default_value' => '90',
                            ),

                            array(
                                'key' => 'field_plano_3_periodo',
                                'label' => 'Período / Descrição do preço',
                                'name' => 'periodo',
                                'type' => 'text',
                                'default_value' => 'estrutura preparada para exigências estaduais',
                            ),

                            array(
                                'key' => 'field_plano_3_beneficio_1',
                                'label' => 'Benefício 1',
                                'name' => 'beneficio_1',
                                'type' => 'text',
                                'default_value' => 'Tudo do Escritório Virtual',
                            ),

                            array(
                                'key' => 'field_plano_3_beneficio_2',
                                'label' => 'Benefício 2',
                                'name' => 'beneficio_2',
                                'type' => 'text',
                                'default_value' => 'Endereço aceito para IE na SEFAZ',
                            ),

                            array(
                                'key' => 'field_plano_3_beneficio_3',
                                'label' => 'Benefício 3',
                                'name' => 'beneficio_3',
                                'type' => 'text',
                                'default_value' => 'Estrutura preparada para visita do fiscal',
                            ),

                            array(
                                'key' => 'field_plano_3_beneficio_4',
                                'label' => 'Benefício 4',
                                'name' => 'beneficio_4',
                                'type' => 'text',
                                'default_value' => 'Atendimento prioritário',
                            ),

                            array(
                                'key' => 'field_plano_3_beneficio_5',
                                'label' => 'Benefício 5',
                                'name' => 'beneficio_5',
                                'type' => 'text',
                                'default_value' => 'Suporte na regularização junto à SEFAZ',
                            ),

                            array(
                                'key' => 'field_plano_3_beneficio_6',
                                'label' => 'Benefício 6',
                                'name' => 'beneficio_6',
                                'type' => 'text',
                                'default_value' => 'Plano ideal para comércio e e-commerce',
                            ),

                            array(
                                'key' => 'field_plano_3_cta',
                                'label' => 'Texto do botão',
                                'name' => 'cta',
                                'type' => 'text',
                                'default_value' => 'Quero esse plano',
                            ),

                            array(
                                'key' => 'field_plano_3_link',
                                'label' => 'Link do CTA',
                                'name' => 'link',
                                'type' => 'url',
                            ),

                        ),
                    ),

                ),
            ),

            /* =========================================================
             * PROMOÇÃO
             * ========================================================= */
            array(
                'key' => 'field_tab_promocao_anual',
                'label' => 'Promoção Anual',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array(
                'key' => 'field_home_promocao_anual',
                'label' => 'Conteúdo da seção',
                'name' => 'promocao_anual',
                'type' => 'group',
                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key' => 'field_promocao_badge',
                        'label' => 'Badge',
                        'name' => 'badge',
                        'type' => 'text',
                        'default_value' => '★ Promoção anual à vista',
                    ),

                    array(
                        'key' => 'field_promocao_titulo',
                        'label' => 'Título',
                        'name' => 'titulo',
                        'type' => 'text',
                        'default_value' => 'Pague 10, leve 12.',
                    ),

                    array(
                        'key' => 'field_promocao_titulo_destaque',
                        'label' => 'Título em destaque',
                        'name' => 'titulo_destaque',
                        'type' => 'text',
                        'default_value' => '2 meses grátis.',
                    ),

                    array(
                        'key' => 'field_promocao_descricao',
                        'label' => 'Descrição',
                        'name' => 'descricao',
                        'type' => 'textarea',
                        'rows' => 4,
                        'default_value' => 'Quem fecha o plano anual à vista paga só 10 mensalidades e usa o endereço por 12 meses. Economia direta de quase 17%, sem letra miúda, sem promoção mascarada.',
                    ),

                    // Card flutuante
                    array(
                        'key' => 'field_promocao_card_label',
                        'label' => 'Label do preço',
                        'name' => 'card_label',
                        'type' => 'text',
                        'default_value' => 'No anual à vista',
                    ),

                    array(
                        'key' => 'field_promocao_preco',
                        'label' => 'Preço',
                        'name' => 'preco',
                        'type' => 'text',
                        'default_value' => '690',
                    ),

                    array(
                        'key' => 'field_promocao_preco_descricao',
                        'label' => 'Descrição do preço',
                        'name' => 'preco_descricao',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'equivalente a R$ 57,50/mês pelo Escritório Virtual completo',
                    ),

                    // CTA
                    array(
                        'key' => 'field_promocao_cta',
                        'label' => 'Texto do botão',
                        'name' => 'cta',
                        'type' => 'text',
                        'default_value' => 'Quero o anual',
                    ),

                    array(
                        'key' => 'field_promocao_link',
                        'label' => 'Link do CTA',
                        'name' => 'link',
                        'type' => 'url',
                    ),

                ),
            ),

            /* =========================================================
             * FAQ
             * ========================================================= */

            array(
                'key' => 'field_tab_faq',
                'label' => 'FAQ',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array(
                'key' => 'field_home_faq',
                'label' => 'Conteúdo da seção',
                'name' => 'faq',
                'type' => 'group',
                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key' => 'field_faq_badge',
                        'label' => 'Badge',
                        'name' => 'badge',
                        'type' => 'text',
                        'default_value' => 'Dúvidas frequentes',
                    ),

                    array(
                        'key' => 'field_faq_titulo_destaque',
                        'label' => 'Título em destaque',
                        'name' => 'titulo_destaque',
                        'type' => 'text',
                        'default_value' => 'Dúvidas frequentes',
                    ),

                    array(
                        'key' => 'field_faq_titulo',
                        'label' => 'Título',
                        'name' => 'titulo',
                        'type' => 'text',
                        'default_value' => 'sobre os planos',
                    ),

                    // Item 1
                    array(
                        'key' => 'field_faq_item_1',
                        'label' => 'Pergunta 1',
                        'name' => 'item_1',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_faq_1_pergunta',
                                'label' => 'Pergunta',
                                'name' => 'pergunta',
                                'type' => 'text',
                                'default_value' => 'Qual a diferença entre Endereço Comercial e Escritório Virtual?',
                            ),

                            array(
                                'key' => 'field_faq_1_resposta',
                                'label' => 'Resposta',
                                'name' => 'resposta',
                                'type' => 'textarea',
                                'rows' => 4,
                                'default_value' => 'O Comercial serve só pra divulgação (site, cartão). O Escritório Virtual é o que vale pra abrir ou transferir CNPJ, vem com contrato de locação, IPTU e comprovante.',
                            ),

                        ),
                    ),

                    // Item 2
                    array(
                        'key' => 'field_faq_item_2',
                        'label' => 'Pergunta 2',
                        'name' => 'item_2',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_faq_2_pergunta',
                                'label' => 'Pergunta',
                                'name' => 'pergunta',
                                'type' => 'text',
                                'default_value' => 'Preciso do plano com IE se for MEI?',
                            ),

                            array(
                                'key' => 'field_faq_2_resposta',
                                'label' => 'Resposta',
                                'name' => 'resposta',
                                'type' => 'textarea',
                                'rows' => 4,
                                'default_value' => 'Depende da sua atividade. Se o seu MEI realiza comércio, indústria ou transporte interestadual/intermunicipal, a Inscrição Estadual (IE) na SEFAZ é obrigatória para emissão de notas fiscais estaduais.',
                            ),

                        ),
                    ),

                    // Item 3
                    array(
                        'key' => 'field_faq_item_3',
                        'label' => 'Pergunta 3',
                        'name' => 'item_3',
                        'type' => 'group',
                        'layout' => 'block',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_faq_3_pergunta',
                                'label' => 'Pergunta',
                                'name' => 'pergunta',
                                'type' => 'text',
                                'default_value' => 'Dá pra trocar de plano depois?',
                            ),

                            array(
                                'key' => 'field_faq_3_resposta',
                                'label' => 'Resposta',
                                'name' => 'resposta',
                                'type' => 'textarea',
                                'rows' => 4,
                                'default_value' => 'Sim, com certeza! Você pode fazer upgrade do seu plano comercial para o escritório virtual ou adicionar a Inscrição Estadual a qualquer momento de forma simples e rápida com o nosso suporte.',
                            ),

                        ),
                    ),

                ),
            ),

            /* =========================================================
             * FOOTER
             * ========================================================= */

            array(
                'key' => 'field_tab_footer',
                'label' => 'Footer',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array(
                'key' => 'field_home_footer',
                'label' => 'Conteúdo do Footer',
                'name' => 'footer',
                'type' => 'group',
                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key' => 'field_footer_logo',
                        'label' => 'Logo',
                        'name' => 'logo',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),

                    array(
                        'key' => 'field_footer_descricao',
                        'label' => 'Descrição',
                        'name' => 'descricao',
                        'type' => 'textarea',
                        'rows' => 4,
                        'default_value' => 'Endereço Virtual e Escritório Virtual em Natal. Endereço fiscal e comercial aceito pela Receita Federal, Junta Comercial e Prefeitura de Natal.',
                    ),

                    // Contato
                    array(
                        'key' => 'field_footer_endereco',
                        'label' => 'Endereço',
                        'name' => 'endereco',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => "R. Teotônio de Carvalho, 1050 -\nTirol, Natal - RN, 59015-100",
                    ),

                    array(
                        'key' => 'field_footer_telefone',
                        'label' => 'Telefone',
                        'name' => 'telefone',
                        'type' => 'text',
                        'default_value' => '(84) 99602-5783',
                    ),

                    array(
                        'key' => 'field_footer_telefone_link',
                        'label' => 'Link do telefone',
                        'name' => 'telefone_link',
                        'type' => 'url',
                    ),

                    array(
                        'key' => 'field_footer_email',
                        'label' => 'E-mail',
                        'name' => 'email',
                        'type' => 'email',
                        'default_value' => 'contato@enderecovirtualnatal.com.br',
                    ),

                    array(
                        'key' => 'field_footer_email_link',
                        'label' => 'Link do e-mail',
                        'name' => 'email_link',
                        'type' => 'url',
                    ),

                    // Links
                    array(
                        'key' => 'field_footer_privacidade',
                        'label' => 'Política de privacidade',
                        'name' => 'privacidade',
                        'type' => 'url',
                    ),

                    array(
                        'key' => 'field_footer_termos',
                        'label' => 'Termos de uso',
                        'name' => 'termos',
                        'type' => 'url',
                    ),

                ),
            ),
        ),

        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),

        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'field',
        'active' => true,
        'description' => 'Gerencie o conteúdo de todas as seções da Home.',
    ));
}

add_action('acf/init', 'ev_register_home_fields');