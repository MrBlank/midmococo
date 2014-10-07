<!DOCTYPE html>
<!--[if lt IE 9]><html lang="en" class="no-js ie"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="UTF-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta content="Midmococo" name="apple-mobile-web-app-title"/>
	<meta property="og:image" content="http://midmococo.com/images/brand.png">
	<meta property="og:url" content="http://midmococo.com">
	<meta property="og:title" content="Midmococo">
	<meta property="og:description" content="Mid-Missouri Comics Collective">
	
	<link href="images/apple-touch-icon.png" rel="apple-touch-icon"/>
	<link href="images/favicon.ico" rel="icon"/>
	
	<link href="styles/css/screen.css?=2014-09-26" rel="stylesheet" type="text/css" />
	
	<script src="scripts/min/modernizr.js"></script>
		
	<title>Midmococo // Mid-Missouri Comics Collective</title>
</head>
<?php $random_number = rand(1,8); ?>
<body class="bg-<?php echo $random_number; ?>">
	<div id="wrapper">
		<header>
			<img class="hide-2x" data-src="images/brand.png" data-2x="images/brand@2x.png" alt="Midmococo: Mid-Missouri Comics Collective">
			<noscript>
				<img src="images/brand.png" alt="Midmococo: Mid-Missouri Comics Collective" width="597" height="405"/>
			</noscript>
			<div class="text">
				<h1>Midmococo</h1>
				<h2>Mid-Missouri Comics Collective</h2>
			</div>
		</header>
		<main>
			
			<section id="book">
			    <div class="caption">HOT OFF THE PRESS&#160;&#8230;</div>
			    <p id="miss-avatar">
			        <a href="http://www.misterwinterman.com/missmizzou/">
			            <img class="avatar" src="images/miss-mizzou-avatar.png" alt="Miss Mizzou avatar" />
			        </a>
			    </p>
			    <h1>MISS MIZZOU</h1>
			    <h2>A life Beyond Comics</h2>
			    <p>In 1952 cartoonist Milton Caniff created an iconic blond in a trench coat named Miss Mizzou. Read the forgotten history of this comic strip character and see how she created delight and controversy beyond the comics page. Book by local creator <a href="https://twitter.com/misterwinterman">J.B. Winter</a>.</p>
                <div class="register"><a href="http://www.misterwinterman.com/missmizzou/">FIND OUT MORE ABOUT THE BOOK</a></div>
			</section>
			
			<section id="meetings">
				<div class="caption">IN THE NEXT ISSUE&#160;&#8230;</div>
				<h1>WEEKLY MEETINGS</h1>
				<p>We have a weekly meeting Monday nights, 8:30pm at <a href="https://plus.google.com/108745546140937608467/about?gl=us&hl=en">Eastside Tavern</a>, downtown Columbia. This is during Eastside’s <a href="https://www.facebook.com/groups/Drink.and.Draw.Columbia/">Drink and Draw</a>/Geek Night.</p> 
				<p>Bring your stuff and talk comics!</p>
				<div class="directions"><a href="https://www.google.com/maps/place/Eastside+Tavern/@38.951372,-92.325822,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x4c09255f5d5e3b93?hl=en">DIRECTIONS</a></div>
			</section>
			
			<section id="about">
				<div class="caption">MEANWHILE&#160;&#8230;</div>
				<h1>ABOUT US</h1>
				<p>The Mid-Missouri Comics Collective (Midmococo) is a group of comic creators and enthusiasts based in Columbia, Mo.</p>
				<p>Established in May 2005, we are primarily made up of comic creators, but we also welcome readers and enthusiasts.</p>			
				<p>We don’t have official members, or dues, but there are a few people who oversee the group.</p>			
				<p>To get involved, <a href="https://twitter.com/Midmocomics">talk with us on Twitter</a>, attend a meeting or an event.</p>
			</section>
			
			<section id="tweets">
				<div class="caption">BIRD IS THE WORD&#160;&#8230;</div>
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Midmocomics" data-widget-id="451554480224358400">Tweets by @Midmocomics</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</section>
			
			<footer>
				<p>&#169; <?php date_default_timezone_set('America/Los_Angeles'); echo date('Y'); ?>, Mid-Missouri Comics Collective.<br/> Designed and built by <a href="http://www.joshnichols.com">Josh Nichols</a></p>
				<p>Background images from the <a href="http://digitalcomicmuseum.com/">Digital Comics Museum</a>.<br/> <a href="#" onClick="window.location.reload();return false;">Reload the page to see more</a>. <a href="http://www.pinterest.com/thejoshnichols/midmococo-backgrounds/">See them all</a>.</p>
			</footer>
			
		</main>
	</div>
	
	<script src="scripts/min/midmococo-ck.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-937700-2', 'midmococo.com');
		ga('send', 'pageview');
	</script>
	
</body>
</html>