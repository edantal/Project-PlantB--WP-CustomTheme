import Glide from "@glidejs/glide"

class GlideSlider {
  constructor() {
    this.createGlider();
  }

  createGlider() {
    if(document.querySelector(".glide__slider")) {
      const dotCount = document.querySelectorAll(".glide__slider__slide").length;
      let dotHTML = "";
      for (var i = 0; i < dotCount; i++) {
        dotHTML += `<button class="glide__bullet" data-glide-dir="=${i}"></button>`;
      }
      document.querySelector(".glide__bullets").insertAdjacentHTML("beforeend", dotHTML);
    
      var glide = new Glide(".glide__slider", {
        type: "carousel",
        perView: 1,
        gap: 0,
        autoplay: 6666
      });
    
      glide.mount();
    }
  }
}

export default GlideSlider;