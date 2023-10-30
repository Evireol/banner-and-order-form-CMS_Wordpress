<?php
if ( is_page() ) {
    // Получаем текущую страницу
    $page_id = get_the_ID();

    // Проверяем, является ли текущая страница страницей с ID 2
    if ( $page_id === 2 ) {
        // Получаем текущий шаблон страницы
        $page_template = get_page_template_slug( $page_id );

        // Получаем список всех доступных шаблонов страницы
        $page_templates = wp_get_theme()->get_page_templates();
    }
}

/*
Template Name: Мой Шаблон
*/
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
            display:flex;
        }

        .slider::-webkit-slider-thumb {
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%; 
            background: #AD2446;
            cursor: pointer;
            margin-left: 0px;
        }


        .slider {
        width: 100%;
        position: absolute;
        cursor: pointer;
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

        .image-25
        {
        left: +15px;
        transform: translateX(70%);
        transform: translateY(-100%);
        /* width: 182.856px; */
        }

        .image-50
        {
        left: +15px;
        transform: translateX(70%);
        transform: translateY(-100%);
        }

        .image-75
        {
        left: +15px;
        transform: translateX(70%);
        transform: translateY(-100%);
        }

        .divimg1
        {
            right: 0;
            /* background-color: #888; */
            width: 10px;
            position: absolute;
            top: -11px;
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

        input.count,
        input.value,
        .wpcf7-form-control input:not(.wpcf7-form-control .acceptance) {
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

        .Button
        {
            margin-top: 50px;
            height: 30px;
            width: 308px;
            background-color: #AD2446;
            padding-bottom: 50px;
            text-align: center;
            margin-left: 28%;
        }

        .Button-main
        {
            background-color: #AD2446;
            padding: 8px;
        }

        .btn
        {
            width: 100%;
            height: 100%;
            font-family: Exo 2.0;
            font-size: 16px;
            font-weight: 500;
            font-family: Exo 2.0;
            line-height: 19px;
            color: white;

        }   

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            border: 1px solid #888;
            text-align: center;
        }

        .order
        {
            padding: 10px;
        }

        .modal-title
        {
            color:#fff;
            right: 0.5;
        }

        .modal-header
        {
            background-color:#2C4B68;
            height: 100px;
        }

        .modal-header, .order
        {
            /* padding-right: 60px;
            padding-left: 60px; */
            padding: 30px 60px;
        }


        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        .input-box {
        /* родительский блок относительно которого будем формировать положение
        тега label */
        position: relative;
        }


        .label0-2{
        position: absolute;
        /* смещение относительно родительского элемента 10px вверх от верхнего края и   10px влево */
        top: 70px;
        left: 10px;
        background: #fff;
        padding: 0;
        }

        .label1 {
        position: absolute;
        /* смещение относительно родительского элемента 10px вверх от верхнего края и   10px влево */
        top: 140px;
        left: 10px;
        background: #fff;
        padding: 0;
        }

        .label2{
        position: absolute;
        /* смещение относительно родительского элемента 10px вверх от верхнего края и   10px влево */
        top: 215px;
        left: 10px;
        background: #fff;
        padding: 0;
        }
        
        .label3{
        position: absolute;
        /* смещение относительно родительского элемента 10px вверх от верхнего края и   10px влево */
        top: 295px;
        left: 10px;
        background: #fff;
        padding: 0;
        }

        .label4{
        position: absolute;
        /* смещение относительно родительского элемента 10px вверх от верхнего края и   10px влево */
        top: 370px;
        left: 10px;
        background: #fff;
        padding: 0;
        }


        .divFordivSend
        {
            width: 100%;
            
        }

        .Сonsent
        {
            max-width: 100%; 
            padding: 0;
            margin: 0;
            display: flex;
        }

        .divSend
        {
            width: 100%;margin: 0;
            left: 1;
        }

        .send
        {
            background-color:#2C4B68;
            width: 100px;
            height: 30px;
            color: #fff;
            border-radius: 4px;
        }

        .DiVacceptance
        {
            display: flex;
            left: 1;
            padding: 0;
            margin: 0;
        }

        .DiVacceptanceLabel
        {
            display: flex;
            padding-left: 1px ;
            left: 1;
            padding: 0;
            margin: 0;
        }

        .acceptance
        {left: 1;
            padding: 0;
            margin: 0;
        }

        .DivСonsentText
        {
            display: flex;
            flex: auto;        
            font-size: 14px;
        }

        .СonsentText1
        {
            flex-grow: 1;
            right: 1;
            max-width: 100px;
        }
        .СonsentText2
        {
            flex-grow: 2;
            margin: 0  5px;
            color:dodgerblue;
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
                        <div class="default-content" id="choiceStaff"><?= $row['staff'] ?></div>

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
                        <div class="default-content" id="choiceDistance"><?= $row['delivery'] ?></div>

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
                    <div class="textForLine"  style="text-align: left; margin-left: -14px">
                        <text fill='#0074d9' x='0' y='60'>0</text>
                    </div>

                    <div class="textForLine d-flex">
                        <div style=" padding-left: 0px;">
                            <text fill='#0074d9' id="range1_count25" x='100%' y='60'></text>
                        </div>
                    </div>

                    <div class="textForLine d-flex" >
                        <div style=" padding-left: 0px;">
                            <text fill='#0074d9' id="range1_count50" x='100%' y='60'></text>
                        </div>
                    </div>

                    <div class="textForLine d-flex">
                    <div style=" padding-left: 0px;">
                        <text fill='#0074d9' id="range1_count75" x='100%' y='60'></text>
                    </div>
                    </div>

                    <div class="textForLine d-flex justify-content-end" style="text-align: right; margin-right: -15px">
                        <text fill='#0074d9' x='100%' y='60'><?php the_field('count');?></text>
                    </div>
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
                        <div class="image-25" id="range1_img-25">
                            <div class="divimg1">
                           <img src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                           </div>
                        </div>
                        <div class="image-50" id="range1_img-50">
                            <div class="divimg1">
                           <img src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                           </div>
                        </div>
                        <div class="image-75" id="range1_img-75">
                            <div class="divimg1">
                           <img  src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                           </div>
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
                    <div class="textForLine"  style="text-align: left; margin-left: -14px">
                        <text fill='#0074d9' x='0' y='60'>0</text>
                    </div>

                    <div class="textForLine d-flex">
                        <div style=" padding-left: 0px;">
                            <text fill='#0074d9' id="count25" x='100%' y='60'></text>
                        </div>
                    </div>

                    <div class="textForLine d-flex" >
                        <div style=" padding-left: 0px;">
                            <text fill='#0074d9' id="count50" x='100%' y='60'></text>
                        </div>
                    </div>

                    <div class="textForLine d-flex">
                    <div style=" padding-left: 0px;">
                        <text fill='#0074d9' id="count75" x='100%' y='60'></text>
                    </div>
                    </div>

                    <div class="textForLine d-flex justify-content-end" style="text-align: right; margin-right: -15px">
                        <text fill='#0074d9' x='100%' y='60'><?php the_field('stuff');?></text>
                    </div>
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
                        <div class="image-25" id="img-25">
                            <div class="divimg1">
                           <img src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                           </div>
                        </div>
                        <div class="image-50" id="img-50">
                            <div class="divimg1">
                           <img src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                           </div>
                        </div>
                        <div class="image-75" id="img-75">
                            <div class="divimg1">
                           <img  src="<?php echo get_template_directory_uri(); ?>\png\Ellipse 40.png" width="12" height="12">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row Button">
            <div class="col Button-main">
                <button id="openDialog" class="btn " type="submit">Заказать</button>
            </div>
        </div>

    </div>

  </div>

  <div class="modal z-index" id="dialog" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <img class="Img" src="<?php echo get_template_directory_uri(); ?>\png\call3.png" width="40" height="40">
                    <div class="col-11">
                        <h5 class="modal-title header" >Заказать расчёт</h5>
                    </div>
                        <button id="closeDialog" type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true" class="Х">&times;</span>
                    </button>
                </div>
                <form class="order">
                    <div>
                        <div class="input-box">
                            <?php
                            the_content()
                            ?>
                        </div>
                    <div>
                </form>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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

valueInput2.addEventListener("input", (event) => {
    const tempValue = parseInt(event.target.value);

    // Проверка, чтобы значение находилось в диапазоне от минимума до максимума ползунка
    if (tempValue >= parseInt(sliderEl2.min) && tempValue <= parseInt(sliderEl2.max)) {
        sliderEl2.value = tempValue;
    
        const progress = (tempValue / sliderEl2.max) * 100;
        sliderEl2.style.background = `linear-gradient(to right, #f50 ${progress}%, #ccc ${progress}%)`;
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

//Модальное окно

    document.getElementById("openDialog").addEventListener("click", function() {
        document.getElementById("dialog").style.display = "block";
    });

    document.getElementById("closeDialog").addEventListener("click", function() {
        document.getElementById("dialog").style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === document.getElementById("dialog")) {
            document.getElementById("dialog").style.display = "none";
        }
    });


    document.getElementById("openDialog").addEventListener("click", function() {
    document.getElementById("dialog").style.display = "block";
    });

    document.getElementById("closeDialog").addEventListener("click", function() {
    document.getElementById("dialog").style.display = "none";
    });

    window.addEventListener("click", function(event) {
    if (event.target === document.getElementById("dialog")) {
        document.getElementById("dialog").style.display = "none";
    }
    });


var copyButton = document.getElementById('openDialog');

var choiceStaff = document.getElementById('choiceStaff');
var TakeChoiceStaff = document.getElementById('TakeChoiceStaff');

copyButton.addEventListener('click', function () {

    TakeChoiceStaff.value = choiceStaff.textContent;
});

var choiceDistance = document.getElementById('choiceDistance');
var TakeChoiceDelivery = document.getElementById('TakeChoiceDelivery');

copyButton.addEventListener('click', function () {

    TakeChoiceDelivery.value = choiceDistance.textContent;
});

var value1 = document.getElementById('value1');
var Take_value1 = document.getElementById('Take_value1');

copyButton.addEventListener('click', function () {

    Take_value1.value = value1.value;
});

var value2 = document.getElementById('value2');
var Take_value2 = document.getElementById('Take_value2');

copyButton.addEventListener('click', function () {

    Take_value2.value = value2.value;
});



//Расположение поинтов на range
const rangeInput = document.querySelector('#range2');

var rangeClientWidth = rangeInput.clientWidth;

//размер ширины thumb
var thumbWidth = 25.6;
//Длина с корректировкой
var InputWithThumb = rangeClientWidth - thumbWidth;

var minRangeValue = parseInt(rangeInput.min);
var maxRangeValue = parseInt(rangeInput.max);
MaxMin= maxRangeValue - minRangeValue;

indent = 6 + 12.5 // Добаление 1/2 img-25 + 1/2 thumb

if((MaxMin/3)>=2)
{
    var unit = InputWithThumb / maxRangeValue;

    count25 = Math.round(MaxMin/100* 25);
    count50 = Math.round(MaxMin/100* 50);
    count75 = Math.round(MaxMin/100* 75);

    var point25 =  (count25 * unit) + indent; 
    var point50 =  (count50 * unit) + indent;
    var point75 =  (count75 * unit) + indent;


    var lengthDivNumber = rangeClientWidth / 5;
    var LengthCount25 = point25 - lengthDivNumber - 10;
    var LengthCount50 = point50 - (lengthDivNumber*2) - 10;
    var LengthCount75 = point75 - (lengthDivNumber*3) - 10;


    document.querySelector('#count25').style['padding-left'] = LengthCount25 + "px";
    document.querySelector('#count50').style['padding-left'] = LengthCount50 + "px";
    document.querySelector('#count75').style['padding-left'] = LengthCount75 + "px";

    console.log(LengthCount25);

document.querySelector('#img-25').style['width'] = point25 + "px";
document.querySelector('#img-50').style['width'] = point50 + "px";
document.querySelector('#img-75').style['width'] = point75 + "px";

document.getElementById("count25").textContent = count25;
document.getElementById("count50").textContent = count50;
document.getElementById("count75").textContent = count75;
}


    //Расположение поинтов на range
const range1_rangeInput = document.querySelector('#range');

var range1_rangeClientWidth = range1_rangeInput.clientWidth;

//размер ширины thumb
var thumbWidth = 25.6;
//Длина с корректировкой
var range1_InputWithThumb = range1_rangeClientWidth - thumbWidth;

var range1_minRangeValue = parseInt(range1_rangeInput.min);
var range1_maxRangeValue = parseInt(range1_rangeInput.max);
range1_MaxMin= range1_maxRangeValue - range1_minRangeValue;

indent = 6 + 12.5 // Добаление 1/2 img-25 + 1/2 thumb

if((MaxMin/3)>=2)
{
    var range1_unit = range1_InputWithThumb / range1_maxRangeValue;

    range1_count25 = Math.round(range1_MaxMin/100* 25);
    range1_count50 = Math.round(range1_MaxMin/100* 50);
    range1_count75 = Math.round(range1_MaxMin/100* 75);

    var range1_point25 =  (range1_count25 * range1_unit) + indent; 
    var range1_point50 =  (range1_count50 * range1_unit) + indent;
    var range1_point75 =  (range1_count75 * range1_unit) + indent;

    var range1_lengthDivNumber = range1_rangeClientWidth / 5;
    var range1_LengthCount25 = range1_point25 - range1_lengthDivNumber - 10;
    var range1_LengthCount50 = range1_point50 - (range1_lengthDivNumber*2) - 10;
    var range1_LengthCount75 = range1_point75 - (range1_lengthDivNumber*3) - 10;


    document.querySelector('#range1_count25').style['padding-left'] = range1_LengthCount25 + "px";
    document.querySelector('#range1_count50').style['padding-left'] = range1_LengthCount50 + "px";
    document.querySelector('#range1_count75').style['padding-left'] = range1_LengthCount75 + "px";

    console.log(LengthCount25);

document.querySelector('#range1_img-25').style['width'] = range1_point25 + "px";
document.querySelector('#range1_img-50').style['width'] = range1_point50 + "px";
document.querySelector('#range1_img-75').style['width'] = range1_point75 + "px";


document.getElementById("range1_count25").textContent = range1_count25;
document.getElementById("range1_count50").textContent = range1_count50;
document.getElementById("range1_count75").textContent = range1_count75;
}


</script>

</body>
</html>
