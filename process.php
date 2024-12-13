<?php
$currentDate = date('Y-m-d H:i:s');
echo "<h1>Welcome! Current date and time: $currentDate</h1>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['startDate']) && isset($_POST['endDate'])) {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $startDate) || !preg_match("/^\d{4}-\d{2}-\d{2}$/", $endDate)) {
            echo "<p style='color: red;'>Please enter valid dates in the format YYYY-MM-DD.</p>";
        } else {
            $start = new DateTime($startDate);
            $end = new DateTime($endDate);

            $diff = $start->diff($end);

            echo "<p>The difference between the dates is: " . abs($diff->days) . " day(s).</p>";
        }
    } else {
        echo "<p style='color: red;'>Please provide both start and end dates.</p>";
    }
}
?>

