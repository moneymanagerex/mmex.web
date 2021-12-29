<!-- Hero-->
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-1">
                    <h1 class="fw-bolder mb-3">Download the latest version</h1>
                    <p class="lead fw-normal text-muted mb-4">Either download the latest recommended version for your platform or select from the available versions below.</p>
<?php foreach($downloads as $download) { ?>
                    <a class="btn btn-primary btn-lg" href="<?php echo $download['link'] ?>">
                    <?php echo $download['name'] ?></a>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="w3-container px-5">
    <h2 class="fw-bolder mb-4">Upgrading from v1.4.0?</h2>
    <p>If you get the database error, "MMEX database version 13 doesn't work with this MMEX version," 
        then see <a href="https://github.com/moneymanagerex/moneymanagerex/issues/2353">Steps to convert your database from 1.4.x</a>
        The latest Money Manager Ex release uses the database structure of the 1.3.x series and discontinued the structure of version 1.4.x. 
    This maintains compatibility with the mobile app.</p>
    <h2 class="fw-bolder mb-4">Beta/Development Builds</h2>
    <p><i class="bi bi-exclamation-diamond text-danger"></i>&nbsp;Use unstable builds for early testing before official release. 
    Avoid everyday use unless you need a specific feature/fix or are willing to risk using the latest software.</p>
    
    <h3>Windows</h3>
    <p>Latest Windows development builds can be found 
        [<a href="https://www.moneymanagerex.org/component/weblinks/weblink/30-download/35-download-unstable-windows?Itemid=435&task=weblink.go">HERE</a>].</p>
    <p>Under "Job name," choose x64 or Win32 > Artifacts > Portable (version recommended for unstable builds).</p>
    
    <h3>MacOS</h3>
    <p>Latest MacOS development builds can be found 
        [<a href="https://mmex.ipx.co.uk">HERE</a>].</p>

    <h3>Unix</h3>
    <p>To be defined.</p>
</div>

