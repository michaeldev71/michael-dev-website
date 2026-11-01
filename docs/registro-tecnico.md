# Registro técnico da integração WordPress

Este documento registra problemas identificados e correções aplicadas durante a integração do Header e da Hero do Stitch ao tema filho Astra.

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
