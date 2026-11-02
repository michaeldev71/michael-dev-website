# Histórico de estudos

Resumo das etapas estudadas e realizadas até a publicação da Home Michael DEV v1.0 em 02/11/2026.

1. **Tema filho Astra:** criação, ativação e identificação do Michael DEV Child como filho de Astra.
2. **Carregamento de recursos:** uso do `functions.php` e do hook `wp_enqueue_scripts` para carregar o `style.css` do tema filho; recursos próprios da Home são condicionados a `is_front_page()`.
3. **Template WordPress:** criação e teste inicial de `front-page.php` com `get_header()`, `<main>` e `get_footer()`, mantendo a estrutura do Astra.
4. **Tailwind em build local:** configuração do Tailwind CSS 3.4.17 para gerar CSS local, sem CDN na Home, com Preflight desativado e utilitários limitados ao escopo `#md-header-scope`.
5. **HTML semântico e acessibilidade:** organização da Home com landmarks e hierarquia de títulos; revisão de SVGs decorativos, nomes acessíveis para links com ícones, foco de teclado, contraste e âncoras com Header sticky.
6. **Header personalizado:** integração da marcação aprovada do Stitch, adaptação de links ao WordPress, atributos ARIA e menu responsivo. Uma revisão local do JavaScript foi isolada, inicializada após disponibilidade do DOM e protegida contra ausência de `matchMedia`; a opção Minificar JS do LiteSpeed foi desativada e o cache limpo para restabelecer o menu publicado nos testes.
7. **Hero:** integração da seção aprovada, recursos locais do tema filho e estilos próprios; correções de especificidade do Astra, bordas com Preflight desativado e espaçamento do cartão sem perder semântica.
8. **Template-parts:** separação das seções Serviços, Números, Portfólio, Blog, Sobre, CTA Final e Footer em arquivos PHP carregados pelo `front-page.php`.
9. **PHP e WordPress:** uso de `get_header()`, `get_footer()`, `get_template_part()`, `home_url()`, escaping de saída e `is_front_page()` para limitar recursos à página inicial; preservação dos hooks globais do WordPress e do Astra.
10. **WP_Query:** consulta dos três artigos publicados mais recentes, apresentação de dados reais do WordPress, restauração do contexto com `wp_reset_postdata()` e remoção dos cards demonstrativos da versão de produção.
11. **CSS e Tailwind:** compilação local com Tailwind CSS 3.4.17, sem CDN e com Preflight desativado; aprendizado sobre escopo de utilitários, `border-style`, estados responsivos, transformações e atualização do CSS compilado.
12. **Validação responsiva e visual:** revisão de desktop, tablet e celular e ajustes aprovados nas seções. A imagem atual da seção Sobre permanece uma pendência para substituição futura pela fotografia definitiva.
13. **Depuração e cache:** comparação entre Chrome responsivo e aparelho físico, inspeção de seletores e carregamento de script, diagnóstico do conflito com Minificar JS do LiteSpeed Cache, desativação da opção e limpeza do cache para restabelecer o menu nos testes.
14. **Publicação e preservação do site:** publicação da Home v1.0 em `michaeldev.com.br` após backup completo; Blog e páginas internas do Elementor foram preservados. A exibição duplicada de Header/Footer foi resolvida ajustando as condições de exibição dos templates do Elementor no painel.
15. **Git e GitHub:** manutenção do repositório, documentação, revisão de arquivos modificados e preparação de mudanças versionáveis. Configurações de painel e publicação não são registradas automaticamente pelo código Git.

## Conceitos praticados

HTML semântico, CSS e Tailwind, JavaScript, PHP, hierarquia de templates do WordPress, tema filho Astra, hooks, `template-parts`, `WP_Query`, escaping, acessibilidade, Git/GitHub, cache, depuração e publicação controlada.

A Home Michael DEV v1.0 está publicada em `michaeldev.com.br`. Futuras mudanças serão evoluções posteriores desta versão estável.
