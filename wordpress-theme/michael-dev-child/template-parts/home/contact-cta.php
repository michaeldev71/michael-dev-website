<?php
/**
 * Chamada final para contato na página inicial.
 *
 * @package MichaelDevChild
 */
?>

<!-- Banner final de contato. -->
<section class="py-20 bg-slate-900 relative overflow-hidden font-sans" data-purpose="final-cta-section" id="contato">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="cta-banner-pattern rounded-3xl p-8 sm:p-14 border border-solid border-blue-900/60 shadow-2xl relative overflow-hidden flex flex-col lg:flex-row items-center justify-between gap-10">
            <!-- Curvas decorativas de fundo. -->
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <svg class="w-full h-full" fill="none" viewbox="0 0 800 400" aria-hidden="true">
                    <path d="M0,200 C300,100 500,300 800,200" stroke="#38bdf8" stroke-width="2"></path>
                    <path d="M0,240 C300,140 500,340 800,240" stroke="#2563eb" stroke-width="2"></path>
                    <path d="M0,280 C300,180 500,380 800,280" stroke="#1d4ed8" stroke-width="2"></path>
                </svg>
            </div>

            <!-- Texto de chamada. -->
            <div class="max-w-xl z-10">
                <span class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-semibold bg-sky-500/10 border border-solid border-sky-400/20 text-sky-300 mb-4">
                    Vamos conversar?
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight mb-4">
                    Seu próximo cliente pode estar procurando por você agora.
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Tenha um site profissional, aumente sua visibilidade e facilite o contato com seus clientes. Vamos conversar sobre o que o seu negócio precisa.
                </p>
            </div>

            <!-- Opções de contato. -->
            <div class="flex flex-col sm:flex-row lg:flex-col gap-4 w-full sm:w-auto z-10 shrink-0">
                <a
                    class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-blue-600 hover:bg-blue-500 text-white font-semibold text-sm transition-all shadow-lg shadow-blue-600/40"
                    href="<?php echo esc_url( 'https://wa.me/5511940689664?text=Ol%C3%A1%2C%20vim%20do%20site%20e%20desejo%20saber%20mais%20sobre%20seus%20servi%C3%A7os' ); ?>"
                    rel="noopener noreferrer"
                    target="_blank"
                >
                    <svg class="w-4 h-4 fill-current" viewbox="0 0 24 24" aria-hidden="true">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path>
                    </svg>
                    <span>Falar no WhatsApp</span>
                </a>
                <a
                    class="inline-flex items-center justify-center px-8 py-3.5 rounded-full border border-solid border-slate-700 bg-slate-900/60 hover:bg-slate-800 text-slate-200 font-semibold text-sm transition-all"
                    href="<?php echo esc_url( 'mailto:contato@michaeldev.com.br' ); ?>"
                >
                    <span>Solicitar orçamento</span>
                </a>
            </div>
        </div>
    </div>
</section>
