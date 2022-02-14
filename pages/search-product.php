<?php include ('header.php'); ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card ">
                    <div class="card-header bg-info ">All Products</div>

                    <div class="card-body ">

                        <form action="action.php" method="POST">
                            <div class="input-group mb-4">
                                <input type="text" name="search" class="form-control" placeholder="Search Product By ID..">
                                <div class="input-group-append">
                                    <button type="submit" name="search_btn" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Image</th>
                            </tr>

                            </thead>

                            <tbody>
                            <?php foreach($products as $single_product) { ?>

                                <tr>
                                    <td><?php echo $single_product['id'];?></td>
                                    <td><?php echo $single_product['title'];?></td>
                                    <td><?php echo $single_product['price'];?></td>
                                    <td><?php echo $single_product['category'];?></td>
                                    <td><img src="assets/img/<?php echo $single_product['image']; ?>" alt="" height="50"></td>
                                </tr>
                            <?php  } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('footer.php'); ?>
