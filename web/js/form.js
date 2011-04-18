$(function() {


    $('#show-passport').click(function(){
        var obj = $('#sf_fieldset_______________');
        var objEducational = $('#sf_fieldset_______________________');
        var objProfession = $('#sf_fieldset___________________');
        if( obj.css('display')=='none' )
            obj.slideDown(400),
            objEducational.slideUp(400),
            objProfession.slideUp(400);
        else
            obj.slideUp(400);
    });

    $('#show-educational').click(function(){
        var obj = $('#sf_fieldset_______________________');
        var objPassport = $('#sf_fieldset_______________');
        var objProfession = $('#sf_fieldset___________________');
        if( obj.css('display')=='none' )
            obj.slideDown(400),
            objPassport.slideUp(400),
            objProfession.slideUp(400);
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

    $('#show-educational-extra').click(function(){
        var obj = $('#sf_fieldset_________________________________________________________________________________');
        if( obj.css('display')=='none' )
            obj.slideDown(400);
        else
            obj.slideUp(400);
    });

    $('#show-language').click(function(){
        var obj = $('#sf_fieldset_________________________________________________');
        if( obj.css('display')=='none' )
            obj.slideDown(400);
        else
            obj.slideUp(400);
    });

    $('#show-profession').click(function(){
        var obj = $('#sf_fieldset___________________');
        var objEducational = $('#sf_fieldset_______________________');
        var objPassport = $('#sf_fieldset_______________');
        if( obj.css('display')=='none' )
            obj.slideDown(400),
            objEducational.slideUp(400),
            objPassport.slideUp(400);
        else
            obj.slideUp(400);
    });

    $('#show-military').click(function(){
        var obj = $('#sf_fieldset__________________________');
        if( obj.css('display')=='none' )
            obj.slideDown(400);
        else
            obj.slideUp(400);
    });

    $('#show-leaving').click(function(){
        var obj = $('#sf_fieldset_____________');
        if( obj.css('display')=='none' )
            obj.slideDown(400);
        else
            obj.slideUp(400);
    });
});
