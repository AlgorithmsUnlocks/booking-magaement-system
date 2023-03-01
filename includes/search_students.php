<?php

$search_text = "";

if(isset($_POST['search_text'])){
    $search_text = $_POST['search_text'];
//    echo $search_text;
}


?>
<?php

if(isset($_POST['delete_btn'])){
    $id = $_POST['student_id'];
    $query = "DELETE FROM `students` WHERE `student_id`= '$id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<a href='index.php?source=manage_students' class='success_message'> Delete Successfull at id={$id}</a>";
    }else{
        echo "<a href='index.php?source=manage_students' class='success_message'> failed at id={$id}</a>";
    }
}


?>

<div class="ruman_table_card">

    <?php
    $query = "SELECT * FROM students WHERE name LIKE '%$search_text%' OR phone_number LIKE '%$search_text%'";
    $query_fetch_students = mysqli_query($connection,$query);
    $all_count = mysqli_num_rows($query_fetch_students);

    confirmQuery($query_fetch_students);
    ?>

    <div class="ruman_table_inner">



        <div class="dynamics_filter_search">

            <div class="filter_box">
                <label for="show">Show</label>
                <select name="number">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <label for="entries">Entries</label>
            </div>

            <div class="search_box">
                <form action="index.php?source=search_students" method="POST">
                    <label for="search">Search :</label>
                    <input type="text" name="search_text" class="search_text" placeholder="name or phone number">
                </form>
            </div>


        </div>

        <table class="table table-bordered" cellspacing="0" width="100%" id="example">
            <thead class="ruman_head">
            <tr>
                <th class="ml-5">ID</th>
                <th>Branch  </th>
                <th>Card Number</th>
                <th>Name </th>
                <th>B.Groups </th>
                <th>Phone Number</th>
                <th>Bed Room</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Pacakage category</th>
                <th>Pacakage </th>
                <th>Available Days</th>
                <th>Security Deposit </th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php

            if($all_count > 0){

                while($row = mysqli_fetch_assoc($query_fetch_students)){

                    $student_id = $row['student_id'];
                    $branch = $row['branch'];
                    $card_number = $row['card_number'];
                    $name	 = $row['name'];
                    $blood_group = $row['blood_group'];
                    $phone_number = $row['phone_number'];
                    $bed_room = $row['bed_room'];
                    $check_in = $row['check_in'];
                    $check_out = $row['check_out'];
                    $pacakge_cat = $row['pacakge_cat'];
                    $pacakage = $row['pacakage'];
                    $available_days = $row['available_days'];
                    $security_deposite = $row['security_deposite'];
                    $date = $row['date'];
                    $status = $row['status'];    ?>


                    <tr>
                        <td><?php echo $student_id ?> </td>
                        <td><?php echo $branch ?></td>
                        <td><?php echo $card_number?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $blood_group ?></td>
                        <td><?php echo $phone_number ?> </td>
                        <td><?php echo $bed_room ?> </td>
                        <td><?php echo $check_in ?></td>
                        <td><?php echo $check_out ?></td>
                        <td><?php echo $pacakge_cat ?></td>
                        <td><?php echo $pacakage ?></td>
                        <td><?php echo $available_days ?></td>
                        <td><?php echo $security_deposite ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $status ?></td>
                        <td>
                            <div class="action_btn">

                                <form action="index.php?source=update_students" method="POST">
                                    <input type="hidden" name="students_id" value="<?php echo $student_id ?>">
                                    <button type="submit" class="edit_btn">
                                        Edit
                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                    </button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                                    <button type="submit" class="delete_btn" name="delete_btn">
                                        Delete
                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                <?php  }

            }else{
                echo "No Data Found";
            } ?>

            </tbody>
        </table>
    </div>
</div>

