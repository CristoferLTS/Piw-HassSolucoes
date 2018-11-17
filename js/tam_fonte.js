$(document).ready(function () {
  var section = new Array(/*'span',*/ 'li', 'b', /*'h1',*/ 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'table' );
  section = section.join(',');

  // Reset Font Size
  // var originalFontSize = $(section).css('font-size');
  // $(".resetFont").click(function () {
  //     $(section).css('font-size', originalFontSize);
  // });

  // Increase Font Size
  $("#btnAumentar").click(function () {
      var currentFontSize = $(section).css('font-size');
      var currentFontSizeNum = parseFloat(currentFontSize, 5);
      if (currentFontSizeNum < 24) {
          var newFontSize = currentFontSizeNum * 1.1;
          $(section).css('font-size', newFontSize);
      }
      return false;
  });

  // Decrease Font Size
  $("#btnDiminuir").click(function () {
      var currentFontSize = $(section).css('font-size');
      var currentFontSizeNum = parseFloat(currentFontSize, 5);
      if (currentFontSizeNum > 10) {
          var newFontSize = currentFontSizeNum * 0.9;
          $(section).css('font-size', newFontSize);
      }
      return false;
  });
});