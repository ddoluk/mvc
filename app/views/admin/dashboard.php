<div class="text-center">
    <a class="btn btn-primary" href="/admin/add" role="button">Add</a>
</div>
<div class="row">
    <div class="col-md-9 col-md-offset-1">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($data): ?>
                <?php foreach ($data as $id => $value): ?>
                    <tr>
                        <td><?php echo $value['first_name'] ?></td>
                        <td><?php echo $value['last_name'] ?></td>
                        <td width="5%">
                            <form action="/admin/delete" method="post">
                                <button class="btn bg-danger" type="submit" name="member_id"
                                        value="<?php echo $value['id'] ?>">Delete
                                </button>
                        </td>
                        <td width="5%">
                            </form>
                            <form action="/admin/edit" method="post">
                                <button class="btn bg-info" type="submit" name="edit_id"
                                        value="<?php echo $value['id'] ?>">Edit
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
