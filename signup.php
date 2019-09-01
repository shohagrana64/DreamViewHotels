<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   
    <title>Signup</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Dreamview</span> Hotels Ltd</h1>
        </div>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li class="current"><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>You can visit our market</h1>
        <nav>
          <form>
            <button type="nav" class="button_1" ><a href="allcars.php">View Market</a></button>
          </form>
        </nav>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Be A Proud User</h1>
          
      <div class="dark">
          <h3>Login to your Account</h3>
		 
            <form class="quote" action="signupInsart.php" method="POST">
              <div>
                <label>Name</label><br>
                <input type="text" placeholder="Full Name" name="name" required>
              </div>
              <div>
                <label>Address</label><br>
                <input type="Address" placeholder="Address" name="address" required>
              </div>
              <div>
                <label>Age</label><br>
                <input type="text" placeholder="Must be 18+" name="age" required>
              </div>
              <div>
                <label>Email</label><br>
                <input type="email" placeholder="Email Address" name="email" required>
              </div>
              <div>
                <label>Password</label><br>
                <input type="text" placeholder="Password" name="password" required>
              </div>
             
              <div>
                <h5> </h5>
              </div>
              <button class="button_1" type="submit" >Signup</button>
           </form> 
      </div>
    </section>

    <footer>
      <p> CSE370 Project</p>
    </footer>
  </body>
</html>
