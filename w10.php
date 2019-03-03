<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($password == "123456"){
        echo "로그인 되었습니다.";
    } else {
        echo "비밀번호를 확인해주세요.";
    }
   ?>
</body>
</html>