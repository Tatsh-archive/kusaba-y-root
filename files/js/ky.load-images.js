$(function () {
  var $images = $('li [data-image-id]');
  var notFoundSrc = '/files/images/not-found.png';
  
  $images.appear(function () {
    var $this = $(this);
    var src = $this.attr('data-src');
    
    $this.attr('src', src);
  });

  $images.on('error', function () {
    var $this = $(this);
    $this.attr('width', 250);
    $this.attr('height', 250);
    $this.attr('src', notFoundSrc);
  });
});
