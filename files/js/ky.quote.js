$(function () {
  var $textarea = $('#edit-message');

  $('.board-list').on('click', 'a.thread-id', function (event) {
    var threadId = parseInt($(this).attr('data-thread-id'), 10);
    var contents = '';

    if (isNaN(threadId)) {
      return;
    }

    contents = '>>' + threadId + '\n';
    $textarea.val(contents);
    $textarea.moveCursorToEnd();
    $textarea.focus();

    location.hash = '#edit-name';

    event.preventDefault();
    return false;
  });
});
