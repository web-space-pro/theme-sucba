try {
    window.jQuery = window.$ = require('jquery');
    //require("lazysizes/lazysizes.min");
    require("./modules/menu");
    require("./modules/video");
    require("./modules/swiper");

}
catch (e) {
    console.log('JS ERROR!!!', e);
}