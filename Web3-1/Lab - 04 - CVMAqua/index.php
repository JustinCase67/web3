<?php
    require_once("action/indexAction.php");
    require_once("action/DAO/ContentDAO.php");

    // $action = new indexAction();
    // $data = $action->execute();

    require_once("partial/header.php");
?>
<div class="page-content">
    <div id="page-index">
        <img src="images/water-drop.png" alt= ""/>

        <p>
            <?= ContentDAO::getContent() ?>
        </p>

        <p>
            Lorem ipsum dolor sit amet!!!!, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
        </p>
        <p>
            Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
        </p>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
        </p>
        <p>
            Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
        </p>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
        </p>
        <p>
            Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
        </p>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
        </p>
    </div>
</div>

<?php
    require_once("partial/footer.php");