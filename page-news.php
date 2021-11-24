<?php get_header(); ?>

<main>

<div class="news_page">

    <div class="news_list">

    <?php $args = array(
        'numberposts'     => 6,  //表示する記事の数
        'order' => 'DESC',
        'category_name' => 'news',//表示するカテゴリ
    ); ?>
        <?php $myposts = get_posts( $args ); ?>
        <?php foreach($myposts as $post) : setup_postdata($post); ?>
        
        <div class="news_item">
            <a href="<?php echo home_url(); ?>/temporary">
                <h2 class="news_title"><?php the_title(); ?></h2>
                <p class="update"><?php the_field('update_date'); ?></p>
                <span class="main"><?php the_field('news_text'); ?></p>
            </a>
        </div>

        <?php $count++; endforeach; ?>
        <?php wp_reset_query(); ?>
    </div>

</div>

</main>

<?php get_footer();?>