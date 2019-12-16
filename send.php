<?php
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $second_name = $_POST['second-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $index = $_POST['index'];
    $city = $_POST['city'];
    $town = $_POST['town'];
    $adress = $_POST['adress'];
    $house = $_POST['house'];
    $housing = $_POST['housing'];
    $structure = $_POST['structure'];
    $floor = $_POST['floor'];
    $apartment = $_POST['apartment'];
    $intercom = $_POST['intercom'];
    $terms = $_POST['terms'];
    $arhive = $_POST['arhive'];
    $language = $_POST['language'];
    $choose = $_POST['choose'];
    $to = 'subscribe@theworldmag.com';
    $subject = 'Заявка на подписку';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <info@theworldmag.com>\r\n";

    if($language == '') $language = 'Язык журнала не выбран';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Фамилия : '.$surname.'</p>
                        <p>Имя  : '.$name.'</p>
                        <p>Отчество : '.$name.'</p>
                        <p>Почта : '.$email.'</p>
                        <p>Телефон :'.$phone.'</p>
                        <p>Страна :'.$country.'</p>
                        <p>Индекс :'.$index.'</p>
                        <p>Город :'.$city.'</p>
                        <p>Населенный пункт :'.$town.'</p>
                        <p>Улица :'.$adress.'</p>
                        <p>Дом :'.$house.'</p>
                        <p>Корпус :'.$housing.'</p>
                        <p>Строение :'.$structure.'</p>
                        <p>Этаж :'.$floor.'</p>
                        <p>Квартира :'.$apartment.'</p>
                        <p>Код/домофон :'.$intercom.'</p>
                        <p>Условия подписки :'.$arhive.'</p>
                        <p>Язык журнала :' .$language.'</p>                       
                    </body>
                </html>
                ';

    $choose_arr = json_decode($choose, true);

    if($choose_arr['number'] != '') {
        $count = count($choose_arr['number']);
        $message .= '<p>Список выбранных журналов: ';
        echo $count;
        for ($i = 0; $i < $count; $i++) {
            $message .= $choose_arr['number'][$i].'  ';
        }
        $message .= '</p>';
    } else {
        $message .= '<p>Журналы не выбраны</p>';
    }


    if($choose_arr['follow'] == 'yes') {
        $message .= '<p>Выбрана годовая подписка</p>';
    } else {
        $message .= '<p>Годовая подписка не выбрана</p>';
    }

    $message .= '</body></html>';


    mail($to, $subject, $message, $headers);
?>

