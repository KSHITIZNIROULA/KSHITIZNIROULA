

<?php
// Initialize an array to store employee information
$employees = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $empid = $_POST["empid"];
    $name = $_POST["name"];
    $post = $_POST["post"];
    $salary = $_POST["salary"];

    // Store data in the array
    $employees[] = ["empid" => $empid, "name" => $name, "post" => $post, "salary" => $salary];

    // Display response table
    echo "<h2>Employee Information</h2>";
    echo "<table border='1'>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Post</th>
                <th>Salary</th>
            </tr>";

    // Iterate through the array and display data in the table
    foreach ($employees as $employee) {
        echo "<tr>
                <td>{$employee['empid']}</td>
                <td>{$employee['name']}</td>
                <td>{$employee['post']}</td>
                <td>{$employee['salary']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No data submitted</p>";
}
?>




