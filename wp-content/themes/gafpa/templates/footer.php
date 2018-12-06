<?php
   // MAP $pageID VARIABLE TO "Global Content" PAGE
   $pageID = icl_object_id(1763, 'page', false);

   // VARIABLES - GLOBAL CONTENT PAGE
   $org_name = get_field('footer_org_name', $pageID);
   $email_phone = get_field('footer_email_phone', $pageID);
   $address = get_field('footer_address', $pageID);
   $copyright = get_field('footer_copyright', $pageID);
   $slogan = get_field('footer_slogan', $pageID);
   $facebook = get_field('footer_facebook', $pageID);
   $twitter = get_field('footer_twitter', $pageID);
?>

<!-- subscribe button -->
<!--?php if(isset($isSubscribe)) : // TODO: check to see if it's the subscribe page? -->
   <section style="text-align: center; padding: 100px 0;">
      <a id="subscribe" style="text-transform: uppercase; color: white;" href="<?php echo get_site_url(); ?>/email-signup/">Subscribe</a>
			<?php gravity_form( 8, $display_title = false, $display_description = false ); ?>
   </section>
<!--?php endif; ?-->
<!-- /subscribe button -->

<footer class="container-fluid">

   <!--recent blog posts-->
   <section id="recent-blog-posts">
      <h2 style="padding-left: 6vw; font-weight: bold; text-transform: uppercase; color: white; padding-top: 100px; margin-bottom: 0;">From the Blog</h2>
   </section>

   <section class="home-block">
         <?php $recent_posts = new WP_Query('&&posts_per_page=3');
         while($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <section class="home-block-article">
               <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
               <a class="home-block-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               <a class="home-block-date" href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_time(get_option('date_format')); ?></a>
            </section>
         <?php endwhile;
         wp_reset_postdata();  ?>
   </section>
   <!--/recent blog posts-->

   <div class="container">
      <div class="row">
         <div class="col-lg-12 cta-wrapper">

            <?php if(get_field('footer_cta_heading', $pageID)) { ?>
               <p class="cta-heading"><?php the_field('footer_cta_heading', $pageID); ?></p>
            <?php } ?>

            <?php $button = get_field('footer_cta_button', $pageID); ?>
            <?php if(get_field('footer_cta_button', $pageID)) : ?>
               <div class="cta btn-wrapper">
                  <a href="<?php echo $button['url']; ?>" class="btn gradient btn-default" <?php echo $button['target']; ?>><?php echo $button['text']; ?></a>
               </div>
            <?php endif; ?>
         </div>
      </div>

      <div class="row footer-middle">

         <div class="col-md-4 col-sm-12 footer-info">
            <a class="twitter" href="<?= $twitter ?>" target="_blank"></a>
            <a class="facebook" href="<?= $facebook ?>" target="_blank"></a>
            <?php if($org_name) { ?>
               <h3><?php echo $org_name; ?></h3>
            <?php } ?>
            <div class="contact-info">
               <?php if($email_phone) { ?>
                  <?php echo $email_phone; ?>
               <?php } ?>
            </div>

         </div>

         <div class="footer-nav-wrapper">
            <div class="col-md-2 col-sm-3 column">
               <?php
               if( have_rows('footer_nav_column_01', $pageID) ):
                  while ( have_rows('footer_nav_column_01', $pageID) ) : the_row(); ?>
                  <?php
                     // GET PAGE TYPE AND SET TO VARIABLE
                     if(get_sub_field('page_type', $pageID) == 'landing_page'):
                        $page_type = 'landing-page';
                     elseif(get_sub_field('page_type', $pageID) == 'sub_page'):
                        $page_type = 'sub-page';
                     endif;
                   ?>
                  <div class="<?php echo($page_type) ?>">
                     <?php $button = get_sub_field('page_link', $pageID); ?>
                     <?php if(get_sub_field('page_link', $pageID)) : ?>
                           <a href="<?php echo $button['url']; ?>" <?php echo $button['target']; ?>><?php echo $button['text']; ?></a>
                     <?php endif; ?>
                  </div>
                  <?php
                  endwhile;
               endif;
               ?>
            </div>
            <div class="col-md-2 col-sm-3 column">
               <?php
               if( have_rows('footer_nav_column_02', $pageID) ):
                  while ( have_rows('footer_nav_column_02', $pageID) ) : the_row(); ?>
                  <?php
                     // GET PAGE TYPE AND SET TO VARIABLE
                     if(get_sub_field('page_type', $pageID) == 'landing_page'):
                        $page_type = 'landing-page';
                     elseif(get_sub_field('page_type', $pageID) == 'sub_page'):
                        $page_type = 'sub-page';
                     endif;
                   ?>
                  <div class="<?php echo($page_type) ?>">
                     <?php $button = get_sub_field('page_link', $pageID); ?>
                     <?php if(get_sub_field('page_link', $pageID)) : ?>
                           <a href="<?php echo $button['url']; ?>" <?php echo $button['target']; ?>><?php echo $button['text']; ?></a>
                     <?php endif; ?>
                  </div>
                  <?php
                  endwhile;
               endif;
               ?>
            </div>
            <div class="col-md-2 col-sm-3 column">
               <?php
               if( have_rows('footer_nav_column_03', $pageID) ):
                  while ( have_rows('footer_nav_column_03', $pageID) ) : the_row(); ?>
                  <?php
                     // GET PAGE TYPE AND SET TO VARIABLE
                     if(get_sub_field('page_type', $pageID) == 'landing_page'):
                        $page_type = 'landing-page';
                     elseif(get_sub_field('page_type', $pageID) == 'sub_page'):
                        $page_type = 'sub-page';
                     endif;
                   ?>
                  <div class="<?php echo($page_type) ?>">
                     <?php $button = get_sub_field('page_link', $pageID); ?>
                     <?php if(get_sub_field('page_link', $pageID)) : ?>
                           <a href="<?php echo $button['url']; ?>" <?php echo $button['target']; ?>><?php echo $button['text']; ?></a>
                     <?php endif; ?>
                  </div>
                  <?php
                  endwhile;   
               endif;
               ?>              
            </div>
            <div class="col-md-2 col-sm-3 column">
               <?php
               if( have_rows('footer_nav_column_04', $pageID) ):
                  while ( have_rows('footer_nav_column_04', $pageID) ) : the_row(); ?>
                  <?php
                     // GET PAGE TYPE AND SET TO VARIABLE
                     if(get_sub_field('page_type', $pageID) == 'landing_page'):
                        $page_type = 'landing-page';
                     elseif(get_sub_field('page_type', $pageID) == 'sub_page'):
                        $page_type = 'sub-page';
                     endif;
                   ?>
                  <div class="<?php echo($page_type) ?>">
                     <?php $button = get_sub_field('page_link', $pageID); ?>
                     <?php if(get_sub_field('page_link', $pageID)) : ?>
                           <a href="<?php echo $button['url']; ?>" <?php echo $button['target']; ?>><?php echo $button['text']; ?></a>
                     <?php endif; ?>
                  </div>
                  <?php
                  endwhile;
               endif;
               ?>

               <!-- footer widget -->
               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
               <?php endif;?>
               <!-- /footer widget --> 
               
            </div>
         </div>
      </div>

      <div class="row footer-bottom">

         <div class="col-sm-6 copyright">
            <?php if($copyright) : ?>
               <p>&copy; <?php echo date('Y')?> <?php echo $copyright ?>. All Rights Reserved. | <a href="http://avinerenberg.com" target="_blank">Theme by Avi Nerenberg.</a></p>
            <?php endif; ?>
         </div>
         <div class="col-sm-6 slogan">
            <?php if($slogan) { ?>
               <p><?php echo $slogan; ?></p>
            <?php } ?>
         </div>

      </div>

   </div>

</footer>
