<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-black text-white'); ?>>

<?php wp_body_open(); ?>

<header>
    <nav id="site-navbar" class="fixed top-0 left-0 right-0 z-50 w-full py-4 transition-all duration-300 bg-transparent">
        <div class="max-w-[1320px] mx-auto px-5">
            <div class="flex items-center justify-between">

                <!-- Logo -->
                <div class="flex items-center gap-4">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                       class="text-2xl font-semibold text-white hover:opacity-80 transition-opacity">
                        Chavez
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-7">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex items-center gap-7',
                        'fallback_cb' => false,
                        'items_wrap' => '%3$s',
                    ]);
                    ?>
                </div>

                <!-- CTA -->
                <div class="hidden md:flex items-center gap-2">
                    <a href="#contact"
                       class="cursor-pointer bg-white font-medium text-base overflow-hidden relative z-10 border border-black group px-7 py-3.5 rounded-xl">
                        <span class="relative z-10  group-hover:text-white duration-500">
                            Hire Me
                        </span>
                        <span class="absolute w-full h-full bg-green-500 -left-32 top-0 -rotate-45 group-hover:rotate-0 group-hover:left-0 duration-500"></span>
                        <span class="absolute w-full h-full bg-green-500 -right-32 top-0 -rotate-45 group-hover:rotate-0 group-hover:right-0 duration-500"></span>
                    </a>
                </div>

                <!-- Mobile Toggle -->
                <button id="mobile-menu-toggle"
                        class="md:hidden p-4 text-white hover:text-white/80 transition-colors"
                        aria-label="menu">
                    ☰
                </button>

            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
             class="md:hidden max-h-0 opacity-0 overflow-hidden transition-all duration-300">
            <div class="bg-black/95 backdrop-blur-lg border-t border-white/10 px-5 py-6 space-y-3">

                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'space-y-3',
                ]);
                ?>

                <a href="#contact"
                   class="block w-full text-center px-7 py-3.5 bg-white text-[#212121] font-medium rounded-xl mt-2">
                    Hire Me
                </a>

            </div>
        </div>
    </nav>
</header>