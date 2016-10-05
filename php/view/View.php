<?php
	require_once(__DIR__."/../model/Model.php");
	abstract class View {
		protected $model;
		public function __construct(Model $model) {
			$this->model=$model;
		}
		abstract public function render();
	}
