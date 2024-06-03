<!DOCTYPE html>
<html>
<head>
    <title>Fetch Customers by City</title>
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
        form {
            margin-top: 20px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        select {
            width: 200px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #6a5acd; /* Slate blue */
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #483d8b; /* Dark slate blue on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Fetch Customers by City</h2>
        <form action="fetchcity_connect.php" method="post">
            <label for="city">City: </label><br>
            <select id="city" name="city" required>
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

                // Query for distinct city names
                $sql = "SELECT DISTINCT city FROM customers ORDER BY city ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value=\"" . htmlspecialchars($row['city']) . "\">" . htmlspecialchars($row['city']) . "</option>";
                    }
                } else {
                    echo "<option value=\"\">No cities available</option>";
                }

                // Close connection
                $conn->close();
                ?>
            </select><br><br>
            <input type="submit" value="Fetch Customers">
        </form>
    </div>
</body>
</html>
