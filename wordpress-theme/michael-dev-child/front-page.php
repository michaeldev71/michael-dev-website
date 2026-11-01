<?php
/**
 * Template da página inicial do tema Michael DEV Child.
 *
 * @package MichaelDevChild
 */

// Inclui o cabeçalho do tema pai Astra.
get_header();
?>

<!-- Layout de tela cheia limitado ao contêiner de conteúdo da Home no Astra. -->
<style>
    body.home #content > .ast-container {
        display: block;
        width: 100%;
        max-width: none;
        padding-left: 0;
        padding-right: 0;
    }
</style>

<!-- Header personalizado do Stitch; os utilitários Tailwind ficam dentro deste escopo. -->
<div id="md-header-scope" style="display: contents;">
    <header class="sticky top-0 z-50 bg-[#070f26]/95 backdrop-blur-md border-b border-slate-800/80 transition-all duration-300 font-sans antialiased">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-[1fr_auto] lg:grid-cols-[auto_1fr] items-center gap-y-3 lg:gap-x-8 min-h-20 py-4 lg:py-0">
            <!-- Logo e identidade visual. -->
            <a class="flex items-center gap-3 group justify-self-center md:justify-self-start" data-purpose="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-blue-600 to-sky-400 flex items-center justify-center p-0.5 shadow-lg shadow-blue-500/20">
                    <div class="w-full h-full bg-[#070f26] rounded-[10px] flex items-center justify-center">
                        <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center font-extrabold tracking-wider text-xl text-white">
                    <span>MICHAEL</span>
                    <span class="text-blue-500 ml-1.5 font-black">DEV</span>
                </div>
            </a>

            <!-- Espaço reservado no layout mobile. -->
            <div class="h-8 md:hidden" aria-hidden="true"></div>

            <!-- Controle do menu para mobile e tablet. -->
            <button
                class="w-full md:w-auto flex justify-center md:justify-self-end lg:hidden p-3 rounded-lg text-sky-200 border border-sky-400/30 bg-sky-500/10 hover:bg-blue-600 hover:text-white transition-colors"
                type="button"
                aria-controls="header-menu-panel"
                aria-expanded="false"
                aria-label="Abrir menu"
            >
                <span class="flex flex-col gap-1" aria-hidden="true">
                    <span class="block w-6 h-0.5 bg-current rounded-full"></span>
                    <span class="block w-6 h-0.5 bg-current rounded-full"></span>
                    <span class="block w-6 h-0.5 bg-current rounded-full"></span>
                </span>
            </button>

            <!-- Navegação compartilhada e chamada para o WhatsApp. -->
            <div
                id="header-menu-panel"
                class="hidden md:col-span-2 lg:col-span-1 w-full flex-col gap-4 border-t border-slate-800/80 pt-4 lg:grid lg:grid-cols-[minmax(0,1fr)_auto] lg:items-center lg:gap-x-8 lg:border-0 lg:pt-0"
            >
                <nav aria-label="Navegação Principal" class="flex flex-col gap-2 text-sm font-medium text-slate-300 lg:flex-row lg:items-center lg:justify-center lg:gap-8 lg:min-w-0">
                    <a class="text-white hover:text-sky-400 transition-colors py-1 border-b-2 border-blue-500 font-semibold" href="<?php echo esc_url( home_url( '/#inicio' ) ); ?>">Início</a>
                    <a class="hover:text-sky-400 transition-colors py-1" href="<?php echo esc_url( home_url( '/#servicos' ) ); ?>">Serviços</a>
                    <a class="hover:text-sky-400 transition-colors py-1" href="<?php echo esc_url( home_url( '/#portfolio' ) ); ?>">Portfólio</a>
                    <a class="hover:text-sky-400 transition-colors py-1" href="<?php echo esc_url( home_url( '/#blog' ) ); ?>">Blog</a>
                    <a class="hover:text-sky-400 transition-colors py-1" href="<?php echo esc_url( home_url( '/#sobre' ) ); ?>">Sobre</a>
                    <a class="hover:text-sky-400 transition-colors py-1" href="<?php echo esc_url( home_url( '/#contato' ) ); ?>">Contato</a>
                </nav>

                <div class="flex items-center gap-3 lg:justify-self-end">
                    <a
                        class="inline-flex items-center gap-2 px-3 sm:px-5 py-2.5 rounded-full text-xs sm:text-sm font-medium text-sky-200 border border-sky-400/30 bg-sky-500/10 hover:bg-blue-600 hover:text-white hover:border-blue-500 transition-all duration-300 shadow-sm"
                        data-purpose="header-cta-whatsapp"
                        href="<?php echo esc_url( 'https://wa.me/' ); ?>"
                        rel="noopener noreferrer"
                        target="_blank"
                    >
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path>
                        </svg>
                        <span>Falar no WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

<main id="inicio">
<!-- BEGIN: HeroSection -->
<section class="relative hero-bg-gradient text-white pt-10 pb-20 md:py-24 overflow-hidden border-b border-slate-800" data-purpose="hero-section">
  <!-- Subtle geometric background accent -->
  <div class="absolute inset-0 opacity-20 pointer-events-none overflow-hidden">
    <svg class="w-full h-full" fill="none" preserveaspectratio="none" viewbox="0 0 1200 800">
      <path d="M-100,200 L600,-50 L1300,500 L600,1050 Z" opacity="0.4" stroke="#3b82f6" stroke-dasharray="8 8" stroke-width="1.5"></path>
      <path d="M300,-100 L950,400 L500,900 Z" opacity="0.3" stroke="#0ea5e9" stroke-width="1"></path>
    </svg>
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
      <!-- Hero Left Column: Copy & CTAs -->
      <div class="lg:col-span-7 flex flex-col items-start">
        <!-- Badge -->
        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold bg-sky-500/10 border border-sky-400/30 text-sky-300 mb-6 tracking-wide">
          Sites e Soluções Digitais
        </span>
        <!-- Main Heading -->
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15] mb-6 text-white">
          Seu negócio no digital, de forma <span class="text-blue-500 inline-block underline decoration-blue-500/40 decoration-wavy underline-offset-8">estratégica.</span>
        </h1>
        <!-- Paragraph -->
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl font-normal leading-relaxed mb-8">
          Criamos sites, landing pages e automações para empresas que querem mais clientes, produtividade e resultados reais. Tudo com foco em performance, segurança e facilidade de gestão.
        </p>
        <!-- Buttons CTA -->
        <div class="flex flex-wrap items-center gap-4 mb-12">
          <a
            class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-full bg-blue-600 hover:bg-blue-500 text-white font-semibold text-sm transition-all shadow-lg shadow-blue-600/30 hover:shadow-blue-500/40 hover:-translate-y-0.5"
            href="https://wa.me/"
            rel="noopener noreferrer"
            target="_blank">
            <svg class="w-4 h-4 fill-current" viewbox="0 0 24 24">
              <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path>
            </svg>
            <span>Falar no WhatsApp</span>
          </a>
          <a
            class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full border border-slate-700 bg-slate-900/60 hover:bg-slate-800 text-slate-200 font-medium text-sm transition-all hover:border-slate-500"
            href="#servicos">
            <span>Conheça meus serviços</span>
            <span class="text-blue-400 font-bold">→</span>
          </a>
        </div>
        <!-- 3 Bottom Value Badges -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-6 border-t border-slate-800/80 w-full">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0">
              <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
              </svg>
            </div>
            <span class="text-xs font-medium text-slate-300 leading-tight">Atendimento personalizado</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0">
              <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                <path d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
              </svg>
            </div>
            <span class="text-xs font-medium text-slate-300 leading-tight">Soluções sob medida</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0">
              <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
              </svg>
            </div>
            <span class="text-xs font-medium text-slate-300 leading-tight">Suporte e manutenção</span>
          </div>
        </div>
      </div>
      <!-- Hero Right Column: Profile Presentation -->
      <div class="lg:col-span-5 relative flex justify-center lg:justify-end">
        <!-- Profile Photo Container -->
        <div class="w-full max-w-md mx-auto">
          <!-- Handwritten Arrow & Note Above Person -->
          <div class="hidden sm:flex w-72 max-w-full ml-auto mb-1 flex-col items-center select-none pointer-events-none">
            <span class="font-handwriting text-2xl text-slate-200 tracking-wide text-center leading-snug">
              Tecnologia que<br/>impulsiona seu negócio
            </span>
            <svg class="w-12 h-10 text-slate-300 -mt-2 transform -scale-x-100 rotate-12" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 48 48">
              <path d="M12 8 C 24 16, 28 32, 38 38 M 38 38 L 30 38 M 38 38 L 36 28" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="relative">
            <!-- Backdrop Glow -->
            <div class="absolute inset-0 bg-blue-600/20 rounded-3xl filter blur-2xl transform -rotate-3 scale-95"></div>
            <!-- Portrait Image -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-solid border-slate-700/60 bg-slate-900/40 aspect-[4/5] sm:aspect-[3/4]">
              <img
                alt="Michael Jonathan Oliveira - Desenvolvedor Web e Freelancer"
                class="w-full h-full object-cover object-top filter brightness-95 contrast-105"
                src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/michael-dev-hero.webp' ); ?>"/>
              <div class="absolute inset-0 bg-gradient-to-t from-[#070f26] via-transparent to-transparent opacity-80"></div>
            </div>
            <!-- Floating Info Card on bottom right -->
            <div class="absolute -bottom-4 right-2 sm:-right-4 bg-[#0a1538]/95 backdrop-blur-md border border-solid border-slate-700/90 rounded-2xl px-5 py-3 shadow-xl z-20 flex flex-col">
              <h4 class="text-sm font-bold text-white tracking-wide">Michael Jonathan Oliveira</h4>
              <span class="text-xs text-slate-300 font-medium mt-0.5">Desenvolvedor Web | Freelancer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: HeroSection -->
</main>
</div>

<?php
// Inclui o rodapé do tema pai Astra.
get_footer();
