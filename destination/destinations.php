<!DOCTYPE html>
<html>
<head>
	<title>4HF Tour & Travels|Destinations</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="../css/footerCSS.css">
	<link rel="stylesheet" href="../css/navStyle.css">
	<link rel="stylesheet" href="../css/HomepageCss.css">
	<link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/scrollCSS.css">
	<script defer src = "../JS/search-boxScript.js"></script>
</head>
<body id="body">
<header>
	<div class="top2">
		<div class="logo" style="height: 100px;width: 125px;">
			<a href="../homepage.html">
				<svg height="100" width="125">
					<ellipse cx="62.5" cy="50" rx="55" ry="45" fill="url(#grad2)"/>
					<polygon points="62.5,5 85,50 62.5,95 40,50" style="stroke: rgb(255, 255, 255); fill: rgba(255, 255, 0, 1);"/>
					<text fill ="#000000" font-size="25" font-family="Verdana"
						x="20" y="60">4</text>
						<text fill ="#000000" font-size="25" font-family="Verdana"
						x="52.5" y="60">H</text>
						<text fill ="#000000" font-size="25" font-family="Verdana"
						x="90" y="60">F</text>
						<text fill ="#000000" font-size="13" font-family="Verdana"
						x="20" y="80">Tour &amp; Travel</text>
						
					<defs>
						<linearGradient id="grad2" x1="0%" y1="0%" x2="50%" y2="0%" x3="51%" y3="0%" x4="100%" y4="100%">
							<stop offset="0%" style="stop-color: rgb(0, 255, 0);stop-opacity: 1;"/>
							<stop offset="100%" style="stop-color: rgb(255, 255, 0);stop-opacity: 1;"/>
							<stop offset="100%" style="stop-color: rgb(255, 255, 0);stop-opacity: 1;"/>
							<stop offset="200%" style="stop-color: rgb(255, 0, 0); stop-opacity: 1;"/>
						</linearGradient>
					</defs>
					
				</svg>
			</a>
		</div>
		<div class = "login-container">
			<button class = "blogs" ><a href = "Tips.html" >Travel Blogs</a></button>
			<button class = "login" style = "width:100px;"><a href = "tour guide/Profiles/log in.html">Log In</a></button>    
		</div>
		<div  class = "search-bar-container">
			<div class="input-container">
				<input class = "searchBar" type = "Search" name = "searchBar" value = "" placeholder = "Where to go... " list = "ethiopia">
				<a href = "#" class = "search-icon">
					<i class="fa fa-2x fa-search" aria-hidden="true"></i>
				</a>
			</div>
			
			<div class = "autocom-box" style="margin-left: 10px;">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
	</div>
	<nav>
    <label for="fa-bars-label" class = "fa-bars-label" onclick="changeFont()">
        <i class="fas fa-bars"></i>
    </label>
    <input type="checkbox" id = "fa-bars-label">
    <ul>
        <li><a href="../homepage.html">Home</a></li>
        <li>
            <label for="dest-label" class="show">Destinations+</label>
            <a href="destination/destinations.html">Destinations</a>
            <input type="checkbox" id = "dest-label">
            <ul>
                <li>
                    <label for="addis-label" style = "margin-left: 50px;" class="show">Addis A.+</label>
                    <a href = "addisababa/addisababa.html">Addis Ababa</a>
                    <input type="checkbox" id = "addis-label">
                    <ul>
                        <li><a href="addisababa/mountentoto.html">Entoto</a></li>
                        <li><a href="addisababa/unitypark.html">Unity Park</a></li>
                        <li><a href="addisababa/friendshippark.html">Friendship Park</a></li>
                        <li><a href="addisababa/zomamuseum.html">Zoma Museum</a></li>
                    </ul>
                </li>
                <li>
                	  <label for="Bahir-label" style = "margin-left: 50px;" class="show">Bahirdar+</label>
                    <a href = "bahirdar/bahirdar.html">Bahirdar</a>
                    <input type="checkbox" id = "Bahir-label">
                    <ul>
                        <li><a href="bahirdar/laketana.html">Lake Tana</a></li>
                        <li><a href="bahirdar/azwamariam.html">Azwa Mariam</a></li>
                        
                    </ul>
                </li>


                <li><a href = "harar/harar.html">Harar</a> </li>
                <li><a href = "gonder/gonder.html">Gonder</a></li>
                <li><a href = "afar/afar.html">Afar</a></li>
                <li><a href = "jinka/jinka.html">Jinka</a></li>
            </ul>
        </li>
        <li>
            <label for="hotel-label" class="show">Hotel+</label>
            <a href="../Hotel Reservation/hotel reservation.html">Hotel Reservation</a>
            <input type="checkbox" id = "hotel-label">
            <ul >
                <li><a href = "../Hotel Reservation/Sheraton Addis/Sheraton Addis.html">Sheraton</a></li>
                <li><a href = "../Hotel Reservation/Skylight/Skylight.html">Skylight</a></li>
                <li><a href = "../Hotel Reservation/Golden Tulip/Golden Tulip.html">Golden Tulip</a></li>
                <li><a href = "../Hotel Reservation/Hyatt/Hyatt.html">Hyatt</a></li>
                <li><a href = "../Hotel Reservation/Marriott/Marriott.html">Mariott</a></li>
                <li><a href = "../Hotel Reservation/Emerald/Emerald Lodge.html">Emerald</a></li>
            </ul>
        </li>
        <li>
            <label for="transport-label" class="show">Transport+</label> 
            <a href="../transportation/transport.html">Transport</a>
            <input type="checkbox" id = "transport-label">
            <ul>
                <li><a href = "../transportation/transport.html">For family</a></li>
                <li><a href = "../transportation/transport.html">For Alone</a></li>
                <li><a href = "../transportation/transport.html">For Group</a></li>
            </ul>
        </li>
        <li class="tour-guide"><a href="../tour guide/tour guide.html">Tour Guide</a></li>
        <li class="Experience"><a href="../homepage.html#ex" >Experience</a></li> 
        <li class="About-us"><a href="../About us/About us.html">About us</a></li>
    </ul>
</nav>
</header>
<main>

		<h1>Amazing places to visit</h1>


		<div class="slideContainer">

			<div class="slider">
				<div class="slide active">
					<img src="images/addis.jpg" alt="addis" >
					<div class="info">
						<h2>Addis Ababa</h2>
						<p></p>
					</div>
				</div>
	
				<div class="slide">
					<img src="images/bahirdar.jpg" alt="bahir dar">
					<div class="info">
						<h2>Bahirdar</h2>
						<p></p>
					</div>
				</div>
	
				<div class="slide">
					<img src="images/jinka.jpeg" alt="jinka">
					<div class="info">
						<h2>Jinka</h2>
						<p></p>
					</div>
				</div>
	
				<div class="slide">
					<img src="images/harer.jpeg" alt="harer">
					<div class="info">
						<h2>Harer</h2>
						<p></p>
					</div>
				</div>
	
				<div class="slide">
					<img src="images/gonder.jpg" alt="gonder">
					<div class="info">
						<h2>Gonder</h2>
						<p></p>
					</div>
				</div>
	
				<div class="slide">
					<img src="images/afar.jpg" alt="afar">
					<div class="info">
						<h2>Afar</h2>
						<p></p>
					</div>
				</div>

				<div class="slide">
					<img src="images/arbaminch.jpg" alt="arba Minch">
					<div class="info">
						<h2>Arbaminch</h2>
						<p></p>
					</div>
				</div>

				<div class="slide">
					<img src="images/axum.jpg" alt="axum">
					<div class="info">
						<h2>Axum</h2>
						<p></p>
					</div>
				</div>

				<div class="slide">
					<img src="images/lalibela.jpg" alt="lalibela">
					<div class="info">
						<h2>Lalibela</h2>
						<p></p>
					</div>
				</div>
	
				<div class="navigation">

					<svg height="50" width="50" class="prev-btn">
	
	
						<polygon points="10,25 40,5 40,15 25,25 40,35 40,45 "
							style="stroke: rgb(255, 255, 255); fill: rgb(0, 0, 0);" />
	
					</svg>
					<svg height="50" width="50" class="next-btn">
	
	
						<polygon points="10,5 40,25 10,45 10,35 25,25 10,15 "
							style="stroke: rgb(255, 255, 255); fill: rgb(0, 0, 0);" />
	
					</svg>

				</div>
				<div class="navigation-visibility">
					<div class="slide-icon active">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255); " />
	
						</svg>
					</div>
					<div class="slide-icon">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255); " />
	
						</svg>
					</div>
					<div class="slide-icon">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255); " />
	
						</svg>
					</div>
					<div class="slide-icon">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255); " />
	
						</svg>
					</div>
					<div class="slide-icon">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255); " />
	
						</svg>
					</div>
					<div class="slide-icon">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255);" />
	
						</svg>
					</div>
					<div class="slide-icon">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255); " />
	
						</svg>
					</div>
					<div class="slide-icon">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255); " />
	
						</svg>
					</div>
					<div class="slide-icon">
						<svg height="20" width="30">
	
	
							<polygon class="slideSvg" points="1,1 29,1 29,15 1,15" style="stroke: rgb(255, 255, 255); " />
	
						</svg>
					</div>
				</div>
			</div>
	
	
	
		</div>


		

		<div class="alone-grid">
            <div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/addis.jpg" alt="addis abaab">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Addis Ababa</h2>
                        <p class="alone-card-text">
                            Addis Ababa,capital and largest city of Ethiopia is located
									 on a well-watered plateau surrounded by hills and mountains in
									  the geographic centre of the country.
                        </p>
                        <button class="alone-card-btn"><a href="addisababa/addisababa.html">See More</a></button>
                    </div>
                </div>
            </div>

            <div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/bahirdar.jpg" alt="bahir dar">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Bahir Dar</h2>
                        <p class="alone-card-text">
                            Situated on the outskirts of the famous Lake Tana, 600km north of Addis Ababa, Bahir Dar is the third largest and arguably the most beautiful city in Ethiopia. As the capital for the...
                        </p>
                        <button class="alone-card-btn"><a href="bahirdar/bahirdar.html">See More</a></button>
                    </div>
                </div>
            </div>

			<div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/jinka.jpeg" alt="jinka">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Jinka</h2>
                        <p class="alone-card-text">
                            Jinka in the region of Southern Nations, Nationalities, and People's Region with its 32,115 habitants is a town located in Ethiopia, 441km South-West of Addis Ababa the country's capital .
                        </p>
                        <button class="alone-card-btn"><a href="jinka/jinka.html">See More</a></button>
                    </div>
                </div>
            </div>

			<div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/harer.jpeg" alt="harar">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Harar</h2>
                        <p class="alone-card-text">
                            Dating back to the previous millennium, the beautiful city of Harar is one of the oldest 
				cities in Ethiopia ...
                        </p>
                        <button class="alone-card-btn"><a href="harar/harar.html">See More</a></button>
                    </div>
                </div>
            </div>

			<div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/gonder.jpg" alt="gonder">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Gonder</h2>
                        <p class="alone-card-text">
                            Known for its remarkable collection of crumbling castles, fortifications and 17th century 
                			churches, Gonder is often referred to as the ???Camelot of Africa??? ...
                        </p>
                        <button class="alone-card-btn"><a href="gonder/gonder.html">See More</a></button>
                    </div>
                </div>
            </div>

			<div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/afar.jpg" alt="afar">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Afar</h2>
                        <p class="alone-card-text">
                            The Afar region covers the northeastern part of Ethiopia. The Afar depression, also known as the Danakil 
							depression, forms the northern part of the region and is largely desert, whilst the Awash River valley 
							forms the southern part of the area ...
                        </p>
                        <button class="alone-card-btn"><a href="afar/afar.html">See More</a></button>
                    </div>
                </div>
            </div>

			<div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/arbaminch.jpg" alt="arba Minch">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Arbaminch</h2>
                        <p class="alone-card-text">
							Arba Minch is a district and city in southern Ethiopia. It consists of 2 areas: Schecha, the uptown administrative center, 
							and Sikela, a commercial and residential zone 8 miles away.The greatest attraction for tourists in the area is Nechisar 
							National Park ...
                        </p>
                        <button class="alone-card-btn"><a href="arbaminch/arbaminch.html">See More</a></button>
                    </div>
                </div>
            </div>

			<div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/axum.jpg" alt="axum">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Axum</h2>
                        <p class="alone-card-text">
                            Aksum, also spelled Axum, ancient town in northern Ethiopia. It lies at an elevation of about 
				7,000 feet (2,100 metres), just west of Adwa. Known for its monumental obelisk ...
                        </p>
                        <button class="alone-card-btn"><a href="axum/axum.html">See More</a></button>
                    </div>
                </div>
            </div>

			<div class="alone-grid-item scroll">
                <div class="alone-card">
                    <div class="imc">
                    <img class="alone-card-img" src="images/lalibela.jpg" alt="lalibela">
                    </div>
                    <div class="alone-card-content">
                        <h2 class="alone-card-header">Lalibela</h2>
                        <p class="alone-card-text">
                            Lalibela is often referred to as the ???New Jerusalem??? of Africa. One of the legends is that 
							an angel took the Emperor of Lalibela to Jerusalem to see the churches there. Struck with
							 wonder ...
                        </p>
                        <button class="alone-card-btn"><a href="lalibela/lalibela.html">See More</a></button>
                    </div>
                </div>
            </div>

		</div>
</main>
<footer class="scroll">
	<div class="container scroll">
		<div class="row">
			<div class="footer-items">
				<h4>Terms and Privacy</h4>
				<ul id = "lists" style="color:#bbb;text-decoration: none;" >
					<li><a href="#">Faq</a></li>
					<li><a href="../About us/About us.html">About us</a></li>
					<li><a href="#">Privacy policy</a></li>
					<li>Travel informations</li>
				</ul>
			</div>
			<div class="footer-items">
				<h4>Contacts</h4>
				<ul id = "lists">
					<li>Tel : +251111234534</li>
					<li><a style="color:#bbb;text-decoration: none;" href="mailto:email@gmail.com">E-mail</a></li>
				</ul>
			</div>
			<div class="footer-items">
				<h4>Follow us on</h4>
				<div class="socials">
					<a href="#"><i class="fab fa-youtube"></i></a>
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-telegram"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>

				</div>
			</div>
			<div class = "copyright" style = "width:100%; text-align: center;color: white;">
				<i>Copyright 2022 by Refsnes Data. All Rights Reserved.</i>
			 </div>
		</div>
	</div>
</footer>
<div class="to-top">
		<a href="#body">
			<i class="fas fa-chevron-up"></i>
		</a>
	</div>
	<script defer src="js/destinations.js"></script>
	<script>
		const toTop = document.querySelector(".to-top");
		window.addEventListener("scroll" ,() => {
			if(window.scrollY > 200){
				toTop.classList.add("visible");
			}else{
				toTop.classList.remove("visible");
			}
		});

	</script>
 </body>
</html>