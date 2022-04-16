
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