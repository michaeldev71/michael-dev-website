<?php
/**
 * Portfólio de projetos da página inicial.
 *
 * @package MichaelDevChild
 */
?>

<!-- Portfólio com projetos realizados. -->
<section class="py-24 bg-white border-0 border-b border-solid border-slate-100 font-sans" data-purpose="portfolio-section" id="portfolio">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Título e chamada para ver o portfólio completo. -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div class="max-w-xl">
                <span class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-semibold bg-sky-100 text-sky-700 mb-3">
                    Portfólio
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight mb-3">
                    Projetos que geram resultados
                </h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Conheça alguns dos sites e soluções que já desenvolvi para empresas de diferentes segmentos.
                </p>
            </div>
            <div class="mt-6 md:mt-0">
                <a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-solid border-blue-600 text-blue-600 hover:bg-blue-50 text-sm font-medium transition-all group" href="<?php echo esc_url( 'https://michaeldev.com.br/portfolio/' ); ?>">
                    <span>Ver todos os projetos</span>
                    <span class="text-blue-600 transition-transform group-hover:translate-x-1">→</span>
                </a>
            </div>
        </div>

        <!-- Três projetos em cards responsivos. -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Bolas Bellca. -->
            <div class="bg-white rounded-2xl border border-solid border-slate-200 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                <div class="bg-slate-100 aspect-video overflow-hidden border-0 border-b border-solid border-slate-100 relative group">
                    <img
                        alt="Captura do site Bolas Bellca"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Bolas Bellca.jpg' ); ?>"
                    />
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-lg font-bold text-slate-900">Bolas Bellca</h3>
                            <a class="text-slate-600 hover:text-blue-600 transition-colors" href="<?php echo esc_url( 'https://bolasbellca.com.br/' ); ?>" title="Abrir projeto" aria-label="Abrir projeto Bolas Bellca">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24" aria-hidden="true">
                                    <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <p class="text-slate-500 text-xs mb-6">Site institucional de fabricante de bolas de vinil.</p>
                    </div>
                    <div class="flex items-center gap-2 pt-2">
                        <span class="px-3 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-semibold">Bolas de vinil</span>
                        <span class="px-3 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-semibold">Atacado B2B</span>
                    </div>
                </div>
            </div>

            <!-- Parente Assessoria Italiana. -->
            <div class="bg-white rounded-2xl border border-solid border-slate-200 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                <div class="bg-slate-100 aspect-video overflow-hidden border-0 border-b border-solid border-slate-100 relative group">
                    <img
                        alt="Captura do site Parente Assessoria Italiana"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Parente Assessoria Italiana.jpg' ); ?>"
                    />
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-lg font-bold text-slate-900">Parente Assessoria Italiana</h3>
                            <a class="text-slate-600 hover:text-blue-600 transition-colors" href="<?php echo esc_url( 'https://parenteassessoriaitaliana.com.br/' ); ?>" title="Abrir projeto" aria-label="Abrir projeto Parente Assessoria Italiana">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24" aria-hidden="true">
                                    <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <p class="text-slate-500 text-xs mb-6">Assessoria para processos de reconhecimento da cidadania italiana.</p>
                    </div>
                    <div class="flex items-center gap-2 pt-2">
                        <span class="px-3 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-semibold">Assessoria</span>
                        <span class="px-3 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-semibold">Cidadania italiana</span>
                    </div>
                </div>
            </div>

            <!-- Reparação Automotiva. -->
            <div class="bg-white rounded-2xl border border-solid border-slate-200 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                <div class="bg-slate-100 aspect-video overflow-hidden border-0 border-b border-solid border-slate-100 relative group">
                    <img
                        alt="Captura do portal Reparação Automotiva"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Reparação Automotiva.jpg' ); ?>"
                    />
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-lg font-bold text-slate-900">Reparação Automotiva</h3>
                            <a class="text-slate-600 hover:text-blue-600 transition-colors" href="<?php echo esc_url( 'https://reparacaoautomotiva.com.br/edicoes/' ); ?>" title="Abrir projeto" aria-label="Abrir projeto Reparação Automotiva">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24" aria-hidden="true">
                                    <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <p class="text-slate-500 text-xs mb-6">Portal de edições da revista Reparação Automotiva.</p>
                    </div>
                    <div class="flex items-center gap-2 pt-2">
                        <span class="px-3 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-semibold">Revista digital</span>
                        <span class="px-3 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-semibold">Setor automotivo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
