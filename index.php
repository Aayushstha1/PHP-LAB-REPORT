<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Date Difference</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the CSS file -->
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Calculate Date Difference</h1>

        <noscript>
            <p style="color: red;">JavaScript is disabled. Please enable JavaScript to use this feature.</p>
        </noscript>

        <form id="dateForm" action="process.php" method="POST">
            <label for="startDate">Start Date: </label>
            <input type="date" id="startDate" name="startDate"><br><br>

            <label for="endDate">End Date: </label>
            <input type="date" id="endDate" name="endDate"><br><br>

            <button type="button" onclick="calculateDifference()">Calculate</button>
            <button type="button" onclick="resetForm()">Reset</button>
        </form>

        <div id="loading" style="display: none;">Loading...</div>

        <h2>Last 5 Date Calculations:</h2>
        <ul id="lastCalculations"></ul>

        <div id="result"></div>
    </div>
</body>
</html>
