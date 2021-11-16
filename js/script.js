$(function () {
    //ハンバーガーメニューと×ボタン切り替え

    $(".hamburger").click(function () {

        if ($(this).attr("class").indexOf("cross") > -1) { //「×」 → ハンバーガー に変更する場合の処理
            $("body").css("overflow", "visible");

        } else {　　//ハンバーガー → 「×」 に変更する場合の処理
            $("body").css("overflow", "hidden");
        }
        $(".hamburger").toggleClass("cross");
        $(".grobal_navi").toggleClass("change");
    });

    $(window).resize(function () {
        let w = $(window).width();

        if (w > 768) {
            $(".hamburger").removeClass("cross");
            $(".grobal_navi").removeClass("change");
            $("body").css("overflow", "visible");
        }
    });
    //スクロールボタン最初は消しておく
    $(".scroll_button").hide();
    
    $(".scroll_button").click(function(){
        $('html, body').animate({ scrollTop: 0 });
    });

    $(window).scroll(function () {

        if ($(window).scrollTop() <= 500) {
            $(".scroll_button").hide();
        } else {
            $(".scroll_button").show();
        }
        let footer_position = $("footer").offset().top;
        var current_position = $(window).scrollTop() + $(window).height();

        if(footer_position <= current_position){
            $(".scroll_button").removeClass("fixed");
            $(".scroll_button").addClass("absolute");
        }else {
            $(".scroll_button").addClass("fixed");
            $(".scroll_button").removeClass("absolute"); 
        }
    });
    $(".notlink a").click(function(){
        return false;
    });

    $(".student_works .work_item").click(function(){
        let src = $(this).find('img').attr('src');
        $(".student_works .item_detail img").attr("src",src);
        $("body").css("overflow", "hidden");
        $(".student_works .item_detail_wrapper").show();
    });
    $(".student_works .cross").click(function(){
        $(".student_works .item_detail_wrapper").hide();
        $("body").css("overflow", "visible");
    });
});