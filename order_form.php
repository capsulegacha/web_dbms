<!DOCTYPE html>
<html>
<head>
    <title>New Order Form</title>
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
            width: 80%;
        }
        h2 {
            color: #6a5acd; /* Slate blue for headings */
            text-align: center;
        }
        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }
        .column {
            display: flex;
            flex-direction: column;
            width: 48%;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        input, select, textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
        }
        textarea {
            height: 100px;
        }
        .submit-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #6a5acd; /* Slate blue */
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #483d8b; /* Dark slate blue on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Order Form</h2>
        <form action="order_submit.php" method="post">
            <div class="column">
                <div class="form-group">
                    <label for="orderNumber">Order Number:</label>
                    <input type="number" id="orderNumber" name="orderNumber" required>
                </div>
                
                <div class="form-group">
                    <label for="orderDate">Order Date:</label>
                    <input type="date" id="orderDate" name="orderDate" required>
                </div>
                
                <div class="form-group">
                    <label for="requiredDate">Required Date:</label>
                    <input type="date" id="requiredDate" name="requiredDate" required>
                </div>
                
                <div class="form-group">
                    <label for="shippedDate">Shipped Date:</label>
                    <input type="date" id="shippedDate" name="shippedDate">
                </div>
            </div>

            <div class="column">
                <div class="form-group">
                    <label for="customerNumber">Customer Number:</label>
                    <input type="number" id="customerNumber" name="customerNumber" required>
                </div>
                
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select id="status" name="status" required>
                        <option value="In Progress">In Progress</option>
                        <option value="Shipped">Shipped</option>
                        <option value="On Hold">On Hold</option>
                        <option value="Disputed">Disputed</option>
                        <option value="Resolved">Resolved</option>
                        <option value="Canceled">Canceled</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="comments">Comments:</label>
                    <textarea id="comments" name="comments"></textarea>
                </div>
            </div>
            
            <div class="submit-container">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
