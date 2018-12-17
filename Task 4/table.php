<?php include "includes/head.php" ;?>

<?php include "includes/nav.php" ;?>



<div  class="col-md-4">
                    <div class="products">
                    <table class="table" >
                        <thead>
                            <tr>
                            <th scope="col">clientname</th>
                            <th scope="col">productname</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                             </tr>
                        </thead>
            <?php
                
                $result=send_query("SELECT clients.clientname, products.name
                , products.price, clients.quantity FROM products
                INNER JOIN clients ON products.id = clients.clientid"); 
                
                while($row=mysqli_fetch_assoc($result))
                {
                    $client_name=$row['clientname'];
                    $product_nam=$row['name'];
                    $product_pri=$row['price'];
                    $client_qua=$row['quantity'];             
                 ?>   
                        <tbody>
                            <tr>
                            <td><?php echo $client_name; ?></td>
                            <td><?php echo $product_nam; ?></td>
                            <td><?php echo $product_pri; ?></td>
                            <td><?php echo $client_qua; ?></td>
                            </tr>                         
                        </tbody>
                    </div>
                    <?php } ?>
                </table>
                </div>
                     
               
            </div>






<?php include "includes/footer.php" ;?>