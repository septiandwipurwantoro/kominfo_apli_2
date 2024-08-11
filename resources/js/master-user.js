new DataTable("#dataAsset", {
  responsive: true,
  columnDefs: [
    { responsivePriority: 1, targets: 1 }, // Prioritaskan Username
    { responsivePriority: 2, targets: 2 }, // Prioritaskan Nama
    { responsivePriority: 3, targets: 4 }, // Prioritaskan Aksi
    { responsivePriority: 4, targets: 0 }, // Prioritaskan No
    { responsivePriority: 5, targets: 3 }, // Prioritaskan Bidang
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
});

$("#dataAsset tbody").on("click", ".toggleAsset", function (event) {
  event.preventDefault();
  const index = $(".toggleAsset").index(this);
  $(".toggleAsset-view").eq(index).toggleClass("h-0");

  document.querySelectorAll('[id^="openModal-"]').forEach(button => {
    button.addEventListener('click', function() {
        const modalId = button.id.replace('openModal-', 'modal-');
        document.getElementById(modalId).classList.remove('hidden');
    });
  });
  
  document.querySelectorAll('.closeModal').forEach(button => {
    button.addEventListener('click', function() {
        const modal = button.closest('.fixed');
        modal.classList.add('hidden');
    });
  });
});

$(document).on("click", (event) => {
  if (!$(event.target).closest(".toggleAsset").length) {
    $(".toggleAsset-view").addClass("h-0");
  }
});

$(".dt-search input").attr("placeholder", "Cari User");

const classMenu = "#dataAsset_wrapper > div:first-child > div:last-child";
const buttonAdd = "#dataAsset_wrapper > div:first-child > div:first-child";
const url = route('create-user');

$(buttonAdd).append(
  '<button class="border px-5 font-medium py-2 hover:border-indigo-600 bg-indigo-600 hover:bg-transparent hover:text-gray-600 transition-all text-sm text-white border-indigo-500 rounded"><a href="'+ url +'">Tambah User</a></button>'
);

$(".dt-input").attr("autocomplete", "off");
