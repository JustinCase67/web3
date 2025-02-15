<?php
    require_once("action/contactAction.php");

    $data = execute();
    
    require_once("partial/header.php");
?>
    <?php
        if (!empty($data["commentSent"])) {
            ?>
            <div style="color:green";>
                Merci !
            </div>
            <?php
        }
    ?>
    <form action="" method="post">
        <textarea name="comment" style="width:100%;height:40px;margin-top:20px;" placeholder="Laissez-nous un commentaire" cols="30" rows="10"></textarea>
        <div>
            <button>Envoyer</button>
        </div>
    </form>
<?php
    require_once("partial/footer.php");