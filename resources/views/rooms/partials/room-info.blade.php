<div class="offset-3 col-lg-9 mt-4">
    <div class="col-lg-4">
        <div class="form-group row">
            <label class="col-4 col-form-label">M<sup>2</sup></label>
            <div class="col-8">
                <input class="form-control" type="text" value="{{ $room->surface }}" name="rooms[{{ $room->id }}][surface]">
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group row">
            <label class="col-4 col-form-label">M<sup>3</sup></label>
            <div class="col-8">
                <input class="form-control" type="text" value="{{ $room->cubic_meters }}" name="rooms[{{ $room->id }}][cubic_meters]">
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <i class="fa fa-trash fa-2x text-danger pull-right cursor-pointer"></i>
    </div>
</div>
