<?php include "includes/head.php";?>

<?php include "includes/nav.php";?>


<?php
            if(isset($_POST['data']))
            {
               $product_na = $_POST['p_name'];
               $result=send_query("INSERT INTO products (name)
                VALUES ('$product_na')");
               check_query_sent($result);
            }
?>


<?php include "includes/searchfront.php";?> 



