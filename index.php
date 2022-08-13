<!DOCTYPE html>
<html>
<head>
    <title>
        Этой мой первый веб-сайт
    </title>

    <style>

        .items{
            margin-left: 100px;
            margin-right: 100px;
            background-color: white;
            width: auto;
            height: auto;
        ;
        }

        .item{
            display: inline-block;
            border-radius: 30px;
            width: 300px;
            height: 600px;
            padding-top: 25px;
            padding-left: 75px;
            padding-right: 75px;
            background-color: white;
            margin-right: 100px;
            margin-top: 100px;

        }
        .item:hover{
            box-shadow: 3px 10px 10px rgba(0, 0, 0, 0.3);
        }
        .item-img{
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 30px;
            width: 300px;
            height: 300px;
            background-color: #D9D9D9;
        }

        img {
            margin-bottom: 50px;
            border-radius: 30px;
            width: 300px;
            height: 300px;
        }

        .item-title{
            text-align: center;
            font-size: 12px;
            margin-bottom: 30px;
        }

        .btn {
            width: 200px;
            height: 50px;
            margin: 0 auto;
            display: block;
            background-color: #de3163;
            border-radius: 30px; /* Закругление */
            border: 0px; /* Обнуляем */
            transition: 0.7s; /* Анимация n сек */
        }
        .btn:hover { /* Селектор: класс btn. При наведении */
            border: 2px solid #de3163; /* Бордюр n пикс */
            background-color: white; /* задний фон при наведении*/
        }

        .ftr{
            background-color: #0d0101;
            color: white;
            height: 100px;
            text-align: center;
            font-family: Arial;
            font-size: small;
            padding-top: 20px
        ;
        }

        body{
            background-color: #D9D9D9;
        }
    </style>
</head>

<body>
<?php
$array = [
        [
    'item' => 'Коммутатор',
    'description' => 'Описание коммутатора',
    'price' => 10000,
    'currency' => 'RUB'
    ],
    [
        'item' => 'Роутер',
        'description' => 'Описание роутера',
        'price' => 2000,
        'currency' => 'RUB'
    ],
    [
        'item' => 'Товар 3',
        'description' => 'Описание товара 3',
        'price' => 30000,
        'currency' => 'RUB'
    ]
    ]
?>

<div class="top">
    <h1>
        Первый сайт
    </h1>
</div>

<?php
 foreach ($array as $item): ?>
        <table>

            <?php foreach ($item as $key => $value): ?>
            <?= $value ?>
            <?php endforeach; ?>
        </table>

 <?php endforeach; ?>

<div class ="items">

    <div class="item">


    <?php foreach ($item as $key => $value): ?>
            <?= $value ?>

    <?php endforeach; ?>
        <div class = "item-footer">
            <button class="btn">
                Добавить в избранное
            </button>
        </div>
    </div>

    <div class="item">
        <div class ="item-img">
            <img src="https://media.istockphoto.com/id/495732397/es/foto/router-negro-wi-fi.webp?s=612x612&w=is&k=20&c=IsNrGm9aGq58KCuBuIRVa4FG8MfLu1RAfICdnf6PYT0=">
        </div>

        <?php foreach ($item as $key => $value): ?>
            <?= $value ?>

        <?php endforeach; ?>

        <div class = "item-footer">
            <button class="btn">
                Добавить в избранное
            </button>
        </div>
    </div>

    <div class="item">
        <div class ="item-img">
            <img src="https://img.freepik.com/free-photo/portrait-happy-smiling-cheerful-support-phone-operator-headset-isolated-white-wall_231208-9603.jpg?w=1380&t=st=1660376757~exp=1660377357~hmac=84a639489a9edf93990059a0cebe20401a20f4efa27fddfb4a46015e72bcb05e">
        </div>

        <?php foreach ($item as $key => $value): ?>
            <?= $value ?>

        <?php endforeach; ?>



</div>
</body>

<footer>
    <div class="ftr">
        <p>
            Мой тестовый проект
        </p>

        <div class="fio">
            <p>
                Сергеев Дмитрий Юрьевич
            </p>
        </div>
    </div>
</footer>

</html>