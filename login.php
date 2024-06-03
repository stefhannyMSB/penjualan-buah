<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
        <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <center>
      <header id="navbar">
        <nav class="navbar-container container">
          <a href="/" class="home-link">
            <div class="navbar-logo"></div>
            Website Name
          </a>
          <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
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
        <form class="form-login" action="login-proses.php" method="post">
          <h3>Login</h3>
          <p>Login Jika anda Sudah memiliki Akun</p>
          <label for="">Username</label>
          <input class="input" type="text" name="username" placeholder="Username" />
          <label for="">Password</label>
          <input class="input" type="password" name="password" placeholder="Password" />
          <!-- <button class="button" type="submit" name="tombol" onclick="myFunction()">Login</button> -->
          <button class="button" type="submit" name="login">Login</button>
          <p id="info"></p>
          <!-- <script>
            function myFunction() {
              let person = prompt("anda sudah login?", " ");
              if (person != null) {
                document.getElementById("info").innerHTML = `Halo ${person} login anda sukses`;
              }
              alert("login anda berhasil");
            }
          </script> -->
      
          <p>Belum punya akun? <a href="registrasi.php">Daftar Sekarang</a></p>
          </form>
        

      </main>
    </center>
  </body>
</html>
