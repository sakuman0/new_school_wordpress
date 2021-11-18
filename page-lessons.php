<?php get_header(); ?>


    <main>
        <div class="mv-height"></div>

        <section class="lessons">
            <h2 class="main-title">授業内容</h2>
            <p class="main-title_desc">72期生を参考に、授業の内容を一部ご紹介させていただきます。</p>

            <h2 class="sub-title">受講できる授業一覧</h2>

            <div class="lesson-list">
                <ul>
                    <li>
                        <h3>【デザイン関連】</h3>
                        <p>Webデザイン、DTPデザイン、動画編集、画像編集、画像加工、撮影技法、課題演習</p>
                    </li>
                    <li>
                        <h3>【コーディング関連】</h3>
                        <p>コーディング、レスポンシブデザイン、Web作品制作、Webシステム応用、課題演習</p>
                    </li>
                    <li>
                        <h3>【マーケティング関連】</h3>
                        <p>マーケティング、コミュニケーションデザイン、クリエイティブディレクション</p>
                    </li>
                    <li>
                        <h3>【知識・概論】</h3>
                        <p>情報セキュリティ、ITサポート、デザイン概論、Web概論、インターネット広告概論</p>
                    </li>
                    <li>
                        <h3>【就職支援・その他】</h3>
                        <p>安全衛生、職業人講話、企業実習、就職支援</p>
                    </li>

                </ul>
            </div>

            <h2 class="sub-title">一部授業をピックアップしてご紹介</h2>

            <div class="lesson-detail-list">

                <?php $args = array(
                    'numberposts'     => 4,  //表示する記事の数
                    'order' => 'ASC',
                    'category_name' => 'lesson_detail',//表示するカテゴリ
                ); ?>
                    <?php $myposts = get_posts( $args ); $count=1; ?>
                    <?php foreach($myposts as $post) : setup_postdata($post); ?>

                    <?php if(($count % 2) !== 0):?>  <!--偶数要素の場合の処理-->

                    <div class="list-item">
                        <div class="image"><?php the_post_thumbnail('100%','auto'); ?></div>
                        <div class="lesson-text">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_field('lesson_summary'); ?></p>
                            <h4><?php the_field('lesson_name'); ?></h4>
                            <ul><?php the_content(); ?></ul>
                        </div>
                    </div>

                    <?php else:?>  <!--奇数要素の場合の処理-->

                        <div class="list-item">
                        <div class="lesson-text">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_field('lesson_summary'); ?></p>
                            <h4><?php the_field('lesson_name'); ?></h4>
                            <ul><?php the_content(); ?></ul>
                        </div>
                            <div class="image"><?php the_post_thumbnail('100%','auto'); ?></div>
                        </div>

                    <?php endif;?>    
                <?php $count++; endforeach; ?>
                <?php wp_reset_query(); ?>
            </div>

        </section>





        <section class="teachers_area">
            <h2 class="main-title">教師のご紹介</h2>
            <p class="main-title_desc">宮崎キャリアデザインスクールで教鞭をとる、教師たちについてご紹介をさせて頂きます。</p>

            <div class="swiper-container">
                <div class="swiper-wrapper">

                <?php
                $args = array (
                    'category_name' => 'teachers_info', // カテゴリーID
                    'order'    => 'ASC',
                    'numberposts' => 100, // 取得する投稿数
                );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ):setup_postdata($post); ?>

                    <div class="swiper-slide">
                        <div class="introduction">
                            <div class="intro_top">
                                <div class="image">
                                    <?php the_post_thumbnail('100%','auto'); ?>
                                </div>
                                <div class="career">
                                    <?php the_field('career'); ?>
                                </div>
                            </div>
                            <div class="intro_bottom">
                                <div class="teacher_name">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="rubi"><?php the_field('rubi'); ?></p>
                                </div>
                                <div class="teacher_info">
                                    <p class="affiliation"><?php the_field('affiliation'); ?></p>
                                    <p class="course"><?php the_field('course'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
                <!--swiper-wrapper-->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </section>



        <section class="qualifications">
            <h2 class="main-title">挑戦できる資格</h2>
            <p class="main-title_desc">宮崎キャリアデザインスクールで挑戦して頂ける資格は、サーティファイの資格試験になります。　
                もちろん、受講生が自主的にサーティファイ以外の資格を受験頂くことも可能ですが、その際はご自身にて予約頂き、会場まで足を運んで頂くこととなります。</p>

            <h2 class="sub-title">挑戦可能な資格一覧</h2>

            <div class="test_list">
                <div class="test_item">
                    <p class="test_name">Illustratorクリエイター能力認定試験<br>
                        (スタンダード・エキスパート)</p>
                    <p class="test_desc">サーティファイが実施する、Adobe製のデザインソフト「Illustrator」を使用した、グラフィックコンテンツの制作能力を測定する資格試験です。
                        <br>試験の詳しい情報は (<a href="https://www.sikaku.gr.jp/ns/il/">こちら</a>)

                    </p>
                </div>

                <div class="test_item">
                    <p class="test_name">photoshopクリエイター能力認定試験<br>
                        (スタンダード・エキスパート)</p>
                    <p class="test_desc">サーティファイが実施する、Adobe製のデザインソフト「Photoshop」を使用した、グラフィックコンテンツの制作能力を測定する資格試験です。
                        <br>試験の詳しい情報は (<a href="https://www.sikaku.gr.jp/ns/ps/">こちら</a>)
                    </p>
                </div>

                <div class="test_item">
                    <p class="test_name">Webクリエイター能力認定試験<br>
                        (スタンダード・エキスパート)</p>
                    <p class="test_desc">サーティファイが実施する、マークアップスキルを測定する為の資格試験です。<br>
                        試験の詳しい情報は (<a href="https://www.sikaku.gr.jp/web/wc/">こちら</a>)</p>
                </div>

            </div>
            <h2 class="sub-title">サーティファイとは？</h2>
            <p class="sub-title_desc">ワードやエクセル等の社会人にとって汎用性の高い業務アプリに関する資格を取り扱っている団体です。
                また、プログラミング言語やマークアップ言語、デザイン系のアプリに関する資格など、全56種類もの資格を扱っております。
                受講者の8割以上が、“実務的な試験である”と評価しているデータもあり、これから専門知識を要する業界で働く方にとっては、
                登竜門となる資格が多数用意されております。　当校では、デザイン業界で幅広く使われてるAdobe製ソフトに関する試験と、
                フロントエンド向けの試験を受験することが可能です。</p>

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
