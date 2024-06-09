<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login dan Resgister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="wrapper">
        <div class="form Login">
            <header>Login</header>
            <form action="controller_login.php" method="POST">
                <input type="text" placeholder="Email" name="email" required/>
                <input type="password" placeholder="password" name="pswd" required/>
                <div class="checkbox">
                    <input type="checkbox" id="signupcheck">
                    <label for="signupcheck"> saya menyetujui kebijakan</label>
                </div>
                <input type="submit" value="submit">
                <p class="text-center mt-2">belum punya akun? silahkan <a href="../register/form_register.php">Register</a></p>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </section>
</body>
</html>