$(document).ready(function () {
  $('.toggle-more').click(function () {
    $(this).siblings('.more-info').slideToggle();
  });

  $('#retrieveBtn').click(function () {
    $.get('retrieve.php', function (data) {
      $('#parkingResult').html(`<pre>${data}</pre>`);
    });
  });
});
