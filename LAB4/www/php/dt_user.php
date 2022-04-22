<?php
require('../query/conDB.php');
?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Sex</th>
        </tr>
    </thead>
</tbody>
<table>
    <thead>
        <?php
        $sql = "SElect * FROM tb_user ORDER BY age ASC ";
        $result = $mysqli->query($slq);
        $i = 1;
        while ($rows = $result->fetch_assoc()){
            ?>
        
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['sname'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['sex'] ?></td>
            <td> class="dt_user" data-name=></td>
            <button<td class="de-user" data-name="<?= $row['name'] ?>">DEL></button>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script>
    $(".btn-del").click(function() {
        let data = $(this).data("name");
        //alert($data);
    $.ajax({
        uel:".query/user_del.php",
        method: "POST",
        data: {
            name:data
        },
        success: function(){
            $("#div_content").load("./php/dt_user.php");
        }
    })
    });
</script>