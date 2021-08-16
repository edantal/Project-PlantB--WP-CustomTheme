import $ from 'jquery';
import Chart from 'chart.js/auto';

class PieChart {
  constructor(elemName, percent) {
    this.ctx;
    this.inView = false;
    this.$_ctx = $(`#${elemName}`);
    this.percent = percent;
    this.remainder = 100 - percent;

    this.ctxObj = {
      type: 'doughnut',
      data: {
        datasets: [{
          data: [this.percent, this.remainder],
          backgroundColor: ['#fec844', '#eef2f4'],
          borderWidth: 0
        }]
      },
      
      options: {
        animation: {
          duration: 3000,
          easing: 'easeOutQuart',
        },
        rotation: 0, 
        cutout: '70%',
        plugins: {
          tooltip: {
            enabled: false
          },
        },
      },
      plugins: [{
        beforeDraw: this.renderPercentage.bind(this),
      }]
    };

    this.events();
    this.newChart();
  }

  events() {
    $(window).on('scroll', this.renderChart.bind(this));
    this.$_ctx.on('click', this.clickChart.bind(this));
  }

  isScrollIntoView(elem) {
    let docViewTop = $(window).scrollTop();
    let docViewBottom = docViewTop + $(window).height();
    let elemTop = elem.offset().top;
    let elemBottom = elemTop + elem.height();
    return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
  }

  renderPercentage() {
    let $_self = this;

    let _type = $_self.ctx.config.type;
    let _width = $_self.ctx.width;
    let _height = $_self.ctx.height;
    let _ctx = $_self.ctx.ctx;
    let _datasets =  $_self.ctx.config.data.datasets[0]; // array of datasets

    // console.log('config', $_self.ctx.config);
    // console.log('ctx', $_self.ctx.ctx);
    // console.log('this', $_self.ctx);

    if(_type == 'doughnut') {
      let percent = Math.round( _datasets.data[0] * 100 / (_datasets.data[0] + _datasets.data[1]) );
      let oldFill = _ctx.fillStyle;
      let fontSize = ((_height - $_self.ctx.chartArea.top) / 90).toFixed(2);

      _ctx.restore();
      _ctx.font = `${fontSize}em \"Lato\", \"Arial\", sans-serif`;

      let txt = `${percent}%`;
      let txtX = Math.round((_width - _ctx.measureText(txt).width) / 2);
      let txtY = (_height + $_self.ctx.chartArea.top) / 2;

      _ctx.fillStyle = _datasets.backgroundColor[0];
      _ctx.fillText(txt, txtX, txtY);
      _ctx.fillStyle = oldFill;
      _ctx.save();
    }
  }

  clickChart() {
    let $_self = this;
    $_self.ctx.destroy();
    $_self.ctx = new Chart($_self.$_ctx, $_self.ctxObj);
  }

  renderChart() {
    let $_self = this;

    if($_self.$_ctx.length) {
      if($_self.isScrollIntoView($_self.$_ctx)) {
        if($_self.inView) return;
        $_self.inView = true;
        $_self.ctx = new Chart($_self.$_ctx, $_self.ctxObj);
      }
      else {
        if($_self.ctx !== undefined) {
          $_self.ctx.destroy();
        }
        $_self.inView = false;
      }
    }
    
  }

  newChart() {
    let $_self = this;
    $_self.ctx = new Chart($_self.$_ctx, $_self.ctxObj);
  }
}

export default PieChart;
