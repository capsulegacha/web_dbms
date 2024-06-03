<!DOCTYPE html>
<html>
<head>
    <title>Fetch Customers by Shipped Date</title>
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
        input[type="date"] {
            width: 200px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
        <h2>Fetch Customers by Shipped Date</h2>
        <form action="fetchdate_connect.php" method="post">
            <label for="shippedDate">Shipped Date:</label><br>
            <input type="date" id="shippedDate" name="shippedDate" value="2003-01-10" required><br><br>
            <input type="submit" value="Fetch Customers">
        </form>
    </div>
</body>
</html>
