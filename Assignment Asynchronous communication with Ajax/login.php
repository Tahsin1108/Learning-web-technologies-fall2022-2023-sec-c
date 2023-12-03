<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

    <h2>Login details</h2>
    <form action="#" method="post" onsubmit="userLogin()">
        <label for="email">Enter Email</label>
        <input type="email" name="email" id="email"><br>
        <label for="password">Enter Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login Now">
    </form>
    
    <p id="message"></p>
    
    <script>
        function userLogin(){
            event.preventDefault();
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            if(email == ''){
                document.getElementById('message').innerHTML = 'Please enter your email address...!';
            }else if(password == ''){
                document.getElementById('password').innerHTML = 'Please enter a password...!';
            }else{

                let action = 'login';
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', 'controller/personController.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('action='+action+'&email='+email+'&password='+password);
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        if(this.responseText == 'correct_details'){
                            window.location.href = "http://localhost/learning-web-technologies-fall2023-2024-sec-c/Assignment_Asynchronous_communication_with_Ajax/home.php";
                        }else{
                            document.getElementById('message').innerHTML = this.responseText;
                        }                        
                    }
                }
            }
        }
    </script>
</body>
</html>