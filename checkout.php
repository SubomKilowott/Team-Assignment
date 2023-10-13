<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
</head>
<body>
    <h1>Order Details</h1>
    <p>Date: <?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?></p>
    <p>Name: <?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?></p>
    <p>Address: <?php echo isset($_GET['address']) ? $_GET['address'] : ''; ?></p>
    <p>Total Quantity: <?php echo isset($_GET['totalQuantity']) ? $_GET['totalQuantity'] : ''; ?></p>
    <p>Calculated Value: <?php echo isset($_GET['calculatedValue']) ? $_GET['calculatedValue'] : ''; ?></p>
    <p>Sum: <?php echo isset($_GET['sum']) ? $_GET['sum'] : ''; ?></p>
</body>
</html>
