$(function() {

    $('#show-passport').click(function(){
        var obj = $('#sf_fieldset_______________');
        var objEducational = $('#sf_fieldset_______________________');
        var objProfession = $('#sf_fieldset___________________');
        if( obj.css('display')=='none' )
            obj.slideDown(300),
            objEducational.slideUp(300),
            objProfession.slideUp(300);
        else
            obj.slideUp(300);
    });

    $('#show-educational').click(function(){
        var obj = $('#sf_fieldset_______________________');
        var objPassport = $('#sf_fieldset_______________');
        var objProfession = $('#sf_fieldset___________________');
        if( obj.css('display')=='none' )
            obj.slideDown(300),
            objPassport.slideUp(300),
            objProfession.slideUp(300);
        else
            obj.slideUp(300);
    });

// $('#jobeet_job_type_M').change(function(){
// var obj = $('#sf_fieldset_______________');
// if( $(this).attr('checked')=='checked' )
// obj.slideUp(300);
// });


      $('#jobeet_job_type_M').change(function(){
        $('#sf_fieldset__________________________').slideDown(300);
    });

    $('#jobeet_job_type___').change(function(){
        $('#sf_fieldset__________________________').slideUp(300);
    });

    $('#show-educational-extra').click(function(){
        var obj = $('#sf_fieldset_________________________________________________________________________________');
        if( obj.css('display')=='none' )
            obj.slideDown(300);
        else
            obj.slideUp(300);
    });

    $('#show-language').click(function(){
        var obj = $('#sf_fieldset_________________________________________________');
        if( obj.css('display')=='none' )
            obj.slideDown(300);
        else
            obj.slideUp(300);
    });

    $('#show-profession').click(function(){
        var obj = $('#sf_fieldset___________________');
        var objEducational = $('#sf_fieldset_______________________');
        var objPassport = $('#sf_fieldset_______________');
        if( obj.css('display')=='none' )
            obj.slideDown(300),
            objEducational.slideUp(300),
            objPassport.slideUp(300);
        else
            obj.slideUp(300);
    });

    $('#show-military').click(function(){
        var obj = $('#sf_fieldset__________________________');
        if( obj.css('display')=='none' )
            obj.slideDown(300);
        else
            obj.slideUp(300);
    });

    $('#show-leaving').click(function(){
        var obj = $('#sf_fieldset_____________');
        if( obj.css('display')=='none' )
            obj.slideDown(300);
        else
            obj.slideUp(300);
    });
});