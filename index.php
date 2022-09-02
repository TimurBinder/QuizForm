<?php 

    error_reporting(0); 
    
    $patient;

if (!empty($_POST)) {
    $patient = [
        'situation' => $_POST['situation'],
        'jaw' => $_POST['jaw'],
        'anesthesia' => $_POST['anesthesia'],
        'budget' => $_POST['budget'],
        'tax' => $_POST['tax'],
        'date' => $_POST['date'],
        'phone' => $_POST['phone'],
    ];

    $patient_situation = "Ситуация: {$_POST['situation']}\n";
    $patient_jaw = "Челюсть: {$_POST['jaw']}\n";
    $patient_anesthesia = "Анестезия: {$_POST['anesthesia']}\n";
    $patient_budget = "Бюджет: {$_POST['budget']}\n";
    $patient_tax = "Налог: {$_POST['tax']}\n";
    $patient_date = "Дата: {$_POST['date']}\n";
    $patient_phone = "Телефон: {$_POST['phone']}\n";

    $patient_data =  "Пациент\n" . $patient_phone . $patient_situation . $patient_jaw . $patient_anesthesia. $patient_budget . $patient_tax . $patient_date . "\n";

    file_put_contents('patient.txt', $patient_data, FILE_APPEND);
    header("Location: index.php");
    exit;
}
    
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Quiz</title>
</head>
<body>
    <section class="quiz">
        <div class="content">
            <div class="quiz_block">

            <!-- Левая часть опросника -->
                <div class="quiz_block_left">
                    <!-- Опросник -->
                    <form class="quiz_block_form" id="quiz_block_form" method="post">
                        <div class="quiz_block_left_offer" id="quiz_block_left_offer">
                            <div class="quiz_block_left_offer_wrapper">

                            <!-- Слайд 1 -->
                                <div class="quiz_block_left_slide">
                                    <h1 class="quiz_block_left_offer_title">1. Какая у вас ситуация?</h1>
                                    <p class="quiz_block_left_offer_intro">Выберите ситуацию и рассчитайте стоимость лечения прямо сейчас без звонка</p>
                                    <div class="quiz_block_left_offer_variations-block">
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/situation/1.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getSituation" value="Нет нескольких зубов" checked>
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div class="quiz_block_left_offer_variation_wrappper">
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Нет нескольких зубов
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/situation/2.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getSituation" value="Нет почти всех зубов">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Нет почти всех зубов
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/situation/3.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getSituation" value="Нет всех зубов">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Нет всех зубов
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            <!-- Слайд 2 -->
                                <div class="quiz_block_left_slide">
                                    <h1 class="quiz_block_left_offer_title">2. На какой челюсти нужно сделать зубы?</h1>
                                    <p class="quiz_block_left_offer_intro"><span class="black">Осталось 4 вопроса</span> и вы узнаете стоимость восстановления зубов по технологии All-on-4</p>
                                    <div class="quiz_block_left_offer_variations-block">
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/jaw/1.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getJaw" value="На верхней" checked>
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div class="quiz_block_left_offer_variation_wrappper">
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                На верхней
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/jaw/2.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getJaw" value="На нижней">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                На нижней
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/jaw/3.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getJaw" value="На обеих">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                На обеих
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            <!-- Слайд 3 -->
                                <div class="quiz_block_left_slide">
                                    <h1 class="quiz_block_left_offer_title">3. Хотите провести операцию во сне?</h1>
                                    <p class="quiz_block_left_offer_intro"><span class="black">Осталось 3 вопроса</span> и вы узнаете стоимость восстановления зубов по технологии All-on-4</p>
                                    <div class="quiz_block_left_offer_variations-block">
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/anesthesia/1.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getAnesthesia" value="Да" checked>
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div class="quiz_block_left_offer_variation_wrappper">
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Да
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/anesthesia/2.png" alt="" ></div>                                                
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getAnesthesia" value="Нет">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Нет
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/anesthesia/3.svg" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getAnesthesia" value="Затрудняюсь ответить">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Затрудняюсь ответить
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            <!-- Слайд 4 -->
                                <div class="quiz_block_left_slide">
                                    <h1 class="quiz_block_left_offer_title">4. Какой бюджет рассматриваете?</h1>
                                    <p class="quiz_block_left_offer_intro"><span class="black">Осталось 2 вопроса</span> и вы узнаете стоимость восстановления зубов по технологии All-on-4</p>
                                    <div class="quiz_block_left_offer_variations-block">
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><span class="quiz_block_left_offer_variation_img_caption"><b>Osstem</b> (Корея)</span><img src="img/budget/1.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getBudget" value="Стандарт" checked>
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div class="quiz_block_left_offer_variation_wrappper">
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Стандарт
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><span class="quiz_block_left_offer_variation_img_caption"><b>Neodent</b> (Бразилия)</span><img src="img/budget/2.png" alt="" ></div>                                               
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getBudget" value="Премиум">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Премиум
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><span class="quiz_block_left_offer_variation_img_caption"><b>Nobel</b> (Швейцария)</span><img src="img/budget/3.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getBudget" value="Премиум+">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Премиум+
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            <!-- Слайд 5 -->
                                <div class="quiz_block_left_slide">
                                    <h1 class="quiz_block_left_offer_title">5. Будете оформлять налоговый вычет 15%?</h1>
                                    <p class="quiz_block_left_offer_intro"><span class="black">Остался 1 вопрос</span> и вы узнаете стоимость восстановления зубов по технологии All-on-4</p>
                                    <div class="quiz_block_left_offer_variations-block">
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/tax/1.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getTax" value="Да" checked>
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div class="quiz_block_left_offer_variation_wrappper">
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Да
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/tax/2.png" alt="" ></div>                                                
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getTax" value="Нет">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Нет
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/tax/3.svg" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getTax" value="Затрудняюсь ответить">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Затрудняюсь ответить
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            <!-- Слайд 6 -->
                                <div class="quiz_block_left_slide">
                                    <h1 class="quiz_block_left_offer_title">6. Когда планируете начать лечение?</h1>
                                    <p class="quiz_block_left_offer_intro"><span class="black">Последний вопрос</span> – и вы узнаете стоимость восстановления зубов по технологии All-on-4</p>
                                    <div class="quiz_block_left_offer_variations-block">
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/date/1.png" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getDate" value="Как можно скорее" checked>
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div class="quiz_block_left_offer_variation_wrappper">
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Как можно скорее
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/tax/2.png" alt="" ></div>                                                
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getDate" value="В течение месяца">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                В течение месяца
                                            </figcaption>
                                        </figure>
                                        <figure class="quiz_block_left_offer_variation">
                                            <div class="quiz_block_left_offer_variation_wrappper">
                                                <div class="quiz_block_left_offer_variation_img"><img src="img/anesthesia/3.svg" alt="" ></div>
                                                <input type="radio" class="quiz_block_left_offer_radio" name="getDate" value="Затрудняюсь ответить">
                                                <div class="quiz_block_left_offer_variation_tick_block">
                                                    <svg class="quiz_block_left_offer_variation_tick" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z" fill="#B9C0C4"></path> 
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.015.019c-.041.019-2.32 2.456-5.066 5.415l-4.99 5.382-2.47-2.66C2.162 5.649 2.015 5.499 1.892 5.499c-.12 0-.195.07-1.01.951C.13 7.26 0 7.42 0 7.52c0 .102.43.581 3.368 3.749 1.852 1.998 3.415 3.66 3.473 3.693.083.047.127.05.206.015.055-.024 2.767-2.918 6.026-6.431C18.267 2.948 19 2.143 19 2.04c0-.1-.13-.257-.881-1.066-.485-.521-.915-.957-.956-.968a.254.254 0 0 0-.148.013Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <figcaption class="quiz_block_left_offer_vaiation-text">
                                                Затрудняюсь ответить
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                        <!-- Кнопки -->
                        <!-- Кнопка Назад -->
                            <div class="quiz_block_btn_block" id="quiz_block_previous-btn_block">
                                <span class="quiz_block_previous-btn" id="quiz_block_previous-btn">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                        <circle r="13.6991" transform="matrix(-0.997235 -0.0743161 -0.0743161 0.997235 14.6791 14.6793)" fill="#C4C4C4"></circle> 
                                        <circle r="13.6991" transform="matrix(-0.997235 -0.0743161 -0.0743161 0.997235 14.6791 14.6793)" fill="#A88CB8"></circle> 
                                        <path d="M7.85694 15.1388C7.6031 14.885 7.6031 14.4734 7.85694 14.2196L11.9935 10.083C12.2474 9.82916 12.6589 9.82916 12.9127 10.083C13.1666 10.3368 13.1666 10.7484 12.9127 11.0022L9.23579 14.6792L12.9127 18.3562C13.1666 18.61 13.1666 19.0216 12.9127 19.2754C12.6589 19.5292 12.2474 19.5292 11.9935 19.2754L7.85694 15.1388ZM22.0562 15.3292H8.31656V14.0292H22.0562V15.3292Z" fill="white"></path> 
                                        <circle r="13.6991" transform="matrix(-0.997235 -0.0743161 -0.0743161 0.997235 14.6791 14.6793)" fill="#C4C4C4"></circle>
                                        <circle r="13.6991" transform="matrix(-0.997235 -0.0743161 -0.0743161 0.997235 14.6791 14.6793)" fill="#A88CB8"></circle>
                                        <path d="M7.85694 15.1388C7.6031 14.885 7.6031 14.4734 7.85694 14.2196L11.9935 10.083C12.2474 9.82916 12.6589 9.82916 12.9127 10.083C13.1666 10.3368 13.1666 10.7484 12.9127 11.0022L9.23579 14.6792L12.9127 18.3562C13.1666 18.61 13.1666 19.0216 12.9127 19.2754C12.6589 19.5292 12.2474 19.5292 11.9935 19.2754L7.85694 15.1388ZM22.0562 15.3292H8.31656V14.0292H22.0562V15.3292Z" fill="white"></path>
                                    </svg>
                                    <span>Назад</span>
                                </span>

                            <!-- Кнопка Вперед -->
                                <span class="quiz_block_next-btn" id="quiz_block_next-btn">
                                    <span>Дальше</span>
                                    <svg class="quiz_block_next-btn_arrow" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                        <circle cx="14.6793" cy="14.6793" r="13.6991" transform="rotate(-4.26193 14.6793 14.6793)" fill="#C4C4C4"></circle> 
                                        <circle cx="14.6793" cy="14.6793" r="13.6991" transform="rotate(-4.26193 14.6793 14.6793)" fill="#4C175A"></circle> 
                                        <path d="M21.5015 15.1388C21.7553 14.885 21.7553 14.4734 21.5015 14.2196L17.3649 10.083C17.111 9.82916 16.6995 9.82916 16.4456 10.083C16.1918 10.3368 16.1918 10.7484 16.4456 11.0022L20.1226 14.6792L16.4456 18.3562C16.1918 18.61 16.1918 19.0216 16.4456 19.2754C16.6995 19.5292 17.111 19.5292 17.3649 19.2754L21.5015 15.1388ZM7.30225 15.3292H21.0418V14.0292H7.30225V15.3292Z" fill="#A351AC"></path> 
                                        <circle cx="14.6793" cy="14.6793" r="13.6991" transform="rotate(-4.26193 14.6793 14.6793)" fill="#C4C4C4"></circle>
                                        <circle cx="14.6793" cy="14.6793" r="13.6991" transform="rotate(-4.26193 14.6793 14.6793)" fill="#4C175A"></circle>
                                        <path d="M21.5015 15.1388C21.7553 14.885 21.7553 14.4734 21.5015 14.2196L17.3649 10.083C17.111 9.82916 16.6995 9.82916 16.4456 10.083C16.1918 10.3368 16.1918 10.7484 16.4456 11.0022L20.1226 14.6792L16.4456 18.3562C16.1918 18.61 16.1918 19.0216 16.4456 19.2754C16.6995 19.5292 17.111 19.5292 17.3649 19.2754L21.5015 15.1388ZM7.30225 15.3292H21.0418V14.0292H7.30225V15.3292Z" fill="#A351AC"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </form>

                <!-- Процесс рассчета стоимости -->
                    <div class="quiz_block_left_offer_wrapper_calculate" id="quiz_block_left_offer_calculate">
                        <h2 class="quiz_block_left_offer_title">Готово! Рассчитываем стоимость лечения...</h2>
                        <p class="quiz_block_left_offer_intro">Это займет всего несколько секунд</p>
                        <div class="quiz_block_left_offer_calculate_progress_block">
                            <div class="quiz_block_left_offer_calculate_progress" id="quiz_block_left_offer_calculate_progress"></div>
                        </div>
                        <p class="quiz_block_left_offer_calculate_percent" id="quiz_block_left_offer_calculate_percent"></p>
                    </div>

                <!-- Форма с номером телефона -->
                    <div class="quiz_block_left_offer_wrapper_phone" id="quiz_block_left_offer_wrapper_phone">
                        <h1 class="quiz_block_left_offer_title">Заполните форму и получите расчёт через 5 секунд</h1>
                        <form action="index.php" method="post" class="quiz_block_left_offer_phone_form">
                            <input type="hidden" name="situation" value="Нет нескольких зубов" class="quiz_block_left_offer_phone_form_input-hidden">
                            <input type="hidden" name="jaw" value="На верхней" class="quiz_block_left_offer_phone_form_input-hidden">
                            <input type="hidden" name="anesthesia" value="Да" class="quiz_block_left_offer_phone_form_input-hidden">
                            <input type="hidden" name="budget" value="Стандарт" class="quiz_block_left_offer_phone_form_input-hidden">
                            <input type="hidden" name="tax" value="Да" class="quiz_block_left_offer_phone_form_input-hidden">
                            <input type="hidden" name="date" value="Как можно скорее" class="quiz_block_left_offer_phone_form_input-hidden">
                            <input type="tel" name="phone" placeholder="Телефон для консультации"  
                            autofocus required class="quiz_block_left_offer_phone_form_input" 
                            id="quiz_block_left_offer_phone_form_input">
                            <button class="quiz_block_left_offer_phone_form_btn" type="submit" name="phone_form">
                                <span>Получить расчёт стоимости прямо сейчас</span>
                            </button>
                        </form>
                        <p class="quiz_block_left_offer_phone_copyright">
                            Нажимая на кнопку, вы соглашаетесь на обработку <a href="#"><span>персональных данных</spa></a>
                        </p>
                    </div>
                </div>

            <!-- Правая часть опросника -->
                <div class="quiz_block_right">
                    
                <!-- Первый блок -->
                    <div class="quiz_block_right_time_wrapper">
                        <div class="quiz_block_right_info">
                            <div class="quiz_block_right_time">
                                <div class="quiz_block_right_img_block">
                                    <img src="img/time.png" alt="" class="quiz_block_right_img">
                                    <div class="quiz_block_right_time_img_text">Это займет 1 минуту</div>
                                </div>
                                <div class="quiz_block_right_intro">
                                    <b>После прохождения теста,<br class="min-none"> вы получите</b> оптимальный расчёт стоимости под ваш бюджет
                                    <span>+ Ирригатор Revyline<br class="min-none"> в подарок</span>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Второй блок -->
                    <div class="quiz_block_right_bonuses_wrapper">
                        <div class="quiz_block_right_bonuses">
                            <div class="quiz_block_right_bonuses_card">
                                <img src="img/bonuses/revyline.png" alt="" class="quiz_block_right_bonuses_card_img">
                                <span>
                                    Ирригатор Revyline <b>в подарок</b>
                                </span>
                            </div>
                            <div class="quiz_block_right_bonuses_card">
                                <img src="img/bonuses/installment.png" alt="" class="quiz_block_right_bonuses_card_img">
                                <span>
                                    Рассрочка <b>без процентов</b>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/dependencyLibs/inputmask.dependencyLib.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
