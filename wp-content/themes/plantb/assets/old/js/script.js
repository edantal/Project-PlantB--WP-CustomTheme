$ = jQuery;

$(document).ready(function() {
  $ = jQuery;

  $('#sidebar__collapse').on('click', function() {
    toggleSidebar();
  });
  $('.overlay').on('click', function() {
    toggleSidebar();
  });
});

// dynamic favicon
$(window).focus(function() {
  $("#favicon").attr("href", "/wp-content/themes/plantb/assets/images/favicons/favicon_dark.png");
});
$(window).blur(function() {
  $("#favicon").attr("href", "/wp-content/themes/plantb/assets/images/favicons/favicon_light.png");
});

// add sold stamp to sold assets
$('.card__sold').append("<div class='card-sold'>נמכר</div>");


// sticky navigation
if($('.navbar__sticky')[0]){
  $(window).scroll(function() {
    checkSticky();
  });

  var navbar = $('.navbar__sticky');
  var navnext = navbar.next();
  var sticky = navbar.offset().top - 76;

  function checkSticky() {
    if($(window).scrollTop() >= sticky) {
      navnext.addClass('navnext');
      navbar.addClass('active');
    }
    else {
      navnext.removeClass('navnext');
      navbar.removeClass('active');
    }
  }
}


// toggle sidebar
function toggleSidebar() {
  $('#sidebar').toggleClass('active');
  $('.overlay').toggleClass('active');
  $('#sidebar__collapse').toggleClass('active');

  if($('#gallery-overlay')[0] && $('#gallery-overlay').css('display') == 'flex'){
    $('#gallery-overlay').fadeOut("slow");
  }
  if($('.slider-gallery__overlay')[0] && $('.slider-gallery__overlay').css('display') == 'flex'){
    $('.slider-gallery__overlay').fadeOut("slow");
  }
}


// hash change for anchor menu items
window.addEventListener("hashchange", function(e) {
  e.preventDefault();
  if(location.href.split('?').length == 1) {
    var hashName = e.newURL.split('#').pop().toLowerCase();
    var map = {
      contact: '#contact'
    };
    var distanceFromTop = (hashName == 'home') ? 0 : (($(map[hashName]).offset().top - ($('#wpadminbar') ? $('#wpadminbar').height() : 0)) - $('.navbar.fixed-top').height());
    
    $('html, body').animate({
      scrollTop: distanceFromTop
    }, 666);

    if($('#sidebar').hasClass('active')) {
      toggleSidebar();
    }
    history.pushState("", document.title, window.location.pathname);
  }
}, false);


// whatsapp custom share
var waHeadMsg = 'שלום נדב, ביקרתי באתר שלך ואני פונה אליך בנושא ____ ';
var waContactMsg = 'שלום נדב, ביקרתי באתר שלך ואני פונה אליך בנושא ____ ';
var waPropertyMsg = 'שלום נדב, אני מעוניין לשמוע פרטים על הנכס ';

$('.wa').on('click', function(e) {
  e.preventDefault();
  if($(e.target).hasClass('wa--head')) {
    waShare(e.target.href, waHeadMsg);
  }
  if($(e.target).hasClass('wa--contact')) {
    waShare(e.target.href, waContactMsg);
  }
  if($(e.target).hasClass('wa--property')) {
    waShare(e.target.href, waPropertyMsg, e.target.baseURI);
  }
});

function waShare(href, msg, link) {
	if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    alert('You are not using mobile device. Whatsapp desktop app required');
  }
  link = link || null;
  var whatsapp_message = encodeURIComponent(msg);
  if(link != null) {
    whatsapp_message += " - " + encodeURIComponent('\r\n') + encodeURIComponent(link);
  }
  var whatsapp_url = href + "?text=" + whatsapp_message;
  window.open(whatsapp_url);
}


// acf google maps
(function($) {
  function initMap($el) {
    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
      zoom        : $el.data('zoom') || 16,
      mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map($el[0], mapArgs);

    // Add markers.
    map.markers = [];
    $markers.each(function(){
      initMarker($(this), map);
    });

    // Center map based on markers.
    centerMap(map);

    // Return map instance.
    return map;
  }

  function initMarker($marker, map) {
    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
      lat: parseFloat(lat),
      lng: parseFloat(lng)
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
      position : latLng,
      map: map
    });

    // Append to reference for later use.
    map.markers.push(marker);

    // If marker contains HTML, add it to an infoWindow.
    if($marker.html()){
      // Create info window.
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });

      // Show info window when marker is clicked.
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });
    }
  }

  function centerMap(map) {
    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function(marker){
      bounds.extend({
        lat: marker.position.lat(),
        lng: marker.position.lng()
      });
    });

    // Case: Single marker.
    if(map.markers.length == 1){
      map.setCenter(bounds.getCenter());

    // Case: Multiple markers.
    } else{
      map.fitBounds(bounds);
    }
  }

  // Render maps on page load.
  $(document).ready(function(){
    $('.acf-map').each(function(){
      var map = initMap($(this));
    });
  });
})(jQuery);