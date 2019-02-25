<?php

function task1($xml)
{
    echo 'Order Number - ' . $xml['PurchaseOrderNumber'] . '<br />';
    echo 'Order Date - ' . $xml['OrderDate'] . '<br />';
    echo "<table border='1' style='width: 600px'><tr>";
    echo '<td>' . $xml->Address[0]['Type'] . '</td>';
    echo '<td>' . $xml->Address[1]['Type'] . '</td>';
    echo '<td> Comment </td>';
    echo '<td> Items </td>';
    echo '</tr><tr>';
    foreach ($xml->Address as $Address) {
        echo '<td>';
        echo 'Name - ' . $Address->Name . '<br />';
        echo 'Street - ' . $Address->Street . '<br />';
        echo 'City - ' . $Address->City . '<br />';
        echo 'State - ' . $Address->State . '<br />';
        echo 'Zip - ' . $Address->Zip . '<br />';
        echo 'Country - ' . $Address->Country;
        echo '</td>';
    }
    echo '<td>' . $xml->DeliveryNotes . '</td>';
    echo '<td>';
    foreach ($xml->Items->Item as $Item) {
        echo 'PartNumber - ' . $Item['PartNumber'] . '<br />';
        echo 'ProductName' . $Item->ProductName . '<br />';
        echo 'Quantity - ' . $Item->Quantity . '<br />';
        echo 'USPrice - ' . $Item->USPrice . '<br />';
        echo 'Comment - ' . $Item->Zip . '<br />';
        echo 'ShipDate - ' . $Item->ShipDate;
        echo '<hr />';
    }
    echo '</td></tr></table>';
    echo '<hr>';
}

;

/**
 *
 */
function task2()
{
    $some_array = array(
        "fruits" => array(
            "citrus" => array(
                "orange",
                "lemon",
                "grape"
            ),
            "b" => "banana",
            "c" => "apple"
        )
    );
    file_put_contents('data.json', json_encode($some_array));
    $file = file_get_contents('data.json');
    $fileDecode = json_decode($file, TRUE);
    $fileDecodeChanged = $fileDecode;
    $change = rand(0, 1);
    if ($change == 1) {
        $fileDecode['fruits']['b'] = 'some berry';
    }
    $diff = array_diff_assoc($fileDecodeChanged['fruits'], $fileDecode['fruits']);
    print_r($diff);
    echo '<hr>';
}

;

function task3()
{
    $array50 = array();
    for ($i = 0; $i < 50; $i++) {
        $array50[$i] = rand(1, 100);
    }
    $file_csv = fopen('file.csv', 'w');
    fputcsv($file_csv, $array50, ',');
    fclose($file_csv);

    $handle = fopen("file.csv", "r", false);
    $data = fgetcsv($handle, 1000, ',');
    fclose($handle);

    for ($i = 0; $i < 50; $i++) {
        if ($data[$i] % 2 == 0) {
            $newData[$i] = $data[$i];
        }
    }
    $summ = array_sum($newData);

    echo '<br>' . $summ;
    echo '<hr>';
}

function task4()
{
    $f_json = 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&r
vprop=content&format=json';
    $newFile = file_get_contents($f_json);
    $newFileDecode = json_decode($newFile, TRUE);
    echo $newFileDecode['query']['pages'][15580374]['pageid'] . '<br>';
    echo $newFileDecode['query']['pages'][15580374]['title'] . '<br>';
    echo '<hr>';
}