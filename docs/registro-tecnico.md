# Registro técnico da integração WordPress

Este documento registra problemas identificados e correções aplicadas durante a integração da Home Michael DEV ao tema filho Astra, incluindo a publicação da versão 1.0 em 02/11/2026.

## 1. Cor do título principal da Hero

- **Contexto:** a Hero usava `text-white` no elemento da seção, enquanto o título `h1` dependia dessa cor herdada.
- **Sintoma:** no WordPress, o texto normal do título aparecia escuro; a palavra destacada continuava azul.
- **Causa identificada:** a regra de tipografia do Astra para `h1` prevalecia sobre a cor herdada do pai.
- **Correção aplicada:** adicionar a classe Tailwind `text-white` diretamente ao `h1`. A classe `text-blue-500` no trecho destacado foi preservada.
- **Resultado validado:** o título passou a aparecer branco, com a palavra destacada em azul, conforme aprovado na Home de desenvolvimento.
- **Verificação automatizada futura:** em teste de navegador, verificar a cor computada do `h1` e confirmar que o `span` destacado continua azul.

## 2. Bordas invisíveis na moldura e no cartão da Hero

- **Contexto:** o build Tailwind local desativa o Preflight com `corePlugins.preflight: false` para não aplicar um reset global sobre o Astra.
- **Sintoma:** as classes de borda definiam largura e cor, mas o contorno da moldura da imagem e do cartão flutuante não aparecia como no Stitch.
- **Causa identificada:** sem o Preflight, as classes `border` e `border-slate-*` não garantiam `border-style: solid`; o estilo padrão do navegador deixava a borda sem traço visível.
- **Correção aplicada:** acrescentar a classe Tailwind `border-solid` somente à moldura da imagem e ao cartão flutuante da Hero.
- **Resultado validado:** os dois contornos ficaram visíveis e visualmente fiéis à versão aprovada.
- **Verificação automatizada futura:** conferir em teste de navegador que `getComputedStyle(element).borderStyle` retorna `solid` para a moldura e o cartão.

## 3. Header e conteúdo lado a lado

- **Contexto:** `get_header()` do Astra abre a região `#content > .ast-container`. O escopo `#md-header-scope` usa `display: contents` para que os seletores Tailwind compilados alcancem Header e conteúdo.
- **Sintoma:** o Header e o `<main>` apareciam lado a lado e o Header ficava limitado à largura do contêiner.
- **Causa identificada:** `display: contents` remove a caixa visual do escopo; Header e `<main>` passam a participar diretamente do layout do `.ast-container`, que pode usar Flexbox em linha e impor uma largura máxima.
- **Correção aplicada:** no template da Home, limitar uma regra ao `body.home #content > .ast-container`, definindo fluxo de bloco, largura de 100%, largura máxima sem limite e removendo o padding horizontal. O Header e o conteúdo continuam dentro do escopo Tailwind.
- **Resultado validado:** o Header passou a ocupar a largura da tela e o conteúdo ficou abaixo dele; o comportamento sticky foi mantido na validação visual da Home.
- **Verificação automatizada futura:** em teste de navegador, confirmar que o início do `<main>` fica abaixo do fim do Header, que o contêiner da Home ocupa a largura disponível e que o Header permanece sticky durante a rolagem.

## 4. Arquitetura final da Home

- **Template:** `wordpress-theme/michael-dev-child/front-page.php` é o template específico da página inicial. Ele preserva `get_header()` e `get_footer()` para manter a estrutura do WordPress, do Astra e os hooks globais.
- **Escopo:** a marcação personalizada fica dentro de `#md-header-scope`, permitindo limitar os utilitários Tailwind à Home. Uma regra de layout no template corrige a largura e o fluxo do contêiner Astra da Home.
- **Componentes:** Header e Hero ficam no template principal; as demais seções são carregadas como partes de template em `template-parts/home/`: Serviços, Números, Portfólio, Blog, Sobre, CTA Final e Footer personalizado. O Footer da Home é incluído depois de `</main>` e antes de `get_footer()`.
- **Estilos e scripts:** `functions.php` mantém o carregamento do `style.css` do tema filho e enfileira os recursos específicos da Home de forma condicional. O Tailwind CSS 3.4.17 é compilado localmente, sem CDN e com Preflight desativado para evitar reset global sobre o Astra.
- **Resultado:** a Home v1.0 foi publicada em `michaeldev.com.br`; as páginas internas, o Blog e as páginas Elementor existentes foram preservados.

## 5. Integração das seções e dados do Blog

- **Contexto:** as seções visuais foram adaptadas do projeto aprovado no Google Stitch para o template WordPress, mantendo a identidade, a responsividade e o escopo da Home.
- **Seções concluídas:** Header, Hero, Serviços, Números, Portfólio, Blog, Sobre, CTA Final e Footer.
- **Blog:** `template-parts/home/blog.php` usa `WP_Query` para obter até três posts publicados (`post_type=post`, `post_status=publish`), do mais recente para o mais antigo. Título, categoria, URL, resumo, data e imagem destacada vêm dos posts. A consulta não usa cards demonstrativos como fallback e chama `wp_reset_postdata()` após o loop.
- **Compatibilidade:** o Blog utiliza os posts do WordPress ativo; ao migrar o tema, a consulta continuará lendo os posts disponíveis naquele banco. A versão de produção não deve substituir o banco de dados do site principal para transferir a Home.
- **Verificação futura:** confirmar no ambiente de publicação que os três posts esperados aparecem, que o estado sem posts não exibe conteúdo fictício e que links, imagens destacadas e a página de arquivo do Blog funcionam.

## 6. Auditoria de acessibilidade

- **Escopo:** a revisão incluiu semântica dos títulos e landmarks, SVGs decorativos, nomes acessíveis de links compostos por ícones, navegação por teclado, foco visível, âncoras da Home sob Header sticky e contraste de textos menores.
- **Correções incorporadas:** foram preservados títulos semanticamente adequados sem depender do elemento para definir aparência; elementos decorativos foram marcados para tecnologias assistivas quando apropriado; links de ícone receberam identificação acessível; e o espaçamento de rolagem das âncoras foi considerado para o Header sticky. O cartão do Hero mantém o nome em parágrafo com margem explícita, evitando a margem padrão do Astra.
- **Limite da validação:** as correções de código não substituem testes manuais com teclado, leitor de tela, zoom e contraste em navegador. Revalidar esses pontos quando forem atualizados Astra, Tailwind ou os componentes.

## 7. Publicação no WordPress principal

- **Contexto:** a Home foi publicada em `michaeldev.com.br` após desenvolvimento e validação no subdomínio. Foi feito um backup completo antes da publicação.
- **Preservação:** os posts existentes, o Blog e as páginas internas que usam Elementor permaneceram no site. A publicação deve ser feita pelos arquivos do tema filho e configurações pontuais do painel, sem importar um banco de dados de desenvolvimento sobre produção.
- **Diferença entre código e painel:** templates, PHP, CSS e JavaScript são parte do tema filho e podem ser versionados. Condições de exibição do Elementor e opções do LiteSpeed Cache são configurações do WordPress/servidor; elas não são representadas pelo commit dos arquivos do tema.
- **Rollback:** manter backup verificável dos arquivos e do banco antes de atualizações do tema ou do painel. Em reversão, restaurar os arquivos/configurações necessários sem substituir o banco de produção pelo banco do laboratório.

## 8. Header e Footer duplicados: condições do Elementor

- **Sintoma:** o Header e o Footer personalizados da Home apareciam junto aos componentes visuais do Astra.
- **Causa confirmada durante a publicação:** templates globais de Header/Footer do Elementor estavam incluídos na Home pelas condições de exibição. O conflito não exigiu alterar `get_header()`, `get_footer()`, `wp_head()` ou `wp_footer()`.
- **Correção aplicada no painel:** a Home foi excluída das condições de exibição dos templates correspondentes do Elementor. As páginas em que esses templates são necessários mantiveram suas condições.
- **Código local a reconciliar:** `functions.php` atualmente contém uma alteração não versionada que tenta remover callbacks visuais do Astra somente em `is_front_page()`. Como a solução validada na publicação foi a condição do Elementor, confirmar no WordPress principal se essa remoção de callbacks é necessária antes de incluir tal alteração no commit. Não remover automaticamente: comparar a configuração atual do Astra/Elementor e testar Home e páginas internas primeiro.
- **Verificação futura:** depois de alterações em condições do Elementor ou no Astra, conferir uma única instância de Header e Footer na Home e o comportamento esperado em páginas internas.

## 9. Menu mobile e LiteSpeed Cache

- **Sintoma:** em um celular físico, o menu não respondia ao toque, embora funcionasse no modo responsivo do Chrome desktop.
- **Diagnóstico e resultado reportados nos testes:** o HTML continha os seletores esperados, `header.js` era acessível e o problema persistia em aba anônima e outra conexão. Desativar as otimizações JavaScript não bastou inicialmente; o teste final identificou conflito com **Minificar JS** do LiteSpeed Cache. Desativar essa opção e limpar o cache restabeleceu o menu nos testes realizados.
- **Correção local de robustez:** a cópia atual de `assets/js/header.js` foi isolada em uma IIFE, inicializa após a disponibilidade do DOM, registra o clique independentemente de `matchMedia` e oferece os listeners modernos e legados de breakpoint. A lógica de ARIA, classes `hidden`/`flex`, Escape, links e fechamento ao entrar no desktop foi preservada. O arquivo local difere do commit atual; não há confirmação de que essa revisão de código tenha sido enviada ao WordPress principal.
- **Configuração operacional:** a opção **Minificar JS deve permanecer desativada enquanto esta solução estiver em uso**. Limpar os caches após alterações no JavaScript e testar toque em aparelho real. A configuração do LiteSpeed é feita no painel e não acompanha o código do tema.
- **Limite:** a correção JavaScript local melhora robustez; o restabelecimento do menu após desativar Minificar JS foi observado em teste do site publicado. Antes de tratar a revisão local de `header.js` como parte do artefato v1.0, comparar com o arquivo servido em produção, publicar a revisão se desejada e testar novamente em aparelho físico. Repetir o teste após atualizações do LiteSpeed, do navegador ou do script.

## 10. Cuidados para futuras atualizações

- Atualizar e testar primeiro no ambiente de desenvolvimento; manter o CSS compilado do Tailwind sincronizado com suas fontes PHP.
- Não habilitar Minificar JS no LiteSpeed sem repetir testes do menu em aparelhos físicos; após mudanças, limpar os caches pertinentes.
- Rever as condições de exibição do Elementor e os callbacks do Astra antes de mudar a estrutura dos templates; evitar remover hooks globais necessários a plugins.
- Preservar o banco e os posts de produção. Publicar o tema filho sem substituir conteúdo, Elementor ou configurações do site principal.
- Antes de atualizar Astra, Elementor, Tailwind ou LiteSpeed, guardar backup e verificar Header/Footer, navegação, Blog, links de seção, responsividade e páginas internas.
- Após cada publicação, validar a Home em desktop, tablet e celular, testar teclado e menu por toque, conferir páginas Elementor e confirmar que CSS/JS atualizados não estão mascarados por cache.
