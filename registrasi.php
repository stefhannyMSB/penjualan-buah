<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <header id="navbar">
            <nav class="navbar-container container">
                <a href="/" class="home-link">
                    <div class="navbar-logo"></div>
                    Website FShop
                </a>
                <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu"
                    aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="navbar-menu" aria-labelledby="navbar-toggle">
                    <ul class="navbar-links">
                        <li class="navbar-item"><a class="navbar-link" href="index.php">Home</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="login.php">Login</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="registrasi.php">daftar</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="form-login">
                <h3>daftar</h3>
                <form action="registrasi-proses.php" method="post">
                <div class="">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control" id="email" name="email">
             </div><br>
                <div class="">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
             </div><br>
             <div class="">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="button" name="daftar" id="daftar">daftar</button>
            </form>
                <script>
                function myFunction() {
                    let text = "";
                    let pil = confirm("apakah anda sudah melakukan register ?");
                    if (pil == true) {
                        text = "Ya, anda sudah register";
                    } else {
                        text = "Tidak anda belum register ";
                    }
                    document.getElementById("info").innerHTML = text;
                }
                </script>
            </div>
        </main>
    </center>
</body>
</html>