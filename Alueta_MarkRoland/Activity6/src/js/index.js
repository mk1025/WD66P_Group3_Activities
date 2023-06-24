"use strict";
const DEFAULT_USERNAME = "admin@email.com";
const DEFAULT_PASSWORD = "password";
function checkLogin() {
    var _a, _b, _c;
    let email_address = document.getElementById("login_email_address");
    let password = document.getElementById("login_password");
    let alerts = document.getElementById("alerts");
    for (let alert of alerts.children) {
        if (!alert.classList.contains("hidden")) {
            alert.classList.toggle("hidden");
        }
    }
    if (email_address.validity.valid && password.validity.valid) {
        if (email_address.value === DEFAULT_USERNAME && password.value === DEFAULT_PASSWORD) {
            (_a = alerts.querySelector("#alert-green")) === null || _a === void 0 ? void 0 : _a.classList.toggle("hidden");
        }
        else {
            (_b = alerts.querySelector("#alert-red")) === null || _b === void 0 ? void 0 : _b.classList.toggle("hidden");
        }
    }
    else {
        (_c = alerts.querySelector("#alert-yellow")) === null || _c === void 0 ? void 0 : _c.classList.toggle("hidden");
    }
}
