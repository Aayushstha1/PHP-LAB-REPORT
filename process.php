<?php
// Display the current date and time
$currentDate = date('Y-m-d H:i:s');
echo "<h1>Welcome! Current date and time: $currentDate</h1>";

// Check if the form has been submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure both start and end dates are provided
    if (isset($_POST['startDate']) && isset($_POST['endDate'])) {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        // Validate the date format (YYYY-MM-DD)
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $startDate) || !preg_match("/^\d{4}-\d{2}-\d{2}$/", $endDate)) {
            echo "<p style='color: red;'>Please enter valid dates in the format YYYY-MM-DD.</p>";
        } else {
            // Convert the dates to DateTime objects
            $start = new DateTime($startDate);
            $end = new DateTime($endDate);

            // Calculate the difference between the two dates
            $diff = $start->diff($end);

            // Display the difference in days
            echo "<p>The difference between the dates is: " . abs($diff->days) . " day(s).</p>";
        }
    } else {
        echo "<p style='color: red;'>Please provide both start and end dates.</p>";
    }
}
?>
