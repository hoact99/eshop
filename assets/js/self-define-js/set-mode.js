// var btnClick = true;
// $("#alertsDropdown").click(function(){
//     $('.btn').toggleClass('darkmodebtn');
//     if(btnClick)
//     {
//         localStorage.removeItem('lightmode');
//         localStorage.setItem('darkmode', 0);
//         $('#clickMode').addClass('bi-moon-fill').removeClass('bi-brightness-high-fill');
//         $('#accordionSidebar').addClass('darkmode').removeClass('lightmode');
//         $('#content>.navbar').addClass('darkmode');
//         btnClick = false;
//     }
//     else
//     {
//         localStorage.removeItem('darkmode');
//         localStorage.setItem('lightmode', 1);
//         $('#clickMode').addClass('bi-brightness-high-fill').removeClass('bi-moon-fill');
//         $('#accordionSidebar').addClass('lightmode').removeClass('darkmode');
//         $('#content>.navbar').removeClass('darkmode');
//         btnClick = true;
//     }
// });
  
let toggle = document.getElementById("alertsDropdown");

let storedTheme = localStorage.getItem('theme') || (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");
if (storedTheme === "dark") {
    $('#clickMode').addClass('bi-brightness-high-fill').removeClass('bi-moon-fill');
} else {
    $('#clickMode').addClass('bi-moon-fill').removeClass('bi-brightness-high-fill');
}

if (storedTheme) {
    document.documentElement.setAttribute('data-theme', storedTheme);
}
    

toggle.onclick = function() {
    let currentTheme = document.documentElement.getAttribute("data-theme");
    let targetTheme = "light";

    if (currentTheme === "light") {
        targetTheme = "dark";
    }

    if (targetTheme === "dark") {
        $('#clickMode').addClass('bi-brightness-high-fill').removeClass('bi-moon-fill');
    } else {
        $('#clickMode').addClass('bi-moon-fill').removeClass('bi-brightness-high-fill');
    }

    document.documentElement.setAttribute('data-theme', targetTheme)
    localStorage.setItem('theme', targetTheme);
};
