<?php
    require_once("action/indexAction.php");

    $data = execute();

    require_once("partial/header.php");
?>
<body>
    <form action="index.php" method="post">
            Qu'avez vous en tête: <input type="text" name="task"/>
            x: <input type="number" name="x" value="<?= rand(0, 600) ?>" style="width:50px"/>
            y: <input type="number" name="y" value="<?= rand(0, 600) ?>" style="width:50px"/>
            <button>Ajouter</button>
        <div><a href="consulter.php">Consulter</a> | <a href="index.php?clear=true">Supprimer</a></div>
    </form>

    <div class="post-container">
        <?php
			if(!empty($data["liste"]))
			{
				foreach ($data["liste"] as $post)
				{
					?>
					<div class="post-it" style="top:<?= $post["y"] ?>px;left:<?= $post["x"] ?>px"><?= $post["task"] ?></div>
					<?php
				};
			}
        ?>
    </div>
<?php
	require_once("partial/footer.php");
?>