const slider = document.getElementById("quiz_block_left_offer");
const slide = document.getElementsByClassName("quiz_block_left_slide");
const next = document.getElementById("quiz_block_next-btn");
const previous = document.getElementById("quiz_block_previous-btn");
const variation = document.getElementsByClassName("quiz_block_left_offer_variation");
const variationImg = document.getElementsByClassName("quiz_block_left_offer_variation_img");
const tickBlock = document.getElementsByClassName("quiz_block_left_offer_variation_tick_block");
const tick = document.getElementsByClassName("quiz_block_left_offer_variation_tick");
const progressLine = document.getElementById("quiz_block_left_offer_calculate_progress");
const progressNumber = document.getElementById("quiz_block_left_offer_calculate_percent");
const progressBlock = document.getElementById("quiz_block_left_offer_calculate");
const sliderBlock = document.getElementById("quiz_block_form");
const phoneBlock = document.getElementById("quiz_block_left_offer_wrapper_phone");
const phoneInput = document.querySelector("#quiz_block_left_offer_phone_form_input");
const inputQuizGet = document.getElementsByClassName("quiz_block_left_offer_radio");
const inputQuiz = document.getElementsByClassName("quiz_block_left_offer_phone_form_input-hidden");
let slideWidth = slider.clientWidth;
let slideTranslate = 0;
let sliderPage = 0;

for (let i = 0; i < variation.length; i++) {
    if (inputQuizGet[i].checked) {
        variationImg[i].classList.add("quiz_block_left_offer_variation_check");
        tick[i].style.fill = "#794dc0";
        tickBlock[i].classList.add("quiz_block_left_offer_variation_check");
    }
}

function activateVariation(num) {
    for (let i = sliderPage * 3; i < (sliderPage * 3 + 3); i++) {
        variationImg[i].classList.remove("quiz_block_left_offer_variation_check");
        tick[i].style.fill = "#B9C0C4";
        tickBlock[i].classList.remove("quiz_block_left_offer_variation_check");
    }
    variationImg[num].classList.add("quiz_block_left_offer_variation_check");
    tick[num].style.fill = "#794dc0";
    tickBlock[num].classList.add("quiz_block_left_offer_variation_check");
    inputQuiz[sliderPage].value = inputQuizGet[num].value;
}

for (let i = 0; i < variation.length; i++) {
    variation[i].onclick = function() {
        activateVariation(i);
    }
}

next.onclick = function() {
    if (sliderPage < 5) {
        slideTranslate += slideWidth;
        sliderPage++;
        for (let i = 0; i < slide.length; i++) {
            slide[i].style.transform = "translate(-" + slideTranslate + "px)";
            if (sliderPage > 0) {
                previous.style.display = "flex";
            }     
        }
    } else if (sliderPage >= 5) {
        sliderBlock.style.display = "none";
        progressBlock.style.display = "block";
        progressCalculate();
    }
    console.log(sliderPage);
}

previous.onclick = function() {
    slideTranslate -= slideWidth;
    sliderPage--;
    for (let i = 0; i < slide.length; i++) {
        slide[i].style.transform = "translate(-" + slideTranslate + "px)";
        if (sliderPage <= 0) {
            previous.style.display = "none";
        }        
    }
    console.log(sliderPage);

}

let progressPercent = 0;

function progressCalculate() {
    let calculate = setInterval(function() {
        if (progressPercent <= 100) {
            progressNumber.innerHTML = progressPercent + "%";
            progressLine.style.width = progressPercent + "%";
        } else if (progressPercent >= 140) {
            progressPercent = 0;
            progressBlock.style.display = "none";
            phoneBlock.style.display = "block";
        clearInterval(calculate);

        }
        progressPercent++;
    }, 12)
}

Inputmask({
    "mask": "+7(999)-999-99-99",
    showMaskOnHover: true
  }).mask(phoneInput)