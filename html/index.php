<html>  
<head>  
    <title>Sign in</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body style="background-color: #15161b; font-family: sans-serif;">  
    <div style="color: orange; margin-top: 10%;  text-align: center;" id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p style="margin-top: 2%;">  
                <label>Username</label><br /> 
                <input style="border-radius: 10px;" type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label>Password</label><br />
                <input style="border-radius: 10px;" type = "password" id ="pass" name  = "pass" />  
            </p><br />  
            <p>
                <input style="font-weight: bold; border: none; color: #15161b; background-color: orange; font-size: 22px; width: 150px; height: 60px; border-radius: 10px;" type =  "submit" id = "btn" value = "Login" /><br /><br />  
                <a style="color: orange;" href="./registration.php">Not registred yet ? Sign up now !</a>
            </p>  
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>