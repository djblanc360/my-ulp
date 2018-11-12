var $grid = $('.grid').masonry({
  columnWidth: 10,
  itemSelector: '.grid-item'
});

$(function() {
  var elems = [ getItemElement(), getItemElement(), getItemElement() ];
  // make jQuery object
  var $elems = $( elems );
  $grid.prepend( $elems ).masonry( 'prepended', $elems );
});

// create <div class="grid-item"></div>
function getItemElement() {
  var elem = document.createElement('div');
  //var hRand = Math.random();

  //var heightClass = hRand > 0.85 ? 'grid-item--height4' : hRand > 0.6 ? 'grid-item--height3' : hRand > 0.35 ? 'grid-item--height2' : '';
  //elem.className = 'grid-item ' + ' ' + heightClass;
  elem.className = 'grid-item ';
  return elem;
}
