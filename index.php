<!DOCTYPE html>
<head>
	<meta name="robots" content="nofollow">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
<head>

<html>
<body>

<style type="text/css">
 .center { text-align: center; list-style-position:inside;}
</style>


	
<div style="text-align:center;">
<div id="sitetitle">
<h1>YouTube Embed Creator<h1>
<span style="font-size: 0.5em;">By Richard Becker</span>
</div>


<h3>How to Use</h3>
<ol class="center">
	<li>Find your Youtube link. As an example, we will use https://www.youtube.com/watch?v=dQw4w9WgXcQ.</li>
	<li>Next, take the letter-and-number bit after the "?v=" part. In this case, that string would be <i> dQw4w9WgXcQ </i>. This is called the Video ID.
	<li>Enter the Video ID you selected in step 2 into the box below. Press generate, and the page will reload with your embed code and a visible example of what it will look like.
</ol>

<hr style="width:50%">




<h3>Code Generator</h3>
<br>
<form> 
<?php 
if (isset($_GET['VideoID'])){
$VideoID = $_GET['VideoID']; 
echo "Enter your Video ID in the box below. <br> <input type=\"text\" name=\"VideoID\" maxlength=\"20\" autocomplete=\"off\" placeholder=\"ex. dQw4w9WgXcQ\" value=$VideoID required><br><br>";
}
else {
echo "Enter your Video ID in the box below. <br> <input type=\"text\" name=\"VideoID\" maxlength=\"20\" autocomplete=\"off\" placeholder=\"ex. dQw4w9WgXcQ\" required><br><br>";
} ?>
<input type="submit" value="Generate"><br><br>



<?php 
if (isset($_GET['VideoID'])) : ?>
	<?php $VideoID = $_GET['VideoID']; ?>
<hr style="width:50%">
	<h3>Output</h3>
	Your embed code is:<br>
	<span style="background-color: yellow;"> 
	&ltiframe src="https://www.youtube.com/embed/<?=$VideoID?>?&theme=dark&autohide=2&showinfo=1&rel=0" FrameBorder="0" AllowFullScreen="AllowFullScreen"&gt&lt/iframe&gt <br> </span> <br><br>
	
	Here is what it will look like: <br>
	
<iframe src="https://www.youtube.com/embed/<?=$VideoID?>?&theme=dark&autohide=2&showinfo=1&rel=0" FrameBorder="0" AllowFullScreen="AllowFullScreen"></iframe> <br> <br> <hr style="width:50%">

<div style="color: gray; padding-left: 4em; padding-right: 4em;"> <i> Not what you expected? The server says you entered "<?=$VideoID?>". Make sure that there are no punctuation marks after or in the string; It should only be letters and numbers. Also, capitalization matters! </i></div>
	</div>
<?php endif ?>
	

<div id="fullsitefooter">
This utility copyright Richard Becker, <?= date("Y")?>. | YouTube is a trademark of Google Inc. | This website does not store data about its users or their use of any services contained herein. | <a href=https://github.com/becker20/YouTube-Embed-Creator> Source Code </a>

</div>

	 
</body>
</html>

