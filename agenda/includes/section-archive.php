<?php if(have_posts()) : while(have_posts()) : the_post();?>

    <div class="col-sm">
    <h3><?php the_title();?></h3>
    <?php the_excerpt();?>

    <a class="link" href="<?php the_permalink();?>">Read more</a>
    </div>

<?php endwhile; else: endif;?>