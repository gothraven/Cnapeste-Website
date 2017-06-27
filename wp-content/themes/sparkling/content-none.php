<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */
?>

<section class="no-results not-found">
 <header class="page-header">
  <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'sparkling' ); ?></h1>
 </header><!-- .page-header -->

 <div class="page-content">
  <?php
  if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

   <p><?php printf( wp_kses( __( '؟ﻚﺗاﺭﻮﺸﻨﻣ ﻝﻭﺃ ﺮﺸﻨﻟ ﺰﻫﺎﺟ <a href="%1$s">ﺎﻨﻫ ﺃﺪﺑا</a>.', 'sparkling' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

  <?php elseif ( is_search() ) : ?>

   <p><?php esc_html_e( 'ﺔﻔﻠﺘﺨﻤﻟا ﺔﻴﺴﻴﺋﺮﻟا ﺕﺎﻤﻠﻜﻟا ﺾﻌﺑ ﻡاﺪﺨﺘﺳﺎﺑ ﺔﻟﻭﺎﺤﻤﻟا ﺓﺩﺎﻋﺇ ﻰﺟﺮﻳ .ﺚﺤﺒﻟا ﺕاﺭﺎﺒﻋ ﻖﺑﺎﻄﻳ ءﻲﺷ ﻻ ﻦﻜﻟﻭ ،اﺭﺬﻋ.', 'sparkling' ); ?></p>
   <?php
    get_search_form();
  else : ?>

   <p><?php esc_html_e( '؟ﺚﺤﺑﻟا ﺏﺮﺟ ﺎﻤﺑﺭ .ﻊﻗﻮﻤﻟا اﺬﻫ ﻲﻓ ءﻲﺷ ﻰﻠﻋ ﺭﻮﺜﻌﻟا ﻢﺘﻳ ﻢﻟ ﻪﻧﺃ ﻭﺪﺒﻳ', 'sparkling' ); ?></p>
   <?php
    get_search_form();
  endif; ?>
 </div><!-- .page-content -->
</section><!-- .no-results -->
