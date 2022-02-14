<?php include ('header-login.php'); ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card ">
                    <div class="card-header bg-info ">All Products</div>

                    <div class="card-body ">

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>

                            </tr>

                            </thead>

                            <tbody>
                            <?php foreach($result as $single_user) { ?>

                                <tr>
                                    <td><?php echo $single_user['id'];?></td>
                                    <td><?php echo $single_user['name'];?></td>
                                    <td><?php echo $single_user['email'];?></td>
                                    <td><?php echo $single_user['password'];?></td>

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

<?php include ('footer-login.php'); ?>
