<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Here</title>
    <link rel="stylesheet" href="./login.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

  </head>
  <body>

  <!-- <header> 
      <a href="#" class="logo"
        ><img src="../images/logo.png" alt="">Friendly Cafe</a
      >

      <div id="menu-bar" class="fas fa-hamburger"></div>

      <nav class="navbar">
        <ul>
          <li><a class="active" href="#home">home</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#menu">menu</a></li>
          <li><a href="#popular">popular</a></li>
          <li><a href="#gallery">gallery</a></li>
          <li>
            <a href="#home">CALL US : <span>+91 8967453765</span></a>
          </li>
        </ul>
      </nav>
    </header> -->
    <header>
      <a href="#" class="logo"><img src="../images/logo.png" alt="" /></a>
      <a href="#" class="logoname">Friendly Cafe</a>

      <!-- <div id="menu-bar" class="fas fa-hamburger"></div> -->

      <nav class="navbar">
        <!-- <section class="navlinks"> -->
        <ul>
          <li><a class="active" href="../index.html">Home</a></li>
          <!-- <li><a href="#about">about</a></li>
          <li><a href="#menu">menu</a></li>
          <li><a href="#popular">popular</a></li>
          <li><a href="#gallery">gallery</a></li> -->
          
        </ul>
        <!-- <div class="navsocial">
        <a href="https://www.facebook.com/"><i class="bx bxl-facebook" style="color: blue"></i></a>  
         <a href="https://www.instagram.com/"><i class="bx bxl-instagram" style="color: rgb(246, 6, 74)"></i></a> 
         <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="bx bxl-twitter" style="color: rgb(4, 165, 218)"></i></a>  -->
        </div>
       
      </nav>
    </header>
    <script src="../js/script.js"></script>
    <section>
      <div class="form-container">
        <h1>Welcome Back</h1>
        <form action="login.php" method="post">
          <?php if(isset($_GET['error'])) {
            ?> 
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php  }  ?>
          <div class="control">
            <label for="name">Name</label>
            <input type="text" name="uname" id="name" />
          </div>
          <div class="control">
            <label for="psw">Password</label>
            <input type="password" name="password" id="psw" />
          </div>
          <div class="control">
            <button type="submit" value="Login">Login</button>
          </div>
        </form>
        <div class="link">
          <a href="#">Forget password ?</a> <br> <br>
          <a href="../index.html">Home</a>
        </div>
      </div>
    </section>
    
  </body>
</html>
