import "../sass/main.scss";
import Preloader from './modules/Preloader';
import StickyNav from './modules/StickyNav';
import SmoothScrollBtn from './modules/SmoothScrollBtn';
import MobileMenu from "./modules/MobileMenu";
import GlideSlider from "./modules/GlideSlider";
import PieChart from "./modules/PieChart";

const preloader = new Preloader();
const stickyNav = new StickyNav();
const smoothScrollBtn = new SmoothScrollBtn();
const mobileMenu = new MobileMenu();
const glideSlider = new GlideSlider();

if(document.querySelector('.chart') !== null) {
  const pieChart1 = new PieChart('chart-1', 5);
  const pieChart2 = new PieChart('chart-2', 10);
  const pieChart3 = new PieChart('chart-3', 40);
}


// import GoogleMap from "./modules/GoogleMap";
// import Search from "./modules/Search";



// const googleMap = new GoogleMap();
// const search = new Search();

if(module.hot) {
  module.hot.accept();
}
