<?php
    require_once("action/resultsAction.php");

    $data = execute();

    require_once("partial/header.php");
?>
        <div class="container">
            <div class="results-container">
                <h1>
                    Résultats
                </h1>

                <?php
                    $tab = $data["results"];

                    foreach ($tab as $lines) {
                        ?>
                        <div><?= $lines ?></div>
                        <?php
                    }
                ?>
                
            </div>
<?php
    require_once("partial/footer.php");
?>