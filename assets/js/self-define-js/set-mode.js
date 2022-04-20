var btnClick = true;
$("#alertsDropdown").click(function(){
    $('.btn').toggleClass('darkmodebtn');
    if(btnClick)
    {
        localStorage.removeItem('lightmode');
        localStorage.setItem('darkmode', 0);
        $('#clickMode').addClass('bi-moon-fill').removeClass('bi-brightness-high-fill');
        $('#accordionSidebar').addClass('darkmode').removeClass('lightmode');
        $('#content>.navbar').addClass('darkmode');
        btnClick = false;
    }
    else
    {
        localStorage.removeItem('darkmode');
        localStorage.setItem('lightmode', 1);
        $('#clickMode').addClass('bi-brightness-high-fill').removeClass('bi-moon-fill');
        $('#accordionSidebar').addClass('lightmode').removeClass('darkmode');
        $('#content>.navbar').removeClass('darkmode');
        btnClick = true;
    }
});
  
