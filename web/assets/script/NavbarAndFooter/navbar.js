$(document).ready(function(){
    $(".dropdown-trigger").dropdown();
    $('select').formSelect();
    $("select").on("change", function (event) {
        $.ajax({
            url: "http://localhost/SPTS-PNIOv3/web/app_dev.php/",
            type: "POST",
            dataType: "json",
            async: true,

            success: function (data, status) {

                //$("#PostAsItems").html(" ");
                //$("#PostAsItems").append(data);
                console.log(data);
            },
            error: function (xhr, textStatus, errorThrown) {

                console.log(errorThrown);
            }
        })
    })
});