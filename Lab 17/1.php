
<?php
$students = [
    "Hari" => 87,
    "Aayush" => 99,
    "Aman" => 97,
    "Abhishek" => 81
];
$total  = 0;
$count = 0 ; 

foreach ($students as $name => $grade) {
    echo "$name: $grade<br>";
    $total += $grade;
    $count++;
}
$average = $total / $count;
echo "Average Grade: $average";
?>