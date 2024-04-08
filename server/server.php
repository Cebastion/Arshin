<?php

function FormattingPhone($phoneNumber)
{
    $sanitizedPhoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
    return $sanitizedPhoneNumber;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Первое API
        $lead_client_name = 'имени нет'; //!!($_POST['lead_client_name']) ? $_POST['lead_client_name'] : 'нет имени';
        $lead_phone = FormattingPhone($_POST['lead_phone']);
        $client_description = !!($_POST['client_description']) ? $_POST['client_description'] : 'нет примечания';
        $lead_client_meter_number = $_POST['lead_client_meter_number'];
        $lead_company = 'Аршин'; // НАЗВАНИЕ КОМПАНИИ
        $lead_source = 'yandex.ru';
        $MAIL = ''; // ПОЧТА
        $domain = 'http://arshin-m.store/'; // ДОМЕН
        $MeterNumberURL = 'http://31.129.98.50/api/v1/LeadAPI/'; // API для счетчика

        // Второе API
        $id;
        $date = $_POST['date'];
        $source_type = 2;
        $source_name = '';
        $source_num = '';
        $source_site = 'arshin';
        $client_num = FormattingPhone($_POST['lead_phone']);
        $service = 'поверка';
        $client_name = 'неизвестно'; // !!($_POST['client_name']) ? $_POST['client_name'] : 'неизвестно'
        $client_address = !!($_POST['client_address']) ? $_POST['client_address'] : '';
        $message = !!($_POST['message']) ? $date : '';

        // API данные счетчика
        $MeterNumberData = array(
            "schet" => $lead_client_meter_number,
            "lead_phone" => $lead_phone,
            "lead_source" => $lead_source,
            "lead_company" => $lead_company
        );

        $MeterNumberData_string = json_encode($MeterNumberData);

        // Отправка на первое API
        $data = array(
            "lead_source" => $lead_source,
            "lead_client_name" => $lead_client_name,
            "lead_phone" => $lead_phone,
            "client_description" => $client_description,
            "lead_company" => $lead_company
        );

        $data_string = json_encode($data);

        $ch = curl_init($domain . '/api/v1/LeadAPI/');
        if ($ch === false) {
            throw new Exception('Failed to initialize curl');
        }
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string)
            )
        );

        $result = curl_exec($ch);
        if ($result === false) {
            throw new Exception('Curl request failed: ' . curl_error($ch));
        }

        curl_close($ch);

        // Отправка на второе API
        $data = array(
            "id" => $id,
            "date" => $date,
            "source_type" => $source_type,
            "source_name" => $source_name,
            "source_num" => $source_num,
            "source_site" => $source_site,
            "client_num" => $client_num,
            "service" => $service,
            "client_name" => $client_name,
            "client_address" => $client_address,
            "message" => $message,
        );

        $data_wrapper = array($data);
        $data_string = json_encode($data_wrapper);

        $ch = curl_init('https://proxy.ilobster.ru:8443/api/redro');
        if ($ch === false) {
            throw new Exception('Failed to initialize curl');
        }
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string)
            )
        );
        $result = curl_exec($ch);
        if ($result === false) {
            throw new Exception('Curl request failed: ' . curl_error($ch));
        }

        curl_close($ch);

        // Отправка API счетчика
        $ch = curl_init($MeterNumberURL);
        if ($ch === false) {
            throw new Exception('Failed to initialize curl');
        }
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $MeterNumberData_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($MeterNumberData_string)
            )
        );

        $result = curl_exec($ch);
        if ($result === false) {
            throw new Exception('Curl request failed: ' . curl_error($ch));
        }

        curl_close($ch);

        // Отправка на почту
        $to = $MAIL;
        $subject = 'Заказ на поверку счетчика воды';
        $message = "Имя клиента: $lead_client_name\nТелефон: $lead_phone\n Примечания: $client_description\n";
        $headers = 'From: ' . $MAIL . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Доступ к этой странице разрешен только через POST-запрос.";
}
