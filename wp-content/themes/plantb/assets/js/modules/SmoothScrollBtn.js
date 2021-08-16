import $ from 'jquery';

class SmoothScrollBtn {
  constructor() {
    this.anchorBtn = $('a[href*=\\#]:not([href=\\#])');
    this.events();
  }

  events() {
    this.anchorBtn.on('click', this.smoothScroll.bind(this));
  }

  smoothScroll(e) {
    e.preventDefault();
    let href = $(e.target).attr('href');

    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 1500);
  }
}

export default SmoothScrollBtn;
