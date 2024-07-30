<?php
session_start();

// Dummy login check for demonstration purposes
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1; // Set a dummy user ID
}

// Dummy data for demonstration purposes
$total_products = 120;
$total_orders = 250;
$total_sales = 10000.00;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laxmi Pujabajar  </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .container {
            display: flex;
        }

        aside {
            width: 200px;
            background-color: #333;
            color: white;
            padding: 20px;
        }

        aside ul {
            list-style-type: none;
            padding: 0;
        }

        aside ul li {
            margin-bottom: 10px;
        }

        aside ul li a {
            color: white;
            text-decoration: none;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .dashboard-cards {
            display: flex;
            justify-content: space-around;
        }

        .card {
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Laxmi Pujabajar</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <aside>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Manage Products</a></li>
                <li><a href="#">Manage Orders</a></li>
                <li><a href="#">Sales Analytics</a></li>
            </ul>
        </aside>
        <div class="main-content">
            <h1>Welcome to the Laxmi Pujabajar</h1>
            <div class="dashboard-cards">
                <div class="card">
                    <h2>Products</h2>
                    <p>Total Products: <?php echo $total_products; ?></p>
                </div>
                <div class="card">
                    <h2>Orders</h2>
                    <p>Total Orders: <?php echo $total_orders; ?></p>
                </div>
                <div class="card">
                    <h2>Sales</h2>
                    <p>Total Sales: $<?php echo number_format($total_sales, 2); ?></p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; Thank you for being here.</p>
    </footer>
</body>
</html>
