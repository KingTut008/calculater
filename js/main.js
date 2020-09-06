$("document").ready(function() {
    $("#form_calculater").submit(function (e) {
        e.preventDefault();

        $(".data_form").css("display", "none");
        $(".bloc_result").css("display", "block");

        $.ajax({
            url:     "/calculate.php",
            type:     "POST",
            dataType: "html",
            data: $(this).serialize(), 
            success: function(response) {
                result = $.parseJSON(response);
                $(".result").html(result);
            },
            error: function(respsonse) { // Данные не отправлены
                $(".result").html('Ошибка. Данные не отправлены.');
            }
         });
    });

    $("#refresh").on("click", function() {
        $(".bloc_result").css("display", "none");
        $(".data_form").css("display", "block");

        $('#form_calculater')[0].reset();
    });
});