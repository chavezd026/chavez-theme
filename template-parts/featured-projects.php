<section id="projects" class="py-10">

    <div class="container">

        <div class="max-w-[960px] mx-auto">

        <div class="flex items-center justify-between mb-16 ">

            <h2
                class="uppercase text-xl md:text-3xl font-semibold"
            >
                Featured Projects
            </h2>

            <a
                href="<?php echo get_post_type_archive_link('project'); ?>"
                class="bg-cyan-500/90 hover:bg-cyan-500/70 backdrop-blur-md text-white px-10 py-4 rounded-full transition-all duration-300"
            >
                All Projects
            </a>

        </div>

        <?php

        $projects = new WP_Query([
            'post_type'      => 'project',
            'posts_per_page' => 4,
            'meta_key'       => 'project_featured',
            'meta_value'     => 1
        ]);

        if ($projects->have_posts()) :

        ?>

            <div class="grid md:grid-cols-2 gap-8">

                <?php while ($projects->have_posts()) : $projects->the_post(); ?>

                    <article>

                        <a
                            href="<?php the_permalink(); ?>"
                            class="block group"
                        >

                            <div
                                class="relative overflow-hidden rounded-[30px] border-1 border-white/30"
                            >

                                <?php

                                $company_logo = get_field('company_logo');

                                if ($company_logo) :

                                ?>

                                <div
                                    class="absolute
                                        bottom-4
                                        right-6
                                        z-10
                                        w-10
                                        h-10
                                        bg-black/60
                                        backdrop-blur-md
                                        border
                                        border-white/10
                                        rounded-xl
                                        flex
                                        items-center"
                                >

                                    <img
                                        src="<?php echo esc_url($company_logo['url']); ?>"
                                        alt="<?php echo esc_attr($company_logo['alt']); ?>"
                                        class="w-full h-full object-cover rounded-lg"
                                    >

                                </div>

                                <?php endif; ?>

                                <?php the_post_thumbnail(
                                    'large',
                                    [
                                        'class' =>
                                        'w-full h-[250px] object-cover transition duration-700 group-hover:scale-105'
                                    ]
                                ); ?>

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/30 via-black/10 to-transparent"
                                ></div>

                                <div
                                    class="absolute bottom-4 left-6 z-10 text-white"
                                >

                                    <h3
                                        class="text-sm md:text-base lg:text-lg font-bold uppercase"
                                    >
                                        <?php the_title(); ?>
                                    </h3>

                                </div>

                            </div>

                        </a>

                        <?php

                        // Category
                        $categories = get_the_terms(
                            get_the_ID(),
                            'project_category'
                        );

                        // Tags
                        $tags = get_the_terms(
                            get_the_ID(),
                            'project_tag'
                        );

                        ?>

                        <div class="flex flex-wrap gap-3 mt-6">

                            <!-- First Category -->

                            <?php if ($categories && !is_wp_error($categories)) : ?>

                                <span
                                    class="bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 px-4 py-2 rounded-xl text-sm"
                                >
                                    <?php echo esc_html($categories[0]->name); ?>
                                </span>

                            <?php endif; ?>

                            <!-- First 3 Tags -->

                            <?php

                            if ($tags && !is_wp_error($tags)) :

                                $tags = array_slice($tags, 0, 3);

                                foreach ($tags as $tag) :

                            ?>

                                <span
                                    class="bg-white/10 text-white px-4 py-2 rounded-xl text-sm"
                                >
                                    <?php echo esc_html($tag->name); ?>
                                </span>

                            <?php

                                endforeach;

                            endif;

                            ?>

                        </div>

                        <!-- Description -->

                        <div
                            class="mt-5 text-white/80 text-xs md:text-sm lg:text-base leading-relaxed line-clamp-4"
                        >
                            <?php the_excerpt(); ?>
                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

        <?php

            wp_reset_postdata();

        endif;

        ?>

        </div>
    </div>

</section>