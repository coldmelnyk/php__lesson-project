<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>PHP - Local server</title>
</head>
<body>
<?php
    const MY_AGE = 24;

    $number = 5;
    $string_number = '5';
    $word = "Variable";
    $bool = false;

    echo $word . ': ' . $number . "<br>";
    echo "$word: $number" . "<br>"; // showing vars
    echo '$word: $number' . "<br>"; // isn't showing vars
    echo $number + intval($string_number) . "<br>";
    echo MY_AGE . "<br>";

    $hash_one = md5($word); // hashing function

    if ($number !== 6) {
        echo 'Not 6';
    } else {
        echo 'Value is 6';
    }
    echo "<br>";

    if ($number !== 6)
        echo 'Not 6';
    else
        echo 'Value is 6';
    echo "<br>";

    $arr = array(1, 2, 3);

    echo $arr[0];
    echo "<br>";

    $user = array('name' => 'John', 'age' => 24, 'city' => 'Kyiv'); // Асоціативний масив
    echo $user['name'];
    echo "<br>";

    for ($i = 0; $i < sizeof($arr); $i++) { // count() === sizeof() => to check length of arrays
        if (isset($arr[$i + 1])) // checks if not undefined
            echo $arr[$i] . ' / ';
        else
            echo $arr[$i];

    }
    echo "<br>";

    $index = 0;
    while ($index < 10) {
        echo $index + 1 . ' ';
        $index++;
    }
    echo "<br>";

    $i = 100;
    do {
        echo $i;
        $i--;
    } while ($i < 10); // firstly do action and repeat only if while block is true
    echo "<br>";

    $db = file_get_contents('./db.json'); // converting json file to string
    echo json_decode($db) -> name; // parsing json string to PHP value and getting value of 'name' key
    echo "<br>";
?>
</body>
</html>