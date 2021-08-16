import $ from 'jquery';

class Preloader {
  constructor() {
    this.preloader = $('.preloader');
    this.siblings = $('.preloader ~ *');
    this.events();
  }

  events() {
    this.siblings.addClass('loading');
    $(window).on('load', this.removePreloader.bind(this));
  }

  removePreloader() {
    this.siblings.removeClass('loading');
    this.preloader.fadeOut(2000);
  }
}

export default Preloader;
