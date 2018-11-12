var $grid = $('.grid').masonry({
  columnWidth: 10,
  itemSelector: '.grid-item'
});

$(function() {
  var elems = [ getItemElement() ];
  // make jQuery object
  var $elems = $( elems );
  $grid.prepend( $elems ).masonry( 'prepended', $elems );
});

// create <div class="grid-item"></div>
function getItemElement() {
  var elem = document.createElement('div');



  elem.className = 'grid-item ';
  return elem;
}
