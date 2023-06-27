const DEFAULT_USERNAME = "admin@email.com";
const DEFAULT_PASSWORD = "password";

function checkLogin() {
  let email_address = document.getElementById("login_email_address") as HTMLInputElement;
  let password = document.getElementById("login_password") as HTMLInputElement;

  let alerts = document.getElementById("alerts") as HTMLDivElement;

  for (let alert of alerts.children) {
    if (!alert.classList.contains("hidden")) {
      alert.classList.toggle("hidden");
    }
  }

  if (email_address.validity.valid && password.validity.valid) {
    if (email_address.value === DEFAULT_USERNAME && password.value === DEFAULT_PASSWORD) {
      alerts.querySelector("#alert-green")?.classList.toggle("hidden");
    } else {
      alerts.querySelector("#alert-red")?.classList.toggle("hidden");
    }
  } else {
    alerts.querySelector("#alert-yellow")?.classList.toggle("hidden");
  }
}
