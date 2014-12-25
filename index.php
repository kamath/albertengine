
<?php
	$input = strtolower($_GET['input']);
	if($input!=null)
	{
	if(substr($input, 0, 7)==="who is ")
	{
		$newinput = substr($input, 7);
		header( 'Location: http://en.wikipedia.org/wiki/'.$newinput ) ;
	}
	else if(substr($input, 0, 8)==="who was ")
	{
		$newinput = substr($input, 8);
		header( 'Location: http://en.wikipedia.org/wiki/'.$newinput ) ;
	}
	else if(substr($input, 0, 9)==="where is ")
	{
		$newinput = substr($input, 9);
		header( 'Location: https://www.google.com/maps/place/'.$newinput ) ;	
	}
	else if(substr($input, 0, 17)==="where can i find ")
	{
		$newinput = substr($input, 17);
		header( 'Location: http://www.amazon.com/s/ref=nb_sb_ss_i_0_6/191-0136070-8498608?url=search-alias%3Daps&field-keywords='.$newinput ) ;	
	}
	else if(substr($input, 0, 14)==="how do i make ")
	{
		$newinput = substr($input, 14);
		header( 'Location: http://instructables.com/howto/'.str_replace(" ","-",$newinputA)) ;	
	}
	else if(substr($input, 0, 5)==="open " && strpos($input,'.')===false)
	{
		if(strpos($input," ")===true)
		{
			$newinput = str_replace(" ", "",$input);
		}
		$newinput = substr($input, 5);
		header( 'Location: http://'.$newinput.'.com') ;	
	}
	else if(substr($input, 0, 5)==="open " && strpos($input,'http://')===true)
	{
		$newinput = substr($input, 5);
		header( 'Location: '.$newinput) ;	
	}
	else if(substr($input, 0, 5)==="play ")
	{
		$newinput = substr($input, 5);
		header( 'Location: http://spotify.com') ;	
	}
	else if(substr($input, 0, 5)==="open ")
	{
		$newinput = substr($input, 5);
		header( 'Location: http://'.$newinput) ;	
	}
	else if(substr($input, 0, 7)==="define ")
	{
		$newinput = substr($input, 7);
		header( 'Location: http://merriam-webster.com/dictionary/'.$newinput) ;	
	}
	else if(substr($input, 0, 13)==="go to google ")
	{
		$newinput = substr($input, 13);
		header( 'Location: http://google.com/'.$newinput) ;	
	}
	else if (substr($input, 0, 19)==="search youtube for ") {
		$newinput = substr($input, 19);
		header( 'Location: http://youtube.com/results?search_query='.$newinput) ;
	}
	else
	{
		header( 'Location: http://google.com/search?q='.$input ) ;		
	}
}
?><html>
	<head>
		<title>Albert</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="http://hackgician.net/img/Logo.png">
		<script src="js/typed.js"></script>
		<script src="js/jQuery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scrolling.js"></script>
	</head>

	<body>
		<div class="jumbotron" align="center">
			<h1>Albert</h1>
			<form class="form-inline" role="form" method="get" name="inputform">
				<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Search input" name="input" size="50%">
				<button type="submit" class="btn btn-default">Search</button>
			</form>
			<script>
  				$(function(){
      				$(".swag").typed({
        				strings: ["First sentence.", "Second sentence."],
        				typeSpeed: 0
      				});
  				});
			</script>
			<h2>Not getting instant answers? See what you can search <span><button id="swag" class="btn btn-default">Click Me</button></span></h2>
			<div id="list">
			<h4 id="1">Where is Charlotte, NC</h4>
			<h4 id="2">Define awesome</h4>
			<h4 id="3">Who is Barack Obama</h4>
			<h4 id="4">Where can I find an iPad</h4>
			<h4 id="5">Open andykamath.com</h4>
			<h4 id="6">Open Facebook</h4>
			<h4 id="7">Play music</h4>
			<h4 id="8">Search Youtube for Cat videos</h4>
			<h4 id="9">Go to Google Drive (only Google Products so far, i.e. Classroom, maps, mail, etc)</h4>
			</div>
			<h4>You can replace Google automatic search in your browser as well! In your browser settings, add a new search engine, and for the name, it's Albert Engine, for the keyword, albertengine.herokuapp.com, and the URL is http://albertengine.herokuapp.com?input=%s</h4>
			<h5>Made with <span class="fa fa-heart animated infinite pulse" style="color:red"></span> by Andy Kamath</h5>
		</div>
	
		<!-- WOW.js -->
		<script type="text/javascript">
		$("#list").hide();
		$("#swag").click(function(){
			$("#list").show();
		});
		</script>
		<script src="js/WOW.js"></script>
		<script type="text/javascript">new WOW().init();</script>
		<script type="text/javascript">
			function validation()
			{
				var x = document.forms["inputForm"]["input"].value;
				alert(x);
			}
		</script>
	</body>
</html>