<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" type="text/css" href="Praktikum.css">
    </head>
    <body>
        <form action= "Praktikum.php" method="post">
        <div class="kotak_login">
            <p class="login">Sign in</p>
         
            <form>
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username Atau Email">
         
                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password">
                <p>
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>  
         
                <input type="submit" class="tombol_login" value="LOGIN">
         
                <br/>
                <br/>
            </form>
            
        </div>
    </body>
</html>    