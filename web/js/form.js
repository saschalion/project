$(document).ready(function() {
    showBlockForm();
});

function showBlockForm() {
        $('.block-form').live('click', function() {
            //$('.block.size-3').css('width','907px');
            if($('#sf_fieldset__________________________').css('width') == '500px'){
                $('#sf_fieldset__________________________').animate({
                width: "300px"
                }, 500 )
            } else {
                $('#sf_fieldset__________________________').animate({
                display: "none"
                }, 500 )
            }
            return false;
        });
}
