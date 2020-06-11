require('../sass/home_page.sass');

$(document).ready(function(){

    $('.slider').slider();

    $(window).scroll(function () {
        if (window.scrollY >= 787)
            $("#Navbar").addClass("fixed-navbar");
        else
            $("#Navbar").removeClass("fixed-navbar");
    });

    $(".filter-item").on("click", function(event){
        $.ajax({
            url:        '/SPTS-PNIOv3/web/app_dev.php/',
            type:       'POST',
            dataType:   'text',
            async:      false,
            data: {
                ajax_id: 1,
                filter: $(this).find('span').text()
            },

            success: function(data, status) {

                document.getElementById('Posts').innerHTML = "<div class='row'>" + data + "</div>";
            },
            error : function(xhr, textStatus, errorThrown) {

                alert(errorThrown + '\n' + textStatus);
                console.table(xhr);
                //console.log(xhr.responseText);
            }
        });
        $(".filter-item").find("input").prop("checked", false);
        $(this).find("input").prop("checked", true);
    });
    
    $(".post").on("click", function (event) {

        $("#Post_Abstract").show();
    });

    $("#Post_Abstract").on("click", function (event) {

        if (event.target === event.currentTarget)
            $("#Post_Abstract").hide();
    });
});