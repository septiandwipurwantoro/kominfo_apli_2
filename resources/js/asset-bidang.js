new DataTable("#dataAsset", {
  responsive: true,
  columnDefs: [
    { responsivePriority: 1, targets: 0 }, // Kolom No diprioritaskan pertama
    { responsivePriority: 3, targets: 1 }, // Kolom Foto diprioritaskan kedua
    { responsivePriority: 4, targets: 2 }, // Kolom Nama diprioritaskan ketiga
    { responsivePriority: 10000, targets: 3 }, // Kolom Deskripsi diprioritaskan terakhir
    { responsivePriority: 7, targets: 4 }, // Kolom Jumlah diprioritaskan keenam
    { responsivePriority: 2, targets: 5, orderable: false  }, // Kolom Aksi diprioritaskan keenam
  ],
  layout: {
    topCenterEnd: {
      buttons: [
        {
          extend: "collection",
          text: "Export",
          className: "custom-html-collection mt-1",
          buttons: [
            "<b class='ms-2'>Export</b>",
            "pdf",
            "csv",
            "excel",
            '<b class="not-top-heading ms-2">Hilangkan Kolom</b>',
            "columnsToggle",
          ],
        },
      ],
    },
  },
  
  // sellect fitur
  // columns: [
  //   {
  //     data: null,
  //     render: DataTable.render.select(),
  //   },
  //   // { data: "name" },
  //   // { data: "position" },
  //   // { data: "office" },
  //   // { data: "salary" },
  // ],
  // select: {
  //   style: "multi",
  //   selector: "td:first-child",
  //   headerCheckbox: "select-page",
  // },
});

$(".toggleAsset").on("click", () => {
  $(".toggleAsset-view").toggleClass("h-0");
});

$(document).on("click", (event) => {
  if (!$(event.target).closest(".toggleAsset").length) {
    $(".toggleAsset-view").addClass("h-0");
  }
});

$(".dt-search input").attr("placeholder", "Cari Asset");

const classMenu = "#dataAsset_wrapper > div:first-child > div:last-child";
const buttonAdd = "#dataAsset_wrapper > div:first-child > div:first-child";

$(buttonAdd).append(
  '<button class="border px-5 font-medium py-2 hover:border-indigo-600 bg-indigo-600 hover:bg-transparent hover:text-gray-600 transition-all text-sm text-white border-indigo-500 rounded">Sesuaikan</button>'
);

$(".dt-input").attr("autocomplete", "off");

// sellect chekbox
$("#selectAll").on("click", function () {
  $(".rowCheckbox").prop("checked", this.checked);
});
$(".dt-layout-table").addClass("hidden");
