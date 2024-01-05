<?php
    $products = array(
        array("id" => 1, "name" => "Áo Polo", "price" => 25),
        array("id" => 2, "name" => "Quần Jean", "price" => 50),
        array("id" => 3, "name" => "Giày Sneakers", "price" => 40)
    );

    if (!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

    function addToCart($productId)
    {
        global $products;

        foreach ($products as $product){
            if($product['id'] == $productId){
                $_SESSION['cart'][] = $product;
                echo "Đã thêm " . $product['name'] . " vào giỏ hàng.";
                return;
            }
        }

        echo "Sản phẩm này không tồn tại.";

    }

    function viewCart(){
        if (empty($_SESSION['cart'])){
            echo "Giỏ hàng trống.";
        }else{
            echo "<h2>Giỏ hàng của bạn:</h2>";
            $totalPrice = 0;

            foreach ($_SESSION['cart'] as $item) {
                echo $item['name'] . " - $" . $item['price'] . "<br>";
                $totalPrice += $item['price'];
            }

            echo "<strong>Tổng giá trị: $" . $totalPrice . "</strong>";
        }
    }

    addtoCart(1);
    addToCart(2);
    viewCart();
?>