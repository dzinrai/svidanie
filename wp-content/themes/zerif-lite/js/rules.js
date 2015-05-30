//PopUp SHOW
function PopUpShow(){
    $("#popup").show();
}
//PopUp HIDE
function PopUpHide(){
    $("#popup").hide();
}

$(document).ready(function(){
    PopUpHide();
    var btn_about_us = $(".about-us").find(".btn-primary");
    var btn_purchase_now = $(".purchase-now").find(".btn-primary");
    $(".btn-primary").hover(function(){
        $("#home").toggleClass("transp");
    });
    $(btn_about_us).hover(function(){
        $(".about-us").toggleClass("transp");
    });
    $(btn_purchase_now).hover(function(){
        $(".purchase-now").toggleClass("transp");
    });

    //1

    $("#zerif_testim-widget-3").children(".feedback-box").hover(function(){
        $("#zerif_testim-widget-4").toggleClass("opacity_for_not_hover");
        $("#zerif_testim-widget-9").toggleClass("opacity_for_not_hover");       
        
    });
    $("#zerif_testim-widget-4").children(".feedback-box").hover(function(){
        $("#zerif_testim-widget-3").toggleClass("opacity_for_not_hover");
        $("#zerif_testim-widget-9").toggleClass("opacity_for_not_hover");       
        
    });
    $("#zerif_testim-widget-9").children(".feedback-box").hover(function(){
        $("#zerif_testim-widget-3").toggleClass("opacity_for_not_hover");
        $("#zerif_testim-widget-4").toggleClass("opacity_for_not_hover");       
        
    });

    //если выбран пункт Другое то появляется поле
	$( "select#f-from" ).change(function() {
        if($( "select#f-from option:selected" ).text()==$("option:last-child").text()){
                $("#from-who").toggle();
        }else{
            $("#from-who").hide();
        };
    });


    //При клике на кнопку Отправить поле нужно скрыть
    $('input.wpcf7-submit').click(function(event){    
       

       //$(".rules").addClass("not-display-this");
    });
    $( ".wpcf7-form" ).submit(function( event ) {
      $("#from-who").hide();
      $('select#f-from').val($('#f-from > option:first').val());
    });

    //Ссылка на правила
	$("#rulesBtn").click(function(){
		$(".rules").toggleClass("not-display-this");
	});
    //
    var offsetFunc = function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        if (window.location.href.indexOf("/map/") <= 0) {
            href = href.replace("http://svidanietut.by/","");
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top
            }, 1000);
        }
        else{
            href = href.replace("map/","");
            window.location.href = href;
        };
    };
    $('a[href$="#focus"]').click(offsetFunc);
    $('a[href$="#refFAQ"]').click(offsetFunc);
    $('a[href$="#tophead"]').click(offsetFunc);
    $('a[href$="#why-section"]').click(offsetFunc); 
    $('a[href$="#a_order"]').click(offsetFunc);
    $('a[href$="#place"]').click(offsetFunc);
    $('a[href$="#our_team"]').click(offsetFunc);
    $('a[href$="#feedback"]').click(offsetFunc);	
});