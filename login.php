<!DOCTYPE html>
<html>
<head>
    <title>Login_Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" autocomplete="off">
        
        <h1><span>Login</span></h1>
        <label for="username">ID</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br>
        
        <input class="btn btn-primary" type="submit" value="로그인">
    </form>
    
    <?php
    $valid_username = "admin";
    $valid_password = "admin1234";

    // 폼이 제출되었을 때
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submitted_username = $_POST["username"];
        $submitted_password = $_POST["password"];

        // 입력된 사용자 이름과 비밀번호를 확인
        if ($submitted_username == $valid_username && $submitted_password == $valid_password) {
            session_start();

            $_SESSION['ss_id'] = $submitted_username;
    
            echo "<script>
                alert('로그인 성공!');
                self.location.href='succes.php', 'login.php';
            </script>";
        }
        else
        {
            echo "<script>
                alert('로그인 실패!');
                self.location.href='login.php';
            </script>";
        }
    }
    ?>
</body>
</html>