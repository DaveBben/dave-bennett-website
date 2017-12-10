<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'left-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="left-sidebar" role="complementary">
	<?php else : ?>
<div class="col-md-3 widget-area" id="left-sidebar" role="complementary">
	<?php endif; ?>
<?php dynamic_sidebar( 'left-sidebar' ); ?>



<div class="sidebar-large">
  

<div itemscope="" itemtype="http://schema.org/Person">

  
    <div class="author__avatar">
      
        <img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" class="author__avatar rounded-circle" alt="Dave Bennett" itemprop="image">
      
    </div>
  

  <div class="author__content">
    <h3 class="author__name" itemprop="name">Dave Bennett</h3>
    
      <p class="author__bio" itemprop="description">
       Web Developer and YouTuber
      </p>
    
  </div>
  <div class="author__urls-wrapper">
   
    <ul class="author__urls social-icons">
          <li>
            <a href="https://www.youtube.com/user/Opensourcegangster" itemprop="sameAs">
              <i class="fa fa-fw fa-youtube-square" aria-hidden="true"></i> YouTube
            </a>
          </li>

        <li>
          <a href="https://twitter.com/DaveBben" itemprop="sameAs">
            <i class="fa fa-fw fa-twitter-square" aria-hidden="true"></i> Twitter
          </a>
        </li>
    
        <li>
          <a href="https://www.facebook.com/davebennetttech" itemprop="sameAs">
            <i class="fa fa-fw fa-facebook-square" aria-hidden="true"></i> Facebook
          </a>
        </li>
      
      
        <li>
          <a href="https://plus.google.com/+DaveBennettTech" itemprop="sameAs">
            <i class="fa fa-fw fa-google-plus-square" aria-hidden="true"></i> Google+
          </a>
        </li>
      
        <li>
          <a href="https://instagram.com/DaveBben" itemprop="sameAs">
            <i class="fa fa-fw fa-instagram" aria-hidden="true"></i> Instagram
          </a>
        </li>
      
        <li>
          <a href="https://github.com/DaveBben" itemprop="sameAs">
            <i class="fa fa-fw fa-github" aria-hidden="true"></i> GitHub
          </a>
        </li>

        <li>
          <a href="https://play.google.com/store/apps/developer?id=Dave%20Bennett&hl=en" itemprop="sameAs">
            <i class="fa fa-fw fa-android" aria-hidden="true"></i> Android Apps
          </a>
        </li>
    </ul>
  </div>
</div>


  </div>
  </div>

  




