
        <?php

    // Connect to database
    $con = mysqli_connect("localhost","root","","test");

        if(isset($_POST['submit'])){
            $price=$_POST['price'];
            $tax =$_POST['tax'];
            $qty = $_POST['qty'];
            $data=$price*$qty;
            $selling = $data  * ((100 + $tax) / 100);
            $rate=$price*$qty*$tax/100;
            echo $rate;
            echo "---------------------------------------";
            echo $selling;
            
            $sql = "INSERT INTO maths (tax) VALUES ($selling)";
            $test=mysqli_query($con,$sql);
            
            if($test){
                echo "success";
            }else{
                echo "denied";
            }


            }
      
             ?>
             
    <form method="post">
    <h4><b>Enter 1st Value</b></h4>
    <h1>Price:</h1>
           <input type="text" name="price" id="price" class="form-control" placeholder="price">
           <br>
<h1>Quantity:</h1>
            <input type="text" name="qty" id="qty" class="form-control" placeholder="quantity">
            <br>
            <h1>tax Rate</h1><input type="text" name="tax" id="tax" class="form-control" placeholder="tax rate">
       <input type="submit" name="submit">
    </form>
      