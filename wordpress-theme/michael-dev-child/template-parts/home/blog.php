<?php
/**
 * Artigos recentes da página inicial.
 *
 * @package MichaelDevChild
 */

$blog_query = new WP_Query(
    array(
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => 3,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    )
);

$blog_items = array();

if ( $blog_query->have_posts() ) {
    while ( $blog_query->have_posts() ) {
        $blog_query->the_post();

        $post_categories = get_the_category();
        $post_thumbnail  = get_the_post_thumbnail_url( get_the_ID(), 'large' );

        $blog_items[] = array(
            'category' => ! empty( $post_categories ) ? $post_categories[0]->name : '',
            'title'    => get_the_title(),
            'url'      => get_permalink(),
            'excerpt'  => wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 24, '…' ),
            'date'     => get_the_date( 'j M, Y' ),
            'image'    => $post_thumbnail ? $post_thumbnail : '',
        );
    }
}

wp_reset_postdata();

if ( empty( $blog_items ) ) {
    /* Demonstração temporária para o WordPress de desenvolvimento; revisar antes da publicação definitiva. */
    $blog_items = array(
        array(
            'category' => 'Criação de Sites',
            'title'    => 'Como criar um site profissional: guia simples para iniciantes',
            'url'      => 'https://michaeldev.com.br/como-criar-um-site-profissional/',
            'excerpt'  => 'Um guia sobre objetivos do site, organização de conteúdo, experiência em dispositivos móveis e os pontos técnicos básicos para começar.',
            'date'     => '',
            'image'    => get_stylesheet_directory_uri() . '/assets/images/como-criar-um-site-profissional-para-uma-empresa-michael-dev.webp',
        ),
        array(
            'category' => 'Automação e IA',
            'title'    => 'IA no negócio: vale a pena usar em 2026?',
            'url'      => 'https://michaeldev.com.br/vale-a-pena-usar-ia-no-negocio/',
            'excerpt'  => 'O artigo aborda usos de IA para automatizar tarefas, apoiar a criação de conteúdo e organizar processos, além de aplicar a tecnologia com critério.',
            'date'     => '',
            'image'    => get_stylesheet_directory_uri() . '/assets/images/Empresario-usando-notebook-com-interface-de-IA-na-tela-michael-dev.webp',
        ),
        array(
            'category' => 'Ferramentas e Tecnologia',
            'title'    => 'Setup ideal para desenvolvedor iniciante em 2026',
            'url'      => 'https://michaeldev.com.br/setup-ideal-desenvolvedor-iniciante/',
            'excerpt'  => 'Artigo sobre um setup ideal para quem está começando no desenvolvimento em 2026.',
            'date'     => '',
            'image'    => get_stylesheet_directory_uri() . '/assets/images/Mesa-simples-com-notebook-e-ambiente-limpo-michael-dev-.webp',
        ),
    );
}
?>

<!-- Blog e conteúdo recente. -->
<section class="py-24 bg-slate-50 border-0 border-b border-solid border-slate-200/80 font-sans" data-purpose="blog-section" id="blog">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Introdução e link para o blog completo. -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div class="max-w-2xl">
                <span class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-semibold bg-sky-100 text-sky-700 mb-3">
                    Blog &amp; Conteúdo
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight mb-3">
                    Conteúdo para te ajudar a crescer
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Dicas, tutoriais e estratégias sobre sites, tecnologia, automação, IA e muito mais. Tudo para você e seu negócio estarem sempre à frente.
                </p>
            </div>
            <div class="mt-6 md:mt-0">
                <a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-solid border-blue-600 text-blue-600 hover:bg-blue-50 text-sm font-medium transition-all group" href="<?php echo esc_url( 'https://michaeldev.com.br/blog/' ); ?>">
                    <span>Ver todos os artigos</span>
                    <span class="text-blue-600 transition-transform group-hover:translate-x-1">→</span>
                </a>
            </div>
        </div>

        <!-- Cards dinâmicos ou demonstração temporária, sem misturar as fontes. -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ( $blog_items as $blog_item ) : ?>
                <article class="bg-white rounded-2xl border border-solid border-slate-200 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                    <div class="aspect-video bg-slate-200 overflow-hidden relative">
                        <?php if ( ! empty( $blog_item['image'] ) ) : ?>
                            <img
                                alt="<?php echo esc_attr( $blog_item['title'] ); ?>"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                                src="<?php echo esc_url( $blog_item['image'] ); ?>"
                            />
                        <?php endif; ?>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <?php if ( ! empty( $blog_item['category'] ) ) : ?>
                                <span class="inline-block px-2.5 py-1 rounded bg-blue-50 text-blue-700 text-[11px] font-semibold mb-3">
                                    <?php echo esc_html( $blog_item['category'] ); ?>
                                </span>
                            <?php endif; ?>
                            <h3 class="text-base font-bold text-slate-900 leading-snug mb-2 hover:text-blue-600 transition-colors">
                                <a href="<?php echo esc_url( $blog_item['url'] ); ?>"><?php echo esc_html( $blog_item['title'] ); ?></a>
                            </h3>
                            <?php if ( ! empty( $blog_item['date'] ) ) : ?>
                                <p class="text-slate-400 text-xs mb-2"><?php echo esc_html( $blog_item['date'] ); ?></p>
                            <?php endif; ?>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6">
                                <?php echo esc_html( $blog_item['excerpt'] ); ?>
                            </p>
                        </div>
                        <a class="text-blue-600 font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all" href="<?php echo esc_url( $blog_item['url'] ); ?>">
                            Ler artigo <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
