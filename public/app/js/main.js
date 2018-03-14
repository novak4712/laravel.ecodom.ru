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
    var showImg = function () {
        var popup_id = $('#' + $(this).attr("rel"));
        var img_attr = $(this).attr("src");
        $("#max_img").attr("src",img_attr);
        $(popup_id).show();
        $('.overlay_form').show();
    };
    $('#popup__toggle').click(showForm);
    $('.cart_toggle').click(showForm);
    $('.img_toggle').click(showImg);

    $('.overlay_form').click(function () {
        $('.overlay_form, .modal-form, .full_image').hide();
    });


    $('.flexslider').flexslider({
        animation: "slide"
    });

    $(".but1").click(function () {
        var hBlock = $(".text1");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");
    });

    $(".but2").click(function () {
        var hBlock = $(".text2");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");
    });

    $(".but3").click(function () {
        var hBlock = $(".text3");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");
    });

    $(".but4").click(function () {
        var hBlock = $(".text4");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");

    });

    $(".but5").click(function () {
        var hBlock = $(".text5");
        $(this).text(hBlock.is(":visible") ? "Подробние" : "Скрыть");
        hBlock.toggle("slow");

    });
});



