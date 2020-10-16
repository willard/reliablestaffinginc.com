<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="w-full mx-auto">
    <header class="text-gray-700 body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg> -->
          <img src="<?php echo get_stylesheet_directory_uri() .'/logo.png' ?>" class="w-12 block my-1"/>
          <span class="ml-3 text-xl">Reliable Staffing Inc.</span>
        </a>
        <?php $menu_location = 'header-menu'; ?>

        
        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
          <?php if ( has_nav_menu( $menu_location ) ): ?>

            <?php $menu_items = wp_get_nav_menu_items( wp_get_nav_menu_name( $menu_location ) ); ?>

            <?php foreach ( $menu_items as $menu_item ): ?>

                <a href="<?= esc_url( $menu_item->url ) ?>"
                  target="<?= esc_attr( $menu_item->target ?: '_self' ) ?>"
                  class="mr-5 hover:text-gray-900 <?= esc_attr( implode( ' ', $menu_item->classes ) ) ?>">
                  <?= esc_html( $menu_item->title ) ?>
                </a>

            <?php endforeach; ?>

          <?php endif; ?>
        </nav>
        <a href="/jobs" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Jobs
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </header>

