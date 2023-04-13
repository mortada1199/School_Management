/******/ (() => { // webpackBootstrap
  var __webpack_exports__ = {};
  // var list = document.getElementById("list").value;
  // list = JSON.parse(list);
  //
  // let data1=list['A+'];
  // let data2=list['B+'];
  // let data3=list['AB+'];
  // let data4=list['O+'];
  // let data5=list['A-'];
  // let data6=list['B-'];
  // let data7=list['AB-'];
  // let data8=list['O-'];


  /*!**********************************************!*\
    !*** ./resources/js/pages/dashboard.init.js ***!
    \**********************************************/
  /*
  Template Name: Minible - Admin & Dashboard Template
  Author: Themesbrand
  Website: https://themesbrand.com/
  Contact: support@themesbrand.com
  File: Dashboard
  */
  //
  // Total Revenue Chart
  //
  var options1 = {
    series: [{
      data: [25, 66, 41, 89, 63, 25, 44, 20, 36, 40, 54]
    }],
    fill: {
      colors: ['#5b73e8']
    },
    chart: {
      type: 'bar',
      width: 70,
      height: 40,
      sparkline: {
        enabled: true
      }
    },
    plotOptions: {
      bar: {
        columnWidth: '50%'
      }
    },
    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    xaxis: {
      crosshairs: {
        width: 1
      }
    },
    tooltip: {
      fixed: {
        enabled: false
      },
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function formatter(seriesName) {
            return '';
          }
        }
      },
      marker: {
        show: false
      }
    }
  };
  var chart1 = new ApexCharts(document.querySelector("#total-revenue-chart"), options1);
  chart1.render(); //
  // Orders Chart
  //

  var options = {
    fill: {
      colors: ['#34c38f']
    },
    series: [70],
    chart: {
      type: 'radialBar',
      width: 45,
      height: 45,
      sparkline: {
        enabled: true
      }
    },
    dataLabels: {
      enabled: false
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 0,
          size: '60%'
        },
        track: {
          margin: 0
        },
        dataLabels: {
          show: false
        }
      }
    }
  };
  var chart = new ApexCharts(document.querySelector("#orders-chart"), options);
  chart.render(); //
  // Customers Chart
  //

  var options = {
    fill: {
      colors: ['#5b73e8']
    },
    series: [55],
    chart: {
      type: 'radialBar',
      width: 45,
      height: 45,
      sparkline: {
        enabled: true
      }
    },
    dataLabels: {
      enabled: false
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 0,
          size: '60%'
        },
        track: {
          margin: 0
        },
        dataLabels: {
          show: false
        }
      }
    }
  };
  var chart = new ApexCharts(document.querySelector("#customers-chart"), options);
  chart.render(); //
  // Growth Chart
  //

  var options2 = {
    series: [{
      data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
    }],
    fill: {
      colors: ['#f1b44c']
    },
    chart: {
      type: 'bar',
      width: 70,
      height: 40,
      sparkline: {
        enabled: true
      }
    },
    plotOptions: {
      bar: {
        columnWidth: '50%'
      }
    },
    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    xaxis: {
      crosshairs: {
        width: 1
      }
    },
    tooltip: {
      fixed: {
        enabled: false
      },
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function formatter(seriesName) {
            return '';
          }
        }
      },
      marker: {
        show: false
      }
    }
  };
  var chart2 = new ApexCharts(document.querySelector("#growth-chart"), options2);
  chart2.render(); //
  // Sales Analytics Chart

  var options = {
    chart: {
      height: 339,
      type: 'line',
      stacked: false,
      toolbar: {
        show: false
      }
    },
    stroke: {
      width: [0, 2, 4],
      curve: 'smooth'
    },
    plotOptions: {
      bar: {
        columnWidth: '30%'
      }
    },
    colors: ['#5b73e8', '#dfe2e6', '#f1b44c', '#4cd9bc', '#dfe2f6', '#f1b4cc', '#dce2f6', '#f4b4cc',],
    series: [{
      name: 'A+',
      type: 'column',
      data: 122
    }, {
      name: 'B+',
      type: 'area',
      data: 123
    }, {
      name: 'AB+',
      type: 'line',
      data: 1234
    }, {
      name: 'O+',
      type: 'column',
      data: 123
    }, {
      name: 'A-',
      type: 'column',
      data: 1234
    }, {
      name: 'B-',
      type: 'area',
      data: 1322
    }, {
      name: 'AB-',
      type: 'line',
      data: 1212
    }, {
      name: 'O-',
      type: 'column',
      data: 222
    },],
    fill: {
      opacity: [0.85, 0.25, 1],
      gradient: {
        inverseColors: false,
        shade: 'light',
        type: "vertical",
        opacityFrom: 0.85,
        opacityTo: 0.55,
        stops: [0, 100, 100, 100]
      }
    },
    labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003', '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'],
    markers: {
      size: 0
    },
    xaxis: {
      type: 'datetime'
    },
    yaxis: {
      title: {
        text: 'Points'
      }
    },
    tooltip: {
      shared: true,
      intersect: false,
      y: {
        formatter: function formatter(y) {
          if (typeof y !== "undefined") {
            return y.toFixed(0) + " points";
          }

          return y;
        }
      }
    },
    grid: {
      borderColor: '#f1f1f1'
    }
  };
  var chart = new ApexCharts(document.querySelector("#sales-analytics-chart"), options);
  chart.render();
  /******/
})()
  ;
