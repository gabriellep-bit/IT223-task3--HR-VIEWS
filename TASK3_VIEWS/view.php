<?php
include 'dbcon.php';

$sql = "SELECT * FROM hr_employee_view";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>HR Employee View</title>
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #311c1c;
            padding: 8px;

        }
        th {
            background: #b14444;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;color:#311c1c;">TASK 3 - HR EMPLOYEE VIEW</h2>

<table>
    <tr>
        <th>Employee ID</th>
        <th>Name</th>
        <th>Job Title</th>
        <th>Employment Date</th>
        <th>Manager Name</th>
        <th>Department Name</th>
        <th>Location</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row['Employee ID'] ."</td>";
        echo "<td>". $row['Name'] ."</td>";
        echo "<td>". $row['Job Title'] ."</td>";
        echo "<td>". $row['Employment Date'] ."</td>";
        echo "<td>". $row['Manager Name'] ."</td>";
        echo "<td>". $row['Department Name'] ."</td>";
        echo "<td>". $row['Location'] ."</td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>

<?php $conn->close(); ?>