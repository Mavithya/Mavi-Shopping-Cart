<?php
session_start();
$db_name = "cart";
$con = mysqli_connect("localhost", "root", "", $db_name);

if (isset($_POST["add"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            echo '<script>window.location="cart.php"</script>';
        } else {
            echo '<script>alert("Product is already in  the Cart.")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'product_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'product_quantity' => $_POST["quantity"],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Product has been removed.")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mavi Shopping Cart</title>
    <link rel="icon" href="icon-apple-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .container {

            margin-top: 10px;
            background-color: rgb(62, 55, 185);
            width: 80%;
            height: 90px;
            border-radius: 8px;
        }

        .l h2,
        .container h2 {
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            display: flex;
            justify-content: center;
            padding: 20px;

        }

        .c {
            background-color: rgb(240, 237, 233);
            width: 80%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            margin-left: 10%;
            padding: 2%;
            border-radius: 8px;
        }

        .p {
            border: 1px solid #eaeaec;
            margin: 10px 16px 18px 14px;
            padding: 5px;
            text-align: center;


        }

        .b {
            width: 165px;
            height: 40px;
            margin-top: 20px;
            background-color: transparent;
            color: rgb(52, 54, 54);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: bold;
            border-color: rgb(57, 55, 55);
            border-style: solid;
            border-width: 3px;
            border-radius: 3px;
            margin-left: 5px;
        }

        .b:hover {
            background-color: rgb(65, 220, 102);
            color: rgb(255, 254, 254);
            border-color: rgb(36, 86, 36);
            cursor: pointer;
            transition: 0.5s;
        }

        .p .form-control {
            width: 190px;
            margin: auto;

        }

        .l {
            display: flex;
            background-color: rgb(238, 200, 76);
            width: 80%;
            height: auto;
            padding: 8px;
            border-radius: 8px;
            margin: auto;
            justify-content: center;
        }

        #cart {
            width: 80%;
            margin: auto;

        }

        table,
        th,
        tr {
            text-align: center;
            margin-top: 100px;
        }


        table th {
            background-color: rgb(238, 237, 233);
        }

        section {
            min-height: 100vh;


        }

        .cart-footer {
            width: 80%;
            margin: auto;
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-total {
            font-weight: bold;
        }

        .total-price {
            margin-left: 10px;
        }

        .checkout-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .checkout-btn:hover {
            background-color: #0056b3;
        }

        .footer {

            display: flex;
            align-items: end;
            background-color: rgb(27, 29, 33);
            color: beige;
            height: 87vh;
        }

        h5 {
            font-size: 28px;
        }

        li a {
            color: whitesmoke;
            text-decoration: none;
        }

        li a:hover {
            color: #007bff;
            text-decoration: underline;

        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Shopping Cart</h2>
    </div>
    <div class="c">
        <?php
        $query = "SELECT * FROM product";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($r = mysqli_fetch_assoc($result)) {
        ?>
                <div class="col">
                    <form method="post" action="cart.php?action=add&id=<?php echo $r["id"]; ?>">
                        <div class="p">

                            <img src="<?php echo $r['image']; ?>" width="190px" ,height="220px">
                            <h5 style="font-family:Arial, Helvetica, sans-serif;font-size: 21px;margin-top: 4%;"><?php echo $r["description"]; ?></h5>
                            <h5 class="text-danger" style="margin-top :15px;"><?php echo "$r[price]" ?></h5>

                            <input type="text" name="quantity" class="form-control" value="1" placeholder="Enter Quantity">
                            <input type="hidden" name="hidden_name" value="<?php echo $r["description"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $r["price"]; ?>">
                            <input type="submit" name="add" class="b" value="Add to cart">
                    </form>
                </div>

    </div>

<?php
            }
        } ?>
</div>
<div class="l">

    <img style="width: 100px;margin-bottom: auto;" src="Cart-Icon.png">

    <h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><a href="#cart"> <span style="text-decoration:dashed;">Cart Details</span></a></h2>

</div>
<section>
    <div class="table-responsive" id="cart">
        <table class="table table-hover table-bordered  table-striped border-dark ">
            <thead>
                <tr>
                    <td colspan="5" style="font-size: 45px;font-weight: bold;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Cart Details</td>
                </tr>
                <tr></tr>

            </thead>
            <tr class="table-info border-black ">
                <th width="25%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="13%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
            if (!empty($_SESSION["shopping_cart"])) {
                $total = 0;
                foreach ($_SESSION["shopping_cart"] as $key => $value) {
            ?>
                    <tr>
                        <td><?php echo $value["product_name"]; ?></td>
                        <td><?php echo $value["product_quantity"]; ?></td>
                        <td><?php echo $value["product_price"]; ?></td>
                        <td><?php echo number_format($value["product_quantity"] * $value["product_price"], 2); ?></td>
                        <td><a style="text-decoration:solid;" href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span style="color: red;">Remove Item</span></a></td>
                    </tr>
                <?php
                    $total = $total + ($value["product_quantity"] * $value["product_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total Price :-</td>
                    <td align="right"><?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>


    <footer class="cart-footer">
        <div class="cart-total">
            <span> Total :-</span>
            <span class="total-price">Rs.<?php  echo number_format($total, 2); ?></span>
        </div>
        <button class="checkout-btn">Checkout</button>
    </footer>

</section>

<footer class="footer">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 ms-md-auto">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 me-auto">
                <h5>Cart Details</h5>
                <ul class="list-unstyled">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 me-auto">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li>Email: info@example.com</li>
                    <li>Phone: +123-456-7890</li>
                    <li>Address: 123 Street, City, Country</li>
                </ul>
                <div>
                    <button type="button" class="btn btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-edge" viewBox="0 0 16 16">
                            <path d="M9.482 9.341c-.069.062-.17.153-.17.309 0 .162.107.325.3.456.877.613 2.521.54 2.592.538h.002c.667 0 1.32-.18 1.894-.519A3.84 3.84 0 0 0 16 6.819c.018-1.316-.44-2.218-.666-2.664l-.04-.08C13.963 1.487 11.106 0 8 0A8 8 0 0 0 .473 5.29C1.488 4.048 3.183 3.262 5 3.262c2.83 0 5.01 1.885 5.01 4.797h-.004v.002c0 .338-.168.832-.487 1.244l.006-.006z"></path>
                            <path d="M.01 7.753a8.14 8.14 0 0 0 .753 3.641 8 8 0 0 0 6.495 4.564 5 5 0 0 1-.785-.377h-.01l-.12-.075a5.5 5.5 0 0 1-1.56-1.463A5.543 5.543 0 0 1 6.81 5.8l.01-.004.025-.012c.208-.098.62-.292 1.167-.285q.194.001.384.033a4 4 0 0 0-.993-.698l-.01-.005C6.348 4.282 5.199 4.263 5 4.263c-2.44 0-4.824 1.634-4.99 3.49m10.263 7.912q.133-.04.265-.084-.153.047-.307.086z"></path>
                            <path d="M10.228 15.667a5 5 0 0 0 .303-.086l.082-.025a8.02 8.02 0 0 0 4.162-3.3.25.25 0 0 0-.331-.35q-.322.168-.663.294a6.4 6.4 0 0 1-2.243.4c-2.957 0-5.532-2.031-5.532-4.644q.003-.203.046-.399a4.54 4.54 0 0 0-.46 5.898l.003.005c.315.441.707.821 1.158 1.121h.003l.144.09c.877.55 1.721 1.078 3.328.996"></path>
                        </svg>
                        Button
                    </button>

                    <button type="button" class="btn btn-outline-success md-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"></path>
                        </svg>
                        Button
                    </button>
                    <button type="button" class="btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"></path>
                        </svg>
                        Button
                    </button>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2024 Mavi Shopping Cart. All rights reserved.</p>
            </div>
        </div>

    </div>
</footer>



</body>

</html>
<?php mysqli_close($con);
