<?php

    include 'sidebar.php';
    include 'config.php';

?>
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           <?php 
           include 'navbar.php';

           ?>
            <!-- Navbar End -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Add New Product</h3>

                <form action=""></form>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
            

            <form action="addAction.php" method="post" enctype='multipart/form-data'>
  <div class="mb-3">
    <label for="productName" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="productName" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file"  name="img" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="number"  name="price" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="addProduct">Submit</button>
</form>

            </div>
        </div>


        <div class="row">
            <div class="col-12">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Img</th>
    </tr>
  </thead>
  <tbody>
    <?php

        $sql = "SELECT * FROM `products`";
        $result =mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
           
       
    
    ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row['name']; ?> </td>
      <td><?php echo $row['price']; ?> </td>
      <td>
        <img src="img/<?php echo $row['img']; ?> " alt="" height="100px" width="100px" >
      </td>
    </tr>
   <?php } ?> 
  </tbody>
</table>
            </div>
        </div>

    </div>
            
           

<?php

include 'footer.php';
    ?>