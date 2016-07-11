<?php 
/* 
 * Show a single symposium presentation. 
 */ 
while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
<header>
<h2><?php echo get_post_format(); ?><?php the_title(); ?></h2>
</header>
<div class="entry-summary">
<div class="row">
<?php if ( has_post_thumbnail() ) : ?>
<div class="col-sm-3 col-xs-hidden pull-right"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
<div class="col-sm-9 col-xs-12">
<?php else : ?>
<div class="col-xs-12">
<?php endif ; ?>
<?php the_content(); ?>
</div>
</div>
</div>
</article>
<?php endwhile; ?>
<ul class="breadcrumb">
	<li><a href="<?php echo home_url(); ?>">IDIES</a></li>
	<li><a href="<?php echo home_url();?>/presentation/"> All Presentations</a></li>
	<li><?php the_title(); ?></li>
</ul>
