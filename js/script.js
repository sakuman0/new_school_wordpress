jQuery(function () {
    //ハンバーガーメニューと×ボタン切り替え

    jQuery(".hamburger").click(function () {

        if (jQuery(this).attr("class").indexOf("cross") > -1) { //「×」 → ハンバーガー に変更する場合の処理
            jQuery("body").css("overflow", "visible");

        } else {　　//ハンバーガー → 「×」 に変更する場合の処理
            jQuery("body").css("overflow", "hidden");
        }
        jQuery(".hamburger").toggleClass("cross");
        jQuery(".grobal_navi").toggleClass("change");
    });

    jQuery(window).resize(function () {
        let w = jQuery(window).width();

        if (w > 768) {
            jQuery(".hamburger").removeClass("cross");
            jQuery(".grobal_navi").removeClass("change");
            jQuery("body").css("overflow", "visible");
        }
    });
    //スクロールボタン最初は消しておく
    jQuery(".scroll_button").hide();

    jQuery(".scroll_button").click(function () {
        jQuery('html, body').animate({ scrollTop: 0 });
    });

    jQuery(window).scroll(function () {

        if (jQuery(window).scrollTop() <= 500) {
            jQuery(".scroll_button").hide();
        } else {
            jQuery(".scroll_button").show();
        }
        let footer_position = jQuery("footer").offset().top;
        var current_position = jQuery(window).scrollTop() + jQuery(window).height();

        if (footer_position <= current_position) {
            jQuery(".scroll_button").removeClass("fixed");
            jQuery(".scroll_button").addClass("absolute");
        } else {
            jQuery(".scroll_button").addClass("fixed");
            jQuery(".scroll_button").removeClass("absolute");
        }
    });
    jQuery(".notlink a").click(function () {
        return false;
    });

    jQuery(".student_works .work_item").click(function () {
        let src = jQuery(this).find('img').attr('src');
        jQuery(".student_works .item_detail img").attr("src", src);
        jQuery("body").css("overflow", "hidden");
        jQuery(".student_works .item_detail_wrapper").show();
    });
    jQuery(".student_works .cross").click(function () {
        jQuery(".student_works .item_detail_wrapper").hide();
        jQuery("body").css("overflow", "visible");
    });

    jQuery(".QA_page .question").click(function () {

        if (jQuery(this).attr("class").indexOf("open") !== -1) { //answer表示状態なら
            jQuery(this).parent().find(".answer").slideUp(400);
        } else {
            jQuery(this).parent().find(".answer").slideDown(400);
        }
        jQuery(this).toggleClass("open");
    });

    jQuery(".checkbox").click(function () {
        jQuery(".checkbox").toggleClass("checked");
    });

    jQuery(".QA_form .form_button").click(function(){
        let name = $(".QA_form .name").val();
        let rubi = $(".QA_form .rubi").val();
        let tel = $(".QA_form .tel").val();
        let mail = $(".QA_form .mail").val();
        let inquiry = $(".QA_form .inquiry").val();
        let event_mail = "";
        //チェックボックスが選択状態なら
        console.log(name);
        console.log(rubi);
        console.log(tel);
        console.log(mail);
        console.log(inquiry);
        console.log(event_mail);

        if(jQuery(".QA_form .checkbox").attr("class").indexOf("checked") !== -1){
            event_mail = "受け取る";
        }else {
            event_mail = "受け取らない";
        }
        if(inquiry === ""){inquiry = "未入力";}

        if(name === "" || rubi === "" ||  tel === "" || mail === ""){
            alert("必須項目の入力が不足しています。");
            console.log("こっち");
        } else {
            console.log("こっちじゃない");
            jQuery(".check_wrapper , .check_form").show();
            jQuery('html, body').animate({ scrollTop: 0 });
            jQuery("body").css("overflow", "hidden");

            jQuery(".check_wrapper .name").text(name);
            jQuery(".check_wrapper .rubi").text(rubi);
            jQuery(".check_wrapper .tel").text(tel);
            jQuery(".check_wrapper .mail").text(mail);
            jQuery(".check_wrapper .inquiry").text(inquiry);
            jQuery(".check_wrapper .event_mail").text(event_mail);
        }
        return false;
    });


    jQuery(".briefing_form .form_button").click(function(){

        let name = $(".briefing_form .name").val();
        let rubi = $(".briefing_form .rubi").val();
        let gender = $(".briefing_form .gender").val();
        let birthday = $(".briefing_form .birthday").val();
        let tel = $(".briefing_form .tel").val();
        let mail = $(".briefing_form .mail").val();
        let inquiry = $(".briefing_form .inquiry").val();
        let event_mail = "";
        //チェックボックスが選択状態なら
        if(jQuery(".briefing_form .checkbox").attr("class").indexOf("checked") !== -1){
            event_mail = "受け取る";
        }else {
            event_mail = "受け取らない";
        }
        if(inquiry === ""){inquiry = "未入力";}

        if(name === "" || rubi === "" || gender === "" || birthday === "" || tel === "" ||
        mail ===""){
            alert("必須項目の入力が不足しています。");
        } else {
            jQuery(".check_wrapper , .check_form").show();
            jQuery('html, body').animate({ scrollTop: 0 });
            jQuery("body").css("overflow", "hidden");

            jQuery(".check_wrapper .name").text(name);
            jQuery(".check_wrapper .rubi").text(rubi);
            jQuery(".check_wrapper .gender").text(gender);
            jQuery(".check_wrapper .birthday").text(birthday);
            jQuery(".check_wrapper .tel").text(tel);
            jQuery(".check_wrapper .mail").text(mail);
            jQuery(".check_wrapper .inquiry").text(inquiry);
            jQuery(".check_wrapper .event_mail").text(event_mail);
        }
        return false;
    });

    
    jQuery(".check_wrapper .cross").click(function(){
        jQuery(".check_wrapper , .check_form").hide();
        jQuery("body").css("overflow", "visible");
    });

    jQuery(".check_wrapper .send_button").click(function(){
        alert("送信が完了しました。");
        jQuery(".check_wrapper , .check_form").hide();
        jQuery(".briefing_form .checkbox , .QA_form .checkbox").removeClass("checked");
        jQuery("body").css("overflow", "visible");
        jQuery('form').find(':text').val("");
        jQuery('form').find('textarea').val("");
    });

});