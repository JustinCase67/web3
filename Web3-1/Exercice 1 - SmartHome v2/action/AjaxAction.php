<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/SmartLightDAO.php");


    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = SmartLightDAO::getLightsStatus();
            return compact("result");
        }
    }