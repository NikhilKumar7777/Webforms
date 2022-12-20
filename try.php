<?php
@include 'config.php';
session_start();

$select = mysqli_query($conn, "SELECT * FROM products ");

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style5.css">
<div class="product-display">
   <table class="product-display-table" >
      <thead>
      <tr>
         <th>product image</th>
         <th>product name</th>
         <th>Vendar name</th>
         <th>product category</th>
         <th>product price</th>
         <th>action</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['vendar']?> </td>
         <td><?php echo $row['category']; ?></td>
         <td>Rs.<?php echo $row['price']; ?>/-</td>
         <td>
            <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
            <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
         </td>
      </tr>
   <?php } ?>