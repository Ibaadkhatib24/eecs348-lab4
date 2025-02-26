<!DOCTYPE html>
<html>
    <head>
        <title>EECS 348 Lab 4 Practice 4</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }
            td, th {
                border: 1px solid black;
                text-align: center;
                padding: 10px;
            }
            th {
                background-color: lightgray;
            }
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                background-color: #f4f4f4;
            }
            input {
                padding: 5px;
                margin: 10px;
                width: 150px;
                text-align: center;
            }
            button {
                padding: 5px 10px;
                background-color: blue;
                color: white;
                border: none;
                cursor: pointer;
            }
        </style>
    </head>    
<body>

<h1>EECS 348 Lab 4 Practice 4</h1>
<h2>Multiplication Table Creator</h2>

<form method="POST">
    <label>Enter table size: <input type="number" name="size" min="1" required></label><br>
    <input type="submit" value="Create Table">
</form>

<?php
if (isset($_POST['size'])) {
    $n = intval($_POST['size']);
    echo "<h2>Multiplication Table (1 to $n)</h2>";
    echo "<table>";
    
    for ($i = 0; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $n; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<th></th>"; // Top-left empty cell
            } elseif ($i == 0) {
                echo "<th>$j</th>"; // Column headers
            } elseif ($j == 0) {
                echo "<th>$i</th>"; // Row headers
            } else {
                echo "<td>" . ($i * $j) . "</td>"; // Multiplication result
            }
        }
        echo "</tr>";
    }
    
    echo "</table>";
}
?>

</body>
</html>
