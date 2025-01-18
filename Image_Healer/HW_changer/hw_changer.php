<html>
    <head>
        <title>Image Resize</title>
        <link rel="stylesheet" href="Tsksty.css">
        <script src="resz.js" defer></script>
        <style type="text/css">
            body{
        background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
        background-size: cover;
                 }
                 .content .download-btn {
                background:linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
                 }
                 .checkboxes .column input {
                    accent-color: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
                 }
                 .sizes .column input:focus {
                    border: 2px solid linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
                 }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="upload-box">
                <input type="file" accept="image/*" hidden>
                <img src="pic1.jpg" alt="Upload" height="170px" width="170px">
                <p>Browse file to Upload</p>
            </div>
            <div class="content">
                <div class="row sizes">
                    <div class="column width">
                        <label>Width</label>
                        <input type="number">
                    </div>
                    <div class="column height">
                        <label>Height</label>
                        <input type="number">
                    </div>
                </div>
                <div class="row checkboxes">
                    <div class="column ratio">
                        <input type="checkbox" id="ratio" checked>
                        <label for="">Lock Aspect Ratio</label>
                    </div>
                    <div class="column quality">
                        <input type="checkbox" id="quality">
                        <label for="">Reduce quality</label>
                    </div>
                </div>
                <button class="download-btn">Download Image</button>
            </div>
        </div>
    </body>
</html>