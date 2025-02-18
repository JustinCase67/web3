<?php
    require_once("action/AdminIndexAction.php");

    // $action = new AdminIndexAction();
    // $data = $action->execute();

    require_once("partial/header.php");
?>

<form action="admin-index.php" method="post" >
    <div>
        <textarea name="newtext" id="newtext" cols="60" rows="15"></textarea>
    </div>
    <div>
        <button>Submit</button>
    </div>
</form>

<?php
    require_once("partial/footer.php");