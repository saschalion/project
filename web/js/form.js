$(document).ready(function() {
    hideShowPassport();
    hideShowLanguage();
    hideShowEducational();
    hideShowEducationalExtra();
    hideShowProfession();
    hideShowMilitary();
    hideShowLeaving();
});

function hideShowPassport(){
    $('#sf_fieldset_______________').show();
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




