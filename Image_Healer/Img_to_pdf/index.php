<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Image To PDF Converter</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);">

<div class="container">
	<div class="upload-file" style="color: #000;background: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
		<input type="file" onChange="loadFile(event)" name="" accept=".png, .jpg, .jpeg">
		Upload Image
	</div>
	<img id="showImg" src="images/img.png">
	<button onClick="pdfDown()">Image To PDF</button>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
