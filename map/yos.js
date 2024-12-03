function ready() {

ymaps.ready(init);

function init() {


    var myMap = new ymaps.Map("map", {
      center: [45.047520, 35.370077],
      zoom: 16
  }, {
      searchControlProvider: 'yandex#search'
  }),
  myPlacemark = new ymaps.Placemark([45.047520, 35.370077], {
      // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
      balloonContentHeader: "СУЦБА — Образовательная организация",
      hintContent: "СУЦБА — Образовательная организация",
     
      balloonContentBody: [
        '<address>',
        'Адрес:  ул. Гарнаева, д. 52',
'</address>'
    ].join('')
  }, {
    // Опции
    iconLayout: 'default#imageWithContent',
    // Своё изображение иконки метки.
    iconImageHref: 'http://live-sucba.test/wp-content/themes/theme-sucba/map/marker.png',
    // Размеры метки.
    iconImageSize: [72, 72],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [-30, -80],
    iconCaption: "Диаграмма"
  }
  );

myMap.geoObjects.add(myPlacemark);

    if (jQuery(window).width() < 960) {
      myMap.behaviors.disable('drag');
  }
  else{
    myMap.behaviors.disable('scrollZoom');
  }


}
   
  }
  document.addEventListener("DOMContentLoaded", ready);