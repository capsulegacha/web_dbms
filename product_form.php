<!DOCTYPE html>
<html>
<head>
    <title>New Product Form</title>
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
        <h2>New Product Form</h2>
        <form action="product_submit.php" method="post">
            <div class="column">
                <div class="form-group">
                    <label for="productCode">Product Code:</label>
                    <input type="text" id="productCode" name="productCode" required>
                </div>

                <div class="form-group">
                    <label for="productName">Product Name:</label>
                    <input type="text" id="productName" name="productName" required>
                </div>

                <div class="form-group">
                    <label for="productLine">Product Line:</label>
                    <input type="text" id="productLine" name="productLine" required>
                </div>

                <div class="form-group">
                    <label for="productScale">Product Scale:</label>
                    <input type="text" id="productScale" name="productScale" required>
                </div>

                <div class="form-group">
                    <label for="productVendor">Product Vendor:</label>
                    <input type="text" id="productVendor" name="productVendor" required>
                </div>
            </div>

            <div class="column">
                <div class="form-group">
                    <label for="productDescription">Product Description:</label>
                    <textarea id="productDescription" name="productDescription" required></textarea>
                </div>

                <div class="form-group">
                    <label for="quantityInStock">Quantity In Stock:</label>
                    <input type="number" id="quantityInStock" name="quantityInStock" required>
                </div>

                <div class="form-group">
                    <label for="buyPrice">Buy Price:</label>
                    <input type="number" step="0.01" id="buyPrice" name="buyPrice" required>
                </div>

                <div class="form-group">
                    <label for="MSRP">MSRP:</label>
                    <input type="number" step="0.01" id="MSRP" name="MSRP" required>
                </div>
            </div>

            <div class="submit-container">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
