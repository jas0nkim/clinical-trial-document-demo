<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/pepper-grinder/jquery-ui-1.8.20.custom.css" />
    <title>Clinical Trial Document Template Generator</title>
</head>
<body>
    <h1>Welcome to Template Generator</h1>
    <h3>Please Login</h3>
    <form id="login-form">
        <div><lable>Username</lable><input type="text" name="username" /></div>
        <div><lable>Password</lable><input type="password" name="password" /></div>
        <div><input type="submit" value="Sign in" /></div>
    </form>

    <!-- javascript -->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
    <script type="text/javascript" src="js/jui-form.js"></script>
    <script type="text/javascript">
        $(function(){
            $("form").form();
        });
    </script>
</body>
</html>