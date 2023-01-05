<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" type="text/css" href="../css/v1.css">
    </head>
    <body>
        <span>
            <a class="button" href="login.php">Back to Login</a>
        </span>
        <div>
            <span id="forgotPasswordTitle">Verify it's You</span>
            <form id="forgotPassword" action="resetPassword.php">
                Display security question?<input type="button" class="button" value="Display" onClick="getSecurityQuestion()">
                <br>
                <input type="text" class="form" name="name" class="" placeholder="Answer"><br>
                <span id = "forgotPassResetQuestion"></span><br>
                <input type="submit" class="button button2" name="" class="" value="Confirm">
        </div>
                <script>
                function getSecurityQuestion(){
                    question="My Birth Month?";
                    document.getElementById("forgotPassResetQuestion").innerHTML=question;     
                }
            </script>
        </form>

    </body>
</html>