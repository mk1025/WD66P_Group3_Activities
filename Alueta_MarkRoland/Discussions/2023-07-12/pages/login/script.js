function login() {
  let loginRequest = {
    email: $("#exampleInputEmail").value,
    password: $("#exampleInputPassword").value,
  };

  $.ajax({
    url: LOGIN_API,
    type: "POST",
    data: "auth=" + JSON.stringify(loginRequest),
    success: function (response) {},
    error: function (xhr, status, error) {},
  });
}

function register() {
  window.location.href = "../register/";
}
