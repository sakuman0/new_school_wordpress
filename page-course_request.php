<?php get_header(); ?>
    <main>
        <div class="mv-height"></div>

        <div class="briefing_page">

            <section class="briefing_form">
                <h2 class="main-title">コース案内希望フォーム</h2>
                <p class="main-title_desc">
                    コース案内はこのページから申し込みください。<br>
                    また、必要事項を明記の上ご連絡ください。内容の確認後、担当者よりご連絡させていただきます。
                </p>
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
                            <th><span class="attention required">必須</span>性別</th>
                            <td><input type="text" class="gender"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>生年月日(半角数字)</th>
                            <td><input type="text" class="birthday"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>電話番号(半角数字)</th>
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
                    <p class="checkbox">WEB・デザインに関するイベント情報も受け取る</p>

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

                    <h3 class="title">性別</h3>
                    <p class="info gender"></p>

                    <h3 class="title">生年月日</h3>
                    <p class="info birthday"></p>

                    <h3 class="title">電話番号</h3>
                    <p class="info tel"></p>

                    <h3 class="title">メールアドレス</h3>
                    <p class="info mail"></p>

                    <h3 class="title">質問事項</h3>
                    <p class="info inquiry"></p>

                    <h3 class="title">WEB・デザインに関するイベント情報</h3>
                    <p class="info event_mail"></p>

                    <div class="send_button">
                        <p>送信する</p>
                    </div>
                    
                </div>
            </div>
        
        </div>

    </main>    
<?php get_footer();?>