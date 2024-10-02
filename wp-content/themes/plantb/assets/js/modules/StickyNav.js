import $ from 'jquery';
import waypoints from '../../../node_modules/waypoints/lib/jquery.waypoints';

class StickyNav {
  constructor() {
    this.mainNav = $('.navigation');
    this.triggerFlowNav = $('.header');
    this.triggerStickNav = $('.header + *:first-of-type + *'); // any next .header second sibling
    this.events();
  }

  events() {
    $(window).on('load', this.toggleSticky.bind(this));
  }

  toggleSticky() {
    let $_self = this;
    $_self.triggerStickNav = ($('.header + *:first-of-type').length) ? $('.header + *:first-of-type + *') : $('.header + *:nth-of-type(2) + *');

    if($_self.triggerStickNav.length) {
      new Waypoint({
        element: this.triggerStickNav,
        handler: function() {
          $_self.mainNav.addClass('sticky-nav');
        },
        offset: '75%'
      });
      
      new Waypoint({
        element: this.triggerFlowNav,
        handler: function() {
          $_self.mainNav.removeClass('sticky-nav');
        },
        offset: '-2rem'
      });
    }
    
  }
}

export default StickyNav;
