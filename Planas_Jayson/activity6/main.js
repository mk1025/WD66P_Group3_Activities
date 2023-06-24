let myEmail = "admin";
let myPassword = "12345";

function login() {
    let inputEmail = document.getElementById("inputEmail").value;
    let inputPassword = document.getElementById("inputPassword").value;
    let alertMessage = document.getElementById("alert");

    if (inputEmail == "" || inputPassword == "") {
        addAndRemoveAlert("alert-warning","alert-success","alert-danger","Please input email and password");
    }
    else if (inputEmail == myEmail && inputPassword == myPassword) {
        addAndRemoveAlert("alert-success","alert-warning","alert-danger","Successfully login");
    }
    else if (inputEmail != myEmail || inputPassword != myPassword ){
        addAndRemoveAlert("alert-danger","alert-success","alert-warning","Wrong email and password");
    }
}

function addAndRemoveAlert (addClass, removeClass1, removeClass2, addAlertMessage) {
    let alertMessage = document.getElementById("alert");
    alertMessage.classList.add(addClass);
    alertMessage.classList.remove(removeClass1);
    alertMessage.classList.remove(removeClass2);
    alertMessage.classList.remove("visually-hidden");
    alertMessage.innerText = addAlertMessage;
}

