$(document).ready(function () {

    $(".menu__icon").on("click", function () {
        $(this).closest(".menu").toggleClass("menu_state_open");
    });

    $(".form-section").on("click", ".prepend-icon", function () {
        $(".prepend-icon").each(function () {
            $(this).removeClass("select_input")
        });
        $(this).toggleClass("select_input");
    });



   var showForm = function () {
        var popup_id = $('#' + $(this).attr("rel"));
        $(popup_id).show();
        $('.overlay_form').show();
    };

    $('#popup__toggle').click(showForm);
    $('.cart_toggle').click(showForm);

    $('.overlay_form').click(function () {
        $('.overlay_form, .modal-form').hide();
    });


    $('.flexslider').flexslider({
        animation: "slide"
    });

    $(".but1").click(function () {
        var hBlock = $(".text1");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");
        var srcR = "app/img/ogon_r.png";
        var srcW = "app/img/ogon_w.png";
        var src = $(".img_but1").attr("src");
        if (src === srcW) {
            $(".img_but1").attr("src", srcR);
        } else {
            $(".img_but1").attr("src", srcW);
        }

    });
    $(".img_item1").hover(function () {
        var srcR = "app/img/ogon_r.png";
        var srcW = "app/img/ogon_w.png";
        var src = $(".img_but1").attr("src");
        if (src === srcW) {
            $(".img_but1").attr("src", srcR);
        } else {
            $(".img_but1").attr("src", srcW);
        }
    });

    $(".but2").click(function () {
        var hBlock = $(".text2");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");
        var srcR = "app/img/graz_w.png";
        var srcW = "app/img/graz_r.png";
        var src = $(".img_but2").attr("src");
        if (src === srcW) {
            $(".img_but2").attr("src", srcR);
        } else {
            $(".img_but2").attr("src", srcW);
        }
    });
    $(".img_item2").hover(function () {
        var srcR = "app/img/graz_w.png";
        var srcW = "app/img/graz_r.png";
        var src = $(".img_but2").attr("src");
        if (src === srcW) {
            $(".img_but2").attr("src", srcR);
        } else {
            $(".img_but2").attr("src", srcW);
        }
    });

    $(".but3").click(function () {
        var hBlock = $(".text3");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");
        var srcR = "app/img/solnz_w.png";
        var srcW = "app/img/solnz_r.png";
        var src = $(".img_but3").attr("src");
        if (src === srcW) {
            $(".img_but3").attr("src", srcR);
        } else {
            $(".img_but3").attr("src", srcW);
        }
    });
    $(".img_item3").hover(function () {
        var srcR = "app/img/solnz_w.png";
        var srcW = "app/img/solnz_r.png";
        var src = $(".img_but3").attr("src");
        if (src === srcW) {
            $(".img_but3").attr("src", srcR);
        } else {
            $(".img_but3").attr("src", srcW);
        }
    });

    $(".but4").click(function () {
        var hBlock = $(".text4");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");
        var srcR = "app/img/tresh_w.png";
        var srcW = "app/img/tresh_r.png";
        var src = $(".img_but4").attr("src");
        if (src === srcW) {
            $(".img_but4").attr("src", srcR);
        } else {
            $(".img_but4").attr("src", srcW);
        }
    });
    $(".img_item4").hover(function () {
        var srcR = "app/img/tresh_w.png";
        var srcW = "app/img/tresh_r.png";
        var src = $(".img_but4").attr("src");
        if (src === srcW) {
            $(".img_but4").attr("src", srcR);
        } else {
            $(".img_but4").attr("src", srcW);
        }
    });

    $(".but5").click(function () {
        var hBlock = $(".text5");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");
        var srcR = "app/img/prohee_w.png";
        var srcW = "app/img/prohee_r.png";
        var src = $(".img_but5").attr("src");
        if (src === srcW) {
            $(".img_but5").attr("src", srcR);
        } else {
            $(".img_but5").attr("src", srcW);
        }
    });
    $(".img_item5").hover(function () {
        var srcR = "app/img/prohee_w.png";
        var srcW = "app/img/prohee_r.png";
        var src = $(".img_but5").attr("src");
        if (src === srcW) {
            $(".img_but5").attr("src", srcR);
        } else {
            $(".img_but5").attr("src", srcW);
        }
    });

    new Photostack( document.getElementById( 'photostack-1' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );

});



