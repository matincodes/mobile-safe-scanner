 <!DOCTYPE html>
 <html>
 <head>
 	<title>UltraApp</title>
 	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 	<link rel="stylesheet" type="text/css" href="index.css">
 	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
 </head>
 <body>
 	<section class="container" id="blur">
 		<div class="sub-container">
	 	<header>
	 		<nav class="logo">
	 			<img src="img/logo.png">
	 		</nav>
	 	</header>
	 	<div class="text">
		 	<h1>What do you think about <span>Ultrasound</span> going Mobile?</h1>
		 	<p>Are you excited?</p>
		 	<h2>Join the beta list to be the first to have access</h2>
		 </div>
	 	 <form action="server.php" method="post">
	 	 	<div class="form-group">
		 	 	<label>Email address</label>
			 	<input type="email" name="email" placeholder="Enter Your Email">
		 	</div>
		 	<button name="button">GET EARLY ACCESS</button>
	  	 </form>
	  	 <div class="phone">
	  	 	<img src="img/iPhone.png">
	  	 </div>
	  	 <div class="img-content">
	  	 <div class="click">
	  	 	<h3>click images to view app</h3>
	  	 </div>
	  	 <div class="images">
	  	 	<img id="img1" onclick="toggle()" src="img/img1.png">
	  	 	<img id="img2" onclick="toggle2()" src="img/img2.png">
	  	 	<img id="img3" onclick="toggle3()" src="img/img3.png">
	  	 	<img id="img4" onclick="toggle4()" src="img/img4.png">
	  	 	<img id="img5" onclick="toggle5()" src="img/img5.png">
	  	 	<img id="img6" onclick="toggle6()" src="img/img6.png">
	  	 </div>
	  	 </div> 
  	 	</div>
  	 </section>
  	 	 <div id="popup">
	  	 	<img onclick="toggle()" src="img/popup1.png">
	  	 </div>
	  	 <div id="popup2">
	  	 	<img onclick="toggle2()" src="img/popup2.png">
	  	 </div>
	  	 <div id="popup3">
	  	 	<img onclick="toggle3()" src="img/popup3.png" width="360px">
	  	 </div>
	  	 <div id="popup4">
	  	 	<img onclick="toggle4()" src="img/popup4.png" width="360px">
	  	 </div>
	  	 <div id="popup5">
	  	 	<img onclick="toggle5()" src="img/popup5.png" width="360px">
	  	 </div>
	  	 <div id="popup6">
	  	 	<img onclick="toggle6()" src="img/popup6.png" width="360px">
	  	 </div>
  	 <script type="text/javascript" src="index.js"></script>
   </body>
 </html>