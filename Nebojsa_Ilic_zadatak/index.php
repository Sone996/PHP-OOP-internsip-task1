<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Page</title>
        <style>
            *{
                margin: 0 auto;
            }
            #container{
                width:400px;
                margin: 0 auto;
                border: 1px solid black;
            }
            header{
                height: 20vh;
                width: 100%;
                background-color: orange;
                margin: 0 auto;
            }
            footer{
                height: 20vh;
                width: 100%;
                background-color: orange;
                margin: 0 auto;
            }
            main{
                height: 60vh;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <header></header>
        <main>
            <script type="text/javascript" language="javascript">
                function submitlogin() {
                    var form = document.login;
                    if (form.username.value == "") {
                        alert("Enter username.");
                        return false;
                    } else if (form.password.value == "") {
                        alert("Enter password.");
                        return false;
                    }
                }
            </script>
            <span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size: 13px; font-style: normal; line-height: 1.5;"><div id="container"></span>
            <h1>Login</h1>
            <form action="" method="post" name="login">
                <table>
                    <tbody>
                        <tr>
                            <th>Username:</th>
                            <td><input type="text" name="username" required="" /></td>
                        </tr>
                        <tr>
                            <th>Password:</th>
                            <td><input type="password" name="password" required="" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input onclick="return(submitlogin());" type="sub
                                       
                                       
                                       0 mit" name="submit" value="Login" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

        <!--REGISTRACIJA-->
        <!--TREBA DA SE SREDI-->




        <script type="text/javascript" language="javascript">
            function submitreg() {
                var form = document.reg;
                if (form.username.value == "") {
                    alert("Enter username.");
                    return false;
                } else if (form.password.value == "") {
                    alert("Enter password.");
                    return false;
                } else if (form.password.value == "") {
                    alert("Password doesnt match.");
                    return false;
                }
            }
        </script>
        <div id="container">
            <h1>Registration </h1>
            <form action="" method="post" name="reg">
                <table>
                    <tbody>
                        <tr>
                            <th>User Name:</th>
                            <td><input type="text" name="username" required="" /></td>
                        </tr>
                        <tr>
                            <th>Password:</th>
                            <td><input type="password" name="password" required="" /></td>
                        </tr>
                        <tr>
                            <th>Repeat password:</th>
                            <td><input type="password" name="password" required="" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input onclick="return(submitreg());" type="submit" name="submit" value="Register" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>




      











    </main>
    <footer></footer>
</body>
</html>
