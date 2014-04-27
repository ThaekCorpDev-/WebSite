<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

		<link href="css/jquery.bxslider.css" rel="stylesheet" />
		<title>ThaekCorp</title>
		<meta charset="utf-8">
		<style type="text/css">
* {
	margin: 0;
	padding: 0;
	
	-webkit-font-smoothing: antialiased;
	
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}






.banner {
	position: relative;
	width: 100%;
	overflow: auto;
	
	font-size: 18px;
	line-height: 24px;
	text-align: center;
	
	color: rgba(255,255,255,.6);
	text-shadow: 0 0 1px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.3);
	
	background: #5b4d3d;
	box-shadow: 0 1px 2px rgba(0,0,0,.25);
}
	
	.banner ul li {
		display: block;
		float: left;
		width: 33%;
		padding: 160px 0 110px;
		
		min-height: 330px;
		
/*		-webkit-background-size: 100% 100%;*/
		-moz-background-size: 100% 100%;
		-o-background-size: 100% 100%;
		-ms-background-size: 100% 100%;
/*		background-size: 100% 100%;*/
		
		box-shadow: inset 0 -3px 6px rgba(0,0,0,.1);


	}
	
	
	
	
		
	





		</style>
	</head>
	<body>
	<header>
		<div class="blackline">
			
			<img class="icon_twitter_thaek" src="images/twitter.png">
			<img class="icon_youtube" src="images/youtube.png">
			<img class="icon_facebook" src="images/facebook.gif">
			<h1 class="titre">ThaekCorp</h1>
			<div class="join"><br />Se connecter</div>
		</div>
		
			
		<div class="banner">
			<ul>
				<li style="background-image: url('images/1500x500.jpeg');">
					
				</li>
				
				
				
			</ul>
		</div>
		
		<div class="nav">
			<div class="team">Team</div>
			<div class="equipe">Equipe</div>
			<img class="drapeau_nav" src="images/drapeau.png">
			<div class="recrutement">Recrutement</div>

		</div>
	</header>
	<div class="body">
		<div class="news">
			<div class="titre_news">Article 1 : Site en construction</div>
			<div class="content">
				<div class="signature"><p>Rédigé par : MrYuri39 Le 19/04/2014</p></div>
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus sed lorem quis bibendum. Sed gravida in risus nec pulvinar. Nulla fringilla pulvinar mattis. In rhoncus massa vitae nulla iaculis dignissim. Suspendisse non dapibus nisi. Morbi eget pellentesque turpis. Nullam aliquam orci ligula, at pretium nunc faucibus at. Praesent dignissim nulla in libero fermentum commodo.<br />

	Nunc sodales suscipit lorem, dignissim pellentesque enim sagittis a. Fusce ullamcorper leo nisl, id aliquam enim vestibulum eu. Donec vitae vulputate enim, vitae cursus nulla. In hac habitasse platea dictumst. Donec tincidunt mattis eros, ut porttitor eros sagittis dapibus. Vestibulum nec purus id neque sodales faucibus. In auctor, felis vitae tristique tempor, nulla tellus convallis nisl, nec pretium arcu libero sit amet eros. Donec ut felis eu nisi elementum iaculis non at lacus.<br />

	Fusce metus risus, pulvinar nec dui sit amet, consectetur pretium eros. Curabitur malesuada convallis nisi, quis egestas lacus convallis at. Aliquam molestie justo quis ipsum convallis tristique. Ut cursus risus quis lacus volutpat, eu euismod nibh malesuada. Phasellus vel sapien eget dolor ullamcorper porttitor vitae ac ante. Morbi consequat leo nec lobortis dapibus. Fusce auctor libero sit amet mi aliquam ullamcorper.<br />

	Praesent ac mauris orci. Vestibulum sit amet feugiat sapien, eget accumsan nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis ac leo a sollicitudin. Pellentesque quis quam tristique nibh posuere posuere sit amet id arcu. Cras vel nisl sit amet erat tristique volutpat. Aliquam lorem massa, ornare sit amet adipiscing non, blandit non velit. Donec eleifend orci risus, quis varius mauris tempus at. Sed.<br /></div>
			</div>
		</div>
		<div class="twitter">
			<a class="twitter-timeline" href="https://twitter.com/ThaekCorp" data-widget-id="457511285437894657">Tweets de @ThaekCorp</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


		</div> 

</div>
		<div class="footer">ThaekCorp <div class="dev">Creer par : MrYuri, Amora1...</div></div>





		<script src="//code.jquery.com/jquery-latest.min.js"></script>
		
		<script src="//stephband.info/jquery.event.move/js/jquery.event.move.js"></script>
		<script src="//stephband.info/jquery.event.swipe/js/jquery.event.swipe.js"></script>
			
		<script src="//unslider.com/unslider.min.js"></script>
		<script>
			if(window.chrome) {
				$('.banner li').css('background-size', '100% 100%');
			}
			
			$('.banner').unslider({
				fluid: true,
				dots: true,
				speed: 500
			});
		
			//  Find any element starting with a # in the URL
			//  And listen to any click events it fires
			$('a[href^="#"]').click(function() {
				//  Find the target element
				var target = $($(this).attr('href'));
				
				//  And get its position
				var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};
				
				//  jQuery will return false if there's no element
				//  and your code will throw errors if it tries to do .offset().left;
				if(pos) {
					//  Scroll the page
					$('html, body').animate({
						scrollTop: pos.top,
						scrollLeft: pos.left
					}, 1000);
				}
				
				//  Don't let them visit the url, we'll scroll you there
				return false;
			});
			
			var GoSquared = {acct: 'GSN-396664-U'};
		</script>
	</body>
</html>
