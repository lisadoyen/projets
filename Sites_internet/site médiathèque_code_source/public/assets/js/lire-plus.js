$(document).ready(function() {
    var max = 400;
    $(".readMore").each(function() {
        var str = $(this).text();
        if (str.length > max) {
            var subStr = str.substring(0, max);
            var hiddenStr = str.substring(max);
            console.log(hiddenStr);
            $(this).empty().html(subStr);
            $(this).append(' <a href="javascript:void(0);" class="lire-plus">lire la suite...</a>');
            $(this).append('<div class="addText">' + hiddenStr + '</div>');
        }
    });
    $(".lire-plus").click(function() {
        $(this).siblings(".addText").contents().unwrap();
        $(this).remove();
    });
});