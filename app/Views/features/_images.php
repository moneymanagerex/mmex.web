<!-- Images section-->
<section class="py-1" id="features">
    <div class="container px-1 my-1">
        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="row row-cols-1 row-cols-md-2 gx-4 gy-4">
<?php foreach($imageList as $image) { ?>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $image ?>">
                        </div>
                    </div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>