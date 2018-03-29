var newRoomId = 0;
$(document).ready(function() {
    refreshClicks();
});

function addRoom(roomTypeId) {
    var roomsCountField = $('.rooms_' + roomTypeId + '_count');
    console.log(window.location.href);
    var house_id = 1;
    var user_id = 1;

    $('.form-data-' + roomTypeId).append(`
        <div class="offset-3 col-lg-9 mt-4">
            <input type="hidden" name="new_rooms[` + newRoomId + `][type_id]" value="`+ roomTypeId +`">
            <input type="hidden" name="new_rooms[` + newRoomId + `][house_id]" value="`+ house_id +`">
            <input type="hidden" name="new_rooms[` + newRoomId + `][user_id]" value="`+ user_id +`">
            <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-4 col-form-label">M<sup>2</sup></label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="new_rooms[` + newRoomId + `][surface]">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-4 col-form-label">M<sup>3</sup></label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="new_rooms[` + newRoomId + `][cubic_meters]">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <i class="fa fa-trash fa-2x text-danger pull-right cursor-pointer"></i>
            </div>
        </div>
    `);

    newRoomId = newRoomId + 1;
    var roomsCount = parseInt(roomsCountField.val());
    roomsCountField.val(roomsCount + 1);
    refreshClicks();
}


function refreshClicks() {
    $('.fa-trash').on('click', function () {
        var removebleObject = $(this).parent().parent();
        var roomsCountField = removebleObject.parent().parent().find('.roomCountField');
        var roomsCount = parseInt(roomsCountField.val());
        roomsCountField.val(roomsCount - 1);
        removebleObject.remove();
    });
}