


$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        var icon = $('.hamburguer').find('i');

        if(listaMenu.is(':hidden') == true){    
            icon.removeClass('fa-bars');
            icon.addClass('fa-times');
            listaMenu.slideDown();    
        }else{
            icon.removeClass('fa-times');
            icon.addClass('fa-bars');
            listaMenu.slideUp();
        }
    })
})
//fa fa-times
//fa fa-bars