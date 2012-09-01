(function ($) {
  $.fn.moveCursorToEnd = function () {
    return this.each(function () {
      var range = this.createTextRange ? this.createTextRange() : null;

      if (typeof this.selectionStart === 'number') {
        this.selectionStart = this.selectionEnd = this.value.length;
      }
      else if (range) {
        this.focus();
        range.collapse(false);
        range.select();
      }
    });
  };
}(window['jQuery']));
