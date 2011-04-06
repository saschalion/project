$(function() {
    hidePassport();
    showPassport();
    hideShowLanguage();
    hideShowEducational();
    hideShowEducationalExtra();
    hideShowProfession();
    hideShowMilitary();
    hideShowLeaving();

    $('#show-passport').click(function(){
        var obj = $('#sf_fieldset_______________');
        if( obj.css('display')=='none' )
            obj.slideDown(400);
        else
            obj.slideUp(400);
    });
    
//    $('#jobeet_job_type_M').change(function(){
//        var obj = $('#sf_fieldset_______________');
//        if( $(this).attr('checked')=='checked' )
//            obj.slideUp(400);
//    });

  
      $('#jobeet_job_type_M').change(function(){
        $('#sf_fieldset__________________________').slideDown(400);
    });

    $('#jobeet_job_type___').change(function(){
        $('#sf_fieldset__________________________').slideUp(400);
    });


});

function showPassport(){
    
    $('#sf_fieldset_______________').show();
}

function hidePassport(){
    $('#sf_fieldset_______________').hide();
}

function hideShowLanguage(){ 
    $('#sf_fieldset_________________________________________________').toggle();
}

function hideShowEducational(){
    $('#sf_fieldset_______________________').toggle();
}

function hideShowEducationalExtra(){
    $('#sf_fieldset_________________________________________________________________________________').toggle();
}

function hideShowProfession(){
    $('#sf_fieldset___________________').toggle();
}

function hideShowMilitary(){
    $('#sf_fieldset__________________________').toggle();
}

function hideShowLeaving(){
    $('#sf_fieldset_____________').toggle();
}