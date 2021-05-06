<?php 
ob_start()
   session_start();
   if(isset($_SESSION['user'])) {
   header('location:index.php'); }
   require_once("config/database.php");


require_once("config/database.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $dbpdo->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Pesbuk</title>

       <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div class="login">
                 <h1>Akun Demo</h1>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="stmik">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="123">
            </div>
          </div>


      <h1>Form Login</h1>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username"></label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="password"></label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="button button-1" name="login" value="Login" />
            <a href="register.php" class="button button-2"> Daftar </a>

        </form>      
    </div>

</body>
</html>