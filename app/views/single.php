<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= single_post_title() ?> <?= site_title() ?></title>
    <link rel="alternate" type="application/rss+xml" title="<?= site_title() ?>'s Feed" href="/feed" />
    <link rel="stylesheet" href="/assets/reset.css">
    <link rel="stylesheet" href="/assets/common.css">
    <link rel="stylesheet" href="/assets/main.css">
    <link rel="stylesheet" href="/assets/blog.css">
    <link rel="stylesheet" href="/assets/social.css">
    <link rel="stylesheet" href="/assets/font.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php while ( have_posts() ) : the_post(); ?>
      <?php include('social-meta.php'); ?> 
    <?php endwhile; ?>

    <script src="/assets/vendor/jquery-1.11.2.min.js"></script>

    <!-- disqus integration -->
    <?php if(disqus_forum()): ?>
    <script type="application/javascript">
      $(document).ready(function() {
          window.disqium = Disqium('.blog-main.single');
      });
    </script>
    <?php endif ?>

    <link rel="stylesheet" href="/assets/vendor/disqium/disqium.css" />
    <script src="/assets/vendor/disqium/disqium.js"></script>

    <?php full_articles(true) ?>
    <?php rewind_posts(); ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <?php include('prismic.php') ?>

    <?php include('skin/blog.php') ?>

    <style type="text/css">
      .blog-main h1, .blog-main .h1,
      .blog-main h2, .blog-main .h2,
      .blog-main h3, .blog-main .h3,
      .blog-main h4, .blog-main .h4,
      .blog-main h5, .blog-main .h5,
      .blog-main h6, .blog-main .h6 {
        color: <?= getColor(); ?>
      }

    </style>

</head>

<body>


    <div id="right-panel">

        <?php get_sidebar(); ?>

    </div>

    <div class="main" <?= the_wio_attributes(); ?>>

        <a id="menu-hamburger" href="#right-panel"></a>



<?php

  $headerImageUrl = post_thumbnail_url() ? post_thumbnail_url() : (the_blankimage() ? the_blankimage()->getUrl() : '');

?>

<div class="blog-header single" style="background:<?= getColor(); ?>">


    <div class="wrapper">

       <?= single_post_title(); ?>

       <p class="description">
         <?php single_post_shortlede(); ?>
       </p>

       <p class="meta">
         <?php single_post_date(); ?><?php single_post_author(); ?>
       </p>

    </div>
</div>


<img id="main_img" src="<?= $headerImageUrl ? $headerImageUrl : '' ?>"/>


<div class="blog-main single container">

    <?php page_content(); ?>

    <?php include('social.php'); ?> 

</div>

<?php endwhile; ?>

<footer class="blog-footer single">

    <?php if (previous_post_link_url()) : ?>

      <a href="<?=previous_post_link_url()?>" class="previous">

        <span class="label">Previous article</span>

        <p class="title"><?=previous_post_link_title()?></p>

      </a>

    <?php endif ?>

    <a class="menu" href="/blog">Home</a>

    <?php if (next_post_link_url()) : ?>

      <a href="<?=next_post_link_url()?>" class="next">

        <span class="label">Next article</span>

        <p class="title"><?=next_post_link_title()?></p>

      </a>

    <?php endif ?>

</footer>

<!-- Hamburger menu -->
<script src="/assets/vendor/jquery.panelslider.js"></script>

<script type="text/javascript">

  $(document).ready(function() {
    $('#menu-hamburger').panelslider({side: 'right', duration: 200 });
  });

</script>

<!-- Handle footer -->
<script src="/assets/blog.js"></script>

</body>

</html>
