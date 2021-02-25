<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Job Title</th>
    </tr>

    <?php
        $customer = $db->select("SELECT * FROM customers", [])
        foreach ($customer as $customer){
            ?>
            <tr>
                <td><?= $customer['first_name'] ?></td>
                <td><?= $customer['last_name'] ?></td>
                <td><?= $customer['job_title'] ?></td>
            </tr>
        }