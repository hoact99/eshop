//Sidebar toggle set state

let value = localStorage.getItem("sidebarToggle");

if (value == 1) {
    $("#accordionSidebar").addClass("toggled");
} else {
    $("#accordionSidebar").removeClass("toggled");
}

$("#sidebarToggle").click(function() {
    let isSet = $("#accordionSidebar").hasClass("toggled");

    if (isSet) {
        $("#accordionSidebar").addClass("toggled");
        value = 1;
    } else {
        $("#accordionSidebar").removeClass("toggled");
        value = 0;
    }

    localStorage.setItem("sidebarToggle", value);
});
   
//Sidebar items set state

$(function() {
    let url = window.location.href;
    $("a").each(function() {
        if (this.href === url) {
            $(this).addClass('active');
            $(this).closest('.collapse-item').addClass('active');
            $(this).closest('.nav-item').addClass('active');
            if (value == 0)
                $(this).closest('.collapse').addClass('show');
        }
    });
})
