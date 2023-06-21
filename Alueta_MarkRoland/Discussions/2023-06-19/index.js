"use strict";

function onClick() {
  console.log("On Click");
}

function onMouseOver() {
  console.log("On Mouse Over");
}

function onMouseOut() {
  console.log("On Mouse Out");
}

document.getElementById("mybutton").addEventListener("click", alertMe);
