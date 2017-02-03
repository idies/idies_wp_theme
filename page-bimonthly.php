<?php get_template_part('templates/page', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
<?php endwhile; ?>
<?php
$args = array(
	'posts_per_page'   => -1,
	'offset'   => 0,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'events',
	'post_status'      => 'publish',
	'meta_key'         => 'bi-monthly',
	'meta_value'       => 'Yes',
	'meta_compare'     => 'LIKE',
);
$posts_array = get_posts( $args );
$upcoming = array();
$past = array();
$today = new DateTime();
?>
<?php foreach ( $posts_array as $post ) : 
	setup_postdata( $post ); 	
	//it's ok not to have a date, but if it has a date that is past, skip it an show it under Past Events.
	$multiday = ( strcmp( "Yes" , get_cfc_field( 'events-details' , 'multi-day-event' ) ) === 0 ) ;
	$start_date = new DateTime( get_cfc_field( 'events-details' , 'event-date' ) );
	$end_date = new DateTime( get_cfc_field( 'events-details' , 'event-end-date' ) );
	if ( ( $multiday && ( $end_date >= $today ) ) ||  ( $start_date >= $today ) ) {
		array_push( $upcoming , $post );
	} else {
		array_push( $past , $post );
	}
endforeach; 
if ( count( $upcoming ) ) : 
	?><h2>Upcoming IDIES Bi-Monthly Seminars</h2><?php 
	foreach ( $upcoming as $post ) : 
		setup_postdata( $post );
		get_template_part('templates/content', 'genomics'); 
	endforeach;
else : 
	?><div class="alert alert-warning">No upcoming IDIES Bi-Monthly Seminars found.</div><?php 
endif;
if ( count( $past ) ) : 
	?><h2>Past IDIES Bi-Monthly Seminars</h2><?php 
	foreach ( $past as $post ) : 
		setup_postdata( $post );
		get_template_part('templates/content', 'genomics'); 
	endforeach;
else : 
	?><div class="alert alert-warning">No past IDIES Bi-Monthly Seminars found.</div><?php 
endif;

