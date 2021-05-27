window.onscroll = function() {
    let w_p = window.pageYOffset;
    if (window.innerHeight > window.pageYOffset){
        let movePercent = 150*window.pageYOffset/window.innerHeight;
    }
    jqHidden();
};
jqHidden();
function jqHidden(){
    let jq = document.querySelectorAll(".jq_hidden");
    if (typeof(jq) !== 'undefined' && jq != null){
        jq.forEach(function(element){
            element.classList.add('jq_hide');
            if (element.getBoundingClientRect().top < (window.innerHeight)) {
                element.classList.add('jq_active');
                element.classList.remove('jq_hide');
            }
            else{
                element.classList.add('jq_hide');
                element.classList.remove('jq_active');
            }
        });
    }
}


$(document).ready(function() {
    $('.sl').slick({
        autoplay:true,
        autoplaySpeed:5000,
        dots:false,
        fade:true
    });


    //AJAX BLOCK//
    $('.ajaxLink').click(function ajaxForm(event) {
        event.preventDefault();
        let target_url = $(this).attr('href');
        ajaxCall(target_url);
    });

    $('.closePopUp').click(function closeForm() {
        $('#popUp').removeClass('active');
        $('#ajaxWrapper').empty();
    });

    function ajaxCall(url){
        $.ajax({
            url: url,
            context: $('#ajaxWrapper'),
            type: 'GET',
            success: function(data){
                if (!data) throw '';
                // let $extracted = null;
                // let $html = null;
                // $extracted = $(data).find(".ajaxContent");
                // $html = $extracted.html();
                $(this).html(data);
            },
            complete: function () {
                if (!$('#popUp').hasClass('active')) {
                    $('#popUp').addClass('active');
                }
            },
            error: function () {
                alert('Ошибка AJAX!');
            }
        });
    }



});