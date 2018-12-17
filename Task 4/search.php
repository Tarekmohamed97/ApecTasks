
<?php include "includes/head.php" ?> 

<?php include "includes/nav.php" ?>




    <?php
     if(isset($_POST['submit']))
     {
         $product_tag=$_POST['search']; 
          
         $result=send_query("SELECT * FROM products WHERE tags LIKE '$product_tag'") ;
         
         check_query_sent($result);

         $count=mysqli_num_rows($result);     
     
     
     if($count!=0){
     while($row=mysqli_fetch_assoc($result))
        {
            $product_id=$row['id'];
            $product_name=$row['name'];
            $product_status=$row['status'];
            $product_serial=$row['serial'];
            $product_price=$row['price'];
            $product_tags=$row['tags'];         
    ?>

         <div class="table2">
         <table class="table" >
             <thead>
                 <tr>
                 <th scope="col">id</th>
                 <th scope="col">name</th>
                 <th scope="col">status</th>
                 <th scope="col">serial</th>
                 <th scope="col">status</th>
                 <th scope="col">tags</th>
                  </tr>
             </thead>
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
         </table>
         </div>
<!--If the entered name isn't in the database show this-->


        <?php }}

    else
    { ?>
        
      
    <div  class="no" class="col-md-4">
        <fieldset >
              <h3 class="first">No Result</h3>
        </fieldset>
        </div>  
         
     <?php }} ?>
    <!--***********************************-->



    <?php include "includes/footer.php" ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>


