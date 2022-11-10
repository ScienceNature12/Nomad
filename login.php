<?php
session_start();
include("db.php");

if (isset ($_POST['submit'])){

    $username=$_POST['username'];
    $pass=$_POST['password'];

    if ($username &&$pass){
        $query="SELECT id from user where username='$username' and password='".md5($pass)."'";
        $result=mysqli_query($conn, $query);
        $num=mysqli_num_rows($result);
        if ($num==1){
            $_SESSION['username']=$username;
            //correct login
            header("Location: dashboard.php");
        }
        else{
            //incorrect username/pass
            echo "Incorrect username/pass";
        }
    }
}
?>

<html>

<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="main.css">
  <meta charset="UTF-8">
  <meta name="keywords" content="contact info, bio, art, design, cs">
  <meta name="description" content="Tyler Bolen's design portfolio">
  <meta name="author" content="Tyler Bolen">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <nav>
    
    <div class="name">
      <h1> Nomad Work Source </h1>
    </div>
    <input type="checkbox" id="menu-icon"><label for="menu-icon"></label>
    <ul>
      <a href="#cool">
        <li>Coolworks</li>
      </a>
      <a href="#woof">
        <li>Woofing</li>
      </a>
      <a href="#van">
        <li>Van Life</li>
      </a>
      <a href="#footer">
        <li>CONTACT ME</li>
      </a>
    </ul>
  </nav>

   <div class="about">
    <div class="bio">
      <p>This is where you will find info on how to be a nomad. Nomad are people who love to travel and not live in one place for too long.</p>
      <br><br>
      <h1>Login</h1>
      <form method="post" action="">
        <p> Username  <input type ="text" name="username"> </p> <br>
        <p> Password <input type="password" name= "password"></p> <br>
        <input type ="submit" value="Login in" name="submit">
        <br>

        <p> No Account <a href="register.php">Register Here </a></p>
</form>
    </div>
  </div>

  <hr>
  
   <div class="cool">
    <a name="cool"></a>
    <div class="cool">
      <h2>CoolWorks:</h2>
      <p> <a href="https://www.coolworks.com/">Coolworks</a> is a website where you can find all kinds of seasonal jobs and jobs in national parks. 
      </p>
    <h3>Some photos I took when I had a seasonal job in AK</h3>
    </div>
    <div id="AK">
    
      <p>Here are some examples of the many types of scapes I photograph</p>

      <a href="#img1">
        <img class="imags" src="https://live.staticflickr.com/65535/52489749525_82aaaa211c_c.jpg" width="720" height="576"   alt="photograph of some whales">
      </a>

      <!-- lightbox container hidden with CSS -->
      <a href="#scapes" class="lightbox" id="img1">
        <span style="background-image: url('https://live.staticflickr.com/65535/52489749525_82aaaa211c_c.jpg')"></span>
      </a>

      <p>More photos coming soon</p>
    </div>
  </div>

  <hr>
  
  <div class="woof">
    <div class="woof">
      <a name="woof"></a>
      <h2>WWoofing:</h2>
      <p><a href="https://wwoof.net/">WWoofing</a> Stands for World Wide  Opportunities on Organic Farms. This is a great way to work and travel </p>
    </div>
  </div>

  <hr>
  
   <div class="van">
    <div class="van">
      <a name="van"></a>
      <h2>Van Life:</h2>
      <p> A great way to live in the back of your van and travel around the country. 
      </p>
    </div>
  </div>

  <hr>
  
  <footer>
    <a name="footer"></a>

    <span class="contact">
      <p>Email:<a href="Mailto:tylermbolen@gmail.com"> tylermbolen@gmail.com</a> | Phone: (509)4756297 </p>
    </span>

    <div class="social">
 
      </a>
      <a target="_blank" href="https://www.instagram.com/tylerbolenarts/">
        <svg class="instagram" width="66" height="67" viewBox="0 0 66 67" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8455 2.97624C24.0488 2.82549 25.0701 2.79199 33.2298 2.79199C41.3896 2.79199 42.4109 2.82828 45.6115 2.97624C48.812 3.1242 50.9967 3.64624 52.9082 4.40278C54.9099 5.17608 56.7259 6.38487 58.2279 7.9482C59.7572 9.48082 60.9369 11.3345 61.6906 13.3836C62.4334 15.3377 62.9413 17.5711 63.0888 20.8373C63.2363 24.1175 63.269 25.1616 63.269 33.5003C63.269 41.8418 63.2335 42.8859 63.0888 46.1605C62.9441 49.4268 62.4334 51.6601 61.6906 53.6143C60.9369 55.6636 59.7552 57.5204 58.2279 59.0552C56.7259 60.6186 54.9099 61.8246 52.9082 62.5951C50.9967 63.3544 48.812 63.8737 45.6169 64.0244C42.4109 64.1752 41.3896 64.2087 33.2298 64.2087C25.0701 64.2087 24.0488 64.1724 20.8455 64.0244C17.6504 63.8764 15.4658 63.3544 13.5542 62.5951C11.5495 61.8245 9.73326 60.6165 8.23179 59.0552C6.70356 57.5217 5.52093 55.6658 4.76637 53.6171C4.02631 51.6629 3.51837 49.4296 3.37091 46.1633C3.22344 42.8831 3.19067 41.839 3.19067 33.5003C3.19067 25.1588 3.22617 24.1147 3.37091 20.8429C3.51564 17.5711 4.02631 15.3377 4.76637 13.3836C5.52205 11.3347 6.70558 9.47891 8.23452 7.94541C9.73386 6.38347 11.5483 5.17452 13.5515 4.40278C15.463 3.64624 17.6477 3.12699 20.8428 2.97624H20.8455ZM45.3684 8.50374C42.2006 8.35578 41.2503 8.32508 33.2298 8.32508C25.2094 8.32508 24.2591 8.35578 21.0913 8.50374C18.1611 8.64053 16.5718 9.14024 15.5122 9.56178C14.1113 10.1201 13.1091 10.7817 12.0577 11.8565C11.0611 12.8477 10.2941 14.0544 9.81295 15.388C9.40059 16.4712 8.91177 18.0959 8.77796 21.0914C8.63323 24.3297 8.60319 25.3012 8.60319 33.5003C8.60319 41.6994 8.63323 42.6709 8.77796 45.9093C8.91177 48.9047 9.40059 50.5295 9.81295 51.6127C10.2936 52.9443 11.0609 54.1531 12.0577 55.1441C13.0271 56.1631 14.2096 56.9475 15.5122 57.4389C16.5718 57.8604 18.1611 58.3601 21.0913 58.4969C24.2591 58.6449 25.2067 58.6756 33.2298 58.6756C41.253 58.6756 42.2006 58.6449 45.3684 58.4969C48.2986 58.3601 49.8879 57.8604 50.9475 57.4389C52.3484 56.8805 53.3506 56.2189 54.402 55.1441C55.3988 54.1531 56.1661 52.9443 56.6468 51.6127C57.0591 50.5295 57.5479 48.9047 57.6817 45.9093C57.8265 42.6709 57.8565 41.6994 57.8565 33.5003C57.8565 25.3012 57.8265 24.3297 57.6817 21.0914C57.5479 18.0959 57.0591 16.4712 56.6468 15.388C56.1006 13.9559 55.4534 12.9313 54.402 11.8565C53.4324 10.8378 52.252 10.0537 50.9475 9.56178C49.8879 9.14024 48.2986 8.64053 45.3684 8.50374V8.50374ZM29.393 42.9669C31.5358 43.8787 33.9218 44.0018 36.1435 43.315C38.3651 42.6283 40.2847 41.1744 41.5742 39.2016C42.8638 37.2288 43.4433 34.8595 43.2139 32.4984C42.9845 30.1373 41.9603 27.9309 40.3164 26.2559C39.2684 25.1853 38.0012 24.3655 36.6061 23.8555C35.2109 23.3456 33.7226 23.1582 32.2481 23.3069C30.7736 23.4555 29.3497 23.9366 28.079 24.7153C26.8082 25.4941 25.7221 26.5511 24.8989 27.8105C24.0757 29.0698 23.5359 30.5001 23.3183 31.9983C23.1008 33.4965 23.2108 35.0254 23.6406 36.4749C24.0704 37.9244 24.8093 39.2584 25.8039 40.381C26.7986 41.5036 28.0244 42.3867 29.393 42.9669ZM22.312 22.3392C23.7457 20.8735 25.4478 19.7109 27.3211 18.9177C29.1944 18.1244 31.2022 17.7162 33.2298 17.7162C35.2575 17.7162 37.2653 18.1244 39.1386 18.9177C41.0119 19.7109 42.714 20.8735 44.1477 22.3392C45.5815 23.8049 46.7188 25.545 47.4947 27.46C48.2707 29.375 48.6701 31.4275 48.6701 33.5003C48.6701 35.5731 48.2707 37.6256 47.4947 39.5407C46.7188 41.4557 45.5815 43.1957 44.1477 44.6614C41.2521 47.6215 37.3248 49.2845 33.2298 49.2845C29.1349 49.2845 25.2076 47.6215 22.312 44.6614C19.4164 41.7013 17.7896 37.6865 17.7896 33.5003C17.7896 29.3141 19.4164 25.2993 22.312 22.3392V22.3392ZM52.0945 20.0668C52.4497 19.7242 52.7342 19.3122 52.9309 18.8552C53.1277 18.3982 53.2327 17.9054 53.2398 17.4062C53.2469 16.9069 53.156 16.4113 52.9724 15.9486C52.7887 15.4859 52.5162 15.0656 52.1708 14.7125C51.8254 14.3594 51.4143 14.0808 50.9617 13.8931C50.5091 13.7054 50.0242 13.6124 49.5358 13.6197C49.0475 13.627 48.5655 13.7344 48.1184 13.9355C47.6714 14.1366 47.2683 14.4274 46.9332 14.7906C46.2814 15.4969 45.9245 16.4352 45.9383 17.4062C45.9522 18.3771 46.3356 19.3044 47.0073 19.991C47.679 20.6777 48.586 21.0697 49.5358 21.0838C50.4857 21.098 51.4035 20.7332 52.0945 20.0668V20.0668Z" fill="black" />
        </svg>

      </a>

    </div>
  </footer>

</body>
    </html>