import $ from 'jquery';
import waypoints from '../../../node_modules/waypoints/lib/jquery.waypoints';

class StickyNav {
  constructor() {
    this.mainNav = $('.navigation');
    this.triggerFlowNav = $('.header');
    this.triggerStickNav = $('.header + *'); // any next .header sibling
    this.toggleSticky();
  }

  toggleSticky() {
    let $_self = this;

    new Waypoint({
      element: this.triggerStickNav,
      handler: function() {
        $_self.mainNav.addClass('sticky-nav');
      },
      offset: '25%'
    });
    
    new Waypoint({
      element: this.triggerFlowNav,
      handler: function() {
        $_self.mainNav.removeClass('sticky-nav');
      },
      offset: '-200px'
    });
  }
}

export default StickyNav;
