<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Personalizar</title>
		<?php include("../3navbar.html");?>
	</head>
	<body>

        <div id="container"></div>

        <script src="build/three.js"></script>
		<script src="examples/js/controls/TrackballControls.js"></script>
		<script>
		    var container, stats;
		    var camera, controls, scene, renderer;

		    init();
		    animate();

		    function init() {
		        //******************************************************************************************************
		        container = document.getElementById('container');
		        scene = new THREE.Scene();
		        //******************************************************************************************************
		        camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
		        
		        camera.position.z=500;
		     function onWindowResize() {

				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}
		        //******************************************************************************************************
		        controls = new THREE.TrackballControls(camera);
		        controls.movementSpeed = 200;
		        controls.lookSpeed = 0.05;
		        controls.lookVertical = false;
		        controls.noFly = true;
		        controls.activeLook = true;
		        controls.constrainVertical = false;
		        controls.verticalMin = 0;
		        controls.verticalMax = 0;
		        //******************************************************************************************************
		        var directionalLight1 = new THREE.DirectionalLight(0xF7EFBE, 1);
		        directionalLight1.position.set(0.5, 1, 0.5);
		        scene.add(directionalLight1);
		        var directionalLight2 = new THREE.DirectionalLight(0xF7EFBE, 1);
		        directionalLight2.position.set(-0.5, -1, -0.5);
		        scene.add(directionalLight2);
		        //******************************************************************************************************

		        var cuboMaterial = new THREE.MeshPhongMaterial({map: THREE.ImageUtils.loadTexture('../img/materiales/textura2.png') });
		        loader = new THREE.JSONLoader();
		        loader.load('Gabinetes.js', function (geometry) {
		            mesh = new THREE.Mesh(geometry, cuboMaterial);
		            mesh.scale.z = 25;
		            mesh.scale.x = 25;
		            mesh.scale.y = 25;
		            mesh.id = "sillon";
		            scene.add(mesh);
		        });


		        //******************************************************************************************************
		        renderer = new THREE.WebGLRenderer();
		        renderer.setSize(window.innerWidth, window.innerHeight);
		        container.appendChild(renderer.domElement);
		    }

		    function animate() {
		        requestAnimationFrame(animate);
		        controls.update(.01);
		        renderer.render(scene, camera);
		    }

		</script>
       
	</body>
</html>
<?php
}else{
  echo '<script> alert("Usuario no autenticado"); location.href = "index.php"; </script>';
}
  ?>