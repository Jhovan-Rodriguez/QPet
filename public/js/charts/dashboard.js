(function (jQuery) {
  "use strict";
if (jQuery('#myChart').length) {
  const options = {
    series: [55, 75],
    chart: {
    height: 230,
    type: 'radialBar',
  },
  colors: ["#4bc7d2", "#3a57e8"],
  plotOptions: {
    radialBar: {
      hollow: {
          margin: 10,
          size: "50%",
      },
      track: {
          margin: 10,
          strokeWidth: '50%',
      },
      dataLabels: {
          show: false,
      }
    }
  },
  labels: ['Apples', 'Oranges'],
  };
  if(ApexCharts !== undefined) {
    var chart = new ApexCharts(document.querySelector("#myChart"), options);
    chart.render();
  }
}
if (jQuery('#d-activity').length) {
    const options = {
      series: [{
        name: 'Successful deals',
        data: [30, 80, 40, 50, 30, 70, 50, 40, 75, 30,]
      }],
      chart: {
        type: 'bar',
        height: 90,
        toolbar: {
            show:false
          },
          sparkline: {
            enabled: true,
        }
      },
      colors: [
        function({ value, seriesIndex, w }) {
          if (value < 50) {
            return '#f5b9c9'
          } else {
            return '#4A3144'
          }
        }
      ],
      plotOptions: {
        bar: {
          columnWidth: '48%',
          borderRadius: 10,
        },
      },
      legend: {
        show: false
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      grid:{
        show: false,
      },
      xaxis: {
        labels: {
          show: false,
          minHeight:20,
          maxHeight:20
        }
      },
      yaxis: {
        show: false,
        title: {
          text: ''
        },
        labels: {
            minWidth: 19,
            maxWidth: 19,
            style: {
              colors: "#8A92A6",
            },
        }
      },
      fill: {
        opacity: 1
      },
      tooltip: {
        enabled: true,
      },
    };
  
    const chart = new ApexCharts(document.querySelector("#d-activity"), options);
    chart.render();
  }

  if (jQuery('#d-activity-1').length) {
    const options = {
      series: [{
        name: 'Successful deals',
        data: [30, 75, 50, 40, 30, 80, 40, 70, 50, 30]
      }],
      chart: {
        type: 'bar',
        height: 90,
        toolbar: {
            show:false
          },
          sparkline: {
            enabled: true,
        }
      },
      colors: [
        function({ value, seriesIndex, w }) {
          if (value < 50) {
            return '#4A3144'
          } else {
            return '#f5b9c9'
          }
        }
      ],
      plotOptions: {
        bar: {
          columnWidth: '48%',
          borderRadius: 10,
        },
      },
      legend: {
        show: false
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      grid:{
        show: false,
      },
      xaxis: {
        labels: {
          show: false,
          minHeight:20,
          maxHeight:20
        }
      },
      yaxis: {
        show: false,
        title: {
          text: ''
        },
        labels: {
            minWidth: 19,
            maxWidth: 19,
            style: {
              colors: "#8A92A6",
            },
        }
      },
      fill: {
        opacity: 1
      },
      tooltip: {
        enabled: false,
      }
    };
  
    const chart = new ApexCharts(document.querySelector("#d-activity-1"), options);
    chart.render();
  }


if (jQuery('#d-main').length) {
  const options = {
      series: [{
          name: 'total',
          data: [58, 80, 85, 80, 70, 75, 85, 80, 79, 90, 89, 75]
      }, {
          name: 'pipline',
          data: [65, 63, 68, 71, 73, 76, 65, 62, 70, 69, 67, 60]
      }],
      chart: {
          fontFamily: '"Inter", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
          height: 245,
          type: 'area',
          toolbar: {
              show: false
          },
          sparkline: {
              enabled: false,
          }
      },
      colors: ["#A06194", "#F2A7BB"],
      dataLabels: {
          enabled: false
      },
      stroke: {
          curve: 'smooth',
          width: 3,
      },
      yaxis: {
        show: true,
        labels: {
          show: true,
          minWidth: 19,
          maxWidth: 19,
          style: {
            colors: "#8A92A6",
          },
          offsetX: -5,
        },
      },
      legend: {
          show: false,
      },
      xaxis: {
          labels: {
              minHeight:22,
              maxHeight:22,
              show: true,
              style: {
                colors: "#8A92A6",
              },
          },
          lines: {
              show: false  //or just here to disable only x axis grids
          },
          categories: ["Jan", "Feb", "Mar", "Apr","May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
      },
      grid: {
          show: false,
      },
      fill: {
          type: 'gradient',
          gradient: {
              shade: 'dark',
              type: "vertical",
              shadeIntensity: 0,
              gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
              inverseColors: true,
              opacityFrom: .4,
              opacityTo: .1,
              stops: [0, 50, 80],
              colors: ["#3a57e8", "#4bc7d2"]
          }
      },
      tooltip: {
        enabled: true,
      },
  };

  var chart = new ApexCharts(document.querySelector("#d-main"), options);
  chart.render();
}
if ($('.d-slider1').length > 0) {
    const options = {
        centeredSlides: true,
        loop: false,
        slidesPerView: 1,
        autoplay:true,
        spaceBetween: 32,
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },  

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'  
        }
    } 
    let swiper = new Swiper('.d-slider1',options);

    document.addEventListener('ChangeMode', (e) => {
      if (e.detail.rtl === 'rtl' || e.detail.rtl === 'ltr') {
        swiper.destroy(true, true)
        setTimeout(() => {
            swiper = new Swiper('.d-slider1',options);
        }, 500);
      }
    })
}

if ($('.d-slider2').length > 0) {
  const options = {
      centeredSlides: false,
      loop: false,
      slidesPerView: 4,
      autoplay:false,
      spaceBetween: 32,
      breakpoints: {
        320: { slidesPerView: 1 },
        550: { slidesPerView: 2 },
        991: { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
        1400: { slidesPerView: 3 },
        1500: { slidesPerView: 3 },
        1920: { slidesPerView: 4 },
        2040: { slidesPerView: 4 },
        2440: { slidesPerView: 4 }
    },
      pagination: {
          el: '.swiper-pagination'
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
      },  

      // And if we need scrollbar
      scrollbar: {
          el: '.swiper-scrollbar'  
      }
  } 
  let swiper = new Swiper('.d-slider2',options);

  document.addEventListener('ChangeMode', (e) => {
    if (e.detail.rtl === 'rtl' || e.detail.rtl === 'ltr') {
      swiper.destroy(true, true)
      setTimeout(() => {
          swiper = new Swiper('.d-slider2',options);
      }, 500);
    }
  })
}

//basic-radialbar-chart
if (jQuery(".custom-radial-chart").length) {
  const charts = document.querySelectorAll('.custom-radial-chart')
  Array.from(charts, (elem) => {
    const options = {
        series: [elem.getAttribute('data-value')],
        chart: {
            height: 250,
            type: 'radialBar',
            toolbar: {
                show: false
            }
        },
        colors: [elem.getAttribute('data-color')],
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '70%',
                    background: '#fff',
                    position: 'front',
                },
                track: {
                    background: '#eee',
                },

                dataLabels: {
                    show: true,
                    name: {
                        offsetY: 20,
                        show: true,
                        color: '#888',
                        fontSize: '16px'
                    },
                    value: {
                        offsetY: -20,
                        formatter: function(val) {
                            if (val <= elem.getAttribute('data-value')) {
                                return elem.getAttribute('data-show-value')
                            }
                            return parseInt(val);
                        },
                        color: '#3D2741',
                        fontSize: '19px',
                        show: true,
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        },
        labels: [elem.getAttribute('data-label')],
    };
    if (typeof ApexCharts !== typeof undefined) {
      var chart = new ApexCharts(document.getElementById(elem.getAttribute('id')), options);
      chart.render();
    }
  })
}

})(jQuery)
