<h2><?= $subtitle ?></h2>
<?php if (!empty($params)): ?>
    <form>
        <table>
            <tr>
                <td>
                    <label>NAME</label>
                </td>            
                <td>
                    <label>EMAIL</label>
                </td>            
                <td>
                    <label>PHONE</label>
                </td>            
                <td>
                    <label>DATE</label>
                </td>            
                <td>
                    <label>TIME</label>
                </td>            
                <td>
                    <label>DIAGNOSTIC</label>
                </td>            
            </tr>      

            <?php foreach ($params as $appointment_code => $apt): ?>
                <tr>
                    <?php foreach ($apt as $key => $value): ?>
                        <td><input type="text" name=<?= $key ?> readonly value=<?= $value ?>></td>
                    <?php endforeach; ?>
                    <td><a href=<?= "/appointments?" . "appointment_code=" . $appointment_code ?>>Detail</a></td>
                </tr>
            <?php endforeach; ?>            
            
        </table>
    </form>
<?php endif; ?>