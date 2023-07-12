function register() {
  let registrationRequest = {
    fname: $("#fname").val(),
    lname: $("#lname").val(),
    username: $("#username").val(),
    password: $("#password").val(),
    confirmPassword: $("#confirmPassword").val(),
  };

  $.(ajax({
    url: REGISTER_API,
    type: "POST",
    data: "register=" + JSON.stringify(registrationRequest),
    success: function (response) {},
    error: function (xhr, status, error) {},
  }))
}
