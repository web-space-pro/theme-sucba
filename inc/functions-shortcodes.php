<?php
function add3DMavic(){
    return '
    
    <div>
      <style>
        model-viewer{
          width:100%;
          height: 400px;
        }
      </style>
      <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script>
      <model-viewer src="/wp-content/themes/theme-sucba/3dMavic/dji_fpv_n/scene.gltf" shadow-intensity="1" disable-zoom="" camera-controls="" auto-rotate="" ar-status="not-presenting"></model-viewer>
      <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
      <script nomodule="" src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
   </div>
    
    ';
}

add_shortcode('mavic', 'add3DMavic');
