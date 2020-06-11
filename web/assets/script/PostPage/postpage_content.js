$(document).ready(function(){
    $("#Form").hide();
    $("#CloseComment").hide();
    $("#CommentButton").on("click", function (event) {

        if ($.trim($("textarea").val())) {

            $.ajax({
                url: window.location.href,
                type: "POST",
                dataType: "json",
                async: true,

                success: function (data, status) {

                    console.log(data);
                    $("#CommentsContent").html(" ");

                    var html = "";
                    var counter = 1;
                    var comment;

                    for (comment in data) {

                        if (counter == 1) {

                            html += "<div id=\"BreakLine\" style=\"margin-bottom: 7vh;\"></div>";
                            html += "<div style=\"margin-bottom: 7vh;\">";
                            html += "<h5>" + counter + ". Komentar</h5>";
                            html += "<div>" + item.message + "</div>";
                            html += "</div>"

                        } else {

                            html += "<div style=\"margin-bottom: 7vh;\">";
                            html += "<h5>" + counter + ". Komentar</h5>";
                            html += "<div>" + item.message + "</div>";
                            html += "</div>"
                        }
                        counter += 1;
                    }

                    console.log(html);
                    $("#CommentsContent").append(html);
                },
                error: function (xhr, textStatus, errorThrown) {

                    console.log(errorThrown);
                }
            })
        }
    })
});

function addComment() {
    $("#Form").slideToggle("fast");
    $("#AddComment").animate({"left": "-15%"}, "fast").fadeOut("fast");
    $("#CloseComment").animate({"right": "+9%"}, "fast").fadeIn("fast");
}

function closeComment() {
    $("#Form").slideToggle("fast");
    $("#AddComment").css("left", "-15%").fadeIn("fast").animate({"left": "0%"}, "fast");
    $("#CloseComment").animate({"right": "-9%"}, "fast").fadeOut("fast");
}