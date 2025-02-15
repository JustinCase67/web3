<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            if(!empty($_POST["name"]))
            {
                StatsDAO::save($_POST["name"], $_POST["type"]);

                $_SESSION["name"] = $_POST["name"];
                $_SESSION["hasLoggedIn"] = true;
                
            }

            $hasLoggedIn = $_SESSION["hasLoggedIn"] ?? false;

            return compact("hasLoggedIn");
        }
    }