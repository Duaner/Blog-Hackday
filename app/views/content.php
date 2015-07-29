
<div class="blog-post" <?= the_wio_attributes() ?> style="background-color: <?= getColor();?>">

    <div class="container">

        <h3 class="blog-post-name"><?= project_name(); ?></h3>

        <h2 class="blog-post-title">

            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

        </h2>

        <?php single_post_shortlede(); ?>

    </div>

</div>
