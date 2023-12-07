<h2>Edit Charity</h2>

<form action="<?php echo URL; ?>/charities/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['optusers']['user_id']; ?>">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="users_id" value="<?php echo $data['optusers']['user_full_name']; ?>" disabled></td>
        </tr>
        <tr>
            <td>ADD NOMINEE</td>
            <td><input type="number" name="nominee" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>