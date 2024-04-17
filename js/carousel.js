$(document).ready(function () {
  // product name
  var maxLength = 23;
  $(".product-name").each(function () {
    var text = $(this).text();

    if (text.length > maxLength) {
      text = text.substring(0, maxLength) + "...";
    }
    $(this).text(text);
  });

  // users review
  var maxLengthReview = 170;
  $(".user-review").each(function () {
    var reviewText = $(this).find("p").text();
    if (reviewText.length > maxLengthReview) {
      reviewText = reviewText.substring(0, maxLengthReview) + "...";
      $(this).find("a").removeClass("hidden");
    }
    $(this).find("p").text(reviewText);
  });

  var currentIndex = 0;
  var totalItems = $(".item").length;

  function showItems() {
    $("#carousel").css(
      "transform",
      "translateX(-" + currentIndex * (100 / 3) + "%)"
    );

    $("#carousel-preview").empty();
    for (var i = currentIndex; i < currentIndex + 3; i++) {
      var itemIndex = i % totalItems;
      var previewItem = $(
        "<div class='preview-item'>" + (itemIndex + 1) + "</div>"
      );
      if (i === currentIndex) {
        previewItem.addClass("active"); // Add active class to the current item in preview
      }
      $("#carousel-preview").append(previewItem);
    }
  }

  function updatePreviewActive() {
    $(".preview-item").removeClass("active");
    $(".preview-item")
      .eq(currentIndex % totalItems)
      .addClass("active");
  }

  $(".item").click(function () {
    clearInterval(timer);
    timer = setInterval(function () {
      currentIndex = (currentIndex + 1) % totalItems;
      showItems();
      updatePreviewActive();
    }, 3000);
  });

  timer = setInterval(function () {
    currentIndex = (currentIndex + 1) % totalItems;
    showItems();
    updatePreviewActive();
  }, 3000);

  $(".preview-item").on("click", function () {
    currentIndex = $(this).index();
    showItems();
    updatePreviewActive();
  });

  showItems();
  updatePreviewActive();
});
