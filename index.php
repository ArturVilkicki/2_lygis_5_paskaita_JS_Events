<!DOCTYPE html>
<html>
<head>
	<title>JS Events</title>
	<style>
		div {
    		background: yellow;
    		border: 1px solid black;
    		padding: 10px;
	}
	div {
    	width: 200px;
    	height: 100px;
    	border: 1px solid black;
	}
	</style>
</head>
<body>
<div oncontextmenu="myFunction()" contextmenu="mymenu">
	<p>Right-click inside this box to see the context menu!

	<menu type="context" id="mymenu">
  		<menuitem label="Refresh" onclick="window.location.reload();" icon="ico_reload.png"></menuitem>
  	<menu label="Share on...">
    	<menuitem label="Twitter" icon="ico_twitter.png" onclick="window.open('//twitter.com/intent/tweet?text=' + window.location.href);"></menuitem>
    	<menuitem label="Facebook" icon="ico_facebook.png" onclick="window.open('//facebook.com/sharer/sharer.php?u=' + window.location.href);"></menuitem>
  </menu>
  	<menuitem label="Email This Page" onclick="window.location='mailto:?body='+window.location.href;"></menuitem>
	</menu>

</div>


<script>
	function myFunction() {
    	alert("You right-clicked inside the div!");
	}
	function myFunction() {
    	document.getElementById("demo").innerHTML = "Hello World";
	}
	function mouseDown() {
    	document.getElementById("myP").style.color = "red";
	}

	function mouseUp() {
    	document.getElementById("myP").style.color = "green";
	}
	function bigImg(x) {
    	x.style.height = "64px";
    	x.style.width = "64px";
	}

	function normalImg(x) {
    	x.style.height = "32px";
    	x.style.width = "32px";
	}
	function myFunction(e) {
    	var x = e.clientX;
    	var y = e.clientY;
    	var coor = "Coordinates: (" + x + "," + y + ")";
    	document.getElementById("demo").innerHTML = coor;
	}

	function clearCoor() {
    	document.getElementById("demo2").innerHTML = "";
	}
</script>
<p><strong>Note:</strong> The contextmenu <strong>attribute</strong> only works in Firefox!</p><hr>
<p id="demo" ondblclick="myFunction()">Double-click this paragraph to trigger a function.</p><hr>
<p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">
Click the text! The mouseDown() function is triggered when the mouse button is pressed down over this paragraph, and sets the color of the text to red. The mouseUp() function is triggered when the mouse button is released, and sets the color of the text to green.
</p><hr>
<img onmouseenter="bigImg(this)" onmouseleave="normalImg(this)" border="0" src="smiley.jpg" alt="Smiley" width="32" height="32">

<p>The function bigImg() is triggered when the user moves the mouse pointer onto the image.</p>
<p>The function normalImg() is triggered when the mouse pointer is moved out of the image.</p><hr>

<div onmousemove="myFunction(event)" onmouseout="clearCoor()"></div>

<p>Mouse over the rectangle above, and get the coordinates of your mouse pointer.</p>

<p>When the mouse is moved over the div, the p element will display the horizontal and vertical coordinates of your mouse pointer, whose values are returned from the clientX and clientY properties on the 
MouseEvent object.</p>

<p id="demo2"></p>



</body>
</html>