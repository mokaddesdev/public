<?php
/**
 * Default fallback template
 * 
 * @package smokewings
 */

get_header();
?>

<main class="max-w-7xl mx-auto px-4 py-12">

    <?php if ( have_posts() ) : ?>

        <!-- Normal content (pages/posts if exist) -->
        <div class="space-y-8">

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition">

                    <h1 class="text-2xl font-bold text-gray-900 mb-3">
                        <?php the_title(); ?>
                    </h1>

                    <div class="text-gray-700">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>

        </div>

    <?php else : ?>

        <!-- 🔥 DEFAULT FALLBACK MESSAGE -->
        <div class="text-center py-20">

            <div class="text-6xl mb-4">😕</div>

            <h2 class="text-3xl font-bold text-gray-900 mb-2">
                No Content Found
            </h2>

            <p class="text-gray-600 mb-6">
                Sorry! The page or content you are looking for does not exist.
            </p>

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
               class="inline-block bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition">
                Go Back Home
            </a>

            <!-- Search -->
            <div class="mt-6 max-w-md mx-auto">
                <?php get_search_form(); ?>
            </div>

        </div>

    <?php endif; ?>

</main>

<?php
get_footer();