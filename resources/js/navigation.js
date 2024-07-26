$(".dropdown-asset").on("click", function () {
  $(".view-dropdown-asset").toggleClass("hidden");

  if ($("#arrow-svg").hasClass("rotate-90")) {
    $("#arrow-svg").toggleClass("rotate-90 rotate-180");
  } else if ($("#arrow-svg").hasClass("rotate-180")) {
    $("#arrow-svg").toggleClass("rotate-180 rotate-90");
  }
});
$("#aside-toggle").on("click", () => {
  $("#aside-toggle").toggleClass("rotate-180");
  $("#aside-content").toggleClass("w-72");
  $(".brands").toggleClass("hidden");
  $(".icon-list-aside").toggleClass("w-10/12");
  $(".list-aside").toggleClass("hidden-text");

  $(".main-content").toggleClass("xl:w-3/4");
});

$("#menu-toggle").on("click", () => {
  $("#aside-content").toggleClass("-left-full");
});

// $("#close-aside").on("click", () => {
//   $("#aside-content").toggleClass("-left-full");
// });
$("#show-items-profile").on("click", () => {
  $("#items-profile").toggleClass("h-0");
  $("#arrow-profile").toggleClass("rotate-180");
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
  if ($(".waktu-input")) {
    $(".waktu-input").text(dateTimeString);
  }
}

// Update setiap detik
setInterval(updateDateTime, 1000);

// Update sekali segera setelah halaman dimuat
updateDateTime();
