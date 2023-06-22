"use strict";

let sampleUsername = "admin";
let samplePassword = "password";

function login() {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let genderRadio = document.getElementsByName("gender");
  let subjectCheckBox = document.getElementsByName("subject");
  let sampleTextArea = document.getElementById("sampleTextArea");
  let country = document.getElementById("country");

  console.log(sampleTextArea.value);
  console.log(country.value);

  for (const element of subjectCheckBox) {
    if (element.checked) {
      console.log(element.value);
    }
  }

  for (const element of genderRadio) {
    if (element.checked) {
      document.getElementById("myGender").innerText = element.value;
    }
  }

  /*
      Removes the previous Elements first before
      outputting the new ones.
  */
  removeRenderedElements("failed");
  removeRenderedElements("success");

  if (username == sampleUsername && password == samplePassword) {
    createNewElement("Login Successful", "success");
  } else {
    createNewElement("Invalid Username or Password", "failed");
  }
}

function createNewElement(desc, classAdd) {
  let element = document.createElement("div");
  element.innerText = desc;
  element.classList.add(classAdd);
  document.getElementById("container").appendChild(element);
}

function removeRenderedElements(input) {
  let collections = document.getElementsByClassName(input);
  let arraycollections = Array.from(collections); // collections but in an array
  console.log(arraycollections);

  // Solution 1: Simple
  for (let arraycollection in arraycollections) {
    arraycollections[arraycollection].remove(); // the remove() method is a built-in method of the DOM
  }

  /* Solution 2: 
     Repetitious to be honest so it isn't advisable, 
     I commented this out so you won't use it
  */
  // for (let arraycollection in arraycollections) {
  //   arraycollections[arraycollection].parentNode.removeChild(
  //     arraycollections[arraycollection],
  //   );
  // }
}
