jQuery(document).ready(function ($) {
    $('.wpfm').delegate('#copy_clipboard', 'click', function (e) {
        var api = $(this).attr("api");
        var hint = $('#clipboard_hit');
        hint.val(api);
        hint.focus();
        hint.select();
        document.execCommand("copy");
        alert("copied to clipboard");
        return false;
    });
});