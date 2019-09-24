<?php get_header();?>


<div class="hero">
    <div class="text-box"><h1><?php the_title();?></h1><h2><?php if(function_exists('the_subtitle')) the_subtitle(); ?></h2></div>
</div>
<div class="container container--narrow">
<section class="testimonials">
    <div class="row posts">


    <?php
    $homepageInfo = new WP_query(array(
        'posts_per_page' => 3,
        'post_type' => 'company_info'
    ));
    while($homepageInfo->have_posts()){
        $homepageInfo->the_post();?>
    <div class="col-sm"><h3><?php the_title();?></h3>
    <?php the_excerpt();?>

<a class="link" href="<?php the_permalink();?>">Read more</a>
</div>
   <?php }?>

    </div>
</section>
</div>
<section class="info">
    <div class="row">
    <div class="col-8 living"></div>
    <div class="col-4 sit"><h3>sit & sat</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae ipsum voluptatibus dolorum, consequatur fuga voluptatem.</p></div>
    </div>
    <div class="row">
    <div class="col-4 we_do"><h3>we do good</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae ipsum voluptatibus dolorum, consequatur fuga voluptatem.</p></div>
    <div class="col-8 bedroom"></div>
    </div>
</section>


<?php get_footer();?>