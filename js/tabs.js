var selector = $(".box-tabs"),
    contents = $(".tab-content");

selector.find("a").click(function(e) {
    e.preventDefault();
    $(this).parent().addClass("active card");
    $(this).parent().siblings().removeClass("active card");
    var tab = $(this).attr("href");
    contents.not(tab).css("display", "none").removeClass("active");
    $(tab).addClass("active").fadeIn();
});
