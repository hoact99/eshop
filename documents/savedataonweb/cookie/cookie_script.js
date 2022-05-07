// Create Cookie
document.cookie = "favorite_food=tripe; SameSite=None; Secure";
document.cookie = "username=framgia; expires=Thu, 18 Dec 2016 12:00:00 UTC";
document.cookie = "username=framgia; expires=Thu, 18 Dec 2016 12:00:00 UTC; path=/";

// Read Cookie
var x = document.cookie;

// Change content Cookie
document.cookie = "username=framgia company; expires=Thu, 18 Dec 2016 12:00:00 UTC; path=/";

// Delete Cookie
document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC";

// Note that we are setting `SameSite=None;` in this example because the example
// needs to work cross-origin.
// It is more common not to set the `SameSite` attribute, which results in the default,
// and more secure, value of `SameSite=Lax;`


document.cookie = "name=oeschger; SameSite=None; Secure";


// Set Cookie
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + "; " + expires;
}

// Get Cookie
function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') {
          c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
          return c.substring(name.length,c.length);
      }
  }
  return "";
}

// Check cookie

function checkCookie() {
  var username=getCookie("username");
  if (username!="") {
      alert("Welcome again " + username);
  } else {
      username = prompt("Please enter your name:", "");
      if (username != "" && username != null) {
          setCookie("username", username, 365);
      }
  }
}



function showCookies() {
  const output = document.getElementById('cookies')
  output.textContent = '> ' + document.cookie
}

function clearOutputCookies() {
  const output = document.getElementById('cookies')
  output.textContent = ''
}

const cookieValue = document.cookie
  .split('; ')
  .find(row => row.startsWith('test2='))
  .split('=')[1];

function showCookieValue() {
  const output = document.getElementById('cookie-value')
  output.textContent = '> ' + cookieValue
}

function clearOutputCookieValue() {
  const output = document.getElementById('cookie-value')
  output.textContent = ''
}