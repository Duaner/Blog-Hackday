<div class="blog-post <?= get_the_classes_list() ?>" <?= the_wio_attributes() ?> style="background-color: <?= getColor();?>">
    <div class="container">
      <div class="left">
        <h3 class="blog-post-name"><?= project_name(); ?></h3>
        <a class="blog-post-title" href="<?php the_permalink(); ?>"><?php the_title_spans(); ?></a>
        <?php single_post_shortlede(); ?>
      </div>

      <div class="right">
        <img src="<?= imgBandeau(); ?>" alt="">
      </div>
    </div>
</div>
