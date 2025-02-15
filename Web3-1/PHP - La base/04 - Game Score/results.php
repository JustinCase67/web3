<?php
    require_once("action/resultsAction.php");

    $data = execute();
    $pageTitle = "Wack a Mole";
    require_once("partial/header.php");
?>
        <div class="container">
            <div class="results-container">
                <h1>
                    Résultats
                </h1>
                <?php
                    foreach ($data["lines"] as $line) {
                        ?>
                        <div><?= $line ?></div>
                        <?php
                    }
                ?>
            </div>
        </div>
<?php
    require_once("partial/footer.php");