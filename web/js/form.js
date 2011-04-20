$(function() {

    $('#show-passport').click(function(){
        var obj = $('#sf_fieldset_______________');
        var objEducational = $('#sf_fieldset_______________________');
        var objProfession = $('#sf_fieldset___________________');
        if( obj.css('display')=='none' )
            obj.show(),
            objEducational.hide(),
            objProfession.hide();
        else
            obj.hide();
    });

    $('#show-educational').click(function(){
        var obj = $('#sf_fieldset_______________________');
        var objPassport = $('#sf_fieldset_______________');
        var objProfession = $('#sf_fieldset___________________');
        if( obj.css('display')=='none' )
            obj.show(),
            objPassport.hide(),
            objProfession.hide();
        else
            obj.hide();
    });

// $('#jobeet_job_type_M').change(function(){
// var obj = $('#sf_fieldset_______________');
// if( $(this).attr('checked')=='checked' )
// obj.slideUp(400);
// });


      $('#jobeet_job_type_M').change(function(){
        $('#sf_fieldset__________________________').show();
    });

    $('#jobeet_job_type___').change(function(){
        $('#sf_fieldset__________________________').hide();
    });

    $('#show-educational-extra').click(function(){
        var obj = $('#sf_fieldset_________________________________________________________________________________');
        if( obj.css('display')=='none' )
            obj.show();
        else
            obj.hide();
    });

    $('#show-language').click(function(){
        var obj = $('#sf_fieldset_________________________________________________');
        if( obj.css('display')=='none' )
            obj.show();
        else
            obj.hide();
    });

    $('#show-profession').click(function(){
        var obj = $('#sf_fieldset___________________');
        var objEducational = $('#sf_fieldset_______________________');
        var objPassport = $('#sf_fieldset_______________');
        if( obj.css('display')=='none' )
            obj.show(),
            objEducational.hide(),
            objPassport.hide();
        else
            obj.hide();
    });

    $('#show-military').click(function(){
        var obj = $('#sf_fieldset__________________________');
        if( obj.css('display')=='none' )
            obj.show();
        else
            obj.hide();
    });

    $('#show-leaving').click(function(){
        var obj = $('#sf_fieldset_____________');
        if( obj.css('display')=='none' )
            obj.show();
        else
            obj.hide();
    });
});