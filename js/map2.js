document.addEventListener("DOMContentLoaded", function() {
  ymaps.ready(init);

  function init() {
    var map2 = new ymaps.Map("map2", {
      center: [55.776001, 37.585188],
      zoom: 15
    });

    var myPlacemark = new ymaps.Placemark([55.776001, 37.585188], {
      hintContent: 'Москва!',
      balloonContent: 'Столица России'
    }, {
      iconLayout: 'default#image',
      iconImageHref: './image/svg/point.svg',
      iconImageSize: [50, 50], // Adjust the size based on your SVG
      iconImageOffset: [-25, -50]
    });

    map2.geoObjects.add(myPlacemark);
  }
});
