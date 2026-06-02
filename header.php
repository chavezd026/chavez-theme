<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-black text-white'); ?>>

<?php wp_body_open(); ?>

<canvas
    id="canvas"
    class="fixed inset-0 pointer-events-none z-[9999]"
></canvas>

<header class="header-reveal fixed top-6 left-0 w-full z-50">

    <div class="container">

        <!-- MOBILE + TABLET -->
        <div class="xl:hidden">

            <div class="bg-black/80 backdrop-blur-xl border border-white/10 rounded-full px-6 py-4">

                <div class="flex items-center justify-between">

                    <!-- Logo -->
                    <a
                        href="<?php echo esc_url(home_url('/')); ?>"
                        class="font-qurova text-3xl text-white"
                    >
                        dchavez
                    </a>

                    <!-- Toggle -->
                    <button
                        id="menu-toggle"
                        class="text-white"
                        aria-label="Toggle Menu"
                    >
                        <svg
                            id="hamburger-icon"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>

                </div>

            </div>

            <!-- Mobile Menu -->
            <div
                id="mobile-menu"
                class="hidden mt-4 bg-black/95 backdrop-blur-xl border border-white/10 rounded-3xl p-6"
            >

                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'mobile-menu-list',
                    'fallback_cb'    => false,
                ]);
                ?>

                <a
                    href="#contact"
                    class="block text-center mt-6 bg-cyan-700 hover:bg-cyan-600 text-white py-4 rounded-full transition-all duration-300"
                >
                    Hire Me
                </a>

            </div>

        </div>

        <!-- DESKTOP -->
        <div class="hidden xl:grid xl:grid-cols-[1fr_auto_1fr] items-center">

            <!-- Logo -->
            <div class="justify-self-start">

                <a
                    href="<?php echo esc_url(home_url('/')); ?>"
                    class="liquid-text text-4xl font-[Qurova] font-semibold tracking-wide bg-gradient-to-r from-cyan-500 via-cyan-300 to-white bg-clip-text text-transparent"
                >
                    DCHAVEZ
                </a>

            </div>

            <!-- Center Menu Pill -->
            <div class="justify-self-center">

                <div class="border-2 border-white/20 bg-white/05 rounded-full px-5 backdrop-blur-[10px] flex flex-row min-h-12">

                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'desktop-menu',
                        'fallback_cb'    => false,
                    ]);
                    ?>

                </div>

            </div>

            <!-- CTA -->
            <div class="justify-self-end">

                <a
                    href="#contact"
                    class="bg-cyan-500/90 hover:bg-cyan-500/70 backdrop-blur-md text-white px-10 py-4 rounded-full transition-all duration-300"
                >
                    Hire Me
                </a>

            </div>

        </div>

    </div>

</header>