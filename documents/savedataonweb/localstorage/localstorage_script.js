// Create local storage
localStorage.setItem("username", "local storage");

// Remove local storage
// localStorage.removeItem("lastname");

// Read local storage
var getLocalStorage = localStorage.getItem("username");
console.log(getLocalStorage);

// Clear local storage
// localStorage.clear();

// Length
var localStorageLength = localStorage.length;
console.log(localStorageLength);