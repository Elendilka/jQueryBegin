<?php
/**
 * Created by PhpStorm.
 * User: Elendilka
 * Date: 05.06.2015
 * Time: 11:57
 */
header('Content-Type: text/html; charset=utf-8');
?>
<html>
<head>
    <title>Мой тренировочный веб-сайт по применению jQuery</title>
<!--    <link rel="stylesheet" type="text/css" href="style/style.css"/>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
<h4>Основные моменты Вам поможет понять следующая диаграмма:</h4>
<img src="images/030308-1530-jquery1.gif" alt="Диаграмма"/>

<p>Для того чтобы понимать как работает селектор необходимы базовые знания CSS, т.к. именно от принципов CSS
    отталкивается селектор jQuery, шпаргалка:</p>
<ul>
    <li>$(“#header”) – получение элемента с id=”header”</li>
    <li>$(“h3″) – получить все &lt;h3&gt; элементы</li>
    <li>$(“div#content .photo”) – получить все элементы с классом =”photo” которые находятся в элементе div с id=”content”</li>
    <li>$(“ul li”) – получить все &lt;li&gt; элементы из списка &lt;ul&gt;</li>
    <li>$(“ul li:first”) – получить только первый элемент &lt;li&gt; из списка &lt;ul&gt;</li>
</ul>
<h3>Пример 1: Выдвижная панель</h3>
<a href="slidePanel.phtml">Страничка с работающим примером</a>

</body>


</html>