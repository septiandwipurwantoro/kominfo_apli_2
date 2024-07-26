// var fullDates = [
//   {
//     x: new Date(2023, 0, 1),
//     y: 45,
//   }, // 1 Jan 2023
//   { x: new Date(2023, 0, 5), y: 52 }, // 5 Jan 2023
//   { x: new Date(2023, 0, 10), y: 38 }, // 10 Jan 2023
//   { x: new Date(2023, 0, 15), y: 45 }, // 15 Jan 2023
//   { x: new Date(2023, 0, 20), y: 19 }, // 20 Jan 2023
//   { x: new Date(2023, 0, 25), y: 23 }, // 25 Jan 2023
//   { x: new Date(2023, 1, 1), y: 12 }, // 1 Feb 2023
//   { x: new Date(2023, 1, 5), y: 45 }, // 5 Feb 2023
//   { x: new Date(2023, 1, 10), y: 10 }, // 10 Feb 2023
//   { x: new Date(2023, 1, 15), y: 25 }, // 15 Feb 2023
//   { x: new Date(2023, 1, 20), y: 50 }, // 20 Feb 2023
//   { x: new Date(2023, 1, 25), y: 32 }, // 25 Feb 2023
//   { x: new Date(2023, 2, 1), y: 22 }, // 1 Mar 2023
//   { x: new Date(2023, 2, 5), y: 41 }, // 5 Mar 2023
//   { x: new Date(2023, 2, 10), y: 55 }, // 10 Mar 2023
// ];

// var januaryDates = fullDates.filter(function (data) {
//   return data.x.getMonth() === 0; // Filter hanya data bulan Januari
// });

// var options = {
//   series: [
//     {
//       name: "XYZ MOTORS",
//       data: fullDates,
//     },
//   ],
//   chart: {
//     type: "area",
//     stacked: false,
//     height: 350,
//     zoom: {
//       type: "x",
//       enabled: true,
//       autoScaleYaxis: true,
//     },
//     toolbar: {
//       autoSelected: "zoom",
//     },
//   },
//   dataLabels: {
//     enabled: false,
//   },
//   markers: {
//     size: 0,
//   },
// //   title: {
// //     text: "Stock Price Movement",
// //     align: "left",
// //   },
//   fill: {
//     type: "gradient",
//     gradient: {
//       shadeIntensity: 1,
//       inverseColors: false,
//       opacityFrom: 0.5,
//       opacityTo: 1,
//       stops: [0, 90, 100],
//     },
//   },
//   yaxis: {
//     labels: {
//       formatter: function (val) {
//         return val.toFixed(0); // Menampilkan nilai sebenarnya
//       },
//     },
//     // title: {
//     //   text: "Price",
//     // },
//   },
//   xaxis: {
//     type: "datetime",
//   },
//   tooltip: {
//     shared: false,
//     y: {
//       formatter: function (val) {
//         return val.toFixed(0); // Menampilkan nilai sebenarnya
//       },
//     },
//   },
// };

// var chart = new ApexCharts(document.querySelector("#chart"), options);
// chart.render();

// function updateChart() {
//   if (window.innerWidth < 700) {
//     chart.updateSeries([
//       {
//         data: januaryDates,
//       }, 
//     ]);
//   } else {
//     chart.updateSeries([
//       {
//         data: fullDates,
//       },
//     ]);
//   }
// }

// // Initial call
// updateChart();

// // Update chart on window resize
// window.addEventListener("resize", updateChart);

// function updateDateTime() {
//   const now = new Date();

//   // Format tanggal
//   const options = { day: "2-digit", month: "long", year: "numeric" };
//   const formattedDate = now.toLocaleDateString("id-ID", options);

//   // Format waktu
//   const hours = String(now.getHours()).padStart(2, "0");
//   const minutes = String(now.getMinutes()).padStart(2, "0");
//   const seconds = String(now.getSeconds()).padStart(2, "0");
//   const formattedTime = `${hours}:${minutes}:${seconds}`;

//   // Gabungkan tanggal dan waktu
//   const dateTimeString = `${formattedDate}, ${formattedTime}`;

//   // Update elemen HTML
//   $("#date-time").text(dateTimeString);
// }

// // Update setiap detik
// setInterval(updateDateTime, 1000);

// // Update sekali segera setelah halaman dimuat
// updateDateTime();


var url = "/data-record.json";

$.getJSON(url, function (response) {
  // Parse dates into JavaScript Date objects
  response.forEach((item) => {
    item.x = new Date(item.x);
  });

  var januaryDates = response.filter(function (data) {
    return data.x.getMonth() === 0; // Filter hanya data bulan Januari
  });

  var options = {
    series: [
      {
        name: "XYZ MOTORS",
        data: response,
      },
    ],
    chart: {
      type: "area",
      stacked: false,
      height: 350,
      zoom: {
        type: "x",
        enabled: true,
        autoScaleYaxis: true,
      },
      toolbar: {
        autoSelected: "zoom",
      },
    },
    dataLabels: {
      enabled: false,
    },
    markers: {
      size: 0,
    },
    fill: {
      type: "gradient",
      gradient: {
        shadeIntensity: 1,
        inverseColors: false,
        opacityFrom: 0.5,
        opacityTo: 1,
        stops: [0, 90, 100],
      },
    },
    yaxis: {
      labels: {
        formatter: function (val) {
          return val.toFixed(0); // Menampilkan nilai sebenarnya
        },
      },
    },
    xaxis: {
      type: "datetime",
    },
    tooltip: {
      shared: false,
      y: {
        formatter: function (val) {
          return val.toFixed(0); // Menampilkan nilai sebenarnya
        },
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();

  function updateChart() {
    if (window.innerWidth < 700) {
      chart.updateSeries([
        {
          data: januaryDates,
        },
      ]);
    } else {
      chart.updateSeries([
        {
          data: response,
        },
      ]);
    }
  }

  // Initial call
  updateChart();

  // Update chart on window resize
  window.addEventListener("resize", updateChart);
});

function updateDateTime() {
  const now = new Date();

  // Format tanggal
  const options = { day: "2-digit", month: "long", year: "numeric" };
  const formattedDate = now.toLocaleDateString("id-ID", options);

  // Format waktu
  const hours = String(now.getHours()).padStart(2, "0");
  const minutes = String(now.getMinutes()).padStart(2, "0");
  const seconds = String(now.getSeconds()).padStart(2, "0");
  const formattedTime = `${hours}:${minutes}:${seconds}`;

  // Gabungkan tanggal dan waktu
  const dateTimeString = `${formattedDate}, ${formattedTime}`;

  // Update elemen HTML
  $("#date-time").text(dateTimeString);
}

// Update setiap detik
setInterval(updateDateTime, 1000);

// Update sekali segera setelah halaman dimuat
updateDateTime();
