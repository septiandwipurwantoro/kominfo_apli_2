$(document).ready(function () {
  const dropContainer = $("#dropimg-file");

  dropContainer.on("change", function () {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (event) {
        const imageUrl = event.target.result;
        const image = $("<img>", {
          src: imageUrl,
          class: "object-cover h-full bg-gray-50",
        });
        $(".image-container").html(image);
      };
      reader.readAsDataURL(file);
      $(".label-img").addClass("hidden"); // Hide upload label
      $("#trush-img").removeClass("hidden"); // Show delete icon
    }
  });

  $(".drop-container").on("dragover", function (e) {
    e.preventDefault(); // Prevent default behavior
    $(this).addClass("border-blue-500"); // Add border color to indicate drop area
  });

  // Dragleave event listener
  $(".drop-container").on("dragleave", function () {
    $(this).removeClass("border-blue-500"); // Remove border color
  });

  // Drop event listener
  $(".drop-container").on("drop", function (e) {
    e.preventDefault(); // Prevent default behavior

    const file = e.originalEvent.dataTransfer.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (event) {
        const imageUrl = event.target.result;
        const image = $("<img>", {
          src: imageUrl,
          class: "object-cover h-full bg-gray-50",
        });
        $(".image-container").html(image); // Replace previous image with new one
      };
      reader.readAsDataURL(file);
      $(".label-img").addClass("hidden"); // Hide upload label
      $("#trush-img").removeClass("hidden"); // Show delete icon
    }

    $(this).removeClass("border-blue-500"); // Remove border color after drop
  });

  // Delete image event
  $("#trush-img").click(function () {
    $(".image-container").html(""); // Remove image from container
    $(".label-img").removeClass("hidden"); // Show upload label
    $(this).addClass("hidden"); // Hide delete icon
  });
});

$("#trush-img").on("click", () => {
  $(".label-img").toggleClass("hidden");
  $(".image-container").html("");
  $("#trush-img").toggleClass("hidden");
});

$("#sumber").select2({
  language: {
    noResults: function () {
      return "Sumber Tidak Di Temukan";
    },
  },
});
