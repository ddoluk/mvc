<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($data): ?>
            <?php foreach ($data as $id => $value): ?>
                <tr>
                    <td><?php echo $value['first_name'] ?></td>
                    <td><?php echo $value['last_name'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>