<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= project_name() ?> <?= site_title() ?></title>
    <link rel="alternate" type="application/rss+xml" title="<?= site_title() ?>'s Feed" href="/feed" />
    <link rel="stylesheet" href="/assets/reset.css">
    <link rel="stylesheet" href="/assets/common.css">
    <link rel="stylesheet" href="/assets/main.css">
    <link rel="stylesheet" href="/assets/page.css">
    <link rel="stylesheet" href="/assets/blog.css">
    <link rel="stylesheet" href="/assets/social.css">
    <link rel="stylesheet" href="/assets/font.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <script src="//use.typekit.net/qby6wbi.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

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

    <style type="text/css">
      .blog-main h1, .blog-main .h1,
      .blog-main h2, .blog-main .h2,
      .blog-main h3, .blog-main .h3,
      .blog-main h4, .blog-main .h4,
      .blog-main h5, .blog-main .h5,
      .blog-main h6, .blog-main .h6 {
        color: <?= getColor(); ?> ;
        text-transform: uppercase;
        font-size: 30px;
        font-family: "proxima-nova", Arial, sans-serif;
      }

    </style>
</head>

<body>

    <div class="main" <?= the_wio_attributes(); ?>>
        <a href="/" class="logo"><img src="/assets/images/logo.png" alt=""></a>
        <a id="menu-hamburger" href="#right-panel"></a>

        <?php $headerImageUrl = post_thumbnail_url() ? post_thumbnail_url() : (the_blankimage() ? the_blankimage()->getUrl() : ''); ?>

        <div class="blog-header blog-post" style="background:<?= getColor(); ?>">

            <!--<div class="wrapper">
              <div class="container">

               <?= single_post_title(); ?>

               <p class="description">
                 <?php single_post_shortlede(); ?>
               </p>

               <!-- <p class="meta">
                 <?php single_post_date(); ?><?php single_post_author(); ?>
               </p> ->
             </div>
            </div>-->

            <div class="container">
              <div class="left">
                <h3 class="blog-post-name"><?= project_name(); ?></h3>
                <?= single_post_title(); ?>
                <?php single_post_shortlede(); ?>
              </div>

              <div class="right">
                <img src="<?= imgBandeau(); ?>" alt="">
              </div>
            </div>
        </div>

        <img class="main_img animation-loading" src="<?= $headerImageUrl ? $headerImageUrl : '' ?>"/>

        <div class="blog-main single container">

            <?php page_content(); ?>

            <?php include('social.php'); ?> 

        </div>

        <?php endwhile; ?>

        <footer class="blog-footer single">

            <?php if (previous_post_link_url()) : ?>

              <a href="<?=previous_post_link_url()?>" class="previous">

                <span class="label">Previous project</span>

                <p class="title"><?=previous_post_link_title()?></p>

              </a>

            <?php endif ?>

            <a class="menu" href="/blog">Home</a>

            <?php if (next_post_link_url()) : ?>

              <a href="<?=next_post_link_url()?>" class="next">

                <span class="label">Next project</span>

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
