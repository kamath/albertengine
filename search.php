<?php
	$input = strtolower($_GET['input']);
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
?>