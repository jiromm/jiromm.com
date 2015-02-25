<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="Author" content="Aram Baghdasaryan, aram@jiromm.com">

        <title>Aram Baghdasaryan - Web Design &amp; Development</title>

        <meta name="description" content="Web design and development by Aram Baghdasaryan">
        <meta name="keywords" content="jiromm.info, jiromm, web, web design, web development, aram baghdasaryan, web applications">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	    <meta property="og:title" content="jiromm - Web design and development by Aram Baghdasaryan"/>
	    <meta property="og:description" content="Web design and development by Aram Baghdasaryan"/>
	    <meta property="og:site_name"content="jiromm"/>
	    <meta property="fb:admins"content="aram.baghdasaryan"/>
	    <meta property="og:type" content="website"/>
	    <meta property="og:url" content="http://jiromm.com/"/>
	    <meta property="og:image" content="http://jiromm.com/img/jr-big.jpg"/>

        <link rel="stylesheet" href="css/main.css">

	    <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <body>
	    <div id="fb-root"></div>

	    <script>
		    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		    ga('create', 'UA-51997825-1', 'jiromm.com');
		    ga('send', 'pageview');
	    </script>

	    <div class="card">
		    <div class="card-content">
			    <h1>Aram Baghdasaryan</h1>
			    <p><small>&copy; 2015 jiromm. I like to think &amp; believe that all rights reserved.</small></p>
			    <p class="related"><a href="mailto:aram@jiromm.com" title="Drop me a line">Web design &amp; development</a> is my job as well as my hobby &amp; passion.</p>

		    </div>
	    </div>
    <script>
	    $(function() {
		    var card = $(".card");

		    $(document).on("mousemove",function(e) {
			    var ax = -($(window).innerWidth()/2- e.pageX)/20;
			    var ay = ($(window).innerHeight()/2- e.pageY)/10;
			    card.attr("style", "transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-webkit-transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-moz-transform: rotateY("+ax+"deg) rotateX("+ay+"deg)");
		    });
	    });
    </script>
    </body>
</html>
