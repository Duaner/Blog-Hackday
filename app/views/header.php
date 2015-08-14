<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hackday at zengularity</title>
    <link rel="alternate" type="application/rss+xml" title="<?= site_title() ?>'s Feed" href="/feed" />
    <link rel="stylesheet" href="/assets/reset.css">
    <link rel="stylesheet" href="/assets/common.css">
    <link rel="stylesheet" href="/assets/main.css">
    <link rel="stylesheet" href="/assets/blog.css">
    <link rel="stylesheet" href="/assets/ionicons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

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
        <a href="./" class="logo"><img src="assets/images/logo.png" alt=""></a>
