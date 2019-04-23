
var container, stats;
var camera, scene, renderer;
var mouseX = 0, mouseY = 0;
var windowHalfX = window.innerWidth / 2;
var windowHalfY = window.innerHeight / 2;
var soldier1, soldier2, gamer1, gamer2;

init();

animate();

function init() {
    container = document.createElement( 'div' );
    document.body.appendChild( container );

    camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 1, 2000 );
    camera.position.z = 250;
    // scene
    scene = new THREE.Scene();

    // bgTexture = new THREE.TextureLoader().load("/models/obj/soldierbot1/background5.png",  function ( texture ) {
    //     var img  = texture.image;
    //     bgWidth  = img.width;
    //     bgHeight = img.height;
    // } );
    // scene.background = bgTexture;
    // bgTexture.wrapS = THREE.MirroredRepeatWrapping;
    // bgTexture.wrapT = THREE.MirroredRepeatWrapping;

    //LIGHTS
    var ambientLight = new THREE.AmbientLight( 0x9933ff,.5);
    scene.add( ambientLight );

    var pointLight = new THREE.DirectionalLight( 0x9933ff, .9);
    camera.add( pointLight );
    scene.add( camera );

    scene.add( new THREE.HemisphereLight( 0x404040, 0x111122 ) );

    spotLight = new THREE.SpotLight( 0x00e600, .8 );
    spotLight.position.set( 0.5, 0, 1 );
    spotLight.position.multiplyScalar( 700 );
    spotLight.castShadow = true;
    spotLight.shadow.mapSize.width = 2048;
    spotLight.shadow.mapSize.height = 2048;
    spotLight.shadow.camera.near = 200;
    spotLight.shadow.camera.far = 1500;
    spotLight.shadow.camera.fov = 40;
    spotLight.shadow.bias = - 0.005;
    scene.add( spotLight );

    // MODEL
    var onProgress = function ( xhr ) {
        if ( xhr.lengthComputable ) {
            var percentComplete = xhr.loaded / xhr.total * 100;
            console.log( Math.round( percentComplete, 2 ) + '% downloaded' );
        }
    };
    var onError = function (err) { console.log(err); };

    // LOAD OBJECTS
    //Soldier 1
    new THREE.MTLLoader()
        .setPath( 'models/obj/soldierbot1/' )
        .load( 'SoldierBot.mtl', function ( materials1 ) {
            materials1.preload();

            new THREE.OBJLoader()
                .setMaterials( materials1 )
                .setPath( 'models/obj/soldierbot1/' )
                .load( 'SoldierBot.obj', function ( object1 ) {
                  object1.position.y = - 55;
                  object1.position.x = -180;
                  object1.position.z = -50;
                  object1.rotation.x = 100;
                  soldier1 = object1;
                  scene.add( object1 );
                }, onProgress, onError );
        } );

    //gamer 1
    new THREE.MTLLoader()
        .setPath( 'models/obj/gamerhead1/' )
        .load( 'GamerHead.mtl', function ( materials2 ) {
            materials2.preload();

            new THREE.OBJLoader()
                .setMaterials( materials2 )
                .setPath( 'models/obj/gamerhead1/' )
                .load( 'GamerHead.obj', function ( object2 ) {
                    object2.position.y = -45;
                    object2.position.x = -55;
                    object2.position.z = -60;
                    object2.rotation.x = 0.2;
                    scene.add( object2 );
                    gamer1 = object2;
                }, onProgress, onError );
        } );

    //Soldier 2
    new THREE.MTLLoader()

        .setPath( 'models/obj/soldierbot1/' )
        .load( 'SoldierBot.mtl', function ( materials3 ) {
            materials3.preload();

            new THREE.OBJLoader()
                .setMaterials( materials3 )
                .setPath( 'models/obj/soldierbot1/' )
                .load( 'SoldierBot.obj', function ( object3 ) {
                    object3.position.y = - 55;
                    object3.position.x = 55;
                    object3.position.z = -50;
                    object3.rotation.x = 100;
                    scene.add( object3 );
                    soldier2 = object3;
                }, onProgress, onError );
        } );

     //gamer 2
    obj = new THREE.MTLLoader()
        .setPath( 'models/obj/gamerhead1/' )
        .load( 'GamerHead.mtl', function ( materials4 ) {
            materials4.preload();

            new THREE.OBJLoader()
                .setMaterials( materials4 )
                .setPath( 'models/obj/gamerhead1/' )
                .load( 'GamerHead.obj', function ( object4 ) {
                    object4.position.y = -45;
                    object4.position.x = 180;
                    object4.position.z = -60;
                    object4.rotation.x = 0.2;
                    scene.add( object4 );
                    gamer2 = object4;
                }, onProgress, onError );
        } );
    //

    renderer = new THREE.WebGLRenderer();
    renderer.setPixelRatio( window.devicePixelRatio );
    renderer.setSize( window.innerWidth, window.innerHeight );
    container.appendChild( renderer.domElement );

    renderer.shadowMap.enabled = true;
    document.addEventListener( 'mousemove', onDocumentMouseMove, false );
    //
    window.addEventListener( 'resize', onWindowResize, false );
}


function onWindowResize() {
    windowHalfX = window.innerWidth / 2;
    windowHalfY = window.innerHeight / 2;
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight );
}
function onDocumentMouseMove( event ) {
    mouseX = ( event.clientX - windowHalfX ) / 2;
    mouseY = ( event.clientY - windowHalfY ) / 2;

}
//
function animate() {
    requestAnimationFrame( animate );
    render();

    //objects rotating to mousex and mousey
    soldier1.rotation.y = (-mouseX/900)*soldier1.position.y*0.028;
    gamer1.rotation.y = (-mouseX/900)*gamer1.position.y*0.025;
    soldier2.rotation.y = (-mouseX/900)*soldier2.position.y*0.025;
    gamer2.rotation.y = (mouseX/-900)*gamer2.position.y*0.035+100;

    soldier1.rotation.x = (-mouseY/900)*soldier1.position.y*0.03+100;
    gamer1.rotation.x = (-mouseY/900)*gamer1.position.y*0.015-50;
    soldier2.rotation.x = (-mouseY/900)*soldier2.position.y*0.03+100;
    gamer2.rotation.x = (-mouseY/900)*gamer2.position.y*0.015-50;

}
function render() {
    //camera.position.x = 0;
    //camera.position.y = 0;
    camera.lookAt( scene.position );
    renderer.render( scene, camera );
}
