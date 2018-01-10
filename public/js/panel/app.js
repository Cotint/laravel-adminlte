$(document).ready(function(){
    $(".sidebar-toggle").click(function(){
        $(".fa-angle-left").toggle();
    });
});
$('#audit_submit').click(function(e){
    var event = e;
    $('.required-form').each(function () {
        if ($(this).val() == '') {
            event.preventDefault();
            $(this).css('border', '1px solid red');
            $(this).css('background-color', '#FFE9EC');
        }else{
            $(this).css('border', '1px solid #b7bcc1');
            $(this).css('background-color', '#fff');
        }
    });
});

setTimeout(function() {
    $('.alert-success').fadeOut('fast');
}, 1500); // <-- time in milliseconds

setTimeout(function() {
    $('.alert-danger').fadeOut('fast');
}, 1500); // <-- time in milliseconds







