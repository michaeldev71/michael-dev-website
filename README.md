# Michael DEV Website

Repositório profissional do site Michael DEV. A Home personalizada foi desenvolvida a partir do Google Stitch e integrada ao WordPress com Astra e o tema filho Michael DEV Child.

## Estado atual

A Home v1.0 foi concluída e publicada em **02/11/2026** no domínio `michaeldev.com.br`. A publicação é manual pela Hostinger; não há deploy automático configurado.

A implementação do WordPress fica em `wordpress-theme/michael-dev-child/`. O projeto `michael-dev-stitch` é um laboratório separado e permanece como referência. Os arquivos em `referencias/legado-html/` são um protótipo antigo independente, arquivado para consulta; não são usados pelo tema WordPress nem pelo build atual.

## Estrutura do repositório

```text
.
├── docs/
│   ├── historico-de-estudos.md
│   └── registro-tecnico.md
├── referencias/
│   ├── Homepage tecnológica Michael DEV em azul-marinho.png
│   └── legado-html/
│       ├── index.html
│       ├── script.js
│       └── style.css
└── wordpress-theme/
    └── michael-dev-child/
        ├── assets/
        │   ├── css/
        │   │   ├── header.src.css
        │   │   └── header.min.css
        │   ├── images/
        │   └── js/
        │       └── header.js
        ├── template-parts/
        │   └── home/
        │       ├── about.php
        │       ├── blog.php
        │       ├── contact-cta.php
        │       ├── footer.php
        │       ├── portfolio.php
        │       ├── services.php
        │       └── stats.php
        ├── front-page.php
        ├── functions.php
        ├── style.css
        ├── tailwind.config.js
        ├── package.json
        └── package-lock.json
```

## Home e WordPress

O Astra é o tema pai e Michael DEV Child é o tema filho ativo. `front-page.php` organiza a Home, mantém `get_header()` e `get_footer()` e carrega as seções reutilizáveis com `get_template_part()`. O Header personalizado e a Hero estão no template principal; Serviços, Números, Portfólio, Blog, Sobre, CTA Final e Footer estão em `template-parts/home/`.

O Blog usa `WP_Query` para mostrar até três artigos publicados mais recentes, com os dados e imagens dos posts do WordPress. Não há cards demonstrativos como fallback. A publicação preservou os artigos e as páginas internas que usam Elementor. Os templates globais do Elementor foram configurados para não duplicar o Header e o Footer na Home; as demais páginas mantêm suas condições de exibição.

## Tailwind CSS

A Home usa Tailwind CSS **3.4.17** compilado localmente. O WordPress carrega `assets/css/header.min.css`; não usa o CDN do Tailwind. O Preflight está desativado para evitar que o reset do Tailwind afete os estilos globais do Astra, e os utilitários são limitados ao escopo `#md-header-scope`.

Para recompilar, a partir da raiz do repositório:

```sh
cd wordpress-theme/michael-dev-child
npm ci
npm run build:css
```

O build lê `assets/css/header.src.css` e gera `assets/css/header.min.css`. `tailwind.config.js` varre os templates PHP do tema e o arquivo `../../../michael-dev-stitch/index.html`. Como o laboratório é separado, ele precisa estar nesse caminho relativo durante a compilação. Ao publicar uma alteração de CSS, envie também o CSS compilado ao tema no WordPress.

## JavaScript e cache

`assets/js/header.js` controla a abertura e o fechamento do menu responsivo, inclusive os estados ARIA, links do painel, tecla Escape e mudança para o breakpoint desktop. O script é carregado somente na Home.

Foi identificado conflito do menu mobile com a opção **Minificar JS** do LiteSpeed Cache. Para manter a solução atual, essa opção deve permanecer desativada. Após mudanças no script, limpe o cache e valide o menu por toque em um aparelho físico, além de testar desktop e teclado.

## Publicação

A implantação é manual pela Hostinger. Antes de atualizar o WordPress principal, faça backup, envie os arquivos necessários do tema filho e valide a Home e as páginas internas. Não substitua o banco de dados de produção pelo banco do ambiente de desenvolvimento: posts, páginas Elementor e configurações do site principal devem ser preservados.

## Documentação e próximos passos

O histórico de estudos e os registros técnicos da integração, publicação, acessibilidade, depuração e cuidados de manutenção estão em `docs/`.

Como direção futura, pretende-se migrar gradualmente o restante do site para código próprio. Essa migração ainda não começou; as páginas existentes continuam usando sua configuração atual.

O `.gitignore` exclui dependências locais, arquivos de ambiente, logs, backups e arquivos do editor. Mantenha o lockfile e os assets compilados versionados quando fizerem parte de uma alteração do tema.
