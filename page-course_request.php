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
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>ふりがな</th>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>性別</th>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>生年月日(半角数字)</th>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>電話番号(半角数字)</th>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <th><span class="attention required">必須</span>メールアドレス(半角英数字)</th>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <th><span class="attention optional">任意</span>質問事項</th>
                            <td><textarea name=""></textarea></td>
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
        </div>

    </main>    
<?php get_footer();?>/