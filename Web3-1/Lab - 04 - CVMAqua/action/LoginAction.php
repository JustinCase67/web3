<?php
    require_once("action/CommonAction.php");

    class LoginAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_);
        }

        protected function executeAction() {
            
            return [];
        }
    }