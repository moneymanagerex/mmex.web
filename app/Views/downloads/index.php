<!-- Recommended Build-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center my-1">
                    <h1 class="fw-bolder text-white mb-3">Download the latest v<?php echo $latestVersion ?> recommended build</h1>
                    <p class="lead fw-normal text-muted mb-4">Either download the latest recommended version for your platform or select from the available versions below.</p>
                    <div>
<?php foreach($downloads as $download) { ?>
                        <a class="btn btn-primary btn-lg mb-1" href="<?php echo $download['link'] ?>"><i class="fas fa-download"></i>&nbsp;<?php echo $download['name'] ?></a>
<?php } ?>
                        <a class="btn btn-outline-light btn-lg mb-1" href="https://sourceforge.net/projects/moneymanagerex/files/v<?php echo $latestVersion ?>/">Alternate download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center my-1">
                    <a href="https://github.com/moneymanagerex/moneymanagerex/releases/tag/v<?php echo $latestVersion ?>">Release notes for v<?php echo $latestVersion ?></a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Full stable build list -->
<section class="py-3">
    <div class="container px-1">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="fw-bolder mb-4">Full stable release downloads</h2>
                <p>Here is a selection of the most recent release if you don't want to the take the current version or the 
                    current version is not yet available for you platform</p>
                <p class="text-muted">For the latest development/Beta builds click <a href="#DevBuilds">here</a>.</p>
                <div class="row row-cols-1 row-cols-md-4 g-4">
<?php foreach($releaseList as $release) { ?>
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header">v<?php echo $release['version'] ?>&nbsp; 
                                <a href="https://github.com/moneymanagerex/moneymanagerex/releases/tag/v<?php echo $release['version'] ?>">
                                    Release notes</a></h5>
                            <div class="card-body">
                                <p class="text-muted"><?php echo $release['date'] ?></p>
    <?php foreach($releaseNames as $releaseID => $releaseName) { ?>
        <?php if (array_key_exists($releaseID, $release['contents'])) { ?>
                                <a href="<?php echo $release['contents'][$releaseID] ?>" class="btn btn-outline-primary btn-sm mb-1">
                                    <?php echo $releaseName ?></a>
                                
        <?php } ?>
    <?php } ?>
                            </div>
                        </div>
                    </div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upgrade warning -->
<section class="py-3">
    <div class="container px-1">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="fw-bolder mb-4">Upgrading from v1.4.0?</h2>
                <p>If you get the database error, "MMEX database version 13 doesn't work with this MMEX version," 
                    then see <a href="https://github.com/moneymanagerex/moneymanagerex/issues/2353">Steps to convert your database from 1.4.x</a>
                    The latest Money Manager Ex release uses the database structure of the 1.3.x series and discontinued the structure of version 1.4.x. 
                This maintains compatibility with the mobile app.</p>
            </div>
        </div>
    </div>
</section>

<!-- Development builds -->
<section class="py-3">
    <div class="container px-1">
        <div class="row">
            <div class="col-lg-12">
                <h2 id="DevBuilds" class="fw-bolder mb-4">Beta/Development Builds</h2>
                <p><i class="fas fa-triangle-exclamation text-danger"></i>&nbsp;Use unstable builds for early testing before official release. 
                Avoid everyday use unless you need a specific feature/fix or are willing to risk using the latest software.</p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header"><i class="fab fa-windows"></i>&nbsp; Windows</h5>
                            <div class="card-body">
                                <a class="btn btn-primary btn-sm" href="https://www.moneymanagerex.org/component/weblinks/weblink/30-download/35-download-unstable-windows?Itemid=435&task=weblink.go">Windows Builds</a>
                                <p class="card-text">Under "Job name," choose x64 or Win32 > Artifacts > Portable (version recommended for unstable builds).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header"><i class="fab fa-apple"></i>&nbsp; MacOS</h5>
                            <div class="card-body">
                                <a class="btn btn-primary btn-sm" href="https://mmex.ipx.co.uk">MacOS Builds</a>
                                <p class="card-text">Repository of latest signed MacOS Universal builds</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header"><i class="fab fa-linux"></i>&nbsp; Linux</h5>
                            <div class="card-body">
                                <a href="https://aur.archlinux.org/packages/moneymanagerex-git/" class="btn btn-primary btn-sm">Arch User Repo</a>
                                <p class="card-text">Arch Linux (AUR packages), usage: <code>paru -S moneymanagerex-git</code></p>
                                <a href="https://www.archlinux.org/packages/community/x86_64/moneymanagerex/" class="btn btn-primary btn-sm">Arch x86_64 (Community)</a>
                                <p class="card-text">Arch Linux (AUR packages), usage: <code>pacman -S moneymanagerex-git</code></p>
                                <a href="https://github.com/moneymanagerex/moneymanagerex/blob/master/INSTALL.md#linux" class="btn btn-primary btn-sm">Install Linux</a>
                                <p class="card-text">Other installation instructions</p>
                                <a href="https://github.com/moneymanagerex/moneymanagerex/blob/master/BUILD.md#linux" class="btn btn-primary btn-sm">Build Linux</a>
                                <p class="card-text">Build from source</code></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>