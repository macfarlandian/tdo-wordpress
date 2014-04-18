// chapter filter
//
// jQuery(document).ready(function($){
//   $('#chaptersearch').fastLiveFilter('#chapterlist');
// })

// collapsible tree
jQuery(document).ready(function($){
  $('#chapters').jstree({
    "plugins": ['search'],
    "search": {
      'show_only_matches': true,
      'fuzzy': false
    },
    'core': {
      "themes": {
        "dots": false,
        "icons": false
      }
    }
  });

  // search function
  var to = false;
  $('#chaptersearch').keyup(function () {
    if(to) { clearTimeout(to); }
    to = setTimeout(function () {
      var v = $('#chaptersearch').val();
      $('#chapters').jstree(true).search(v);
    }, 250);
  });

  // link function
  $('#chapters').on('activate_node.jstree', function(e,t){
    window.location.href = t.node.a_attr.href;
  });

  // active node function
  // get url path, split it, remove empty items from array
  /* var path = window.location.pathname.split('/').filter(function(v,i,a){
    return v != '';
  });
  if (path[path.length - 2] == 'chapters') { // second to last
    var chap = path[path.length - 1].replace(/-/g, '.');
    $('#chapters').jstree(true).search(chap);
  }*/
});
