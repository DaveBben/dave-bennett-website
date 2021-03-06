<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>


<!--Defers YouTube Videos-->
<script>
function init() {
var vidDefer = document.getElementsByTagName('iframe');
for (var i=0; i<vidDefer.length; i++) {
if(vidDefer[i].getAttribute('data-src')) {
vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>



<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!--Defer Ads, Bootsrap and Twitter-->
<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
// var element2 = document.createElement("script");
element.src = "<?php echo get_template_directory_uri(); ?>/js/defer-ads.js";
// element2.src ="https://platform.twitter.com/widgets.js";
document.body.appendChild(element);
// document.body.appendChild(element2);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>

<!--Defer-->

</html>

