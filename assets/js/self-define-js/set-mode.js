$("#alertsDropdown").click(function(){
    $('#clickMode').toggleClass('bi-moon-fill').toggleClass('bi-brightness-high-fill');
    $('#accordionSidebar').toggleClass('darkmode').toggleClass('lightmode');
    $('#content>.navbar').toggleClass('darkmode');
    $('.btn').toggleClass('darkmodebtn');
});
