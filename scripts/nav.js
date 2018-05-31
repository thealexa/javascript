/*
File Name: hamburger.js
Date: 05/1/18
Programmer: Alexandra Nitsche
*/

$(document).ready(function() {
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }

    }
});