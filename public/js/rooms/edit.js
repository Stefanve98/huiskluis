$(document).ready(function() {
    $('.roomTypes').on('change keydown', function () {
        var text = '';

        for (i = 0; i < $(this).val(); i++) {
            console.log(i + 1);
            text += '<div class="row">'
                    + '<div class="offset-3 col-lg-9 mb-4" id="roomType_' + i + '">'
                        + '<input type="text" name="roomType[{{ $roomType->id }}][0][surface]"> M<sup>2</sup>'
                    + '</div>'
                 + '</div>';
        }

        $('#ttttt').html(text);
        console.log(text);
        console.log($(this));
        console.log($(this).attr('name'));
    });
});