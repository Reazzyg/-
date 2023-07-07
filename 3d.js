import * as THREE from 'three';
import { OrbitControls } from 'OrbitControls';
import  { GLTFLoader } from 'GLTFLoader';
import  { OBJLoader } from 'OBJLoader';
import  { RGBELoader } from 'RGBELoader';
import  { MTLLoader } from 'MTLLoader';
//====================3d obj================================

let camera, scene, renderer;
let object;

init();

function init() {
  const container = document.getElementById('canvas-container');

  camera = new THREE.PerspectiveCamera(35, container.offsetWidth / container.offsetHeight, 1, 1000);
  camera.position.z = 1;
  camera.position.x = 0.075;
  camera.position.y = -2;

  scene = new THREE.Scene();

  const ambientLight = new THREE.AmbientLight(0xffffff);
  scene.add(ambientLight);

  const pointLight = new THREE.PointLight(0xffffff, 25);
  camera.add(pointLight);
  scene.add(camera);

  scene.background = new THREE.Color(0xf1f1f1);

  function loadModel() {
    if (object) {
      object.position.set(-1, -0.75, -0.5);
      object.scale.setScalar(0.01);
      scene.add(object);
    }
    render();
  }

  const manager = new THREE.LoadingManager(loadModel);

  function onProgress(xhr) {
    if (xhr.lengthComputable) {
      const percentComplete = (xhr.loaded / xhr.total) * 100;
      const elapsedTime = Math.round(xhr.timeStamp - xhr.startTime);
      console.log('Модель загружена на ' + percentComplete.toFixed(2) + '%');
      console.log('Время загрузки: ' + elapsedTime + 'ms');
    }
  }

  function onError() {
    console.error('Произошла ошибка при загрузке модели.');
  }

  const materialsLoader = new MTLLoader(manager);
  materialsLoader.setPath('3d/test/');
  materialsLoader.load('banya.mtl', function (materials) {
    materials.preload();

    const objLoader = new OBJLoader(manager);
    objLoader.setMaterials(materials);
    objLoader.setPath('3d/test/');
    objLoader.load('banya.obj', function (loadedObject) {
      object = loadedObject;
    }, onProgress, onError);
  });

  renderer = new THREE.WebGLRenderer({ antialias: true });
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize(container.offsetWidth, container.offsetHeight);
  renderer.useLegacyLights = false;
  container.appendChild(renderer.domElement);

  const controls = new OrbitControls(camera, renderer.domElement);
  controls.minDistance = 2;
  controls.maxDistance = 5;
  controls.addEventListener('change', render);

  window.addEventListener('resize', onWindowResize);

  render();
}

function onWindowResize() {
  camera.aspect = container.offsetWidth / container.offsetHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(container.offsetWidth, container.offsetHeight);
  render();
}

function render() {
  renderer.render(scene, camera);
}


// let camera, scene, renderer;
// let object;


// init();


// function init() {
// 				const container = document.getElementById('canvas-container');

// 				camera = new THREE.PerspectiveCamera( 35, container.offsetWidth / container.offsetHeight,  1, 1000 );
// 				camera.position.z = 1;
// 				camera.position.x = 0.075;
// 				camera.position.y = -2;

// 				// scene

// 				scene = new THREE.Scene();

// 				const ambientLight = new THREE.AmbientLight( 0xffffff );
// 				scene.add( ambientLight );

// 				const pointLight = new THREE.PointLight( 0xffffff, 25 );
// 				camera.add( pointLight );
// 				scene.add( camera );
//         scene.background = new THREE.Color( 0xf1f1f1);

// 				function loadModel() {

			
// 					object.position.y =  -0.75;
// 					object.position.x =  -1;
// 					object.position.z =  -0.5;
// 					object.scale.setScalar( 0.01 );
// 					scene.add( object );

// 					render();

// 				}

// 				const manager = new THREE.LoadingManager( loadModel );

		     
// 		  function onProgress( xhr ) {

// 					if ( xhr.lengthComputable ) {

// 						const percentComplete = xhr.loaded / xhr.total * 100;
// 						console.log( 'model ' + Math.round( percentComplete, 2 ) + '% downloaded' );

// 					}

// 				}

// 				function onError() {}

// 				new MTLLoader()
// 					.setPath( '3d/test/' )
// 					.load( 'banya.mtl', function ( materials ) {

// 						materials.preload();

// 						new OBJLoader()
// 							.setMaterials( materials )
// 							.setPath( '3d/test/' )
// 							.load( 'banya.obj', function ( object ) {

// 								object.position.y =  -0.75;
// 								object.position.x =  -1;
// 								object.position.z =  -0.5;
// 								object.scale.setScalar( 0.01 );
// 								scene.add( object );

// 							}, onProgress, onError );

// 					} );

// 					renderer = new THREE.WebGLRenderer( { antialias: true } );
// 				renderer.setPixelRatio( window.devicePixelRatio );
// 				renderer.setSize( container.offsetWidth, container.offsetHeight );
// 				renderer.useLegacyLights = false;
// 				container.appendChild( renderer.domElement );

// 				//

// 				const controls = new  OrbitControls( camera, renderer.domElement );
// 				controls.minDistance = 2;
// 				controls.maxDistance = 5;
// 				controls.addEventListener( 'change', render );

// 				//

// 				window.addEventListener( 'resize', onWindowResize );

// 			}

// 			function onWindowResize() {

// 				camera.aspect = container.offsetWidth / container.offsetHeight;
// 				camera.updateProjectionMatrix();

// 				renderer.setSize( container.offsetWidth, container.offsetHeight );

// 			}

// 			function render() {

// 				renderer.render( scene, camera );

// 			}



//======== с фоном gltf======
//  let camera, scene, renderer;

// 			init();
// 			render();

// 			function init() {

// 				const container = document.getElementById('canvas-container');
				
// 				camera = new THREE.PerspectiveCamera( 90, container.offsetWidth / container.offsetHeight, 0.25, 1000 );
// 				camera.position.set( 0.075, 0.1, 0 );

// 				scene = new THREE.Scene();

			
// 					new RGBELoader()
// 					.setPath( '3d/' )
// 					.load( 'royal_esplanade_1k.hdr', function ( texture ) {

// 						texture.mapping = THREE.EquirectangularReflectionMapping;

// 						scene.background = texture;
// 						scene.environment = texture;

// 						render();

// 						// model

// 						const loader = new GLTFLoader().setPath( '3d/skull/' );
// 						loader.load( 'scene.gltf', function ( gltf ) {

// 							scene.add( gltf.scene );

// 							render();

// 						} );

// 					} );

				

// 				renderer = new THREE.WebGLRenderer( { antialias: true } );
// 				renderer.setPixelRatio( window.devicePixelRatio );
// 				renderer.setSize( container.offsetWidth, container.offsetHeight );
// 				renderer.toneMapping = THREE.ACESFilmicToneMapping;
// 				renderer.toneMappingExposure = 1;
// 				renderer.useLegacyLights = false;
// 				container.appendChild( renderer.domElement );

// 				const controls = new OrbitControls( camera, renderer.domElement );
// 				controls.addEventListener( 'change', render ); // use if there is no animation loop
// 				controls.minDistance = 2;
// 				controls.maxDistance = 10;
// 				controls.target.set( 0, 0, - 0.2 );
// 				controls.update();

// 				window.addEventListener( 'resize', onWindowResize );

// 			}

// 			function onWindowResize() {

// 				camera.aspect = container.offsetWidth / container.offsetHeight;
// 				camera.updateProjectionMatrix();

// 				renderer.setSize( container.offsetWidth, container.offsetHeight );

// 				render();

// 			}

// 			//

// 			function render() {

// 				renderer.render( scene, camera );

// 			}



      //====без фона=============
// let camera, scene, renderer;

// 			init();
// 			render();

// 			function init() {
// 				const container = document.getElementById('canvas-container');

// 				camera = new THREE.PerspectiveCamera( 90, container.offsetWidth / container.offsetHeight, 0.25, 1000 );
// 				camera.position.set( 0.075, 0.1, 0 );

// 				scene = new THREE.Scene();
// 				scene.background = new THREE.Color( 0xf6eedc );

// 				//

// 				// const dracoLoader = new DRACOLoader();
// 				// dracoLoader.setDecoderPath( 'jsm/libs/draco/gltf/' );

// 				const loader = new GLTFLoader();
// 				// loader.setDRACOLoader( dracoLoader );
// 				loader.setPath( '3d/skull/' );
// 				loader.load( 'scene.gltf', function ( gltf ) {

// 					scene.add( gltf.scene );

// 					render();

// 				} );

// 				//

// 				renderer = new THREE.WebGLRenderer( { antialias: true } );
// 				renderer.setPixelRatio( container.devicePixelRatio );
// 				renderer.setSize( container.offsetWidth, container.offsetHeight );
// 				renderer.toneMapping = THREE.ACESFilmicToneMapping;
// 				renderer.toneMappingExposure = 1;
// 				renderer.useLegacyLights = false;
// 				container.appendChild( renderer.domElement );

// 				const controls = new OrbitControls( camera, renderer.domElement );
// 				controls.addEventListener( 'change', render ); // use if there is no animation loop
// 				controls.minDistance = 1.8;
// 				controls.maxDistance = 10;
// 				controls.target.set( 0, 0, - 0.2 );
// 				controls.update();

// 				window.addEventListener( 'resize', onWindowResize );

// 			}

// 			function onWindowResize() {

// 				camera.aspect = container.offsetWidth / container.offsetHeight;
// 				camera.updateProjectionMatrix();

// 				renderer.setSize( container.offsetWidth, container.offsetHeight );

// 				render();

// 			}

// 			//

// 			function render() {

// 				renderer.render( scene, camera );

// 			}





// let camera, scene, renderer;

// 			init();
// 			render();

// 			function init() {

// 				const container = document.getElementById('canvas-container');
// 				const a = document.querySelector('.projects-obs');
//         console.log(a);
// console.log(container.offsetWidth);
// console.log(container.offsetHeight);

// 				camera = new THREE.PerspectiveCamera( 90, container.offsetWidth / container.offsetHeight, 0.25, 1000 );
// 				camera.position.set( 0.075, 0.1, 0 );

// 				scene = new THREE.Scene();

			
// 					new RGBELoader()
// 					.setPath( '3d/' )
// 					.load( 'royal_esplanade_1k.hdr', function ( texture ) {

// 						texture.mapping = THREE.EquirectangularReflectionMapping;

// 						scene.background = texture;
// 						scene.environment = texture;

// 						render();

// 						// model

// 						const loader = new GLTFLoader().setPath( '3d/skull/' );
// 						loader.load( 'scene.gltf', function ( gltf ) {

// 							scene.add( gltf.scene );

// 							render();

// 						} );

// 					} );

				

// 				renderer = new THREE.WebGLRenderer( { antialias: true } );
// 				renderer.setPixelRatio( window.devicePixelRatio );
// 				renderer.setSize( container.offsetWidth, container.offsetHeight );
// 				renderer.toneMapping = THREE.ACESFilmicToneMapping;
// 				renderer.toneMappingExposure = 1;
// 				renderer.useLegacyLights = false;
// 				container.appendChild( renderer.domElement );

// 				const controls = new OrbitControls( camera, renderer.domElement );
// 				controls.addEventListener( 'change', render ); // use if there is no animation loop
// 				controls.minDistance = 2;
// 				controls.maxDistance = 10;
// 				controls.target.set( 0, 0, - 0.2 );
// 				controls.update();

// 				window.addEventListener( 'resize', onWindowResize );

// 			}

// 			function onWindowResize() {

// 				camera.aspect = container.offsetWidth / container.offsetHeight;
// 				camera.updateProjectionMatrix();

// 				renderer.setSize( container.offsetWidth, container.offsetHeight );

// 				render();

// 			}

// 			//

// 			function render() {

// 				renderer.render( scene, camera );

// 			}


 
// const scene = new THREE.Scene();
// const camera = new THREE.PerspectiveCamera( 75, container.innerWidth / container.innerHeight, 0.1, 1000 );
// // camera.position.z = 5;



// const renderer = new THREE.WebGLRenderer();
// renderer.setSize( container.offsetWidth, container.offsetHeight );
// container.appendChild(renderer.domElement);
// const controls = new OrbitControls( camera, renderer.domElement );
// camera.position.set( 0, 20, 100 );
// scene.background = new THREE.Color( 0xcccccc );
// controls.update();


// // const geometry = new THREE.BoxGeometry( 1, 1, 1 );
// // const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
// // const cube = new THREE.Mesh( geometry, material );
// // scene.add( cube );

// var loader = new GLTFLoader();
// loader.load('3d/skull/scene.gltf', function (gltf) {
//   let object = gltf.scene;
//   scene.add(object);
// },
// function ( xhr ) {

// 		console.log( ( xhr.loaded / xhr.total * 100 ) + '% loaded' );
// },

// function ( error ) {

// 		console.log( 'An error happened' );

// 	}

//   );


// function animate() {
// 	requestAnimationFrame( animate );
// //   cube.rotation.x += 0.01;
// // cube.rotation.y += 0.01;
//   controls.update();
// 	renderer.render( scene, camera );
// }
// animate();