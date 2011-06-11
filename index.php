<!DOCTYPE html>
<html>
	<head>
		<title>Instant Text Editor</title>
		<link href="http://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
		<link href="stylesheet.css?<?php echo time(); ?>" rel="stylesheet" media="screen">
		<link href="print.css?<?php echo time(); ?>" rel="stylesheet" media="print">
		<script src="writer.js"></script>
	</head>
	<body onload="loadValue()" onkeydown="storeValue()">
	
	<div id="container">
		<h1 id="z" contenteditable>I am a header,</h1>
		
		<p id="x" contenteditable autofocus>This is an <i>instant text editor</i>. You can write whatever you like to and enhance the readability of your text directly in the browser without depending on text editors such as TextEdit, Microsoft Word, LibreOffice and likewise. This tool saves your document automatically for offline use. Just start typing - yes - instantly.
		</p>
		
		<form action="" method="" name="select">
		<input type="button" value="Unsaved" id="save" accesskey="s" onclick="storeValue()">
		<input type="button" value="Print this document (p)" onclick="javascript:print();" accesskey="p">
		<input type="submit" value="Clear" id="clear" accesskey="c" onclick="clearValue()">
		</form>
	</div>
		
	</body>
</html>