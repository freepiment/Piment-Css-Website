<?php
include_once 'core/inc/head.inc.php';
?>

    <main>

        <div class="main-section container max-width-xl">
            <h1>Documentation</h1>
            <p>Fundamental HTML elements styled and enhanced with extensible classes.</p>
        </div>

        <div class="main-section container max-width-xl mt-2">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                    <article class="article-main">

                        <?php include_once 'core/doc/typography.inc.php';?>

                        <?php include_once 'core/doc/code.inc.php';?>

                        <?php include_once 'core/doc/buttons.inc.php';?>

                        <?php include_once 'core/doc/tables.inc.php';?>

                        <?php include_once 'core/doc/forms.inc.php';?>

                        <?php include_once 'core/doc/images.inc.php';?>

                        <?php include_once 'core/doc/spacing.inc.php';?>


                    </article>
                </div>
            </div>
        </div>
    </main>

<?php
include_once 'core/inc/foot.inc.php';
?>