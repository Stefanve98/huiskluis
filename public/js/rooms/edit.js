$(document).ready(function() {
    refreshClicks();
});

function addRoom(roomTypeId) {
    var roomsCountField = $('input[name="rooms[' + roomTypeId + '][count]"]');

    $('.form-data-' + roomTypeId).append(`
        <div class="offset-3 col-lg-9 mt-3">
            <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-3 col-form-label">M<sup>2</sup></label>
                    <div class="col-9">
                        <input class="form-control" type="text">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-3 col-form-label">M<sup>3</sup></label>
                    <div class="col-9">
                        <input class="form-control" type="text">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <i class="fa fa-trash fa-2x text-danger pull-right cursor-pointer"></i>
            </div>
        </div>
    `);

    var roomsCount = parseInt(roomsCountField.val());
    roomsCountField.val(roomsCount + 1);
    refreshClicks();
}


function refreshClicks() {
    $('.fa-trash').on('click', function () {
        var removebleObject = $(this).parent().parent();
        // console.log(removebleobject);
        console.log(removebleObject);

        // removebleobject.remove();
    });
}