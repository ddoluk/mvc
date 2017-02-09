<form class="form-horizontal" action="/admin/update" method="post">
    <div class="form-group">
        <label class="control-label col-md-2" for="first_name"> First Name </label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $data[0]['first_name']?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="last_name"> Last Name </label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $data[0]['last_name']?>">
        </div>
    </div>
    <input type="hidden" name="update_id" value="<?php echo $data[0]['id'];?>">
    <div class="text-center">
        <button class="btn btn-primary" type="submit">Update</button>
    </div>
</form>