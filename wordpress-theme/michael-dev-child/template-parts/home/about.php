<?php
/**
 * Seção sobre Michael DEV na página inicial.
 *
 * @package MichaelDevChild
 */
?>

<!-- Apresentação pessoal e tecnologias utilizadas. -->
<section class="py-24 bg-[#070f26] text-white border-0 border-b border-solid border-slate-800 font-sans" data-purpose="about-section" id="sobre">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <!-- Fotografia do espaço de desenvolvimento. -->
            <div class="lg:col-span-6">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-solid border-slate-800">
                    <img
                        alt="Workspace de Desenvolvimento Michael DEV"
                        class="w-full h-full object-cover max-h-[460px] filter brightness-90 contrast-[1.05] hover:scale-105 transition-transform duration-500"
                        src="<?php echo esc_url( 'https://lh3.googleusercontent.com/aida-public/AB6AXuAt0tlhcESyN87m-l1deROGZeB493tygFwmQ8Vd5GNIg7B-d6lmBaD2GMk9BeAtzWCvAqMEVNFcPYaAKxuSqMUVQ6a_H5AjX7Opc4q6Yfd_KRt14qofEg_irmubROPs1NU4q5XcfP52nFaMKRKFomZuV0wFsvirmJjGJIJ5k3NMk1u3nKbrt1kzKjrYhdbcMYVLNjQ44Yv8xFt2HxdDJKAFpgQYV-6Vw5-ulcN8548UpewjY2TCC5yI' ); ?>"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#070f26]/60 to-transparent"></div>
                </div>
            </div>

            <!-- Biografia e tecnologias. -->
            <div class="lg:col-span-6 flex flex-col items-start">
                <span class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-semibold bg-sky-500/10 border border-solid border-sky-400/20 text-sky-300 mb-4">
                    Sobre mim
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    Quem é Michael DEV?
                </h2>
                <p class="text-slate-300 text-base leading-relaxed mb-4">
                    Sou desenvolvedor web e freelancer, especializado em WordPress, Elementor, automação e soluções digitais para empresas.
                </p>
                <p class="text-slate-400 text-base leading-relaxed mb-8">
                    Meu foco é transformar ideias em projetos que geram resultados, com tecnologia, estratégia e suporte de verdade.
                </p>

                <!-- Tecnologias e ferramentas. -->
                <div class="flex flex-wrap items-center gap-3 mb-10">
                    <!-- WordPress. -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900/90 border border-solid border-slate-800 text-xs font-semibold text-slate-200">
                        <svg class="w-4 h-4 text-sky-400 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.167 6.839 9.482L5.42 12.396A9.97 9.97 0 0112 4c2.25 0 4.321.745 5.986 2.001L14.77 12.87l-2.073-6.19c.148-.008.318-.016.488-.016h.227V6h-3.41v.664h.341c.427 0 .685.228.847.664l2.585 7.643-2.673 7.892C8.307 22.44 8.152 22.37 8 22.288L12 2zm7.64 6.746c.231.727.36 1.498.36 2.302 0 1.94-.783 3.697-2.054 4.978l1.694-4.78zm-6.666 12.85l3.298-9.528 2.33 6.381A9.96 9.96 0 0112 22c-.347 0-.688-.02-1.026-.058z"></path>
                        </svg>
                        WordPress
                    </span>

                    <!-- Elementor. -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900/90 border border-solid border-slate-800 text-xs font-semibold text-slate-200">
                        <svg class="w-4 h-4 text-rose-500 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-3 14H7V8h2v8zm8 0h-6v-2h6v2zm0-3h-6v-2h6v2zm0-3h-6V8h6v2z"></path>
                        </svg>
                        Elementor
                    </span>

                    <!-- PHP. -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900/90 border border-solid border-slate-800 text-xs font-semibold text-slate-200">
                        <svg class="w-4 h-4 text-indigo-400 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 5.523 4.477 10 10 10s10-4.477 10-10c0-5.523-4.477-10-10-10zm-3 13.5H7.5V8.5H9c1.657 0 3 1.119 3 2.5s-1.343 2.5-3 2.5zm0-2h.5c.828 0 1.5-.672 1.5-1.5S10.328 11 9.5 11H9v2.5zm7.5 2H15V8.5h1.5c1.657 0 3 1.119 3 2.5s-1.343 2.5-3 2.5zm0-2h.5c.828 0 1.5-.672 1.5-1.5S17.828 11 17 11h-.5v2.5z"></path>
                        </svg>
                        PHP
                    </span>

                    <!-- JavaScript. -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900/90 border border-solid border-slate-800 text-xs font-semibold text-slate-200">
                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M3 3h18v18H3V3zm10.7 13.3c.4.7 1 1.2 1.9 1.2 1 0 1.6-.5 1.6-1.5v-5.2h1.9v5.2c0 1.9-1.2 2.9-3.2 2.9-1.8 0-2.8-1-3.2-2.1l1-.5zm-6 .1c.3.5.7.9 1.4.9.7 0 1.1-.3 1.1-.8 0-.5-.3-.7-1.3-1.1-.9-.4-2-.8-2-2.1 0-1.2 1-2.1 2.5-2.1 1.1 0 1.9.4 2.4 1.4l-1.2.8c-.2-.4-.5-.6-1.1-.6-.5 0-.9.3-.9.7 0 .4.3.6 1.1.9 1.2.5 2.1 1 2.1 2.2 0 1.5-1.2 2.2-2.7 2.2-1.5 0-2.5-.7-2.9-1.7l1.6-.7z"></path>
                        </svg>
                        JavaScript
                    </span>

                    <!-- Automação. -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900/90 border border-solid border-slate-800 text-xs font-semibold text-slate-200">
                        <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        Automação
                    </span>

                    <!-- HTML5. -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900/90 border border-solid border-slate-800 text-xs font-semibold text-slate-200">
                        <svg class="w-4 h-4 text-orange-500 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M3 1h18l-1.6 19-7.4 3-7.4-3L3 1z"></path>
                            <text x="12" y="17" text-anchor="middle" font-family="Arial, sans-serif" font-size="13" font-weight="700" fill="#070f26">5</text>
                        </svg>
                        HTML5
                    </span>

                    <!-- CSS3. -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900/90 border border-solid border-slate-800 text-xs font-semibold text-slate-200">
                        <svg class="w-4 h-4 text-blue-500 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M3 1h18l-1.6 19-7.4 3-7.4-3L3 1z"></path>
                            <text x="12" y="17" text-anchor="middle" font-family="Arial, sans-serif" font-size="13" font-weight="700" fill="#070f26">3</text>
                        </svg>
                        CSS3
                    </span>
                </div>

                <!-- Link para a página Sobre. -->
                <a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full border border-solid border-blue-500/40 bg-blue-600/10 hover:bg-blue-600 text-white text-sm font-semibold transition-all duration-300" href="<?php echo esc_url( 'https://michaeldev.com.br/sobre/' ); ?>">
                    <span>Saiba mais sobre mim</span>
                    <span class="text-sky-400 group-hover:text-white">→</span>
                </a>
            </div>
        </div>
    </div>
</section>
