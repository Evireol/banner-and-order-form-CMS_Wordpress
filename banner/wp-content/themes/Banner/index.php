<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {

            height: 300px;
            width: 775px;
        }
        .upLine {
            background-color: #D23B60;
            width: 775px;
            height: 133px;
            display: flex;
            /* align-items: center; */
            position: absolute;
        }
        .Img {
            position: absolute;
        }
        .ImgPosition
        {
            top: 0;
        right: 1; /* Располагает изображение справа */
        z-index: 1;
        margin-left: 391px;
        margin-right: 25px;
        margin-top: 7px;
        margin-bottom: 93px;
        }
        .left-up-text
        {
        color: white;
        font-size: 72px;
        font-weight: 700;
        line-height: 42px;
        word-wrap: break-word;
        font-family: 'Gilroy', sans-serif;
        }
        .right-up-text
        {
        color: white;
        font-size: 26px;
        font-weight: 800;
        line-height: 36px;
        letter-spacing: 0.90px;
        word-wrap: break-word;
        font-family: 'Gilroy', sans-serif;
        }

        .img-up-container {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-right: 16px;
            margin-left: 16px;
            padding-bottom: 15px;
        }
    </style>
    <title>Заполнить страницу Bootstrap фоном</title>
</head>
<body>
</head>
<body>
<div>
    <img class="Img" src="<?php echo get_template_directory_uri(); ?>\png\Узи1.png" width="775" height="300">
    <div class="upLine">
        <div class=" row align-items-center no-gutters" style="padding-top:15px">
            <div  class="col text-center">
                <p class="left-up-text">УЗИ</p> 
            </div>
            <div class="col text-center">
                <div class="img-up-container">
                <img class="Img" src="<?php echo get_template_directory_uri(); ?>\png\+.png" width="24" height="24">
                </div>
            </div>
            <div class="col">
            <p class="right-up-text">Консультация <br> Гинеколога</p> 
            </div>
        </div>
    </div>
    <!-- <div class="" style="top:0;">
        <div class=" row align-items-center no-gutters" style="padding-top:15px">
            <div  class="col text-center">
                <p class="left-up-text">УЗИ</p> 
            </div>
            <div class="col text-center">
                <div class="img-up-container">
                <img class="Img" src="<?php echo get_template_directory_uri(); ?>\png\+.png" width="24" height="24">
                </div>
            </div>
            <div class="col">
            <p class="right-up-text">Консультация <br> Гинеколога</p> 
            </div>
        </div>
    </div> -->
</div>

<img class="Img ImgPosition" src="<?php echo get_template_directory_uri(); ?>\png\Узи2.png" width="359" height="200">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
