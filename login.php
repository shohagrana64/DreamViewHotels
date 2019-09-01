<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Login</title>
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
            <li><a href="signup.php">Signup</a></li>
            <li class="current"><a href="login.php">Login</a></li>
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
          <h1 class="page-title">3 Largest Hotel Companies</h1>
          <ul id="services">
            <li>
              <h3>DreamView Hotels Ltd</h3>
              <p>DreamView Hotels Company, commonly referred to as Dream Hotels (DH), is an American multinational corporation headquartered in Detroit that designs, manufactures, markets, and leases homes and home appliences, and sells other services, with global headquarters in Detroit's Renaissance Center. It was originally founded by William C. Durant on September 16, 1908 as a holding company. The company is the largest American hotel service provider, and one of the world's largest. As of 2018, Dreamview hotels is ranked #10 on the Fortune 500 rankings of the largest United States corporations by total revenue.</p>
            </li>
            <li>
              <h3>Cromlix Ltd</h3>
              <p>This meticulously resorted Victorian manse set on 34 acres of Scottish woodlands first made headlines in 2014, when it was acquired by none other than tennis star Andy Murray, who hails from this part of Perthshire. Yet you'll find almost no trace of the pro here other than his fondness for this nook of the Highlands. Famed French chef Albert Roux runs the kitchen at Chez Roux at Cromlix, offering up elegant French-meets-Scottish food. There is also a whiskey room where guests can kick back and enjoy a number of different Scottish whiskies, as well as rooms for private dining. As with any Scottish estate, it's all about the daytime activities. Cromlix offers tennis coaching on their own Wimbledon-grade courts (of course), loch fishing, archery, garden games, and falconry.</p>
            </li>
            <li>
              <h3>Taj Falaknuma Palace</h3>
              <p>At this palatial 32-acre hilltop estate, there's an art to the first impression: Because cars aren’t permitted beyond the front gate, visitors arrive at reception in a golf cart or, for VIPs, a horse-drawn carriage. In lieu of a formal check-in desk, a standard bearer greets guests by militarily clicking his heels before leading them under a shower of rose petals and into the former ruler of Hyderabad’s neo-Palladian palace. The rest of the experience is no less impressive, with museum-quality reception rooms furnished in late-Victorian style, gleaming with burnished wood and leather, and a gracious garden courtyard with trees and fountains is flanked by two wings housing most of the 60 rooms. (Just beyond one of the wings, the suites faithfully decorated in a grand Edwardian manner surround a smaller, star-shaped courtyard</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Login to your Account</h3>
            <form class="quote" action="check.php" method="POST">
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Email Address" name="email" required>
  						</div>
              <div>
                <label>Password</label><br>
                <input type="text" placeholder="Password" name="password" required>
              </div>
  			  <div>
                <label>Account Type</label><br>
               </div>
				<div>
				<div>
					<input type="radio" name="type" value="c" required>Customer
					
					<input type="radio" name="type" value="a" required>Admin
              </div>				             
              <div>
                <h5> </h5>
              </div>
  						<button class="button_1" type="submit">login</button>
			</form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p> CSE370 Project </p>
    </footer>
  </body>
</html>