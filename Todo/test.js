// Side bars
$('.view-logs').on('click', function(e) {
    $('aside.right-side').addClass("visible");
});

$('.close-menu').on('click', function(e) {
    $('aside.right-side').removeClass("visible");
});

$('.navbar-toggle').on('click', function(e) {
    $('aside.left-side').addClass("visible");

    $("body").on('mouseup', function (e) {
        var container = $("aside.left-side");

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.removeClass("visible");
            $("body").unbind("mouseup");
        }
    });
});

// Navigation Dropdown Menu
$('.collapsible-menu').on('click', function() {
    $(this).toggleClass("active");
    $(this).parent().find('.collapse').slideToggle('250');
});

// View Search Bar Event
$('.view-search').on('click', function() {
    if ($(this).hasClass("opened")) {
        $(this).removeClass("opened");
        $('#search').animate({ width: "0" }, { duration: 350, complete: function() { $(this).hide(); } });
    } else {
        $(this).addClass("opened");
        $('#search').animate({ width: "275px" }, 350 ).focus();
    }
});