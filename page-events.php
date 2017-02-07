<?php 
get_template_part('templates/page', 'header'); 
while (have_posts()) : the_post(); 
	the_content(); 
endwhile; 

// Set up past events pagination.
$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
$events_per_page = 10;
$offset = ($paged-2) * $events_per_page;

if ( $paged == 1 ) {

	?><h2>Upcoming Events</h2><?php

	// Show ALL Upcoming Events
	$event_args = array(
		'posts_per_page'	=> -1,
		'offset'   			=> 0,
		'orderby'			=> 'date',
		'order'				=> 'DESC',
		'post_type'			=> 'events',
		'post_status'		=> 'publish',
		'meta_key'			=> 'past',
		'meta_value'		=> 'No',
	);
	$events_query = new WP_Query( $event_args );

	if ( $events_query->have_posts() ) {
		while ( $events_query->have_posts() ) { 
			$events_query->the_post();
			get_template_part('templates/content', 'events'); 
		} 
		wp_reset_postdata();
	} else {
		?><div class="alert alert-warning">No Upcoming Events Found</div><?php 
	}
}
	
// Get Past Events (Needed for pagination)
$past_args = array(
	'posts_per_page'	=> $events_per_page,
	'offset'			=> $offset,
	'orderby'			=> 'date',
	'order'				=> 'DESC',
	'post_type'			=> 'events',
	'post_status'		=> 'publish',
	'meta_key'			=> 'Past',
	'meta_value'		=> 'Yes',
	'meta_compare'		=> 'LIKE',
);
$past_query = new WP_Query( $past_args );

if ( $paged > 1 ) {

	?><h2>Past Events</h2><?php
	if ( $past_query->have_posts() ) {
		while ( $past_query->have_posts() ) { 
			$past_query->the_post();
			get_template_part('templates/content', 'events'); 
		} 
	} else {
		?><div class="alert alert-warning">No Past Events Found</div><?php 
	}
	wp_reset_postdata();
}

// Show Events Pagination
$prev_link = ( ( $paged >= 1) & ( $past_query->max_num_pages ) ) ? add_query_arg( 'page', $paged+1, get_permalink() ) : "" ;
$next_link = ( ( $paged >  1 ) && ( $paged <= $past_query->max_num_pages ) ) ? add_query_arg( 'page', $paged-1, get_permalink() ) : "" ; 

$prev_text = ( ( $paged == 1 ) ? 
		"View Past Events" : 
		( ( $paged <= $past_query->max_num_pages ) ?
			"View Older Events" :
			"" )
	);
$next_text = ( ( $paged == 1 ) ? 
		"" :
		( ( $paged == 2 ) ? 
			"View Upcoming Events" : 
			"View Recent Events" )
	);
?>
<nav class="post-nav">
	<ul class="pager">
		<?php if ( !empty($prev_text) ) : ?><li class="previous"><a href="<?php echo $prev_link; ?>"><?php echo $prev_text; ?></a></li><?php endif; ?>
		<?php if ( !empty($next_text) ) : ?><li class="next"><a href="<?php echo $next_link; ?>"><?php echo $next_text; ?></a></li><?php endif; ?>
	</ul>
</nav>
