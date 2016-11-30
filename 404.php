<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
<div class="row">
<div class="col-xs-12 col-md-6">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?>

<p><?php _e('It looks like this was the result of either:', 'roots'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'roots'); ?></li>
  <li><?php _e('an out-of-date link', 'roots'); ?></li>
</ul>
</div>
<div class="col-xs-12 col-md-6">
<?php get_search_form(); ?>
</div>
</div>
</div>