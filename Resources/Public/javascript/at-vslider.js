$(function() {
    AtVslider.init();
});

var AtVslider = (function() {

  // VARIABLES
  var $container = $('#ps-container');
  var $contentwrapper = $('.ps-contentwrapper');
  
  // the description elements for the slides/products
  var $items = $('.ps-content');
  var itemsCount = $items.length;
  var $slidewrapper = $('.ps-slidewrapper');
  
  // the slides (artworks)
  var $slidescontainer = $('.ps-slides');
  var $slides = $slidescontainer.children('div');
  
  // navigation arrows
  var $navprev = $('.ps-prev');
  var $navnext = $('.ps-next');
  
  // current index for items and slides
  var current = 0;

  // SHOWS FIRST ARTIST / ARTWORK
  init = function() {
    var $currentItem = $items.eq(current);
    var $currentSlide = $slides.eq(current);
    var initCSS = {
        top : 0,
        zIndex : 999
    };
    $currentItem.css(initCSS);
    $currentSlide.css(initCSS);
    
    updateNavImages();
    initEvents();
  };

  // UPDATE BACKGROUND IMG OF NAV ARROWS
  updateNavImages = function() {
    var configPrev = (current > 0) ? 
        $slides.eq(current - 1).css('background-image') : 
        $slides.eq( itemsCount - 1 ).css('background-image');
    var configNext = (current < itemsCount - 1) ? 
        $slides.eq(current + 1).css('background-image') : 
        $slides.eq(0).css('background-image');

    $navprev.css('background-image', configPrev);
    $navnext.css('background-image', configNext);
  };

  // INITIALISES CLICK EVENT WHEN PREVIOUS OR NEXT IS CLICKED
  initEvents = function() {
    $navprev.on('click', function() {
      slide('prev');
    });

    $navnext.on('click', function() {
       slide('next');
    }); 
  };

  // SLIDE FUNCTION
  slide = function(direction) {
    
    var $currentItem = $items.eq(current);
    var $currentSlide = $slides.eq(current);

    // update current value
    if(direction === 'next') {
      (current < itemsCount - 1) ? current++ : current = 0;
    }
    else if(direction === 'prev') {
      (current > 0) ? current-- : current = itemsCount - 1;
    }
    var $newItem = $items.eq(current);
    var $newSlide = $slides.eq(current);

    // position the new item above or below the viewport depending on the direction
    $newItem.css({
      top : (direction === 'next') ? '-100%' : '100%',
      zIndex : 999
    });
    
    $newSlide.css({
      top : (direction === 'next') ? '100%' : '-100%',
      zIndex : 999
    });

    // move the current item to above or below the viewport depending on the direction 
    $currentItem.css({
      top : (direction === 'next') ? '100%' : '-100%',
      zIndex : 1
    });

    $currentSlide.css({
      top : (direction === 'next') ? '-100%' : '100%',
      zIndex : 1
    });

    // move the new items to the main viewport
    $newItem.animate({ 'top': 0 });
    $newSlide.animate({ 'top': 0 });

    // update nav images
    updateNavImages();

  };
  return { init : init };

})();