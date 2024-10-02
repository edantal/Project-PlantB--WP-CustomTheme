import $ from 'jquery';

class MobileMenu {
  constructor() {
    this.menu = $('.main-nav-toggle');
    this.mobileMenu = $('.mobile-nav');
    this.mobileIcon = $('.mobile-nav i');
    this.events();
  }

  events() {
    this.mobileMenu.on('click', this.openMenu.bind(this));
  }

  openMenu() {
    let $_self = this;

    $_self.menu.slideToggle(200);
    if($_self.mobileMenu.hasClass('active')) {
      $_self.mobileMenu.removeClass('active');
    }
    else {
      $_self.mobileMenu.addClass('active');
    }
  }
}

export default MobileMenu;
