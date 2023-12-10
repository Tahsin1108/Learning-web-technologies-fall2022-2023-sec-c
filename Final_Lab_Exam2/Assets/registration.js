function validateForm() {
    let name = document.getElementById("name").value;
    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let gender = document.querySelector('input[name="gender"]:checked').value;

    let error = "";

    if (name === "") {
        error += "name must be filled out<br>";
    }
    if (username === "") {
        error += "username must be filled out<br>";
    }

    if (email === "") {
        error += "Email must be filled out<br>";
    }

    if (password === "") {
        error += "Password must be filled out<br>";
    }

    if (confirmPassword === "") {
        error += "Confirm Password must be filled out<br>";
    }

    if (password !== confirmPassword) {
        error += "Passwords do not match<br>";
    }

    if (!gender) {
        error += "Gender must be selected<br>";
    }

    document.getElementById("error").innerHTML = error;
    if (!error) {
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../controller/registrationCheck.php", true);
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );
        let data = {
            name: name,
            username: username,
            email: email,
            password: password,
            gender: gender,
        };
        let jsonData = JSON.stringify(data);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                let res = JSON.parse(this.responseText);
                if (res.success) {
                    window.location.replace("./login.php");
                } else if (res.error) {
                    document.getElementById("error").innerHTML = res.error;
                }
            }
        };

        xhttp.send("data=" + jsonData);
    }
}
