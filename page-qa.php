<?php get_header(); ?>

    <main>
        <div class="mv-height"></div>

        <div class="QA_page">

            <section class="QA">
                <h2 class="main-title">よくある質問</h2>
                <p class="main-title_desc">宮崎キャリアデザインスクールについて、よく頂くご質問とその回答を以下にまとめました。　
                    こちらのQ＆Aをご覧頂き、それでも不明点がございましたら、ページ下部のフォームよりお気軽にお問い合わせください。</p>

                <div class="QA_list">

                    <?php
                    $args = array (
                        'category_name' => 'QA', // カテゴリーID
                        'order'    => 'ASC',
                        'numberposts' => 100, // 取得する投稿数
                    );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ):
                    setup_postdata($post); //　グローバル変数$postを書き換え
                    ?>

                    <div class="QA_item">
                        <p class="question"><?php the_field('question'); ?></p>
                        <p class="answer"><?php the_field('answer'); ?></p>
                    </div>

                    <?php
                    endforeach;
                    wp_reset_postdata(); // $postをグローバル変数に戻す
                    ?>
                </div>
            </section>

            <section class="QA_form" id="QA_form">
                <h2 class="main-title">お問い合わせフォーム</h2>
                <p class="main-title_desc">宮崎キャリアデザインスクールについて、よく頂くご質問とその回答を以下にまとめました。　
                    こちらのQ＆Aをご覧頂き、それでも不明点がございましたら、ページ下部のフォームよりお気軽にお問い合わせください。</p>
                <form action="">
                    <table>
                        <tr>
                            <th><span class="attention required">必須</span>お名前</th>
                            <td><input type="text" class="name"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>ふりがな</th>
                            <td><input type="text" class="rubi"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>電話番号</th>
                            <td><input type="text" class="tel"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>メールアドレス(半角英数字)</th>
                            <td><input type="text" class="mail"></td>
                        </tr>
                        <tr>
                            <th><span class="attention optional">任意</span>質問事項</th>
                            <td><textarea name="" class="inquiry"></textarea></td>
                        </tr>
                    </table>

                    <p class="complement">ご入力頂いたメールアドレス宛に確認用のメールが届きます。　入力間違いが無いようご注意ください。<br>
                        また、ドメイン指定受信を設定されている方は@inter-cross.com の指定をお願いいたします。</p>
                    <p class="checkbox">メール配信を希望する</p>

                    <div class="form_button">
                        <input type="submit" value="送信する">
                    </div>

                </form>
            </section>

        <div class="check_wrapper">
        <p class="cross">×</p>

            <div class="check_form">
                <h2 class="check_title">確認画面</h2>
                <p class="check_text">以下内容にお間違いが無いことをご確認ください。</p>

                <h3 class="title">お名前</h3>
                <p class="info name"></p>

                <h3 class="title">ふりがな</h3>
                <p class="info rubi"></p>

                <h3 class="title">電話番号</h3>
                <p class="info tel"></p>

                <h3 class="title">メールアドレス</h3>
                <p class="info mail"></p>

                <h3 class="title">質問事項</h3>
                <p class="info inquiry"></p>

                <h3 class="title">メール配信について</h3>
                <p class="info event_mail"></p>

                <div class="send_button">
                    <p>送信する</p>
                </div>
                
            </div>
        </div>

        </div>

    </main>

<?php get_footer();?>