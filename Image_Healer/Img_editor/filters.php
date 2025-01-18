<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Editor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=FAMILY_NAME:wght@WEIGHT_OR_RANGE&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="edit2.css">
    <style type="text/css">
        body{
        background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
        }
        button.save-img{
        background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
    }
    .container{
        background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
    }

    </style>
</head>
<body>
    <div class="container">
        <h2 id="txt2">Image Editor</h2>
        <div class="wrapper">
            <div class="editor-panel">
                <h3 id="txt1">Filters <span></span><i class="fa fa-sliders" aria-hidden="true"></i></h3>
                <div class="filter disabled">
                    <button id="brightness" type="button" class="active">Brightness</button>
                    <button id="contrast" type="button">Contrast</button>
                    <button id="invert" type="button">Invert</button>
                    <button id="hue" type="button">Hue</button>
                    <button id="saturation" type="button">Saturation</button>
                    <button id="blur" type="button">Blur</button>
                </div>
                <div class="slider">
                    <div class="filter-info">
                        <div class="name">Brightness</div>
                        <div class="value">100%</div>
                    </div>
                    <input type="range"  class="disabled" value="100" min="0" max="200">
                </div>
                <h3 id="txt3">Rotate & Flip</h3>
                <div class="rotate disabled">
                    <button id="left" type="button"><i class="fa fa-rotate-left"></i></button>
                    <button id="right" type="button"><i class="fa fa-rotate-right"></i></button>
                    <button id="horizontal" type="button"><i class="bx bx-reflect-vertical"></i></button>
                    <button id="vertical" type="button"><i class="bx bx-reflect-horizontal"></i></button>
                </div>
            </div>
            <div class="preview-img">
                <img src="pic_icon.png" alt="Placeholder image">
                <!-- <i class="fa fa-cloud-upload" aria-hidden="true"></i> -->
            </div>
        </div>
        <div class="control">
            <button type="button" class="reset-filter disabled">Reset Filter</button>
            <div class="row">
                <input type="file" id="file" hidden>
            <button type="button" class="choose-img">Upload</button>
            <button type="button" class="save-img">Download</button>
            </div>
        </div>
    </div>
    <script src="edit3.js"></script>
</body>
</html>