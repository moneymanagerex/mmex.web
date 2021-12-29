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
    <p><i class="fa-solid fa-triangle-exclamation text-danger"></i>&nbsp;Use unstable builds for early testing before official release. 
    Avoid everyday use unless you need a specific feature/fix or are willing to risk using the latest software.</p>
</div>

<section class="container px-1 my-1">    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <h5 class="card-header"><i class="fa-brands fa-windows"></i>&nbsp; Windows</h5>
                <div class="card-body">
                    <a class="btn btn-primary btn-sm" href="https://www.moneymanagerex.org/component/weblinks/weblink/30-download/35-download-unstable-windows?Itemid=435&task=weblink.go">Windows Builds</a>
                    <p class="card-text">Under "Job name," choose x64 or Win32 > Artifacts > Portable (version recommended for unstable builds).</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <h5 class="card-header"><i class="fa-brands fa-apple"></i>&nbsp; MacOS</h5>
                <div class="card-body">
                    <a class="btn btn-primary btn-sm" href="https://mmex.ipx.co.uk">MacOS Builds</a>
                    <p class="card-text">Repository of latest signed MacOS Universal builds</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <h5 class="card-header"><i class="fa-brands fa-linux"></i>&nbsp; Linux</h5>
                <div class="card-body">
                    <a href="https://aur.archlinux.org/packages/moneymanagerex-git/" class="btn btn-primary btn-sm">Arch User Repo</a>
                    <p class="card-text">Arch Linux (AUR packages), usage: <code>paru -S moneymanagerex-git</code></p>
                    <a href="https://www.archlinux.org/packages/community/x86_64/moneymanagerex/" class="btn btn-primary btn-sm">Arch x86_64 (Community)</a>
                    <p class="card-text">Arch Linux (AUR packages), usage: <code>pacman -S moneymanagerex-git</code></p>
                    <a href="https://github.com/moneymanagerex/moneymanagerex/blob/master/INSTALL.md#linux" class="btn btn-primary btn-sm">Install Linux</a>
                    <p class="card-text">Other installation instructions</p>
                    <a href="https://github.com/moneymanagerex/moneymanagerex/blob/master/BUILD.md#linux" class="btn btn-primary btn-sm">Install Linux</a>
                    <p class="card-text">Build from source</code></p>
                </div>
            </div>
        </div>
    </div>
</section>

