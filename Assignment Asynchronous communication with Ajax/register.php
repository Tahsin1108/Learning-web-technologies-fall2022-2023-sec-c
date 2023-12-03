<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>

    <h2>Resiter Now</h2>
    <form action="#" method="post" onsubmit="userRegister()">
        <label for="name">Enter Name</label>
        <input type="text" name="name" id="name"><br>
        <label for="email">Enter Email</label>
        <input type="email" name="email" id="email" onblur="checkEmail()"><br>
        <p id="email_message"></p>
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone"><br>
        <label for="password">Enter Password</label>
        <input type="password" name="password" id="password"><br>
        <label for="c_password">Confirm Password</label>
        <input type="text" name="c_password" id="c_password"><br>
        <input type="submit" value="Login Now">
    </form>
    
    <p id="message"></p>
    
    <script>

        function checkEmail(){
            let email = document.getElementById('email').value;
            let action = 'get_email';
            let xhttp = new XMLHttpRequest();
            xhttp.open('GET', `controller/personController.php?action=${action}&email=${email}`, true);
            xhttp.send();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('email_message').innerHTML = this.responseText;
                }
            }
        }

        function userRegister(){
            event.preventDefault();
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
            let password = document.getElementById('password').value;
            let c_password = document.getElementById('c_password').value;

            if(name == ''){
                document.getElementById('message').innerHTML = 'Please enter your name...!';
            }else if(email == ''){
                document.getElementById('message').innerHTML = 'Please enter your email...!';
            }else if(phone == ''){
                document.getElementById('message').innerHTML = 'Please enter your phone...!';
            }else if(password == ''){
                document.getElementById('message').innerHTML = 'Please enter your password...!';
            }else if(c_password == ''){
                document.getElementById('message').innerHTML = 'Please enter your confirm password...!';
            }else if(c_password !== password){
                document.getElementById('message').innerHTML = 'Your Password and confirm password does not match..!';
            }else{
                let action = 'register';
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', 'controller/personController.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('action='+action+'&name='+name+'&email='+email+'&phone='+phone+'&password='+password);
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        
                        document.getElementById('message').innerHTML = this.responseText;
                    }
                }
            }

        }

        
    </script>
</body>
</html>