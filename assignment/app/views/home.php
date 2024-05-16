<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <title>Coca Cola 3D Apps</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="stylesheet" href="static/css/bootstrap.css">
  <link rel='stylesheet' type='text/css' href='static/css/x3dom.css'>
  <link rel="stylesheet" href="static/css/all.css">
  <link rel="stylesheet" type="text/css" href="static/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="static/css/custom.css">
  <link rel="stylesheet" href="static/css/style.css">
</head>

<body class="background">

  <div class="logo-container">
	  <a class="navbar-brand nav-link logo coca_cola" href="/">
	  <h1>1</h1>
	  <h1>oca</h1>
	  <h2>Cola</h2>
	  <h3>Journey</h3>
	  <p>Refreshing the world, one story at a time</p>
	  </a>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navs"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navs">
      <ul class="navbar-nav">
        <li class="nav-item">

        </li>
        <li class="nav-item active">
          <a class="nav-link" id="navHome" href="javascript:void(0);">Home</a>
        </li>
        <li class="nav-item">
          <a id="navAbout" class="nav-link" href="javascript:void(0);" >About</a>
        </li>
        <li class="nav-item">
          <a id="navModels" class="nav-link"  href="javascript:void(0);" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
        </li>
        <li class="nav-item">
           <a id="navContact" class="nav-link"  href="javascript:void(0);" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Contact Us" data-content="1234,***********, Email: 1234567@sussex.ac.uk">Contact</a>
        </li>
        
      </ul>
    </div>
  </nav>


  <div class="container common-container">
	  
        <div id="home">
          <div class="row"> 
            <div class ="col-sm-12">
              <div id="main_3d_image_slide">
					<div id="carousel" class="carousel slide" data-ride="carousel"  data-interval="1500">
					  <ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
						<li data-target="#carousel" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="d-block w-100" src="static/images/img1.jpg" >
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="static/images/img2.jpg" >
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="static/images/img3.jpg" >
						</div>
					  </div>
					  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					  
					 <div id="main_text" class="col-xs-12 col-sm-4">
						<div id="title_home"></div>
						<div id="subTitle_home"></div>
						<div id="description_home"></div>
					  </div>
					</div>
				  
              </div> 
            </div>
          </div>


          <div class="row" id="brand-info">
            
          </div>
		  
		  
        </div> 
	  

	  
        <div id="about" >

        </div> 



<div id="models">
         
    <div class="row main-container">
              <div class="col-sm-4" id="control-nav">
				  
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active" href="javascript:void(0);">Cameras</a>

                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                         

						<div class="btn-group" role="group" >
                          <a href="javascript:void(0);" class="btn btn-outline-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="javascript:void(0);" class="btn btn-outline-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="javascript:void(0);" class="btn btn-outline-info btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="javascript:void(0);" class="btn btn-outline-danger btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="javascript:void(0);" class="btn btn-outline-secondary btn-responsive" onclick="cameraTop();">Top</a>
                          <a href="javascript:void(0);" class="btn btn-outline-warning btn-responsive" onclick="cameraBottom();">Bottom</a>
						</div>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="javascript:void(0);">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
						  <div class="btn-group" role="group" >
                          <a href="javascript:void(0);" class="btn btn-outline-info btn-responsive" onclick="spin();">Start</a>
                          <a href="javascript:void(0);" class="btn btn-outline-danger btn-responsive" onclick="stopRotation();">Stop</a>
						  </div>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="javascript:void(0);" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"" onclick="wireframe(1);">Vertex</a>
                                <a class="dropdown-item" href="javascript:void(0);" onclick="wireframe(2);">Wire</a>
                                <a class="dropdown-item" href="javascript:void(0);"" onclick="wireframe(0);">Default</a>
                              </div>
                            </li>


                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render Options</h3>
                          </div>
						  <div class="btn-group" role="group" >
                          <a href="javascript:void(0);" class="btn btn-outline-success btn-responsive" onclick="wireframe(1);">Vertex</a>
                          <a href="javascript:void(0);" class="btn btn-outline-info btn-responsive" onclick="wireframe(2);">Wire</a>
						  <a href="javascript:void(0);" class="btn btn-outline-dark btn-responsive" onclick="wireframe(0);">Default</a>

						  </div>
                          
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render options; </p>
                          </div>
                        </div>
                      </div>
                </div>
				  
			  </div>
              <div class="col-sm-8">
                  <div class="card text-left">
                      <div class="card-header">
						  <ul class="nav nav-tabs card-header-tabs" id="nav-models">

						  </ul>
                      </div>
                      <div class="card-body" id="card-body">

						  <div class="card-items">
							  <div id="x3dModelTitle_main" class="card-title drinksText"></div>

							  <div class="model3D">
								  <x3d width="1000px" height="400px" id="x3dModel_main">
									  <scene id="main_scene">
										  
									  </scene>
								  </x3d>
								  

							  </div> 
							  <div id="x3dCreationMethod_main" class="card-text drinksText">
								  
							  </div>
						  </div>

							<div id="history" class="row history-item" >
								<div class="col-sm-12">
									<div class="card history-card">
										<div class="card-body">
											<div id="titleHistory" class="card-title drinksText"></div>
											<div id="subTitleHistory" class="card-subtitle drinksText"></div>
											<div id="descriptionHistory" class="card-text drinksText"></div>   
											<a href="" class="btn btn-danger btn-responsive" id="urlHistory"></a>                 
										</div>
									</div>
								</div>
							</div> 
					
						  
                        </div>

                   </div>
		   
	           </div>
	
	
	  

	
		<div class="row gallery-body">
            <div class="col-sm-12">
                  <div class="card text-left">
                      <div class="card-header gallery-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                              <a class="nav-link active" href="javascript:void(0);">Gallery</a>
                          </li>
                      </div>
                      <div class="card-body">
                          <div class="card-title title_gallery drinksText"></div>
                          <div class="gallery" id="gallery"></div>
                          <div class="card-text description_gallery drinksText"></div>
                      </div>
                  </div> 
            </div> 
		</div>
		
    </div> 
  
  </div>
  
  
</div>
  
  <footer>
	  <div class="container">
		  <div class="copy-item">
			   - - - &copy;&copy 2024 3D Apps - - -
				<div class="navbar-text social">
					  <a href="javascript:void(0);"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
					  <a href="javascript:void(0);"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
					  <a href="javascript:void(0);"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
					  <a href="javascript:void(0);"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
				</div>
		  </div>
	  </div>
  </footer>

    <script src="static/scripts/js/jquery-3.4.1.js"></script>

    <script src="static/scripts/js/popper.min.js"></script>

    <script src="static/scripts/js/bootstrap-4.4.1.js"></script>

    <script src='static/scripts/js/x3dom.js'></script>



    <!-- JQuery code to get content data from backend -->
    <script src="static/scripts/js/control.js"></script>

    <!-- JavaScript model interactions -->
    <script src="static/scripts/js/modelInteractions.js"></script>

    <script src="static/scripts/js/jquery.fancybox.min.js"></script>
</body>

</html>
