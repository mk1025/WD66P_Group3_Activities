let myEmail = "admin";
let myPassword = "12345";

function loginForm() {
    let inputEmail = document.getElementById("myEmail");
    let inputPassword = document.getElementById("myPassword");

    inputEmail = inputEmail.value;
    inputPassword = inputPassword.value;

    if (inputEmail == "" || inputPassword == "") {
        removeRenderAlertMessage();
        addAlert("alert-warning", "Please input email and password");
    }
    else if (inputEmail == myEmail && inputPassword == myPassword) {
        removeRenderAlertMessage();
        addAlert("alert-success", "Successfully login");
    }
    else {
        removeRenderAlertMessage();
        addAlert("alert-danger", "Wrong email and password");
    }
}

function removeRenderAlertMessage() {
    let currentAlerts = document.getElementsByClassName("alert");

    for (let i=0; i<currentAlerts.length; i++) {
        let message = currentAlerts[i];
        message.parentNode.removeChild(message);
    }
}

function addAlert(alertType, alertMessage) {
    const div = document.createElement('div');
    div.textContent = alertMessage;
    div.classList.add("alert");
    div.classList.add(alertType);
    
    const parent = document.getElementById("alertMessage");
    parent.appendChild(div);
}

