<?php
	require_once(__DIR__."/View.php");
	require_once(__DIR__."/../model/ErrorModel.php");
	class JsonView extends View {
		public function render() {
			$errorModel = ErrorModel::getInstance();
			if($errorModel->isErrors())
				die((string)$errorModel);
			die((string)$this->model);
		}
	}
