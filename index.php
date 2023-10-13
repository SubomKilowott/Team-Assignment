<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .form-container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 50%;
            text-align: center;
        }
        .form-container label {
            display: block;
            margin-top: 10px;
        }
        .form-container input[type="text"],
        .form-container input[type="date"],
        .form-container input[type="number"] {
            width: 60%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>


    <div class="form-container">
        <form action="transport.php" method="get">
            <center> <h2> Product Details  </h2>     </center>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="totalQuantity">Total Quantity:</label>
            <input type="number" id="totalQuantity" name="totalQuantity" step="0.01" required>

            <label for="calculatedValue">Calculated Value:</label>
            <input type="number" id="calculatedValue" name="calculatedValue" step="0.01" required>

            <label for="sum">Sum:</label>
            <input type="number" id="sum" name="sum" step="0.01" required>
                <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
