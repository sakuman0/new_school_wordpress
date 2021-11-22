<?php get_header(); ?>

    <main>
        <div class="mv-height"></div>

        <section class="student_works">
            <h2 class="main-title">受講生の作品</h2>

            <div class="work_list">

            <?php
            $args = array (
                'category_name' => 'student_works', // カテゴリーID
                'order'    => 'ASC',
                'numberposts' => 6, // 取得する投稿数
            );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ):
            setup_postdata($post); //　グローバル変数$postを書き換え
            ?>
            
                <div class="work_item">
                    <div class="image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="受講生の作品">
                        <div class="work_summary">
                            <?php the_field('student_works_info'); ?>
                        </div>
                    </div>
                </div>

                <?php
                endforeach;
                wp_reset_postdata(); // $postをグローバル変数に戻す
                ?>

            </div>
            <div class="item_detail_wrapper">
                <p class="cross">×</p>
                <div class="item_detail">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                </div>
            </div>

        </section>


        <section class="impressions">
            <h2 class="main-title">受講生の声</h2>
            <div class="impressions_list">
            
            <?php
            $args = array (
                'category_name' => 'student_voice', // カテゴリーID
                'order'    => 'ASC',
                'numberposts' => 3, // 取得する投稿数
            );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ):
            setup_postdata($post); //　グローバル変数$postを書き換え
            ?>
                <div class="impressions_item">
                    <div class="image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="生徒の声">
                    </div>
                    <div class="text">
                        <h3 class="voice_title"><?php the_field('title'); ?></h3>
                        <p class="nickname"><?php the_title(); ?></p>
                        <p class="voice"><?php the_field('main_text'); ?></p>
                    </div>
                </div>
                <?php
                endforeach;
                wp_reset_postdata(); // $postをグローバル変数に戻す
                ?>
            </div>
        </section>

        <div class="cource-guide">
            <h2 class="guide-title">登録すると次回のコース案内が受け取れます。</h2>
            <p class="guide-text">ご希望の方は以下の「コース案内を受け取る」より、お申し込みください。<br>
                募集開始のお知らせ以外は配信いたしません。</p>
            <p class="guide-button"><a href="<?php echo home_url(); ?>/course_request">コース案内を受け取る</a></p>
        </div>
        <div class="scroll_button fixed">
            <p></p>
        </div>
    </main>
    <?php get_footer();?>
