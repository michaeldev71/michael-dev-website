# Histórico de estudos

Resumo das etapas estudadas e realizadas na integração da Home Michael DEV com WordPress e Astra.

1. **Tema filho Astra:** criação, ativação e identificação do Michael DEV Child como filho de Astra.
2. **Carregamento de recursos:** uso do `functions.php` e do hook `wp_enqueue_scripts` para carregar o `style.css` do tema filho; recursos próprios da Home são condicionados a `is_front_page()`.
3. **Template WordPress:** criação e teste inicial de `front-page.php` com `get_header()`, `<main>` e `get_footer()`, mantendo a estrutura do Astra.
4. **Tailwind em build local:** configuração do Tailwind CSS 3.4.17 para gerar CSS local, sem CDN na Home, com Preflight desativado e utilitários limitados ao escopo `#md-header-scope`.
5. **Header personalizado:** integração da marcação aprovada do Stitch, adaptação dos links internos para a Home do WordPress e preservação da lógica do menu responsivo.
6. **Hero:** integração da seção aprovada, uso da imagem no diretório de assets do tema filho e inclusão no CSS local dos estilos próprios necessários.
7. **Validação responsiva e visual:** conferência do Header e da Hero em larguras responsivas; ajustes de layout, cor do título e bordas foram validados na Home de desenvolvimento.
8. **Git:** manutenção do projeto em repositório GitHub, com README na raiz e dependências locais como `node_modules/` excluídas pelo `.gitignore`.

A Home permanece em desenvolvimento; outras seções do Stitch ainda aguardam integração.
