# Michael DEV Website

Repositório do projeto profissional Michael DEV. A implementação WordPress usa Astra como tema pai e o tema filho Michael DEV Child para a Home personalizada.

## Estado do projeto

O projeto continua em desenvolvimento. A Home do tema filho contém o Header personalizado e a Hero integrados; as demais seções ainda não foram integradas. O Footer permanece sob responsabilidade do Astra. A Home não deve ser considerada finalizada.

## Estrutura

```text
.
├── index.html                         # Protótipo HTML mantido na raiz
├── style.css                          # Estilos do protótipo da raiz
├── script.js                          # Script do protótipo da raiz
└── wordpress-theme/
    └── michael-dev-child/
        ├── assets/
        │   ├── css/
        │   │   ├── header.src.css     # Entrada do Tailwind e estilos próprios da Home
        │   │   └── header.min.css     # CSS compilado para uso no WordPress
        │   ├── images/
        │   │   └── michael-dev-hero.webp
        │   └── js/
        │       └── header.js          # Interação do menu responsivo
        ├── front-page.php             # Template da Home
        ├── functions.php              # Registro dos estilos e scripts
        ├── style.css                  # Identificação e estilos do tema filho
        ├── tailwind.config.js         # Configuração Tailwind v3
        ├── package.json
        └── package-lock.json
```

O projeto Google Stitch é um laboratório separado do repositório profissional. O arquivo original continua sendo a referência visual para a implementação.

## WordPress e Astra

`wordpress-theme/michael-dev-child/` é um tema filho de Astra. O `front-page.php` é usado pela página inicial e mantém `get_header()` e `get_footer()`, preservando a estrutura do WordPress e o Footer do Astra. O Header padrão do Astra foi desativado somente na Home.

O `functions.php` carrega o `style.css` do tema filho após o CSS do Astra. Os recursos da Home são registrados no hook `wp_enqueue_scripts` e carregados somente quando `is_front_page()` é verdadeiro. O CSS e o JavaScript locais usam URLs construídas pelo WordPress; o CSS compilado recebe uma versão baseada na data de modificação do arquivo.

Os utilitários Tailwind e as regras próprias da Home ficam sob `#md-header-scope`. A configuração desativa o Preflight para evitar que o reset do Tailwind altere os estilos globais do Astra.

## Compilar o CSS da Home

O projeto usa Tailwind CSS **3.4.17** como ferramenta de desenvolvimento. O WordPress carrega o arquivo compilado `assets/css/header.min.css`; não é usado o CDN do Tailwind na Home.

No terminal, a partir da raiz do repositório:

```sh
cd wordpress-theme/michael-dev-child
npm ci
npm run build:css
```

O comando `build:css` lê `assets/css/header.src.css` e grava `assets/css/header.min.css`. A configuração Tailwind procura classes nos templates PHP do tema e no `index.html` do laboratório Stitch, localizado em `../../../michael-dev-stitch/index.html` em relação à pasta do tema filho. Esse laboratório precisa estar disponível nesse local durante a compilação. Se novas classes forem construídas dinamicamente em PHP, elas devem ser incluídas de forma que o compilador consiga detectá-las.

Recompile o CSS quando mudar classes Tailwind ou estilos em `header.src.css`. Versione o CSS compilado junto com o tema para que o WordPress receba o arquivo pronto.

## Git

O controle de versão é feito pelo Git no repositório. O `.gitignore` exclui `node_modules/`, arquivos `.env`, logs, backups e arquivos locais do editor. Mantenha `package-lock.json` e o CSS compilado versionados para reproduzir o build e disponibilizar os assets usados pelo tema.

Fluxo básico para registrar uma alteração:

```sh
git status
git add README.md
git commit -m "docs: document project structure"
git push
```

## Próximas etapas

Validar a Home em diferentes larguras de tela e continuar a integração das seções planejadas, preservando o projeto original do Stitch. A publicação e a validação no WordPress são etapas próprias do fluxo de trabalho; este repositório não documenta automação de deploy.
