<?php
require_once 'BaseModel.php';

class DataModel extends BaseModel {
    public function __construct() {
        parent::__construct();
    }


	
	public function getImgs(){
		return $this->getAll('imgs');
	}
	public function getInfos(){
		return $this->getAll('info');
	}
	public function getBrands(){
		return $this->getAll('brand');
	}
	public function getModels(){
		return $this->getAll('models');
	}
}


?>
