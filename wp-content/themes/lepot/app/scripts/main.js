jQuery(document).ready(function($) {
  // isMobile
  var isMobile = {
    Android: function() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
      return (
        isMobile.Android() ||
        isMobile.BlackBerry() ||
        isMobile.iOS() ||
        isMobile.Opera() ||
        isMobile.Windows()
      );
    }
  };

  // menu
  $(function() {
    $(".btnav").click(function() {
      $(".nav").fadeToggle();
    });
    if (isMobile.any()) {
      $(".nav a").click(function() {
        $(".nav").fadeOut(300);
      });
    }
  });

  // wow
  wow = new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 10,
    mobile: true,
    live: true
  });
  wow.init();
});
