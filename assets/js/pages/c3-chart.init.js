!(function (e) {
  "use strict";
  function a() {}
  (a.prototype.init = function () {
    c3.generate({
      bindto: "#chart",
      data: {
        columns: [
          ["Category", 150, 80, 70, 152, 250, 95],
          ["Scanned_Product", 200, 130, 90, 240, 130, 220],
          ["Exp_date", 12.2023, 12.2023, 12.2023, 12.2023, 12.2023, 12.2023],
        ],
        type: "bar",
        colors: { Category: "#5468da", Scanned_Product: "#fb8c00", Exp_date: "#3bc3e9" },
      },
    }),
      c3.generate({
        bindto: "#chart-stacked",
        data: {
          columns: [
            [
              "Revenue",
              130,
              120,
              150,
              140,
              160,
              150,
              130,
              120,
              150,
              140,
              160,
              150,
            ],
            [
              "Pageview",
              170,
              160,
              190,
              180,
              200,
              190,
              170,
              160,
              190,
              180,
              200,
              190,
            ],
          ],
          types: { Revenue: "area-spline", Pageview: "area-spline" },
          colors: { Revenue: "#f06292", Pageview: "#67a8e4" },
        },
      }),
      c3.generate({
        bindto: "#roated-chart",
        data: {
          columns: [
            ["Revenue", 30, 200, 100, 400, 150, 250],
            ["Pageview", 50, 20, 10, 40, 15, 25],
          ],
          types: { Revenue: "bar" },
          colors: { Revenue: "#90a4ae", Pageview: "#f06292" },
        },
        axis: { rotated: !0, x: { type: "categorized" } },
      }),
      c3.generate({
        bindto: "#combine-chart",
        data: {
          columns: [
            ["SonyVaio", 30, 20, 50, 40, 60, 50],
            ["iMacs", 200, 130, 90, 240, 130, 220],
            ["Tablets", 300, 200, 160, 400, 250, 250],
            ["iPhones", 200, 130, 90, 240, 130, 220],
            ["Macbooks", 130, 120, 150, 140, 160, 150],
          ],
          types: {
            SonyVaio: "bar",
            iMacs: "bar",
            Tablets: "spline",
            iPhones: "line",
            Macbooks: "bar",
          },
          colors: {
            SonyVaio: "#67a8e4",
            iMacs: "#4ac18e",
            Tablets: "#3bc3e9",
            iPhones: "#ffbb44",
            Macbooks: "#ea553d",
          },
          groups: [["SonyVaio", "iMacs"]],
        },
        axis: { x: { type: "categorized" } },
      }),
      c3.generate({
        bindto: "#donut-chart",
        data: {
          columns: [
            ["Desktops", 78],
            ["Smart Phones", 55],
            ["Mobiles", 40],
            ["Tablets", 25],
          ],
          type: "donut",
        },
        donut: { title: "Candidates", width: 30, label: { show: !1 } },
        color: { pattern: ["#f06292", "#6d60b0", "#5468da", "#009688"] },
      }),
      c3.generate({
        bindto: "#pie-chart",
        data: {
          columns: [
            ["Desktops", 78],
            ["Smart Phones", 55],
            ["Mobiles", 40],
            ["Tablets", 25],
          ],
          type: "pie",
        },
        color: { pattern: ["#afb42b", "#fb8c00", "#8d6e63", "#90a4ae"] },
        pie: { label: { show: !1 } },
      });
  }),
    (e.ChartC3 = new a()),
    (e.ChartC3.Constructor = a);
})(window.jQuery),
  (function () {
    "use strict";
    window.jQuery.ChartC3.init();
  })();
