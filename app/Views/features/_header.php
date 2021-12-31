<!-- Feature description section-->
<header class="bg-dark py-1">
    <div class="container px-1">
        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2"><i class="<?php echo $feature['icon']; ?>"></i>&nbsp;<?php echo $feature['title']; ?></h1>
                    <p class="lead fw-normal text-white-50 mb-4"><?php echo $feature['text']; ?></p>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="container px-2 my-2">    
    <div class="row gx-5">
        <div class="list-group col-lg-3 mb-5 mb-lg-0">
<?php foreach($featureList as $featureItem) { ?>            
    <a class="list-group-item list-group-item-action <?php if (!strcmp($featureItem['name'], $feature['name'])) echo "active" ?>"
        href="/features/view/<?php echo $featureItem['name'] ?>"><i class="<?php echo $featureItem['icon']; ?>">&nbsp;</i><?php echo $featureItem['title']; ?></a>
<?php } ?>
        </div>
        <div class="col-lg-9">
            <div class="fs-6 mb-6">