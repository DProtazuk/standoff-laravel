$('body').on('click',".focus-div",  function() {
    let form = $(this).attr('id');
    let input = $(this).attr('data-input');
    focus(form, input);
});

function focus(form, input) {
    document.getElementById(input).focus();
    document.getElementById(form).style.borderColor = "white";
}


$(document).mouseup( function(e){ // событие клика по веб-документу
    var div = $(".focus-div");
        if(!div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
            $(div).css("border-color", "#4d5167");
		}
});


$('.input-hidden').on('keyup',function(){
    let numInput = $(this).val().length;
    let butFalse = $(this).attr('data-butFalse');
    let butTrue = $(this).attr('data-butTrue');
    let buttonThisFrom = $(this).attr('data-button');
    if(numInput >= 1) {
        $("#"+butFalse).css("display", "none");
        $("#"+butTrue).css("display", "block");

        $("#"+buttonThisFrom).removeAttr('disabled');
        $("#"+buttonThisFrom).css("opacity", "1");
    }
    else {
        $("#"+butFalse).css("display", "block");
        $("#"+butTrue).css("display", "none");

        $("#"+buttonThisFrom).attr('disabled','disable');
        $("#"+buttonThisFrom).css("opacity", "0.3");
    }
});


$('body').on('click',".svgActive",  function() {
    $('#'+$(this).attr('data-input')).val('');
    $(this).css("display", "none");   
    $("#"+$(this).attr('data-svg')).css("display", "block");
    $("#"+$(this).attr('data-button')).attr('disabled','disable');
    $("#"+$(this).attr('data-button')).css("opacity", "0.3");
});


$(document).mouseup( function(e){ // событие клика по веб-документу
    var div = $(".show_user");
        if(!div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
		}
        else {
            $('.buttonShop').trigger('click');            
        }
});