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
            z-index: 2;
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

        .textForLine
        {
            padding: 0;
            width: 100%;
            font-family: Open Sans;
            font-size: 16px;
            font-weight: 600;
            line-height: 32px;
            letter-spacing: 0em;
            text-align: center;
            color: #AD2446;
            top: -5px;
        }

        .slider::-webkit-slider-thumb {
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%; 
            background: #AD2446;
            cursor: pointer;
        }


        .slider {
        width: 100%;
        position: absolute;
        }

        .image-start,
        .image-end {
        position: absolute;
        top: 10%;
        max-height: 12px;
        pointer-events: none;
        z-index: 1;
        }

        .image-start img,
        .image-end img {
        max-height: 100%; /* Подгоняем изображения по максимальной высоте */
        }

        .image-start {
        left: +15px;
        transform: translateX(70%);
        transform: translateY(-100%);
        }

        .image-end {
        position: absolute;
        top: -12px;
        right: 0; /* Смещаем элемент вправо */
        transform: translateX(125%); /* Смещаем элемент влево на 100% ширины родительского элемента */
        z-index: 1; /* Устанавливаем показывать img-end над input range и img-start */
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

        input {
            border: none;
            background: transparent;
            outline: none;
            padding: 0;
            margin: 0;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 100%;
            height: 100%;
            z-index: 0;
            cursor: pointer;
        }

        .ImgPosition
        {
            top: 0;
            z-index: 0;
            margin-top: 4px;
        }

        .img-25,
        .img-50,
        .img-75 
        {
        position: absolute;
        top: -5px; /* Немного выше */
        z-index: 1;
        padding: 0;
        margin: 0;
        pointer-events: none;
        }

        .img-25 {
        top: -15px;
        /* left: 27.5%; */
        /* transform: translateX(-25%); */
        }

        .img-50 {
        /* left: 52.5%; */
        /* transform: translateX(-50%); */
        }

        .img-75 {
        /* left: 77.5%; */
        /* transform: translateX(-75%); */
        }
        .Button
        {
            margin-top: 60px;
            height: 90px;
            width: 308px;
            color: white;
            background-color: #AD2446;
            padding-bottom: 50px;
            font-family: Exo 2.0;
            font-size: 16px;
            font-weight: 500;
            font-family: Exo 2.0;
            line-height: 19px;
            text-align: center;
            margin-left: 27%;
        }

        .Button-main
        {
            background-color: #AD2446;
            padding: 8px;
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

                    <?php
                    $loop = CFS()->get('loop_staff');
                    foreach ($loop as $row){
                        ?>
                        <div class="default-content"><?= $row['staff'] ?></div>

                    <?php
                    break;
                    }?>
                    
                    <div class="dropdown-content">

                    <?php
                    $loop = CFS()->get('loop_staff');
                    foreach ($loop as $row){
                        ?>
                        <div class="menu-item"><?= $row['staff'] ?></div>
                    <?php
                    }?>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row text">Расстояние от КАД</div>
                <div class="dropdown NoMargin">

                <?php
                    $loop = CFS()->get('distance');
                    foreach ($loop as $row){
                        ?>
                        <div class="default-content"><?= $row['delivery'] ?></div>

                    <?php
                    break;
                    }?>
                    
                    <div class="dropdown-content">

                    <?php
                    $loop = CFS()->get('distance');
                    foreach ($loop as $row){
                        ?>
                        <div class="menu-item"><?= $row['delivery'] ?></div>
                <?php
                }?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row text">
                    <div class="custom-col text-center d-flex align-items-center">
                    Срок аренды, месяцев
                    </div>    
                    <div class="custom-col count text-center d-flex justify-content-center align-items-center" style="width: 50px; height:40px">
                    <input id="value1" class="value text-center d-flex justify-content-center align-items-center" type="text" min="0" max=<?php the_field('count');?> value="0" oninput="restrictInput(this);">
                    </div>
                </div>
                
                <div class="conteiner textForLine" style="text-align: center; display: flex; justify-content: space-between;"">
                    <div class="col-6 textForLine" style="text-align: left; margin-left: -14px">
                    <text fill='#0074d9' x='0' y='60'>0</text>
                    </div>
                    <div class="col-6 textForLine " style="text-align: right; margin-right: -15px">
                    <text fill='#0074d9' x='100%' y='60'><?php the_field('count');?></text>
                    </div>
                    </g>
                </div>
                <div class="row">
                    <div class="col container range-container NoMargin">
                        <div>
                            <input class="slider" type="range" id="range" min="0" max=<?php the_field('count');?> value="0" step="1">
                        </div>
                        <div class="image-start">
                            <img src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                        </div>
                        <div class="image-end">
                           <img src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col">
                <div class="row text ">
                    <div class="custom-col text-center d-flex align-items-center">
                    Коли-во бытовок, шт.
                    </div>    
                    <div class="custom-col count  text-center d-flex justify-content-center align-items-center" style="width: 50px; height:40px">
                        <input id="value2" class="value text-center d-flex justify-content-center align-items-center" type="text" min="0" max=<?php the_field('stuff');?> value="0" oninput="restrictInput(this);">
                    </div>
                </div>

                <div class="conteiner textForLine" style="text-align: center; display: flex; justify-content: space-between;"">
                    <div class="col-6 textForLine" style="text-align: left; margin-left: -14px">
                    <text fill='#0074d9' x='0' y='60'>0</text>
                    </div>
                    <div class="col-6 textForLine " style="text-align: right; margin-right: -15px">
                    <text fill='#0074d9' x='100%' y='60'><?php the_field('stuff');?></text>
                    </div>
                    </g>
                </div>
                
                <div class="row">
                    <div class="col container range-container NoMargin">
                        <div>
                            <input class="slider" type="range" id="range2" min="0" max=<?php the_field('stuff');?> value="0" step="1">
                        </div>
                        <div class="image-start">
                            <img src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                        </div>
                        <div class="image-end">
                           <img src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row Button">
            <div class="col Button-main">
                кнопка
            </div>
        </div>

    </div>

  </div>

  <script>
    var menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(function(item) {
        item.addEventListener('click', function() {
            // Скрывать поле меню по умолчанию
            this.closest('.dropdown').querySelector('.default-content').style.display = 'none';
            // Отобразть выбранный элемент меню
            this.closest('.dropdown').querySelector('.default-content').innerText = this.innerText;
            this.closest('.dropdown').querySelector('.default-content').style.display = 'block';
        });
    });



const sliderEl  = document.querySelector("#range");
const sliderEl2 =  document.querySelector("#range2");
const valueInput = document.querySelector("#value1");
const valueInput2  = document.querySelector("#value2");


sliderEl.addEventListener("input", (event) => {
    const tempSliderValue = event.target.value;

    // Обновление значение в поле .value
    valueInput.value = tempSliderValue;

    const progress = (tempSliderValue / sliderEl.max) * 100;

    sliderEl.style.background = `linear-gradient(to right, #f50 ${progress}%, #ccc ${progress}%)`;
});

sliderEl2.addEventListener("input", (event) => {
    const tempSliderValue2 = event.target.value;

    // Обновление значение в поле .value2
    valueInput2.value = tempSliderValue2;

    const progress2 = (tempSliderValue2 / sliderEl2.max) * 100;

    sliderEl2.style.background = `linear-gradient(to right, #f50 ${progress2}%, #ccc ${progress2}%)`;
});

    

    valueInput.addEventListener("input", (event) => {
        const tempValue = parseInt(event.target.value);
    
        // Проверка, чтобы значение находилось в диапазоне от минимума до максимума ползунка
        if (tempValue >= parseInt(sliderEl.min) && tempValue <= parseInt(sliderEl.max)) {
            sliderEl.value = tempValue;
        
            const progress = (tempValue / sliderEl.max) * 100;
            sliderEl.style.background = `linear-gradient(to right, #f50 ${progress}%, #ccc ${progress}%)`;
        }
    });

  
    function restrictInput(input) {
      input.value = input.value.replace(/[^0-9]/g, '');

      // Проверка диапазона
      var min = parseInt(input.getAttribute("min"));
      var max = parseInt(input.getAttribute("max"));
      var value = parseInt(input.value);

      if (!isNaN(min) && value < min) {
        input.value = min;
      } else if (!isNaN(max) && value > max) {
        input.value = max;
      }
    }


    // const rangeInput = document.querySelector('#range');
    // var myImg = document.querySelector('#img-50');

    // var thumbWidth = 15;

    // var rangeClientWidth = rangeInput.clientWidth;
    // var minRangeValue = parseInt(rangeInput.min);
    // var maxRangeValue = parseInt(rangeInput.max);

    // var off = (rangeClientWidth + thumbWidth) / maxRangeValue;
    // var off2 = off * (rangeInput.max * (1/2));
    // var horizontalCentering = (myImg.width / 2) - (thumbWidth / 2);
    // var px2 = off2 - horizontalCentering;
    // var px2 = off2 - horizontalCentering;

    // const GiveGivePosition2 =  px2 + "px";

    //  document.querySelector('#img-50').style['left'] = GiveGivePosition2;
  
</script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
