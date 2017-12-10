<?php

/*$dirs = array('Загрузки',
'Новая папка',
'Матлаб1',
'3',
'4',
'Матлаб',
'Графики',
'Работа',
'Юпитер',
'Июнь',
'А8густ',
'Вапреш',
'Библиотека',
'1',
'Книга',
'42',
'Носки эдвардианской эпохи',
'Э6скизы',
'Очки и тапочки',
'Чеки',
'Слоники',
'Зефир4',
'Сапфиры',
'Конги',
'Науч. работа',
'Трансформатор',
'Селекторы',
'КП2П',
'Ракетка',
'Санит45696',
'Отцы и дети и дети их детей',
'Скрипты',
'Ку77бик',
'Октаэдр');

for ($i=0; $i < 13 ; $i++) 
	mkdir('./path/'."$dirs[$i]", 0777, true);

for ($i=14; $i < 16 ; $i++) 
	mkdir('./path/Работа/'."$dirs[$i]", 0777, true);

for ($i=17; $i < 22 ; $i++) 
	mkdir('./path/Графики/'."$dirs[$i]", 0777, true);

for ($i=22; $i < count($dirs) ; $i++) 
	mkdir('./path/Графики/Слоники/'."$dirs[$i]", 0777, true);*/



function check_for_number($str)
{
    $lenght = strlen($str); 
    for($i=0;$i<$lenght;)
    {
        if (is_numeric($str[$i++]))
        {
            return true;
        }
    }
    return false;
}

 $total =  '<div id='.'data-wrapper'.'>';
$currentDir = __DIR__ . '/' . (isset($_GET['link']) ? $_GET['link'] . '/' : '');
$dir = scandir($currentDir);
if (isset($dir)) {
    foreach ($dir as $i) {
        if ($i != '.' && $i != '..') {
            if (is_dir($currentDir . $i) && !check_for_number($currentDir.$i)) {
                echo '<p><strong><a href="?link=' . (isset($_GET['link']) ? $_GET['link'] . '/' . $i : $i) . '">[ ' . $i . ' ]</a></strong></p>';
            } else {
                echo '<p>' . $i . '</p>';
            }
        }
    }
}

?>