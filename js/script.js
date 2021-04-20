$('.q__text').on('click', function(){
  $(this).toggleClass('active');
  $(this).next().slideToggle();
  if($(this).hasClass('active')) {
    $(this).children('.qa__flag').html('-')
  } else {
    $(this).children('.qa__flag').html('+')
  }
});