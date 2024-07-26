$("#bidang").select2({
  language: {
    noResults: function () {
      return "bidang Tidak Di Temukan";
    },
  },
});

$(".password svg").on("click", function () {
  $("#password").attr("type") === "password"
    ? $("#password").attr("type", "text")
    : $("#password").attr("type", "password");
  $("#pw-view").toggleClass("hidden");
  $("#pw-hidden").toggleClass("hidden");
});
$(document).on("click", (event) => {
  if (!$(event.target).closest(".toggleAsset").length) {
    $("#password").attr("type", "password");
  }
});
