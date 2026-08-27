# Landing Page - Endereço Virtual

Landing page desenvolvida para desafio técnico, integrada ao WordPress por meio de um tema personalizado, com foco em responsividade, performance, SEO e gerenciamento dinâmico de conteúdo.

## Demonstração Online

Acesse a versão online da landing page:

[Ver demonstração online](https://demo.programup.com.br/)

*Esta URL está hospedada temporariamente para fins de demonstração do desafio técnico.*

## Tecnologias

* WordPress
* PHP
* Tailwind CSS
* JavaScript
* AOS (Animate On Scroll)
* Advanced Custom Fields (ACF)

## Estrutura do Tema

* `front-page.php` — Estrutura principal da landing page
* `header.php` / `footer.php` — Cabeçalho e rodapé
* `functions.php` — Configurações principais, registro de assets e dependências
* `inc/`

* `setup.php` — Configurações e suportes do tema no WordPress
* `acf/fields-home.php` — Registro programático dos campos personalizados do ACF
* `template-parts/home/` — Componentes modulares da landing page
* `assets/`

* `css/` — Estilos compilados com Tailwind CSS
* `js/` — Scripts de interatividade e animações
* `images/` / `fonts/` — Ativos visuais e tipografia

## Instalação

1. Instale e configure o WordPress em um ambiente local.
2. Instale e ative o plugin **Advanced Custom Fields (ACF)**.
3. Copie a pasta `enderecovirtual-colina` para `wp-content/themes/`.
4. Ative o tema em **Aparência > Temas**.
5. Acesse a página inicial e preencha os conteúdos disponíveis através dos campos do ACF.

## Funcionalidades

* Layout responsivo para desktop, tablet e mobile
* FAQ com acordeão dinâmico
* Animações de entrada utilizando AOS
* Conteúdo gerenciável pelo WordPress/ACF
* Links de conversão para WhatsApp
* Estrutura semântica e otimizada para SEO
* Componentização da landing page em partes reutilizáveis
