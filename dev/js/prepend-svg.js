// *************************************
//
//   Prepend svg
//   -> Loads the svg icon library
//
// *************************************

$.ajax({
  url: "/wp-content/themes/slate-0.3.1_vanderwoude/ico/sprites.svg",
  method: "GET",
  dataType: "html",
  success: function(data) {
    $("body").prepend(data);
  }
})
