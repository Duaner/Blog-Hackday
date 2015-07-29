<?php get_header() ?>

<?php

  $headerImageUrl = blog_home_image_url() ? blog_home_image_url() : (the_blankimage() ? the_blankimage()->getUrl() : '');

?>

<div class="blog-header home" style="<?= $headerImageUrl ? 'background-image: url('.$headerImageUrl.')' : '' ?>">

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
<!-- Handle footer -->
<script src="/assets/blog.js"></script>

<?php get_footer() ?>
