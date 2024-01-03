<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登入介面</title>
</head>
<body>
    <h1>登入頁面</h1>
    <form method="post" action="login.php">
    帳號：
    <input type="text" name="userid" required><br/><br/>
    密碼：
    <input type="password" name="password" required><br><br>
    <input type="submit" value="登入" name="submit">
    </form>
    <a href="register.php">還沒有帳號？現在就註冊！</a>
</body>
</html>