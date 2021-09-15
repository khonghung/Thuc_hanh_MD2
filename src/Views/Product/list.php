<div class="container mt-5">
  <div class="card">
    <div class="card-header" style="background-color: green">
      <span style="color:white">PRODUCT LIST</span>
    </div>
    <div class="card-body">
      <a href="index.php?page=product-create" type="button" class="btn btn-success mb-3">Add New Product</a>


      <table class="table">
        <thead>

          <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Sector</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product) : ?>
            <tr>
              <th><?php echo $product['id'] ?></th>
              <td><?php echo $product['name'] ?></td>
              <td><?php echo $product['sector'] ?></td>
              <td><a href="index.php?page=product-update&id=<?php echo $product['id'] ?>" type="button" class="btn btn-success">Edit</a></td>
              <td><a onclick="return confirm('Bạn có chắc muốn xóa mặt hàng <?php echo $product['name'] ?> ?')" href="index.php?page=product-delete&id=<?php echo $product['id'] ?>" type="button" class="btn btn-success">Delete</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>