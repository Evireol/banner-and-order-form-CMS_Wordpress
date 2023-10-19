<?php
if ( is_page() ) {
    // Получаем текущую страницу
    $page_id = get_the_ID();
    
    // Получаем текущий шаблон страницы
    $page_template = get_page_template_slug( $page_id );

    // Получаем список всех доступных шаблонов страницы
    $page_templates = wp_get_theme()->get_page_templates();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .dropdown {
            position: relative;
            display: inline-block;
            background-color: #fff; /* Белый фон */
            border-radius: 5px; /* Округлые края */
            padding: 10px; /* Отступы внутри блока */
            width: 100%;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            padding: 10px;
            margin-left: -10px;
            width: 100%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Стили для элементов списка */
        .dropdown-content div {
        padding: 5px;
        border-radius: 5px;
        white-space: nowrap;
        width: 100%;
        }

        body {

            height: 300px;
            width: 775px;
        }
        .Img {
            position: absolute;
        }

        h1
        {
            font-size: 42px;
            font-family: Exo 2;
            font-weight:600;
            color: #2C4B68;
            text-transform: uppercase;
            margin:50px -15px 13px -15px;

        }
        .mainPart
        {
            padding-left: 70px;
        }

        .NoMargin
        {
            margin-left: -15px;
        }

        .text
        {
            font-size: 18px;
            font-family: Exo 2;
            font-weight:600;
            color: #333333;
            margin-bottom:10px;
            margin-top:37px;
        }
        .count
        {
            background-color: #fff; /* Белый фон */
            border-radius: 12px; /* Округлые края */
            /* padding: 5px 10px; */
            margin-left: 17px;

        }


        .slider::-webkit-slider-thumb {
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%; 
            background: #AD2446;
            cursor: pointer;
        }


        input[type="range"] {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 4px;
        background: #ccc;
        border: none;
        border-radius: 5px;
        outline: none;
        }

        .ImgPosition
        {
            top: 0;
            z-index: 1;
            margin-top: 4px;
        }
        .ImgPosition25
        {
            left: 25%;
        }
        .ImgPosition50
        {
            left: 50%;
        }
        .ImgPosition75
        {
            left: 75%;
        }
        .ImgPosition100
        {
            left: 97%; 
        }

    </style>
    <title>Заполнить страницу Bootstrap фоном</title>
</head>
<body>
</head>
<body>
<div>
    <img class="Img" src="<?php echo get_template_directory_uri(); ?>\png\box.png" width="847" height="620">
    <div class="container mainPart">

        <div class="row">
            <div class="col">
                <h1>Калькулятор стоимости</h1>
            </div>
        </div>

        <div class="row">
    <div class="col">
        <div class="row text">Тип бытовки</div>
        <div class="dropdown NoMargin">
            <!-- Поле меню по умолчанию -->
            <div class="default-content">Поле 1</div>
            
            <!-- Список элементов меню -->
            <div class="dropdown-content">
                <div class="menu-item">Поле 1</div>
                <div class="menu-item">Поле 2</div>
                <div class="menu-item">Поле 3</div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row text">Расстояние от КАД</div>
        <div class="dropdown NoMargin">
            <!-- Поле меню по умолчанию -->
            <div class="default-content">Поле 1</div>
            
            <!-- Список элементов меню -->
            <div class="dropdown-content">
                <div class="menu-item">Поле 1</div>
                <div class="menu-item">Поле 2</div>
                <div class="menu-item">Поле 3</div>
            </div>
        </div>
    </div>
</div>

        <div class="row">
            <div class="col">
            <div class="row text ">
                    <div class="custom-col text-center d-flex align-items-center">
                    Срок аренды, месяцев
                    </div>    
                    <div class="custom-col count  text-center d-flex justify-content-center align-items-center" style="width: 50px; height:40px">
                    <div class="value">0</div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <input class="slider" type="range" id="range" min="0" max="24" value="16" step="1">

                            <!-- <img class="Img ImgPosition" src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12"> -->
                            <!-- <img class="Img ImgPosition ImgPosition25" src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="8" height="8">
                            <img class="Img ImgPosition ImgPosition50" src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="8" height="8">
                            <img class="Img ImgPosition ImgPosition75" src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="8" height="8">
                            <img class="Img ImgPosition ImgPosition100" src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12"> -->

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row text ">
                    <div class="custom-col text-center d-flex align-items-center">
                    Кол-во бытовок, шт
                    </div>    
                    <div class="custom-col count  text-center d-flex justify-content-center align-items-center" style="width: 50px; height:40px">
                            7
                    </div>
                </div>
                <div class="row">____</div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                кнопка
            </div>
        </div>

    </div>

  </div>

  <script>
    var menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(function(item) {
        item.addEventListener('click', function() {
            // Скрываем поле меню по умолчанию
            this.closest('.dropdown').querySelector('.default-content').style.display = 'none';
            // Отобразим выбранный элемент меню
            this.closest('.dropdown').querySelector('.default-content').innerText = this.innerText;
            this.closest('.dropdown').querySelector('.default-content').style.display = 'block';
        });
    });



  const sliderEl = document.querySelector("#range")
const sliderValue = document.querySelector(".value")

sliderEl.addEventListener("input", (event) => {
  const tempSliderValue = event.target.value; 
  
  sliderValue.textContent = tempSliderValue;
  
  const progress = (tempSliderValue / sliderEl.max) * 100;
 
  sliderEl.style.background = `linear-gradient(to right, #f50 ${progress}%, #ccc ${progress}%)`;
  
})
  
  

</script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
