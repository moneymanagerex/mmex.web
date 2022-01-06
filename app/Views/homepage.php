<!-- Hero-->
<header class="bg-dark py-1">
    <div class="container px-1">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <img src="/images/mmex.svg">
                    <h1 class="display-5 fw-bolder text-white mb-2"><?php echo $siteHeadline; ?></h1>
                    <p class="lead fw-normal text-white-50 mb-4"><?php echo $siteSummary; ?></p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/download"><i class="fas fa-download"></i>&nbsp;Download</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="https://github.moneymanagerex.org/moneymanagerex/docs/en/index.html"><i class="fas fa-book-open"></i>&nbsp;Documentation</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="images/MMEXHero.png" alt="..." /></div>
        </div>
    </div>
</header>

<!-- Financial Management section-->
<section class="bg-light py-1">
    <div class="container px-1 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="fs-6 mb-6">Financial management can become complicated when there is no clear understanding of how much 
                        money we are getting, regarded as income as opposed to our expenses. The first step towards better financial health is to 
                        maintain good financial records: it's only when we have a clear understanding of where our money goes, that we can make an 
                        informed decision of where to cut back on our expenses. Of course, there is no right or wrong answer to how to spend money: 
                            here's where personal finance software comes in. They help to slice/dice the financial data to give better insight into 
                            what is going on. Always remember the software can only be as good as the data it has to process. Garbage In Garbage Out. 
                            But if you have started thinking of even using Personal finance software, you are well on your way to making every dollar 
                            count.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features section -->
<section class="py-1" id="features">
    <div class="container px-1 my-1">
    <div class="row gx-5 justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2 class="fw-bolder">Features</h2>
                    <p class="lead fw-normal text-muted mb-5">MoneyManager Ex has all the features you would expect in a finance management application</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="row gx-5 row-cols-1 row-cols-md-3">
<?php foreach($featureList as $feature) { ?>
                    <div onclick="location.href='/features/view/<?php echo $feature['name'] ?>'" 
                         onmouseover="this.style.background='WhiteSmoke';"
                         onmouseout="this.style.background='White';" 
                         class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="<?php echo $feature['icon']; ?>"></i></div>
                        <h2 class="h5"><?php echo $feature['title']; ?></h2>
                        <p class="mb-0"><?php echo $feature['text']; ?></p>
                    </div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Forum RSS -->
<section class="py-1">
    <div class="container px-1 my-1">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2 class="fw-bolder">MMEX Discussion Forum </h2>
                    <p class="lead fw-normal text-muted mb-5">Latest Posts on the offical discussion forum</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
<?php foreach($forumFeed as $forumPost) { ?>
            <div class="col-lg-3 mb-5">
                <div class="card h-100 shadow border-0">
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2"></div>
                        <a href="<?php echo $forumPost['url'] ?>"><h6 class="card-title mb-3"><?php echo $forumPost['title'] ?></h6></a>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="small">
                                    <div class="text-muted"><?php echo $forumPost['date'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>
        </div>
    </div>
</section>

<!-- News preview section -->
<section class="py-1">
    <div class="container px-1 my-1">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2 class="fw-bolder">Latest News articles</h2>
                    <p class="lead fw-normal text-muted mb-5">Read about the latest changes associated with the MMEX application and its developmemnt.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
<?php foreach($newsPosts as $newsItem) { ?>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2"></div>
                        <a href="/news/view/<?php echo $newsItem['slug'] ?>"><h5 class="card-title mb-3"><i class="<?php echo $newsItem['icon'] ?>"></i>&nbsp;<?php echo $newsItem['title'] ?></h5>
</a>                        <p class="card-text mb-0"><?php echo $newsItem['abstract'] ?></p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="small">
                                    <div class="text-muted"><?php echo $newsItem['date'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>
        </div>
    </div>
</section>