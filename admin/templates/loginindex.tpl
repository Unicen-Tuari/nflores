
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="NT5 admin">
    <meta name="author" content="Jacksun">

    <title>NT5-Admin</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="js/javascript.js"></script>
    <script src="http://crypto-js.googlecode.com/svn/tags/3.0.2/build/rollups/md5.js"></script>


  </head>

  <body>

    <div class="container">
      <div class="row header-admin-into">
        <h1>Bienvenido a Administracion</h1>
      </div>
      <div class="row cuerpo-login">
        <div class="col-lg-6 columna-izq">
          <form class="form-signin" action="index.php?action=login" id="form-login">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmaillogin" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPasswordlogin" class="sr-only">Password</label>
            <input type="password" id="inputPasswordlogin" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
        <div class="col-lg-6 columna-der">
          <h2 class="form-signin-heading">Register Form</h2>
            <form class="form-horizontal" action="index.php?action=register" id="form-register">
              <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmailregister" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPasswordregister" class="sr-only">Password</label>
            <input type="password" id="inputPasswordregister" class="form-control" placeholder="Password" required>
            <br>
                  <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
            </form>
        </div>
      </div>

    </div>
  </body>
</html>
