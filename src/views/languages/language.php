<?php
/*
 * Вывод списка языков для выбора пользователю
 */
use yii\helpers\Html;

$language = Yii::$app->language; //текущий язык
//Создаем массив ссылок всех языков с соответствующими GET параметрами
$array_lang = [
    'en' => Html::a('English', ['site/language', 'lang' => 'en']),
    'ru' => Html::a('Русский', ['site/language', 'lang' => 'ru']),
    'uk' => Html::a('Українська', ['site/language', 'lang' => 'uk']),
];
//ссылку на текущий язык не выводим
if(isset($array_lang[$language])) unset($array_lang[$language]);
?>

<div class="language-ksl">
    <?php foreach ($array_lang as $lang) {
        echo ' '.$lang.' ';
    } ?>
</div>