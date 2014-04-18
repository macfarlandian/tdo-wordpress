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

  var to = false;

  $('#chaptersearch').keyup(function () {
    if(to) { clearTimeout(to); }
    to = setTimeout(function () {
      var v = $('#chaptersearch').val();
      $('#chapters').jstree(true).search(v);
    }, 250);
  });
});
