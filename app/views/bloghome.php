<?php get_header() ?>

<div class="blog-header home">
  <div class="wrapper">
    <div class="container">
      <?= blog_home_title_spans() ?>

      <p class="lead blog-description"><?= blog_home_description() ?></p>
    </div>
  </div>
</div>


<div class="blog-main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('content'); ?>
<?php endwhile; else : ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
<div id="containerAjax"></div>

<?php get_footer() ?>
