var $z = jQuery.noConflict();
$z(document).ready(function(){
  $z("#aumentar-fonte").click(function () {
  var size = $z("#content p").css('font-size');

  size = size.replace('px', '');
  size = parseInt(size) + 2;

  $z("#content p").animate({'font-size' : size + 'px'});
    return false;
  });

  $z("#diminuir-fonte").click(function () {
    var size = $z("#content p").css('font-size');

    size = size.replace('px', '');
    size = parseInt(size) - 2;

    $z("#content p").animate({'font-size' : size + 'px'});
    return false;
  });
});