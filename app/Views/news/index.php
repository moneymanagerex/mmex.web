<!-- Hero-->
<header class="bg-dark py-1">
    <div class="container px-1">
        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2"><i class="fas fa-newspaper"></i>&nbsp;Latest News</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Look out for latest announcemnets  from the MMEX team here</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="container px-2 my-2">    
    <div class="row gx-5"><div class="row row-cols-1 row-cols-md-2 g-4">
<?php foreach($newsPosts as $newsItem) { ?>       
        <div class="col">
            <div class="card">
            <h5 class="card-header"><i class="<?php echo $newsItem['icon'] ?>"></i>&nbsp;<?php echo $newsItem['title'] ?></h5>
            <div class="card-body">
                <p class="card-text"><?php echo $newsItem['abstract'] ?></p>
                <p class="card-text"><small class="text-muted">Dated: <?php echo $newsItem['date'] ?></small></p>
                <a href="/news/view/<?php echo $newsItem['slug'] ?>" class="btn btn-primary">Read</a>
            </div>
            </div>
        </div>
<?php } ?>
    </div>
</section>