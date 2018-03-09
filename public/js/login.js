$('input').each(function() {

    $(this).focus(function() {

        $(this).siblings().addClass('stay').removeClass('original');

    });

    $(this).focusout(function() {

        if( !$(this).val() ) {

        $(this).siblings().removeClass('stay').addClass('original');

        }

    });

});