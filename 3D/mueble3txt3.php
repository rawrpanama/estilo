<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
  include("../php/conexion.php");
  conexion();
$mbid=1;
$q = mysql_query("SELECT vis FROM mueble WHERE idmueble='".$mbid."'");
$a = mysql_fetch_array($q);
$count = $a['vis'];
$count = $count +1;
mysql_query("UPDATE mueble SET vis='".$count."' WHERE idmueble='".$mbid."'");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Personalizar</title>
		<?php include("../3navbar.html");?>
	</head>
	<body>
		<nav class="navbar navbar-default">
		    <div>
		      <ul class="nav navbar-nav">
		         <li>
		             <p class="flow-text black-text center">Texturas</p>
		            <ul >
		                <a id="mueble1" href="mueble3.php"><img class="responsive-img" src="../img/materiales/madera.jpg" style="widht: 25px; Height: 50px;"></a>
		                <a id="mueble2" href="mueble3txt2.php"><img class="responsive-img" src="../img/materiales/textura2.png" style="widht: 25px; Height: 50px;"></a>
		                <a id="mueble3" href="mueble3txt3.php"><img class="responsive-img" src="../img/materiales/textura3.png" style="widht: 25px; Height: 50px;"></a>
		                <a id="mueble4" href="mueble3txt4.php"><img class="responsive-img" src="../img/materiales/textura4.png" style="widht: 25px; Height: 50px;"></a>
		                <a id="mueble5" href="mueble3txt5.php"><img class="responsive-img" src="../img/materiales/textura5.png" style="widht: 25px; Height: 50px;"></a>
		                <a id="mueble6" href="mueble3txt6.php"><img class="responsive-img" src="../img/materiales/textura6.png" style="widht: 25px; Height: 50px;"></a>
		                <a id="mueble7" href="mueble3txt7.php"><img class="responsive-img" src="../img/materiales/textura7.png" style="widht: 25px; Height: 50px;"></a>
		            </ul>
		         </li>
		      </ul>
		   </div>
		</nav>

        <div id="container"></div>

        <script src="build/three.js"></script>
        <script type="text/javascript" src="../js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../js/inicio.js"></script>
		<script src="examples/js/controls/TrackballControls.js"></script>
		<script>


		   var container;
		    var camera, controls, scene, renderer;

		    init();
		    animate();

		    function init() {
		        //******************************************************************************************************
		        container = document.getElementById('container');
		        scene = new THREE.Scene();
		        //******************************************************************************************************
		        camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);

		        camera.position.z=250;
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

		        var cuboMaterial = new THREE.MeshPhongMaterial({map: THREE.ImageUtils.loadTexture('../img/materiales/textura3.png') });
		        loader = new THREE.JSONLoader();
		        loader.load('baño1.js', function (geometry) {
		            mesh = new THREE.Mesh(geometry, cuboMaterial);
		            mesh.scale.z = 25;
		            mesh.scale.x = 25;
		            mesh.scale.y = 25;
		            mesh.id = "sillon";
		            scene.add(mesh);
		        });


		        //******************************************************************************************************
		        renderer = new THREE.WebGLRenderer({alpha: true});
		        renderer.setClearColor(0x000000, 0);
		        renderer.setSize(window.innerWidth, window.innerHeight);
		        container.appendChild(renderer.domElement);
		    }

		    function animate() {
		        requestAnimationFrame(animate);
		        controls.update(.01);
		        renderer.render(scene, camera);
		    }

		</script>
		   <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		      <a class="btn-floating btn-large red">
		      <i class="large mdi-action-settings"></i>
		      </a>
		    <ul>
		      <li><a href="" class="btn-floating green btn tooltipped" data-position="left" data-delay="50" data-tooltip="Atrás"><i class="large mdi-hardware-keyboard-backspace"></i></a></li>
		      <li><a href="reser.php" class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Reservar"><i class="large mdi-editor-attach-file"></i></a></li>
		    </ul>
		  </div>
	</body>
</html>
 <?php
}else{
  echo '<script> alert("Usuario no autenticado"); location.href = "../index.php"; </script>';
}
  ?>
