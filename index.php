<!doctype html>  
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Youtube - YouLOL</title>
		<meta name="description" content="Realized using css3, html5, JS and PHP">
		<meta name="author" content="Davide Ciacco">
		<meta name="viewport" content="width=800, user-scalable=yes">
		
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="fonts/fonts.css">
		
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.js'></script>
		<script src="jquery.transit.js" type="text/javascript"></script>
	</head>
	
	<body style="background-image: url('sfnd.png');">
	</body>
		
		<toggle-r>
			<inside-r>
				<foundicon-idea></foundicon-idea>
			</inside-r>
		</toggle-r>
		
		<header>
			<toggle-l>
				<inside-l>
					<foundicon-idea></foundicon-idea>
				</inside-l>
			</toggle-l>
			<menu>
			
			</menu>
		</header>
		<br>
		<h1>YouTube-YouLOL!</h1>
		<h2>Created by Davide Ciacco</h2>
		<div class="contents">
			<div id="post">
			<t>Eric the Car Guy!</t><br>
				<a href=\"post.php?id=$ID&liked=1\"><likeButton>+<span>&nbsp$likes</span></likeButton></a><unlikes>&nbsp&nbsp<a href=\"post.php?id=$ID&unliked=1\"><unlikeButton>-<span>&nbsp$unlikes</span></unlikeButton></a></unlikes>
				<iframe width="560" height="315" src="http://www.youtube.com/embed/fMplrMKIIoo?showinfo=0" frameborder="0" allowfullscreen></iframe>
				<postsharing><a href="http://twitter.com/share" class="twitter-share-button" data-text="Work in progress #Ciacco Davide" data-url="http://ciaccodavi.de" data-count="small"></a></postsharing>
			</div><br>
			
			
			<?php
				@include("http://floatingminds.altervista.org/ytyl/ytyl.php");
				
				$sql="SELECT * FROM `ytyl0`";}
				$result=mysql_query($sql);
				while($rows=mysql_fetch_array($result)){
					$c=$rows['content'];
					echo  $c ;
				}
				mysql_close();
				?>
		
		</contents>
		<footer>
		<div class="sharing">
			<a href="http://twitter.com/share" class="twitter-share-button" data-text="Work in progress #Ciacco Davide" data-url="http://ciaccodavi.de" data-count="small"></a>
		</div>
		</footer>
		
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	
	<script type="text/javascript">
		$('inside-l').toggle(
		function() {$('body').css('background-image', 'url(' + "transparent.png" + ')'), $('inside-l').css('color', '#878787'), $('inside-l').css('text-shadow', '0 0 10px black')}, function() {$('body').css('background-image', 'url(' + "sfnd.png" + ')'), $('inside-l').css('color', '#FFFFB2'), $('inside-l').css('text-shadow', '0 0 3px #000, 0 -6px 16px  white, -3px 0 16px  white, 3px 0 16px  white')}
		);
	</script>
	<script type="text/javascript">
		var $g=0;
$('foundicon-idea').attr('data-content','b')
		$('inside-r').click(
			function() {
				if($g==0){
					$('header').toggle('slow')
					$('h1').toggle('slow'), $('h2').toggle('slow')
					$('footer').toggle('slow')
					$('toggle-r').transition({y:'-116px',easing:'snap',duration: '1600ms'})
					$('foundicon-idea').attr('data-content','a')
					$g++;
				}else{
					$('header').toggle('slow')
					$('h1').toggle('slow'), $('h2').toggle('slow')
					$('footer').toggle('slow')
					$('toggle-r').transition({y:'0px',easing:'snap',duration: '1600ms'})
					$('foundicon-idea').attr('data-content','b')
					$g--;
				}
				
			}
		);
	</script>
	
</html>