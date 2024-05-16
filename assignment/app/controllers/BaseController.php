<?php
require_once "./../core/Database.php";
require_once "../app/models/CommonModel.php";
require_once "../app/models/DataModel.php";
class BaseController {
    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';
		
        switch ($action) {
            case 'index':
                $this->index();
                break;

			case 'getJsonData':
				$this->getJsonData();
				break;
			

            default:
                http_response_code(404);
                echo "Not Found";
                break;
        }
    }

    public function index() {

		$common = new CommonModel();
		
		// $common -> dropBrandTable();
		// $common -> createBrandTable();
		// $common -> defaultBrand();


		// $common -> createModelsTable();
		// $common -> defaultModels();
		
		// $common -> createInfoTable();
		// $common -> defaultInfo();
		
	
	
        include '../app/views/home.php';
    }


	
	//get  json data from sqlite
	public function getJsonData(){
		$obj = new DataModel();
		$data = [
			'imgs' => $obj->getImgs(),
			'info' => $obj->getInfos(),
			'brand' => $obj->getBrands(),
			'models' => $obj->getModels(),
		];
		header('Content-Type: application/json');
		echo json_encode($data);
		exit;
	}
	
}
?>
