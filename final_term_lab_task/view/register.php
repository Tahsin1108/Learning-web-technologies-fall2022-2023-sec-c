<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="#" method="post" onsubmit="createAccount()">
        <label for="">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <label for="">Name</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="">Contact No</label><br>
        <input type="text" name="contact" id="contact"><br>
        <br>
        <input type="submit" value="Create Account">
    </form>

    <p id="status_message"></p>


    <script>
        function createAccount(){
            event.preventDefault();
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            let name = document.getElementById('name').value;
            let contact = document.getElementById('contact').value;

            if(username == ''){
                document.getElementById('status_message').innerHTML = "you must fill username....!";
            }else if(password == ''){
                document.getElementById('status_message').innerHTML = "you must fill password...!";
            }else if(name == ''){
                document.getElementById('status_message').innerHTML = "you mus fill name....!";
            }else if(contact == ''){
                document.getElementById('status_message').innerHTML = "you must fill contact number....!";
            }else{

                let action = 'register_user';

                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/usersController.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('action=' + action + '&username='+username + '&password='+password + '&name='+name + '&contact='+contact);


                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('status_message').innerHTML = this.responseText;
                    }
                }
            }
        }
    </script>
</body>
</html>