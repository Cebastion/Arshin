ymaps.ready(init);

function init() {
  var map1 = new ymaps.Map("map1", {
    center: [55.75588, 37.6173],
    zoom: 10
  });

  var myPlacemark = new ymaps.Placemark([55.75588, 37.6173], {
    hintContent: 'Москва!',
    balloonContent: 'Столица России'
  }, {
    iconLayout: 'default#image',
    iconImageHref: './image/svg/point.svg',
    iconImageSize: [50, 50], // Adjust the size based on your SVG
    iconImageOffset: [-25, -50]
  });

  map1.geoObjects.add(myPlacemark);
}
