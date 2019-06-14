function animate(element,animation_name) {
  if ( $(element).hasClass(animation_name) ) {
    $(element).removeClass(animation_name);
  }
  else { $(element).addClass(animation_name); }
}
function sleep(time)
{
  return new Promise((resolve) => setTimeout(resolve, time));
}
function openMenu(item) {
  $("#menu").show();
  animate("#menu","slide-in-left");
  $(item).html('<span class="fas fa-chevron-left"></span>');
  $(item).attr('onclick','hideMenu(this);');
}
function hideMenu(item) {
  animate("#menu","slide-in-left");
  animate("#menu","slide-out-left");
  $(item).html('<span class="fas fa-bars"></span>');
  $(item).attr('onclick','openMenu(this);');
  sleep(800).then(() => {
    $("#menu").hide();
    animate("#menu","slide-out-left");
  });
}
$("#menu").append('<p class=\'cp\'>Powered by <a href="https://github.com">Wab</a></p>');
