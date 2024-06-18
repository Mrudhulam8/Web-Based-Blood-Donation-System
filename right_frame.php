<!DOCTYPE html>
<html>
<head>
    <title>Right Frame - Blood Donor Information</title>
</head>
<body>
    <?php
    // Include the database connection file
    require_once 'connect.php';

    // Function to sanitize user input data
    function sanitize_input($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Process the radio button selection
    if (isset($_GET['blood_group'])) {
        $selected_blood_group = sanitize_input($_GET['blood_group']);

        // Prepare and execute the SQL query to fetch information based on the selected blood group
        $sql = "SELECT * FROM registration_info WHERE blood_group = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $selected_blood_group);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display the information for the selected blood group
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Display relevant information here
                echo "Full Name: " . $row['fullname'] . "<br><br";
                echo "Personal Email: " . $row['personal_email'] . "<br><br>";
                echo "Contact:" .$row['contact_number'] . "<br><br>";
                echo "College Email: " . $row['college_email'] . "<br><br>";
                // Add other fields you want to display
                echo "<br>";
            }
        } else {
            echo "No records found for the selected blood group.";
        }

        // Close the statement
        $stmt->close();
    }
    ?>
</body>
</html>