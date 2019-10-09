$(document).on("submit", ".form_login", function(event) {
    event.preventDefault();
    var $form = $(this);

    var data_form = {
        username: $("input[type='text']", $form).val(),
        password: $("input[type='password']", $form).val()
    }
    $("#msg_error").hide();
    var url_php = 'http://localhost/php/ajax/procesar_login.php';

    $.ajax({
            type: 'POST',
            url: url_php,
            data: data_form,
            dataType: 'json',
            async: true,
        })
        .done(function ajaxDone(res) {
            console.log(res);
            if (res.error !== undefined) {
                $("#msg_error").html(res.error).show();
                return false;
            }
            if (res.redirect !== undefined) {
                window.location = res.redirect;
            }
        })
        .fail(function ajaxError(e) {
            console.log(e);
        })
        .always(function ajaxSiempre() {
            console.log('Final de la llamada ajax.');
        });
    return false;
});