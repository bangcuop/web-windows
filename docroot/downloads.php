<?php
include 'config.php';

include LIB_DIR . '/listing.php';
$title_page = 'Binaries and sources Releases';
$releases = buildReleasesCache(RELEASES_DIR);
?>
<?php
include TPL_PATH . 'header.php';
include TPL_PATH . 'news_line.php';

include TPL_PATH . 'left_column.php';

$release_order = array('5.2', '5.3', '6.0');
$version_order = array(
	'win32-VC6-x86',
	'nts-win32-VC6-x86',
	'win32-VC9-x86',
	'nts-win32-VC9-x86',
);
?>
            <li id="content">
                <ul id="content-columns">
                    <li id="main-column">

                        <div class="content">
                            <div class="adv-block"><!-- .adv-block -->
                                <span class="corners-top"><span></span></span>
                                
                                <div class="info entry"><!-- .info -->
                                    <h2 name="top" id="top">PHP Windows Releases</h2>
                                    
                                    <select onchange="window.location.hash=this.options[this.selectedIndex].value">
                                        <option value="top" selected="true">Select an option to direct access...</option>
                                        <?php echo buildOptionPerReleases($releases, $release_order); ?>
                                    </select>
                                </div><!-- .info -->
                                
                                <span class="corners-bottom"><span></span></span>
                            </div><!-- .adv-block -->

<?php
foreach ($release_order as $point_version) {
	if (count($releases[$point_version]) < 1) continue;
	echo buildPointVersionBox($point_version, $releases[$point_version], $version_order, 'release');
}
?>

                            <p class="t-center">
                            </p>
                        </div> <!-- .content -->
                    </li><!-- #main-column -->

                </ul> <!-- #content-columns -->
            </li> <!-- #content -->

<?php

include TPL_PATH . 'footer.php';

?>