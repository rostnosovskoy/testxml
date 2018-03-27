<!--Выведите на экран столбец пользователей, а рядом с ними - города, в которых они были.-->

<?php
$xml = file_get_contents('user.xml');
$xml = simplexml_load_string($xml);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "<pre>";
//var_dump($xml);
//print_r($xml);
foreach ($xml->user as $index => $item) {
    $name = $item['name'];
    $cities = $item['citys'];
            echo "<p>$name</p>";

    }
//    var_dump($val);
//    foreach ($val as $k => $v) {
//        echo "<p>$k: $v</p>";
//    }




?>

</body>
</html>
