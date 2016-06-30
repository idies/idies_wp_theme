<div class="well">
<article <?php post_class(); ?>>
  <header>
    <h3 class="entry-title"><?php echo get_post_format(); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </header>
  <div class="entry-summary">
  <div class="row">
  <div class="col-xs-12">
<?php 
	$location = ' Where: ';
	$location .= ( get_cfc_field( 'events-details' , 'short-location' ) ) ?
		get_cfc_field( 'events-details' , 'short-location' ) :
		'TBD'; 
	
	$event_date = ' When: ';
	$event_date .= ( $begin_date = new DateTime( get_cfc_field( 'events-details' , 'event-date' ) ) ) ?
		 $begin_date->format('F d, Y') :
		'TBD';
	$event_date .= ( $end_date = new DateTime( get_cfc_field( 'events-details' , 'event-end-date' ) ) ) ?
		 ' to ' . $end_date->format('F d, Y') :
		'';
	
	if ( $show_times = get_cfc_field( 'events-details' , 'show-times' ) ) :
		$event_date .= ( $start_time = get_cfc_field( 'events-details' , 'start-time' ) ) ?
			', ' . $start_time :
			'';
		$event_date .= ( $end_time = get_cfc_field( 'events-details' , 'end-time' ) ) ?
			' - ' . $end_time :
			'';
	endif;
	
	echo '<i class="fa fa-map"></i><strong>' . $location . '</strong><br />';
	echo '<i class="fa fa-calendar"></i><strong>' . $event_date . '</strong><br />';
	if ( get_cfc_field( 'events-details' , 'genomics' ) ) :
		echo '<i class="fa fa-at"></i><strong> A Genomics@JHU Seminar</strong><br />';
	endif;
?>
<?php the_excerpt(); ?></div>
  </div>
  </div>
</article>
</div>
