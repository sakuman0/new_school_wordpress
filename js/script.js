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
    
    jQuery(".scroll_button").click(function(){
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

        if(footer_position <= current_position){
            jQuery(".scroll_button").removeClass("fixed");
            jQuery(".scroll_button").addClass("absolute");
        }else {
            jQuery(".scroll_button").addClass("fixed");
            jQuery(".scroll_button").removeClass("absolute"); 
        }
    });
    jQuery(".notlink a").click(function(){
        return false;
    });

    jQuery(".student_works .work_item").click(function(){
        let src = jQuery(this).find('img').attr('src');
        jQuery(".student_works .item_detail img").attr("src",src);
        jQuery("body").css("overflow", "hidden");
        jQuery(".student_works .item_detail_wrapper").show();
    });
    jQuery(".student_works .cross").click(function(){
        jQuery(".student_works .item_detail_wrapper").hide();
        jQuery("body").css("overflow", "visible");
    });

    jQuery(".QA_page .question").click(function(){

        if(jQuery(this).attr("class").indexOf("open") !== -1){ //answer表示状態なら
            jQuery(this).parent().find(".answer").slideUp(400);
        }else{
            jQuery(this).parent().find(".answer").slideDown(400);
        }
        jQuery(this).toggleClass("open");  
    });

    jQuery(".checkbox").click(function(){
        jQuery(".checkbox").toggleClass("checked");
    });

});