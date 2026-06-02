<footer id="contact" class="pt-24 md:pt-40 pb-12 overflow-hidden">

    <div class="container">

        <!-- Top Heading -->

        <div class="text-center">

            <div class="uppercase text-xl md:text-3xl font-semibold mb-4">

                <span>
                    READY TO
                </span>

                <span
                    id="resolver-word"
                    class="text-white inline-block text-left min-w-[180px]"
                >
                    WORK?
                </span>

            </div>

            <div class="relative">

                <!-- Desktop -->
                <h2 class="hidden md:block
                            contact-liquid
                            uppercase
                            font-humane
                            font-black
                            leading-none
                            text-[12rem]
                            lg:text-[16rem]
                            xl:text-[20rem]
                            bg-gradient-to-r
                            from-cyan-500
                            via-cyan-300
                            to-white
                            bg-clip-text
                            text-transparent"
                >
                    CONTACT ME
                </h2>

                <!-- Mobile -->
                <h2
                    class="block md:hidden
                           text-cyan-500
                           uppercase
                           font-black
                           leading-none
                           text-[5rem]"
                >
                    LET'S CHAT
                </h2>

                <!-- Contact Button -->

                <div
                    class="absolute
                           left-1/2
                           top-1/2
                           -translate-x-1/2
                           -translate-y-1/2
                           z-10"
                >

                    <a
                        href="mailto:pranavchavez@gmail.com"
                        class="magnetic-btn group flex items-center rounded-full border border-white/20 bg-black/90 backdrop-blur-md p-2"
                    >

                        <span
                            class="px-6 md:px-12
                                   py-3
                                   text-lg md:text-4xl"
                        >
                            CONTACT
                        </span>

                        <span
                            class="w-12 h-12
                                   md:w-20 md:h-20
                                   rounded-full
                                   bg-cyan-500
                                   flex items-center
                                   justify-center
                                   text-black
                                   text-2xl md:text-4xl
                                   transition-transform
                                   duration-300
                                   group-hover:rotate-45"
                        >
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

        <!-- Footer Menu -->

        <nav class="footer-menu mt-10">

            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'footer-menu-list',
                'fallback_cb'    => false,
            ]);
            ?>

        </nav>

        <!-- Divider -->

        <div class="border-t border-white/10 mt-12"></div>

        <!-- Content Row -->

        <div
            class="grid
                   md:grid-cols-2
                   gap-8
                   py-12"
        >

            <!-- Left -->

            <div>

                <p
                    class="text-white/70
                           uppercase
                           text-base
                           md:text-xl
                           max-w-xl"
                >
                    DCHAVEZ - Legacy, Built with Intent. Driven by creativity, shaped by purpose, crafting exceptional digital experiences.
                </p>

            </div>

            <!-- Right -->

            <div
                class="border-l
                       border-white/10 border-dashed
                       overflow-hidden"
            >

                <div class="email-marquee">

                    <span>
                        pranavchavez@gmail.com •
                        pranavchavez@gmail.com •
                        pranavchavez@gmail.com •
                        pranavchavez@gmail.com •
                        pranavchavez@gmail.com •
                        pranavchavez@gmail.com •
                        pranavchavez@gmail.com •
                        pranavchavez@gmail.com •
                    </span>

                </div>

            </div>

        </div>

        <!-- Divider -->

        <div class="border-t border-white/10"></div>

        <!-- Bottom Footer -->

        <div
            class="flex
                   flex-col
                   md:flex-row
                   items-center
                   justify-between
                   gap-6
                   pt-8"
        >

            <div class="social-menu">

                <?php
                wp_nav_menu([
                    'theme_location' => 'social',
                    'container'      => false,
                    'menu_class'     => 'social-menu-list',
                    'fallback_cb'    => false,
                ]);
                ?>

            </div>

            <p class="text-white/50">

                Crafted by

                <span class="text-cyan-500 font-semibold">
                    DCHAVEZ
                </span>

            </p>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>