<?php
require_once 'BaseModel.php';
class CommonModel extends BaseModel {
	
    public function __construct() {
        parent::__construct();
    }
	
	public function createBrandTable(){
		$this->createTable('brand',"id INTEGER PRIMARY KEY,title TEXT,subTitle TEXT,caption TEXT,description TEXT,img TEXT,subImg TEXT,url TEXT");
	}
	public function dropBrandTable(){
		$this->dropTable('brand');
	}

	public function defaultBrand(){
		$this->execute("INSERT INTO brand (title, subTitle, caption, description, img, subImg, url) VALUES ('Coca Cola', 'New York Harbour, 1886', 'My 3D Coke Can Render', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!', 'static\\assets\\images\\site_images\\coca_cola.jpg', 'static\\assets\\images\\render_images\\coke.jpg', 'http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola')");

		$this->execute("INSERT INTO brand (title, subTitle, caption, description, img, subImg, url) VALUES ('Sprite', 'West Germany, 1959', 'My 3D Sprite Bottle Render', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.', 'static\\assets\\images\\site_images\\sprite.jpg', 'static\\assets\\images\\render_images\\sprite.jpg', 'http://www.coca-cola.co.uk/drinks/sprite/sprite')");

		$this->execute("INSERT INTO brand (title, subTitle, caption, description, img, subImg, url) VALUES ('Dr Pepper', 'Texas, 1885', 'My 3D Pepper Cup Render', 'Dr Pepper''s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it''s still the same, with that distinctive flavour you just can''t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.', 'static\\assets\\images\\site_images\\dr_pepper.jpg', 'static\\assets\\images\\render_images\\pepper.jpg', 'http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper')");
	}

	
	public function createImgsTable(){
		$this->createTable('imgs','id INTEGER PRIMARY KEY AUTOINCREMENT,img TEXT');
	}
	
	public function defaultImgs(){
		$this->execute("INSERT INTO imgs (img) VALUES ('static\\assets\\images\\gallery_images\\coke_1.png'");
		$this->execute("INSERT INTO imgs (img) VALUES ('static\\assets\\images\\gallery_images\\coke_2.png'");
		$this->execute("INSERT INTO imgs (img) VALUES ('static\\assets\\images\\gallery_images\\pepper_1.png'");
		$this->execute("INSERT INTO imgs (img) VALUES ('static\\assets\\images\\gallery_images\\pepper_2.png'");
		$this->execute("INSERT INTO imgs (img) VALUES ('static\\assets\\images\\gallery_images\\sprite_1.png'");
		$this->execute("INSERT INTO imgs (img) VALUES ('static\\assets\\images\\gallery_images\\sprite_2.png'");
		
	}

	public function createInfoTable(){
		$this->createTable('info','id INTEGER PRIMARY KEY AUTOINCREMENT,title TEXT,subTitle TEXT,description text,historyTitle TEXT,historySubTitle TEXT,historyDescription TEXT,historyUrl TEXT,img TEXT,about TEXT');
	}

	public function defaultInfo(){
		$this->execute("INSERT INTO info (title, subTitle, description, historyTitle, historySubTitle, historyDescription, historyUrl, img, about)
		VALUES ('Coca Cola Great Britain', 'Founded in 1886 by Dr. John S. Pemberton', 'The Coca Cola Company is the world''s leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.', 'History of Coca Cola', 'Atlanta Beginnings', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs'' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special.', 'http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola', 'path_to_img', 'About Coca Cola Great Britain')");
	}



	public function createModelsTable(){
		$this->createTable('models','id INTEGER PRIMARY KEY AUTOINCREMENT,title TEXT,files TEXT,maps TEXT,flag TEXT,description TEXT,history_title TEXT,history_sub_title TEXT,history_url TEXT,history_description TEXT');
	}


	public function defaultModels(){
		$this->execute("INSERT INTO models (title, files, maps, flag, description, history_title, history_sub_title, history_url, history_description)
VALUES ('Coca Cola X3D Model', 'static\\assets\\x3d\\coke.x3d', 'can_texture.jpg', 'Coke', 'This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'History of Coca Cola', 'Atlanta Beginnings', 'http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.');
");
		$this->execute("INSERT INTO models (title, files, maps, flag, description, history_title, history_sub_title, history_url, history_description)
VALUES ('Sprite X3D Model', 'static\\assets\\x3d\\sprite.x3d', 'spriteTextureLabel.jpg', 'Sprite', 'This X3D model of the sprite bottle has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Sprite — Fanta Klare Zitrone', 'First introduced in 1961', 'http://www.coca-cola.co.uk/drinks/sprite/sprite', 'Crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola''s no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.')");
		$this->execute("INSERT INTO models (title, files, maps, flag, description, history_title, history_sub_title, history_url, history_description)
VALUES ('Dr Pepper X3D Model', 'static\\assets\\x3d\\pepper.x3d', 'drPepperTexture.jpg', 'Pepper', 'This X3D model of the pepper cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Dr Pepper — Liquid Sunshine', '23 fruit flavours', 'http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper', 'Dr Pepper''s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it''s still the same, with that distinctive flavour you just can''t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.')");

	}

	
}