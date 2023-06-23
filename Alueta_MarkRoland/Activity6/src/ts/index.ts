const DEFAULT_USERNAME = "admin";
const DEFAULT_PASSWORD = "password";

function checkLogin() {
  let email_address = document.getElementById("login_email_address") as HTMLInputElement;
  let password = document.getElementById("login_password") as HTMLInputElement;

  let alerts = document.querySelectorAll("#alerts") as NodeListOf<HTMLDivElement>;
  let alert_red = document.getElementById("alert-red") as HTMLDivElement;
  let alert_yellow = document.getElementById("alert-yellow") as HTMLDivElement;
  let alert_green = document.getElementById("alert-green") as HTMLDivElement;

  for (let alert of alerts) {
    if (!alert.classList.contains("hidden")) {
      alert.classList.add("hidden");
    }
  }

  if (email_address.validity.valid && password.validity.valid) {
    if (email_address.value == DEFAULT_USERNAME && password.value == DEFAULT_PASSWORD) {
      alert_green.classList.remove("hidden");
    } else {
      alert_red.classList.remove("hidden");
    }
  } else {
    alert_yellow.classList.remove("hidden");
  }

  //   console.log(email_address, password);
}
