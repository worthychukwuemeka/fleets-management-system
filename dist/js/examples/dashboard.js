$(function () {
  // Dashboard chart colors
  const body_styles = window.getComputedStyle(document.body);
  const colors = {
    primary: $.trim(body_styles.getPropertyValue("--bs-primary")),
    secondary: $.trim(body_styles.getPropertyValue("--bs-secondary")),
    info: $.trim(body_styles.getPropertyValue("--bs-info")),
    success: $.trim(body_styles.getPropertyValue("--bs-success")),
    danger: $.trim(body_styles.getPropertyValue("--bs-danger")),
    warning: $.trim(body_styles.getPropertyValue("--bs-warning")),
    light: $.trim(body_styles.getPropertyValue("--bs-light")),
    dark: $.trim(body_styles.getPropertyValue("--bs-dark")),
    blue: $.trim(body_styles.getPropertyValue("--bs-blue")),
    indigo: $.trim(body_styles.getPropertyValue("--bs-indigo")),
    purple: $.trim(body_styles.getPropertyValue("--bs-purple")),
    pink: $.trim(body_styles.getPropertyValue("--bs-pink")),
    red: $.trim(body_styles.getPropertyValue("--bs-red")),
    orange: $.trim(body_styles.getPropertyValue("--bs-orange")),
    yellow: $.trim(body_styles.getPropertyValue("--bs-yellow")),
    green: $.trim(body_styles.getPropertyValue("--bs-green")),
    teal: $.trim(body_styles.getPropertyValue("--bs-teal")),
    cyan: $.trim(body_styles.getPropertyValue("--bs-cyan")),
    chartTextColor: $("body").hasClass("dark") ? "#6c6c6c" : "#b8b8b8",
    chartBorderColor: $("body").hasClass("dark") ? "#444444" : "#ededed",
  };

  $(document).on("click", ".select-all", function () {
    const that = $(this),
      target = $(that.data("select-all-target")),
      checkbox = target.find('input[type="checkbox"]');

    if (that.prop("checked")) {
      checkbox.closest("tr").addClass("tr-selected");
      checkbox.prop("checked", true);
    } else {
      checkbox.closest("tr").removeClass("tr-selected");
      checkbox.prop("checked", false);
    }
  });

  $(document).on(
    "click",
    '#recent-products input[type="checkbox"]',
    function () {
      const that = $(this);

      if (that.prop("checked")) {
        that.closest("tr").addClass("tr-selected");
      } else {
        that.closest("tr").removeClass("tr-selected");
      }
    }
  );

  function totalSales() {
    if ($("#total-sales").length) {
      const options = {
        series: [
          {
            data: [25, 66, 41, 89, 63, 30, 50],
          },
        ],
        chart: {
          type: "line",
          width: 100,
          height: 35,
          sparkline: {
            enabled: true,
          },
        },
        theme: {
          mode: $("body").hasClass("dark") ? "dark" : "light",
        },
        colors: [colors.indigo],
        stroke: {
          width: 4,
          curve: "smooth",
        },
        tooltip: {
          fixed: {
            enabled: false,
          },
          x: {
            show: false,
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return "";
              },
            },
          },
          marker: {
            show: false,
          },
        },
      };

      new ApexCharts(document.querySelector("#total-sales"), options).render();
    }
  }

  totalSales();

  function totalOrders() {
    if ($("#total-orders").length) {
      const options = {
        series: [
          {
            data: [25, 66, 41, 89, 63, 30, 50],
          },
        ],
        chart: {
          type: "line",
          width: 100,
          height: 35,
          sparkline: {
            enabled: true,
          },
        },
        theme: {
          mode: $("body").hasClass("dark") ? "dark" : "light",
        },
        colors: [colors.pink],
        stroke: {
          width: 4,
          curve: "smooth",
        },
        tooltip: {
          fixed: {
            enabled: false,
          },
          x: {
            show: false,
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return "";
              },
            },
          },
          marker: {
            show: false,
          },
        },
      };

      new ApexCharts(document.querySelector("#total-orders"), options).render();
    }
  }

  totalOrders();

  function customerRating() {
    if ($("#customer-rating").length) {
      const options = {
        series: [
          {
            name: "Rate",
            data: [25, 66, 41, 89, 63, 25, 44, 12, 36],
          },
        ],
        chart: {
          type: "line",
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          width: 4,
          curve: "smooth",
        },
        theme: {
          mode: $("body").hasClass("dark") ? "dark" : "light",
        },
        colors: [colors.success],
        tooltip: {
          fixed: {
            enabled: false,
          },
          x: {
            show: false,
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return seriesName;
              },
            },
          },
          marker: {
            show: false,
          },
        },
      };

      new ApexCharts(
        document.querySelector("#customer-rating"),
        options
      ).render();
    }
  }

  customerRating();


  function salesChannels() {
    if ($("#vehicle-freq").length) {
      const options = {
        chart: {
          height: 250,
          type: "donut",
          offsetY: 0,
        },
        plotOptions: {
          pie: {
            donut: {
              size: "40%",
            },
          },
        },
        stroke: {
          show: false,
          width: 0,
        },
        colors: [colors.purple, colors.cyan, colors.red],
        series: [48, 30, 22],
        labels: ["Active", "Inactive", "Out of Service"],
        legend: {
          show: false,
        },
      };

      new ApexCharts(
        document.querySelector("#vehicle-freq"),
        options
      ).render();
    }
  }

  salesChannels();


  if ($(".summary-cards").length) {
    $(".summary-cards").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 1500,
      rtl: $("body").hasClass("rtl") ? true : false,
    });
  }
});

function driversChart() {
  var chart = new ApexCharts(el,
    {
      "chart": {
          "animations": {
              "enabled": false
          },
          "dropShadow": {},
          "foreColor": "#333",
          "fontFamily": "Work Sans",
          "height": 290,
          "id": "sFMuA",
          "toolbar": {
              "show": false
          },
          "type": "pie",
          "width": 436,
          "fontUrl": null
      },
      "plotOptions": {
          "bar": {
              "borderRadius": 10
          },
          "radialBar": {
              "hollow": {
                  "background": "#fff"
              },
              "dataLabels": {
                  "name": {},
                  "value": {},
                  "total": {}
              }
          },
          "pie": {
              "donut": {
                  "labels": {
                      "name": {},
                      "value": {},
                      "total": {}
                  }
              }
          }
      },
      "colors": [
          "#00BB90",
          "#470A34"
      ],
      "dataLabels": {
          "style": {
              "fontWeight": 700
          }
      },
      "fill": {
          "opacity": 1
      },
      "grid": {
          "padding": {
              "right": 25,
              "left": 15
          }
      },
      "labels": [
          "Active",
          "Inactive"
      ],
      "legend": {
          "position": "right",
          "horizontalAlign": "right",
          "fontSize": 15,
          "offsetY": 0,
          "itemMargin": {
              "vertical": 0
          }
      },
      "series": [
          15,
          7
      ],
      "tooltip": {
          "fillSeriesColor": true
      },
      "xaxis": {
          "labels": {
              "trim": true,
              "style": {}
          },
          "title": {
              "style": {
                  "fontWeight": 700
              }
          }
      },
      "yaxis": {
          "labels": {
              "style": {}
          },
          "title": {
              "style": {
                  "fontWeight": 700
              }
          }
      },
      "theme": {
          "palette": "palette4"
      }
  }
    );
}

driversChart();