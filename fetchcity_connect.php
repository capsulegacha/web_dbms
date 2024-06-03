<!DOCTYPE html>
<html>
<head>
    <title>Customers from <?php echo htmlspecialchars($_POST['city']); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f0ff; /* Pastel lilac */
            color: #333; /* Dark gray for text */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h2 {
            color: #6a5acd; /* Slate blue for headings */
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Database connection settings
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "classicmodels";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve form data
        $city = $_POST['city'];

        // Fetch customer names from the specified city
        $sql = "SELECT customerName FROM customers WHERE city = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $city);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<h2>Customers from " . htmlspecialchars($city) . ":</h2>";
            echo "<table>";
            echo "<tr><th>Customer Name</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row['customerName']) . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h2>No customers found from " . htmlspecialchars($city) . "</h2>";
        }

        // Close connection
        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>
