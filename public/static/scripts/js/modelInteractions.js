//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
    var elements = document.querySelectorAll('[id="model__RotationTimer"]');
    for (var i = 0; i < elements.length; i++) {
        var spinning = elements[i].getAttribute('enabled');
        spinning = spinning === 'true' ? 'false' : 'true';
        elements[i].setAttribute('enabled', spinning);
    }
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}



function wireframe(mode)
{

	var e = document.getElementById("x3dModel_main");  
	if (e) {  
		
		// e.runtime.togglePoints(true); 
		while(e.runtime.togglePoints(true) != mode) {}
	} 

}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function getActive(){
    var flag = document.getElementById('nav-models').querySelector('.active').getAttribute('flag');  
}

function cameraFront()
{

	document.getElementById('model__controlCameraFront').setAttribute('bind', 'true');
}
function cameraLeft()
{
	document.getElementById('model__controlCameraLeft').setAttribute('bind', 'true');
}
function cameraRight()
{
	document.getElementById('model__controlCameraRight').setAttribute('bind', 'true');
}
function cameraTop()
{
	document.getElementById('model__controlCameraTop').setAttribute('bind', 'true');
}
function cameraBottom()
{
	document.getElementById('model__controlCameraBottom').setAttribute('bind', 'true');
}
function cameraBack()
{
	document.getElementById('model__controlCameraBack').setAttribute('bind', 'true');
}

