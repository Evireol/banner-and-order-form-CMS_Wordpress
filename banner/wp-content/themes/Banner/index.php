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
        .DownLine
        {
            margin-top: 133px;
            width: 775px;
            position: absolute;
            padding-left: 50px;
        }
        .DownLine_row-1
        {
            height: 114px;
        }
        .DownLine_col-1-3
        {
            margin-top: 30px;
        }
        .DownLine_col-2
        {
            font-weight:900;
            color: #D23B60;
            font-size: 32px;
            margin-top: 37px;
        }
        .DownLine_col-4
        {
            font-size: 96px;
            font-family: Mplus 1p bold;
            font-weight:600;
            margin-top: 3px;
            color: #D23B60;
            margin-right: -4px;
        }

        .DownLine_col-6
        {
            font-size: 26px;
            font-family: Gilroy;
            font-weight:500;
            color: #999999;
            text-transform: uppercase;
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
        letter-spacing: 0px;
        }
        .right-up-text
        {
        color: white;
        font-size: 26px;
        font-weight: 700;
        line-height: 36px;
        letter-spacing: 0px;
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
            <div  class="custom-col text-center" style="width: 150px; margin-left:30px ">
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

    <div class="container DownLine">
        <div class="row flex-row DownLine_row-1">
            <div class="custom-col max-width-50 DownLine_col-1-3" style="width: 60px;">
                <img class="Img" src="<?php echo get_template_directory_uri(); ?>\png\Pattern1.png" width="57" height="44">
            </div>
            <div class="custom-col min-width-100 DownLine_col-2" style="width: 215px;">
                <div class="content-box text-center">за 1800 ₽</div>
            </div>
            <div class="custom-col min-width-100 DownLine_col-1-3" style="width: 129px;">
                <img class="Img" src="<?php echo get_template_directory_uri(); ?>\png\Group 3.png" width="109" height="44">
            </div>
            <div class="custom-col min-width-100 DownLine_col-4" style="width: 100px;">
                <div class="content-box">АКЦИЯ</div>
            </div>

        </div>
        <div class="row flex-row">
            <div class="custom-col" style="width: 30px;">
                <img class="Img" src="<?php echo get_template_directory_uri(); ?>\png\Star.png" width="36" height="36">
            </div>
            <div class="col">
                <div class="content-box DownLine_col-6">Врач высшей категории!</div>
            </div>
        </div>
    </div>


</div>

<img class="Img ImgPosition" src="<?php echo get_template_directory_uri(); ?>\png\Узи2.png" width="359" height="200">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
