<?php
    require_once("action/CommonAction.php");

    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            
            $json = "";
			$result = "";
			
			if (!empty($_POST["ip"])) {
				$json = file_get_contents("http://ip-api.com/json/" . $_POST["ip"]);
				$result = json_decode($json);
			}
			return compact("result");
        }
    }