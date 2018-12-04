// mobile icons carousel

function moveToSelected(element) {

  if (element == "next") {
    var selected = $(".selected").next();
  } else if (element == "prev") {
    var selected = $(".selected").prev();
  } else {
    var selected = element;
  }

  var next = $(selected).next();
  var prev = $(selected).prev();
  var prevSecond = $(prev).prev();
  var nextSecond = $(next).next();

  $(selected).removeClass().addClass("selected").trigger("navDotSet");

  $(prev).removeClass().addClass("prev").trigger("navDotSet");
  $(next).removeClass().addClass("next").trigger("navDotSet");

  $(nextSecond).removeClass().addClass("nextRightSecond").trigger("navDotSet");
  $(prevSecond).removeClass().addClass("prevLeftSecond").trigger("navDotSet");

  $(nextSecond).nextAll().removeClass().addClass('hideRight').trigger("navDotSet");
  $(prevSecond).prevAll().removeClass().addClass('hideLeft').trigger("navDotSet");

}

// Eventos teclado
// $(document).keydown(function(e) {
//     switch(e.which) {
//         case 37: // left
//         moveToSelected('prev');
//         break;
//
//         case 39: // right
//         moveToSelected('next');
//         break;
//
//         default: return;
//     }
//     e.preventDefault();
// });

$('#iconsCarousel div').click(function() {
  moveToSelected($(this)).trigger("navDotSet");
});

// $('#prev').click(function() {
//   moveToSelected('prev').trigger("navDotSet");
// });
//
// $('#next').click(function() {
//   moveToSelected('next').trigger("navDotSet");
// });



// $('.selected')(function() {
//   $(".inner-circle-1").css('background', '#ffa800');
// });
//
//
// $( ".icon-1" ).hasClass("selected", function() {
//   $(".inner-circle-1").css('background', '#ffa800');
// });
//
// if ($('.icon-1').hasClass('selected')) {
//   $('.inner-circle-1').css('background', '#ffa800');
// }
//
//
// if ($( '.icon-1' ).parent().hasClass('.selected')) {
//   $('.inner-circle-1').css('background', '#ffa800');
//   // $('body').css('background', '#ffa800');
// }

// if ($('.selected').children('.icon-1')) {
//   $('.inner-circle-1').css('background', '#ffa800');
//   $('.inner-circle-2').css('background', 'transparent');
//   $('.inner-circle-3').css('background', 'transparent');
//   $('.inner-circle-4').css('background', 'transparent');
//   $('.inner-circle-5').css('background', 'transparent');
//   $('.inner-circle-6').css('background', 'transparent');
// }

if ($( '.icon-4' ).parent().hasClass('selected')) {
  $('.inner-circle-4').css('background', '#ffa800');
  $('.inner-circle-2').css('background', 'transparent');
  $('.inner-circle-3').css('background', 'transparent');
  $('.inner-circle-1').css('background', 'transparent');
  $('.inner-circle-5').css('background', 'transparent');
  $('.inner-circle-6').css('background', 'transparent');
}


$('.icons-carousel').on('navDotSet', function () {

if ($( '.icon-1' ).parent().hasClass('selected')) {
  $('.inner-circle-1').css('background', '#ffa800');
  $('.inner-circle-2').css('background', 'transparent');
  $('.inner-circle-3').css('background', 'transparent');
  $('.inner-circle-4').css('background', 'transparent');
  $('.inner-circle-5').css('background', 'transparent');
  $('.inner-circle-6').css('background', 'transparent');
}

if ($( '.icon-2' ).parent().hasClass('selected')){
  $('.inner-circle-2').css('background', '#ffa800');
  $('.inner-circle-1').css('background', 'transparent');
  $('.inner-circle-3').css('background', 'transparent');
  $('.inner-circle-4').css('background', 'transparent');
  $('.inner-circle-5').css('background', 'transparent');
  $('.inner-circle-6').css('background', 'transparent');
}

if ($( '.icon-3' ).parent().hasClass('selected')) {
  $('.inner-circle-3').css('background', '#ffa800');
  $('.inner-circle-2').css('background', 'transparent');
  $('.inner-circle-1').css('background', 'transparent');
  $('.inner-circle-4').css('background', 'transparent');
  $('.inner-circle-5').css('background', 'transparent');
  $('.inner-circle-6').css('background', 'transparent');
}

if ($( '.icon-4' ).parent().hasClass('selected')) {
  $('.inner-circle-4').css('background', '#ffa800');
  $('.inner-circle-2').css('background', 'transparent');
  $('.inner-circle-3').css('background', 'transparent');
  $('.inner-circle-1').css('background', 'transparent');
  $('.inner-circle-5').css('background', 'transparent');
  $('.inner-circle-6').css('background', 'transparent');
}

if ($( '.icon-5' ).parent().hasClass('selected')) {
  $('.inner-circle-5').css('background', '#ffa800');
  $('.inner-circle-2').css('background', 'transparent');
  $('.inner-circle-3').css('background', 'transparent');
  $('.inner-circle-4').css('background', 'transparent');
  $('.inner-circle-1').css('background', 'transparent');
  $('.inner-circle-6').css('background', 'transparent');
}

if ($( '.icon-6' ).parent().hasClass('selected')) {
  $('.inner-circle-6').css('background', '#ffa800');
  $('.inner-circle-2').css('background', 'transparent');
  $('.inner-circle-3').css('background', 'transparent');
  $('.inner-circle-4').css('background', 'transparent');
  $('.inner-circle-5').css('background', 'transparent');
  $('.inner-circle-1').css('background', 'transparent');
}

});
