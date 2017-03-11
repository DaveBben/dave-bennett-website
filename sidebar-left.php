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
      
        <img src="http://davebennett.tech/bio-photo.jpg" class="author__avatar" alt="Dave Bennett" itemprop="image">
      
    </div>
  

  <div class="author__content">
    <h3 class="author__name" itemprop="name">Dave Bennett</h3>
    
      <p class="author__bio" itemprop="description">
        I love technology and software development. I also make YouTube Videos.
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
      

      

      

      

      

      

    
      

      

      

      

      

      <!--
  <li>
    <a href="http://link-to-whatever-social-network.com/user/" itemprop="sameAs">
      <i class="fa fa-fw" aria-hidden="true"></i> Custom Social Profile Link
    </a>
  </li>
-->
    </ul>
  </div>
</div>


  
    
      
      <h3></h3><h3 class="twitter-text">Follow Me</h3>
      <div class="twitter_widget"><a class="twitter-timeline" data-height="700" data-chrome="noscrollbar" href="https://twitter.com/DaveBben">Tweets by DaveBben</a></div>

    
    
  
  </div>

  






  <!--Small Sidebar-->
  	<div class="sidebar-small">
		  
	 
    <div class="author__avatar">
      
        <img src="http://davebennett.tech/bio-photo.jpg" class="author__avatar" alt="Dave Bennett" itemprop="image">
      
    </div>
  

  <div class="author__content-small">
    <h3 class="author__name" itemprop="name">Dave Bennett</h3>
    
      <p class="author__bio" itemprop="description">
        I love technology and software development. I also make YouTube Videos.
      </p>
    
  </div>

  <div class="author__urls-wrapper">
   

  </div>
   <button class="btn btn--inverse" data-toggle="modal" data-target="#myModal">Follow</button>
<hr>
 </div>




</div><!-- #secondary -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Follow Me</h4>
      </div>
      <div class="modal-body">
       
 
    <ul class="modal-social">
    
  
    <div class="author__avatar">
      
        <img src="http://davebennett.tech/bio-photo.jpg" class="author__avatar" alt="Dave Bennett" itemprop="image">
      
    </div>
  

  <div class="author__content">
    <h3 class="author__name" itemprop="name">Dave Bennett</h3>
    
      <p class="author__bio" itemprop="description">
        I love technology and software development. I also make YouTube Videos.
      </p>
    
  </div>
      <ul id="list-left">
          
        
          <li>
            <a href="https://www.youtube.com/user/Opensourcegangster" itemprop="sameAs">
              <i class="fa fa-3x fa-fw fa-youtube-square" aria-hidden="true"></i> YouTube
            </a>
          </li>
        
      
      

      

    

      

      
        <li>
          <a href="https://twitter.com/DaveBben" itemprop="sameAs">
            <i class="fa fa-3x fa-fw fa-twitter-square" aria-hidden="true"></i> Twitter
          </a>
        </li>
      

      
        <li>
          <a href="https://www.facebook.com/davebennetttech" itemprop="sameAs">
            <i class="fa fa-3x fa-fw fa-facebook-square" aria-hidden="true"></i> Facebook
          </a>
        </li>
      

      
        <li>
          <a href="https://plus.google.com/+DaveBennettTech" itemprop="sameAs">
            <i class="fa fa-3x fa-fw fa-google-plus-square" aria-hidden="true"></i> Google+
          </a>
        </li>
      
      </ul>
      <ul id="list-right">
      

      

      
        <li>
          <a href="https://instagram.com/DaveBben" itemprop="sameAs">
            <i class="fa fa-3x fa-fw fa-instagram" aria-hidden="true"></i> Instagram
          </a>
        </li>
      

      

      

      
        <li>
          <a href="https://github.com/DaveBben" itemprop="sameAs">
            <i class="fa fa-3x fa-fw fa-github" aria-hidden="true"></i> GitHub
          </a>
        </li>
      

      

      

      

      

      

      

    

      

      

      

      

      

      
      
      <!--
  <li>
    <a href="http://link-to-whatever-social-network.com/user/" itemprop="sameAs">
      <i class="fa fa-fw" aria-hidden="true"></i> Custom Social Profile Link
    </a>
  </li>
-->
      </ul>
         

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn--inverse" data-dismiss="modal">Close</button>
      </div>
    </div>


  </div>
</div>
