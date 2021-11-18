<?php get_header(); ?>

    <main>
        <div class="mv-height"></div>

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
<!-- 繰り返し処理する内容 -->
<?php
    endforeach;
    wp_reset_postdata(); // $postをグローバル変数に戻す
?>


        <section class="student_works">  <!--作業中-->
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

        </section>  <!--作業中-->


        <section class="impressions">
            <h2 class="main-title">受講生の声</h2>
            <div class="impressions_list">

                <div class="impressions_item">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/student1.png" alt="生徒の声">
                    </div>
                    <div class="text">
                        <h3 class="voice_title">未経験からデザイナーへとキャリアチェンジ。
                            きっかけは「一番ワクワクしたから」でした。</h3>
                        <p class="nickname">ニックネーム：ニッカワちゃん（Webデザイン科）</p>
                        <p class="voice">
                                2014年に宮崎キャリア・デザインスクールを修了し、デザイナーとして活躍しているニッカワちゃん。
                                入校前は飲食店で接客をしており、Web制作やデザインは未経験からのスタートでした。

                                「入校したきっかけは、パソコンのスキルを身につけたいと思ったことです。いくつか学校を見学した中で、宮キャリが一番ワクワクしたので入校を決めました。
                                実際に学んでみて良かったところは、短い期間で実務に必要な基礎が身についたことです。実際は学校で学ぶ基礎と、仕事での実践には違いがあります。しかし、基礎をしっかり身につけておくことで実践に活かすことができます。
                                また、半年間の間にこれからの仕事も含め、自分自身と向き合う機会も得ることができました。」
                                ニッカワちゃんが働く企業では、ネット通販をメインとした業務をおこなっています。現在はデザイナーの業務だけではなく、ネットでの集客対策や商品の発送業務など幅広くおこない、活躍の場を広げています。
                                「将来はデザインやネット販売の知識を活かし、地元の小林市に貢献できるような活動をしていきたいです」と話してくれたニッカワちゃん。目標に向けて、着々と前進しています。
                        </p>
                    </div>
                </div>

                <div class="impressions_item">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/student2.png" alt="生徒の声">
                    </div>
                    <div class="text">
                        <h3 class="voice_title">ITとは無縁の製造業から、Webマーケティングの分野へ</h3>
                        <p class="nickname">ニックネーム：係長（Webビジネス実践科）</p>
                        <p class="voice">宮崎出身の係長。県外の大学へ進学後、食品の製造会社に入社しましたが、離職を機に宮崎へUターンしてきました。
                            「宮崎で何か新しい仕事を始めたい」そう思ったことがきっかけでWebビジネス実践科に入校しました。

                            「普段の生活の中でもネットに触れる機会は多かったですし、変化の大きい業界だと聞いていたので、ここで学んで最新の知識を得ておけば就職にも役立つのではと感じて受講を決めました。
                            入校する前は、職業訓練って堅苦しいイメージがあったんですけど、入ってみると専門学校みたいで良い意味でギャップがありました。授業の内容も実践的な内容ばかりで、仕事に直結するようなスキルを幅広く学ぶことができました。」
                            職業訓練を修了した後は、東京に本社を置く大手IT企業の宮崎支社に入社しました。現在は学んだスキルを活かしインターネット広告の管理や、収集したデータを分析する業務を担当しています。
                            「ここで学んでいる最中は、毎日新しいことを覚えていく楽しみがありました。実際にIT業界で働き始めて、学んできたことが仕事の中で一つに繋がっていることを実感します。
                            入社してすぐに新人研修があったんですが、半年間学んでいたおかげで同期よりもスムーズに業務を覚えることができました。ITの分野は日々変化が激しくて、入社してからも新しい知識が求められていると感じています。学んだことを活かして、今携わっている業務でスペシャリストを目指したいです。」
                        </p>
                    </div>
                </div>

                <div class="impressions_item">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/student3.png" alt="生徒の声">
                    </div>
                    <div class="text">
                        <h3 class="voice_title">独学で挑戦していたWeb制作。<br>
                            実践的技術を学んでプロのWebクリエイターへ
                        </h3>
                        <p class="nickname">ニックネーム：ウメちゃん（Web・DTPデザイン科）</p>
                        <p class="voice">これまで独学でWeb制作に挑戦してきたウメちゃん。宮崎で仕事を探す中で、ITやデザインに関する求人が盛んであることを発見。
                            入社前に専門的な知識を身に付けておきたいと思い、Web・DTPデザイン科を受講しました。

                            「Web制作の授業以外だけでなく、デザインの基礎、写真撮影、情報セキュリティなど幅広い知識が得られました。クラスのメンバーとのコミュニケーションも盛り上がりました。
                            インタークロスは企業とのつながりが多く、就職活動を始めた時には、業界未経験でもいろんなチャンスがあると感じました。」
                            ウメちゃんは現在、入校当初から希望していたフロントエンドエンジニア(htmlコーダー)として活躍しています。
                            「希望していた仕事に就くことができ、学んだことが今の仕事でとても役に立っています。今後の目標はさらに速いスピードでコーディングの作業ができるようになることです。プログラミングの分野にも挑戦していきたいと思います。」
                        </p>
                    </div>
                </div>
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
