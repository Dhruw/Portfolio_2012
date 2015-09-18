<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Welcome </title>
<link type="text/css" href="files/css.css" rel="stylesheet" />
</head>
<body style="background-image:url(files/bg.jpg); background-position:center; background-attachment:fixed; "  >
<?php include("header.php"); ?>
<div id="main_frame" >
    <div id="side">
        <img src="files/Side/Side2.jpg" />
    </div>

	<div id="write">
		<u><h2>ARTS :</h2></u>
    A person without imagination is like a bird without wings.<br />
    	<p style="text-align:right" > - Anonymous </p>
    <hr />
	<p>I used to do painting when I was a kid. As comming of age I came in contact with computers. My "painting" transformed into "graphic designing" as the technologies blended with my persona. I still like drawing and painting. I draw caricatures when i'm idle. I also like photography and image processing. This is a vast and infinite field; and I love it.<br /><br />
    You can see my art on <a href="www.divyanshudhruw.devianart.com"> www.divyanshudhruw.devianart.com </a> also, it is an artist community website.</p>
    <hr style="clear:both;" />
   <p> Some of my artworks are : </p>
<!--     <img src="files/art/1.jpg" /> -->
    
    <?php
	$i=0;
    for($i=1; $i<16; $i++)
	{
//		echo "Hello";
//			echo "<img src='files/art/1.jpg />" ; // & $i & '.jpg" id="art_g" />"';
//echo $i;
//echo	'<img src="files/art/1.jpg" id="art_g"  />';
echo	'<img src="files/art/' . $i . '.jpg" id="art_g"  />';
	}
	
	?>
    <hr style="clear:both;" width="0" />
    </div>
        
</div>
<?php include("footer.php"); ?>
</body>
</html>