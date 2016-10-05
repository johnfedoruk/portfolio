<?php
	ini_set("display_startup_errors", 1);
	ini_set("display_errors", 1);
	/* Reports for either E_ERROR. E_WARNING. E_NOTICE. Any Error*/
	error_reporting(E_ALL^E_DEPRECATED);

//$_GET['content'] = "works";

	require_once(__DIR__."/model/DatabaseModel.php");
	$databaseModel = DatabaseModel::getInstance();
	$databaseModel->connect();

	require_once(__DIR__."/model/PageModel.php");
	require_once(__DIR__."/view/PageView.php");
	require_once(__DIR__."/controller/PageController.php");
	$view = new PageView(PageModel::getInstance());
	$controller = new PageController();
	$controller->get("404.php");
	if(isset($_GET['content'])) {
		switch($_GET['content']) {
			case "contact":
				require_once(__DIR__."/view/JsonView.php");
				require_once(__DIR__."/model/ContactModel.php");
				require_once(__DIR__."/controller/ContactController.php");
				$view = new JsonView(ContactModel::getInstance());
				$controller = new ContactController();
				$controller->get();
				break;
			case "about":
				require_once(__DIR__."/view/JsonView.php");
				require_once(__DIR__."/model/AboutModel.php");
				require_once(__DIR__."/controller/AboutController.php");
				$view = new JsonView(AboutModel::getInstance());
				$controller = new AboutController();
				$controller->get();
				break;
			case "photos":
				require_once(__DIR__."/view/JsonView.php");
				require_once(__DIR__."/model/PhotosModel.php");
				require_once(__DIR__."/controller/PhotosController.php");
				$view = new JsonView(PhotosModel::getInstance());
				$controller = new PhotosController();
				$controller->get();
				break;
			case "works":
				require_once(__DIR__."/view/JsonView.php");
				require_once(__DIR__."/model/WorksModel.php");
				require_once(__DIR__."/controller/WorksController.php");
				$view = new JsonView(WorksModel::getInstance());
				$controller = new WorksController();
				$controller->get();
				break;
			case "image":
				require_once(__DIR__."/view/ImageView.php");
				require_once(__DIR__."/model/ImageModel.php");
				require_once(__DIR__."/controller/ImageController.php");
				$view = new ImageView(ImageModel::getInstance());
				$controller = new ImageController();
				$controller->get();
				break;
			case "file":
				require_once(__DIR__."/view/FileView.php");
				require_once(__DIR__."/model/FileModel.php");
				require_once(__DIR__."/controller/FileController.php");
				$view = new FileView(FileModel::getInstance());
				$controller = new FileController();
				$controller->get();
				break;
			case "user":
				require_once(__DIR__."/view/JsonView.php");
				require_once(__DIR__."/model/UserModel.php");
				require_once(__DIR__."/controller/UserController.php");
				$view = new JsonView(UserModel::getInstance());
				$controller = new UserController();
				$controller->get();
				break;
			default:
				break;
		}
	}
	$view->render();
