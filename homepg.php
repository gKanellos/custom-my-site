<?php /* Template Name: homepage1 */ ?>
 
<?php get_header(); ?>
 <div class="container">
 <div class="elementor-element elementor-element-4b62a5e elementor-widget elementor-widget-rhye-widget-content-block" data-id="4b62a5e" data-element_type="widget" data-widget_type="rhye-widget-content-block.default">
				<div class="elementor-widget-container">
			
		<div class="section section-content clearfix  " data-arts-os-animation="animated">
						<div class="section-content__inner">
									<div class="section-content__wrapper-heading">
																			<div class="section-content__heading split-text" data-split-text-type="lines,words" data-split-text-set="words"><h2 style=""><div class="split-text__line overflow" style="display: block; text-align: left; position: relative; opacity: 1; visibility: inherit; transform: translate(0%, 0%);"><span style="color: #e5e8ea;"><div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">I’m</div> <span style="color: #f31c29;"><div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">abrielle</div> <div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">Kanellos</div></span><div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">,</div> <div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">a</div> <div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">designer</div> <div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">and</div> <div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">front-end</div> <div style="position: relative; display: inline-block; transform: translate(0px, 0%);" class="split-text__word">developer.</div></span></div></h2></div>
											</div>
															</div>
														</div>

				</div>
				</div>
</div>
<canvas class="webgl"></canvas>
<section><section>
<style>*
{
    margin: 0;
    padding: 0;
}

html,
body
{
    height: 100vh;
    font-family: 'Poppins';
   background: rgb(24,24,24);
  
}

body {
  overflow-x: hidden;
}

.webgl
{
    position: absolute;
    top: 0;
    left: 0;
    outline: none;
  mix-blend-mode: exclusion;
}

.container {
  height:100vh;
  display:grid;
  place-items:center;
}

h1 {
  font-size: 8rem;
  text-transform: uppercase;
  color:white;
}

section{
  height:100vh;
  background:white;
}</style>

<script>
	//Loading
const textureLoader = new THREE.TextureLoader()
const normalTexture = textureLoader.load('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxZE_9Bv7dRgNFbh8UodSl2r5HfxmalpVEeQ&usqp=CAU')
// Canvas
const canvas = document.querySelector('canvas.webgl')

// Scene
const scene = new THREE.Scene()

// Objects
const geometry = new THREE.SphereBufferGeometry(.6, 64, 64);

// Materials

const material = new THREE.MeshStandardMaterial()
material.metalness = 0.7
material.roughness = 0.2, 
material.normalMap = normalTexture;
material.color = new THREE.Color(0x292929)


// Mesh
const sphere = new THREE.Mesh(geometry,material)
scene.add(sphere)

// Lights

const pointLight = new THREE.PointLight(0xffffff, 0.1)
pointLight.position.x = 2
pointLight.position.y = 3
pointLight.position.z = 4
scene.add(pointLight)

const pointLight2 = new THREE.PointLight(0xff0000, 0.2)
//pointLight.position.x = 2
//pointLight.position.y = 3
//pointLight.position.z = 4
pointLight2.position.set(-1.86,1,-1.65)
pointLight2.intensity = 10
scene.add(pointLight2)


const pointLight3 = new THREE.PointLight(0x03c6fc, 2)
//pointLight.position.x = 2
//pointLight.position.y = 3
//pointLight.position.z = 4
pointLight3.position.set(2.14,-3,-1.98)
pointLight3.intensity = 6.8
scene.add(pointLight3)


/**
 * Sizes
 */
const sizes = {
    width: window.innerWidth,
    height: window.innerHeight
}

window.addEventListener('resize', () =>
{
    // Update sizes
    sizes.width = window.innerWidth
    sizes.height = window.innerHeight

    // Update camera
    camera.aspect = sizes.width / sizes.height
    camera.updateProjectionMatrix()

    // Update renderer
    renderer.setSize(sizes.width, sizes.height)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
})

/**
 * Camera
 */
// Base camera
const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
camera.position.x = 0
camera.position.y = 0
camera.position.z = 2
scene.add(camera)

// Controls
// const controls = new OrbitControls(camera, canvas)
// controls.enableDamping = true

/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer({
    canvas: canvas,
  //makes background transparent so can set it in CSS
    alpha: true
})
renderer.setSize(sizes.width, sizes.height)
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))

/**
 * Animate
 */

document.addEventListener('mousemove', onDocumentMouseMove)
let mouseX = 0;
let mouseY = 0;

let targetX = 0;
let targetY = 0;

const windowHalfX = window.innerWidth / 2;
const windowHalfY = window.innerHeight / 2;

function onDocumentMouseMove(event) {
  mouseX = (event.clientX -  windowHalfX)
  mouseY = (event.clientY -  windowHalfY)
}


const updateSphere = (event) => {
  sphere.position.y = window.scrollY * .001
}
window.addEventListener('scroll', updateSphere);


const clock = new THREE.Clock()

const tick = () =>
{

    targetX = mouseX * .001
    targetY = mouseY * .001

    const elapsedTime = clock.getElapsedTime()

    // Update objects
    sphere.rotation.y = .5 * elapsedTime
  
    sphere.rotation.y += .5 * (targetX - sphere.rotation.y)
    sphere.rotation.x += .05 * (targetY - sphere.rotation.x)
     sphere.position.z += .05 * (targetY - sphere.rotation.x)
    // Update Orbital Controls
    // controls.update()

    // Render
    renderer.render(scene, camera)

    // Call tick again on the next frame
    window.requestAnimationFrame(tick)
}

tick()
	</script>

<?php get_footer(); ?>
