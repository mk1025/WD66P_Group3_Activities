function createNewElement() {
  const div = document.createElement("div");
  div.textContent = "This is a warning message";
  div.classList.add("message");
  document.body.appendChild(div);

  const parent = document.getElementById("container");
  parent.appendChild(div);
}

function greet() {
  let name = prompt("What is your name?");
  document.getElementById("firstName").innerText = name;
}

function iterate() {
  let name = prompt("What is your name?");
  let testClasses = document.getElementsByClassName("test-class");

  for (let testClass in testClasses) {
    // console.log(testClass); // just to see the index of the array
    testClasses[testClass].innerText = name;
  }
}
