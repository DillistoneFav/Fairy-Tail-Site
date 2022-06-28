<?php
    // echo 'get out of here dumbass';
    header('location: $url');
    $amount=$_POST['amount'];
    $order = time();

    $array_hash = [
        '17598',
        $amount,
       'I0*7K06dYKQstFa',
       'RUB',
        $order,
    ];

    $sign = hash('md5', implode(':', $array_hash));
    var_dump($sign);

    $params = [
        'm' => '17598',
        'oa' => $amount,
        'currency' => 'RUB',
        'o' => $order,
        's' => $sign,
        'lang' => 'ru',
    ];

    $url = "https://pay.freekassa.ru/?m=".$params['m']."&oa=".$params['oa']."&currency=".$params['m']."&o=".$params['o']."&pay=PAY&s=".$params['s'];
    echo $url;