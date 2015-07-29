<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= single_post_title() ?> <?= site_title() ?></title>
    <link rel="alternate" type="application/rss+xml" title="<?= site_title() ?>'s Feed" href="/feed" />
    <link rel="stylesheet" href="/assets/reset.css">
    <link rel="stylesheet" href="/assets/common.css">
    <link rel="stylesheet" href="/assets/main.css">
    <link rel="stylesheet" href="/assets/blog.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="/assets/vendor/jquery-1.11.2.min.js"></script> 
    <script src="//use.typekit.net/qby6wbi.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <?php include('prismic.php') ?>
</head>

<body>

    <div id="right-panel">
        <?php get_sidebar() ?>
    </div>

    <div class="main" <?= the_wio_attributes(); ?>>
        <div class="logo"><img src="assets/images/logo.png" alt=""></div>

        <a id="menu-hamburger" href="#right-panel"></a>
