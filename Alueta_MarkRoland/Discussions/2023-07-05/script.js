/* 

1. Declare a variable for your php api.

*/

const LOGIN_API = "login.php";

/* 

2. Create a function

*/
function login() {
  /* 
    
    3. Collect your data or user inputs and declare it as a json

    */

  let loginRequest = {
    email: $("#email").val(),
    password: $("#password").val(),
  };

  /* 
    4. Create the AJAX Request
  */

  $.ajax({
    url: LOGIN_API, // URL of the API
    type: "POST", // Type of request
    data: "auth=" + JSON.stringify(loginRequest), // auth will be out variable $_POST['auth']
    success: function (response) {
      console.log(response);
      /* 
        6. Check the response
      */

      let parseResponse = JSON.parse(response);
      $("#container").html(
        "<h1>" + parseResponse.title + "</h1><h2>" + parseResponse.description + "</h2>",
      );
    },
    error: function (xhr, status, error) {
      console.log(xhr, status, error);
    },
  });
}

function getProfile() {
  $.ajax({
    url: LOGIN_API, // URL of the API
    type: "POST", // Type of request
    data: "getLoggedUser=" + JSON.stringify(loginRequest), // auth will be out variable $_POST['auth']
    success: function (response) {
      console.log(response);
    },
    error: function (xhr, status, error) {
      console.log(xhr, status, error);
    },
  });
}
