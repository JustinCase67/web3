<?php
    require_once("action/imagesAction.php");

    // $action = new imageAction();
    // $data = $action->execute();

    require_once("partial/header.php");
?>
<div class="page-content">
    <div id="page-images">
        <ul>
            <li>
                <a href="photos/image1.jpg" title="Image #1">
                    <img src="photos/thumb_image1.jpg" width="72" height="72" alt="" />
                </a>
            </li>
            <li>
                <a href="photos/image2.jpg" title="Image #2">
                    <img src="photos/thumb_image2.jpg" width="72" height="72" alt="" />
                </a>
            </li>
            <li>
                <a href="photos/image3.jpg" title="Image #3">
                    <img src="photos/thumb_image3.jpg" width="72" height="72" alt="" />
                </a>
            </li>
            <li>
                <a href="photos/image4.jpg" title="Image #4">
                    <img src="photos/thumb_image4.jpg" width="72" height="72" alt="" />
                </a>
            </li>
            <li>
                <a href="photos/image5.jpg" title="Image #5">
                    <img src="photos/thumb_image5.jpg" width="72" height="72" alt="" />
                </a>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
        $('#page-images a').lightBox();
    </script>
</div>
<?php
    require_once("partial/footer.php");