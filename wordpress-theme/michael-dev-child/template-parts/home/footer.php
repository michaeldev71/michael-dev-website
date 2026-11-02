<?php
/**
 * Rodapé personalizado da página inicial.
 *
 * @package MichaelDevChild
 */
?>

<!-- Footer personalizado da Home. -->
<footer class="bg-[#050a18] text-slate-400 text-sm border-t border-solid border-slate-800 font-sans" data-purpose="site-footer">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
        <!-- Marca, navegação e redes sociais. -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-8 pb-12 border-0 border-b border-solid border-slate-800/80">
            <!-- Logo e frase institucional. -->
            <div class="flex flex-col">
                <a class="flex items-center gap-3 mb-2" data-purpose="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-blue-600 to-sky-400 flex items-center justify-center p-0.5">
                        <div class="w-full h-full bg-[#050a18] rounded-[6px] flex items-center justify-center">
                            <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" viewbox="0 0 24 24" aria-hidden="true">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center font-extrabold tracking-wider text-lg text-white">
                        <span>MICHAEL</span>
                        <span class="text-blue-500 ml-1">DEV</span>
                    </div>
                </a>
                <p class="text-xs text-slate-400 font-medium">
                    Tecnologia, sites e automação para negócios.
                </p>
            </div>

            <!-- Navegação pelas seções da Home. -->
            <nav aria-label="Links do Rodapé" class="flex flex-wrap gap-6 text-xs sm:text-sm font-medium text-slate-300">
                <a class="text-slate-300 hover:text-white transition-colors" href="#inicio">Início</a>
                <a class="text-slate-300 hover:text-white transition-colors" href="#servicos">Serviços</a>
                <a class="text-slate-300 hover:text-white transition-colors" href="#portfolio">Portfólio</a>
                <a class="text-slate-300 hover:text-white transition-colors" href="#blog">Blog</a>
                <a class="text-slate-300 hover:text-white transition-colors" href="#sobre">Sobre</a>
                <a class="text-slate-300 hover:text-white transition-colors" href="#contato">Contato</a>
            </nav>

            <!-- Redes sociais com endereços confirmados. -->
            <div class="flex flex-col md:items-end">
                <span class="text-xs font-semibold text-slate-300 mb-3">Redes sociais</span>
                <div class="flex items-center gap-4 text-slate-400">
                    <!-- Instagram. -->
                    <a class="text-slate-400 hover:text-white transition-colors" href="https://www.instagram.com/michaelweb.dev/" rel="noopener noreferrer" target="_blank" title="Instagram" aria-label="Instagram">
                        <svg class="w-4 h-4 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                        </svg>
                    </a>

                    <!-- LinkedIn. -->
                    <a class="text-slate-400 hover:text-white transition-colors" href="https://www.linkedin.com/in/michaeljonathanoliveira/" rel="noopener noreferrer" target="_blank" title="LinkedIn" aria-label="LinkedIn">
                        <svg class="w-4 h-4 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                        </svg>
                    </a>

                    <!-- GitHub. -->
                    <a class="text-slate-400 hover:text-white transition-colors" href="https://github.com/michaeldev71" rel="noopener noreferrer" target="_blank" title="GitHub" aria-label="GitHub">
                        <svg class="w-4 h-4 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright e informações legais. -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-4">
            <p class="text-slate-400">© <?php echo esc_html( wp_date( 'Y' ) ); ?> Michael DEV. Todos os direitos reservados.</p>
            <div class="flex items-center gap-2">
                <span class="text-slate-400">Política de Privacidade</span>
                <span aria-hidden="true">|</span>
                <span class="text-slate-400">Termos de Uso</span>
            </div>
        </div>
    </div>
</footer>
