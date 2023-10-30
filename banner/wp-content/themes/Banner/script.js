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
