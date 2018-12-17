
<!--head section-->
<?php include "includes/head.php" ?>
<!--*************************************--> 
<body>
    <!--nav bar section-->
     <?php include "includes/nav.php" ?> 
     <!--*************************************-->
     
     
    <!--First Section (Data Entry)-->
    <!--*******************Head*********************-->
    <section class="Entry">
        <h2 class="first">Enter products information here</h2>
        <hr class="horizontel">
        <!--***************************************-->

        <!--*******Insert information to the data base*****-->
        <?php include "includes/add_to_db.php" ?>

        <?php
            if(isset($_POST['data']))
            {
               $product_na = $_POST['p_name'];
               $product_pr = $_POST['price'];
               $product_sta = $_POST['status'];
               $product_ser = $_POST['serial'];
               $product_tag = $_POST['tags'];
               $result=send_query("INSERT INTO products (name,price,status,serial,tags)
                VALUES ('$product_na','$product_pr','$product_sta','$product_ser'
                ,'$product_tag')");
               check_query_sent($result);
            }
        ?>
            <!--*******database information table*****-->
            <div  class="col-md-4">
                    <div class="products">
                    <table class="table" >
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">price</th>
                            <th scope="col">status</th>
                            <th scope="col">serial</th>
                            <th scope="col">tags</th>
                             </tr>
                        </thead>
            <?php
                
                $result=send_query("SELECT * FROM products"); 
                
                while($row=mysqli_fetch_assoc($result))
                {
                    $product_id=$row['id'];
                    $product_name=$row['name'];
                    $product_status=$row['status'];
                    $product_serial=$row['serial'];
                    $product_price=$row['price'];
                    $product_tags=$row['tags'];              
                  
                 ?>   
                        <tbody>
                            <tr>
                            <th scope="row"><?php echo $product_id; ?></th>
                            <td><?php echo $product_name; ?></td>
                            <td><?php echo $product_status; ?></td>
                            <td><?php echo $product_serial; ?></td>
                            <td><?php echo $product_price; ?></td>
                            <td><?php echo $product_tags; ?></td>
                            </tr>                         
                        </tbody>
                    </div>
                    <?php } ?>
                </table>
                </div>
                     
               
            </div>
        </form>
    </section>
    <hr class="hr2">
    <!--************************************************-->
    <!--****Search Section*****-->
    <?php include "includes/searchfront.php" ?>
    <!--**********************************************-->
    <hr class="hr2">
    <!--*******Table Browsing Section*******-->
    <section>
            <h2 class="first">Browse From Here</h2>
            <hr class="horizonte3">
            <form action="table.php">
            <div  class="browsebutton"> 
                <button type="submit" class="btn btn-success" class="butt">Browse</button>
            </div>
            </form>
    </section>
    <!--*******************footer***************-->
    <?php include "includes/footer.php" ?>
    <!--****************************************-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>