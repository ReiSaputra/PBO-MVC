<h2>Input Admin</h2>

<form action="<?php echo URL; ?>/charities/save" method="post">
    <table>
        <tr>
            <td>NAME</td>
            <td>
                <select name="users_id">
                    <?php foreach ($data['optusers'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>"><?php echo $opt['user_full_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NOMINEE</td>
            <td><input type="number" name="charities_nominee" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>