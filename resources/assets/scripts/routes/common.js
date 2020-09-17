import AOS from 'aos';
import mixitup from 'mixitup';

export default {
  init() {
    // JavaScript to be fired on all pages

    var num = 160

    $(window).bind('scroll', function () {
      if ($(window).scrollTop() > num) {
        $('#onscroll').addClass('moving')
      } else {
        $('#onscroll').removeClass('moving')
      }
    });

    AOS.init({
      disable: 'mobile',
      once: true,
    });

    var mixer = mixitup('.mixcontainer')
    mixer()
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
