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


$(document).ready(function () {
    $(".bread-hover").mouseover(function () {
        $("a.display-none").show();
    });
    $(".bread-hover").mouseout(function () {
        setTimeout(function () {
            $('a.homeClass').hide();
        }, 3000);
    });
    $(".collapse-title").click(function () {
        $(".overlay").fadeToggle();
    });
    $(".accordian-arrow").click(function () {
        $(".fa-minus").toggle();
    });
});



