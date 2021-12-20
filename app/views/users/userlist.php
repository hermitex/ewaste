<?php
require_once APPROOT . '/views/includes/head.php';
?>

<div>
    <?php
    require_once APPROOT . '/views/includes/navigation.php';
    ?>
</div>
<style>
    .table-wrapper{
        display: flex;
        justify-content: center;
        width: 90vw;
        overflow-x: hidden;
        margin: 0 auto;
        padding: 1rem;
    }

    #table-header{

        padding-left: 0;
        margin-left: 0;
    }

    table{
        border-spacing: 1rem;
        border: 1px solid #21451f;
        width: 90%;

    }

    thead th {
        padding: 8px;
        background-color: #fde9d9;
        font-size: large;
    }

    table th, table td {
        padding: 3px;
        border-width: 1px;
        border-style: solid;
        border-color: #f79646 #ccc;
    }

    table td {
        text-align: right;
    }

    table tbody th {
        text-align: left;
        font-weight: normal;
    }

    table tfoot {
        font-weight: bold;
        font-size: large;
        background-color: #687886;
        color: #fff;
    }

    caption{
        letter-spacing: .1rem;
        font-size: x-large;
        font-weight: bold;
        background-color: #081D45;
        color: #f5f5f5;
    }

</style>


<div class="table-wrapper">
    <table class="table">
        <caption>eWaste Users</caption>
        <thead>
        <tr id="table-header">
            <th scope="col">X</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">User ID</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count = 1;
        ?>
        <?php foreach ($data['users'] as $user): ?>
        <tr>
            <td><input type="checkbox"></td>
            <td><?php echo $user->first_name?></td>
            <td><?php echo $user->last_name?></td>
            <td><?php echo $user->last_name?></td>
            <td><?php echo $user->phone?></td>
            <td><?php echo $user->user_id?></td>
            <td>
                <ul>
                    <button>View Profile</button>
                    <button>Remove User</button>
                </ul>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
