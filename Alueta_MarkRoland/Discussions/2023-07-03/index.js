$(document).ready(function () {});

$(function () {
  console.log("Test JQuery");

  /* 
    JavaScript Code
  */
  let pJS = document.getElementsByTagName("p");
  console.log("JS by Tag -> ", pJS);

  let idJS = document.getElementById("element");
  console.log("JS By ID -> ", idJS);

  let classJS = document.getElementsByClassName("class");
  console.log("JS By Class -> ", classJS);

  /* 
    JQuery Code
  */
  let pQuery = $("p");
  pQuery.css("color", "red");
  console.log("JQUERY By Tag -> ", pQuery);

  let idQuery = $("#element");
  idQuery.css("font-size", "50px");
  console.log("JQUERY By ID -> ", idQuery);

  let classQuery = $(".class");
  classQuery.css("color", "blue");
  console.log("JQUERY By Class -> ", classQuery);

  let textQuery = $("#element");
  textQuery.text("I am parsed Text");
  console.log("textQuery -> ", textQuery);

  let container = $("#container");
  container.html("<h1 id='h1test'>Hi</hi><h2>Hello World</h2>");
  console.log("Container -> ", container.html());
  console.log("Container H1 -> ", $("#h1test").text());
  console.log("Container H2 -> ", $("#container h2").text());
});

function clickMe() {
  console.log($("#test_button").val()); // getter
  $("#test_button").val("I am new value upon click"); // setter
}
