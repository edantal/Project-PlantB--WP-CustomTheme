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
    this.menu.slideToggle(200);
    if(this.mobileMenu.hasClass('active')) {
      this.mobileMenu.removeClass('active');
    }
    else {
      this.mobileMenu.addClass('active');
    }
  }
}

export default MobileMenu;
