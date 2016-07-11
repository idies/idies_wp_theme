<?php
/* 
 * Show archive of symposium presentations. 
 */ 
?>
<?php //Get Query vars from URL 
$sympYear = get_query_var( 'idies-year' , 2016 );
$sympType = get_query_var( 'idies-type' , 'agenda' );
?>
<?php while (have_posts()) : the_post(); ?>
<header>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</header>
	<?php the_excerpt(); ?>
	
	<?php //Show the posts of this year 
	if ( !check_wck() ) {
		return;
	}
	?>

<?php endwhile; ?>
