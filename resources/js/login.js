$(".group svg").on("click", function () {
  $("#password").attr("type") === "password"
    ? $("#password").attr("type", "text")
    : $("#password").attr("type", "password");
  $("#pw-view").toggleClass("hidden");
  $("#pw-hidden").toggleClass("hidden");
});