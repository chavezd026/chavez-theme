<?php get_header(); ?>

<main class="pt-40 pb-24">

    <div class="container">

        <div class="max-w-[1000px] mx-auto">

            <h1
                class="text-5xl md:text-7xl uppercase mb-6"
            >
                <?php the_title(); ?>
            </h1>

            <?php
            $client = get_field('project_client');
            $year   = get_field('project_year');
            ?>

            <div class="flex gap-6 text-white/60 mb-10">

                <?php if ($client) : ?>
                    <span><?php echo esc_html($client); ?></span>
                <?php endif; ?>

                <?php if ($year) : ?>
                    <span><?php echo esc_html($year); ?></span>
                <?php endif; ?>

            </div>

            <?php if (has_post_thumbnail()) : ?>

                <div class="mb-16">

                    <?php the_post_thumbnail(
                        'full',
                        [
                            'class' =>
                            'w-full rounded-[32px]'
                        ]
                    ); ?>

                </div>

            <?php endif; ?>

            <div
                class="prose prose-invert max-w-none"
            >
                <?php the_content(); ?>
            </div>

        </div>

    </div>

</main>

<?php get_footer(); ?>