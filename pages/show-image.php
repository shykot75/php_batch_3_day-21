<?php include 'header-login.php'; ?>



<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">

                <div>
                    <h1 class="text-center text-warning font-weight-bold">All Uploaded Images</h1>
                </div>

                <div class="row">
                    <?php foreach($allProducts as $singleProduct) { ?>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <img src="<?php echo $singleProduct['image'];?>" alt="" class="card-img-top" height="250">
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>
    </div>
</section>


<?php include 'footer-login.php'; ?>
