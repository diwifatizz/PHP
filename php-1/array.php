<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Array</title>
</head>
<body>
<h1>Berlatih Array</h1>
<?php
echo "<h3> Soal 1 </h3>";
/* SOAL NO 1
Kelompokkan nama-nama di bawah ini ke dalam Array. Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" */
$kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];// Lengkapi di sini
$adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

// Menampilkan isi array "kids"
echo "Kids:<br>";
echo "<ul>";
foreach ($kids as $kid) {
    echo "<li>$kid</li>";
}
echo "</ul>";

// Menampilkan isi array "adults"
echo "Adults:<br>";
echo "<ul>";
foreach ($adults as $adult) {
    echo "<li>$adult</li>";
}
echo "</ul>";



echo "<h3> Soal 2</h3>";
/* SOAL NO 2
Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
echo "Cast Stranger Things: ";
echo "<br>";

// Menampilkan panjang array "kids"
echo "Total Kids: " . count($kids) . "<br>";
echo "<ol>";
// Menampilkan isi array "kids"
foreach ($kids as $kid) {
    echo "<li> $kid </li>";
}
echo "</ol>";

// Menampilkan panjang array "adults"
echo "Total Adults: " . count($adults) . "<br>";
echo "<ol>";
// Menampilkan isi array "adults"
foreach ($adults as $adult) {
    echo "<li> $adult </li>";
}
echo "</ol>";

echo "<h3> Soal 3 </h3>";
/* SOAL No 3
Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
Name: "Will Byers" Age: 12, Aliases: "Will the Wise" Status: "Alive" Name: "Mike Wheeler" Age: 12, Aliases: "Dungeon Master" Status: "Alive" Name: "Jim Hopper" Age: 43, Aliases: "Chief Hopper" Status: "Deceased"
Name: "Eleven" Age: 12, Aliases: "El" Status: "Alive" Output: Array
(
[0] => Array
(
[Name] => Will Byers [Age] => 12
[Aliases] => Will the Wise
[Status] => Alive
)
[1] => Array
(
[Name] => Mike Wheeler [Age] => 12
[Aliases] => Dugeon Master [Status] => Alive
)
[2] => Array
(
[Name] => Jim Hooper [Age] => 43
[Aliases] => Chief Hopper [Status] => Deceased
)
[3] => Array
(
[Name] => Eleven
[Age] => 12
[Aliases] => El
[Status] => Alive
)
) */
// Data dalam bentuk array asosiatif
$data = [
    [
        "Name" => "Will Byers",
        "Age" => 12,
        "Aliases" => "Will the Wise",
        "Status" => "Alive"
    ],
    [
        "Name" => "Mike Wheeler",
        "Age" => 12,
        "Aliases" => "Dungeon Master",
        "Status" => "Alive"
    ],
    [
        "Name" => "Jim Hopper",
        "Age" => 43,
        "Aliases" => "Chief Hopper",
        "Status" => "Deceased"
    ],
    [
        "Name" => "Eleven",
        "Age" => 12,
        "Aliases" => "El",
        "Status" => "Alive"
    ]
];

// outputnya
echo '<pre>'; print_r($data); echo '</pre>';

?>
</body>
</html>