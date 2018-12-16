// Avoid `console` errors in browsers that lack a console.
(function() {
  var method
  var noop = function() {}
  var methods = [
    "assert",
    "clear",
    "count",
    "debug",
    "dir",
    "dirxml",
    "error",
    "exception",
    "group",
    "groupCollapsed",
    "groupEnd",
    "info",
    "log",
    "markTimeline",
    "profile",
    "profileEnd",
    "table",
    "time",
    "timeEnd",
    "timeline",
    "timelineEnd",
    "timeStamp",
    "trace",
    "warn"
  ]
  var length = methods.length
  var console = (window.console = window.console || {})

  while (length--) {
    method = methods[length]

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop
    }
  }
})()
if (typeof jQuery === "undefined") {
  console.warn("jQuery hasn't loaded")
} else {
  console.log("jQuery " + jQuery.fn.jquery + " has loaded")
}
// Place any jQuery/helper plugins in here.
jQuery(document).ready(function($) {

  SetHeightFullSizeBlocks();

  $('.nine-block-contacts--close').on('click', function(e) {
    $(this).parent().parent().toggleClass('nine-block-contacts_closed');
  })

  $('.six-block--more').on('click', function(e) {
    $('.six-block--full').toggleClass('six-block--full_opened');
  })

  $('.six-block--close').on('click', function(e) {
    $('.six-block--full').toggleClass('six-block--full_opened');
  })

  $('.header--nav').on('click', function(e) {
    if ($(window).width() < 768) {
      $(this).addClass('header--nav-opened');
    }
  })

  $('.header-close').on('click', function(e) {
    e.stopPropagation();
    $('.header--nav').removeClass('header--nav-opened');
  })

});

jQuery(document).resize(function(event) {
  SetHeightFullSizeBlocks();

});

var SetHeightFullSizeBlocks = function(e) {
  var windowHeight = $(window).height();
  $('.full-size-blocks').each(function(index, el) {
    if (index == 0) {
      var h = windowHeight - 166 + 'px';
    } else {
      var h = windowHeight + 'px';
    }
    $(this).css('min-height', h);
  });
}

function initMap() {
  var myLatLng = {
    lat: 53.9259116,
    lng: 27.614886800000022
  };

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'г. Минск, ул. Толбухина 2, Бизнес-центр'
  });
}
