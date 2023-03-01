<?php

if(isset($_POST['updated_students'])){

    $branch = real_escape($_POST['branch']);
    $card_number = real_escape($_POST['card_number']);
    $name	 = real_escape($_POST['name']);
    $blood_group = real_escape($_POST['blood_group']);
    $phone_number = real_escape($_POST['phone_number']);
    $bed_room = real_escape($_POST['bed_room']);
    $check_in = real_escape($_POST['check_in']);
    $check_out = real_escape($_POST['check_out']);
    $pacakge_cat = real_escape($_POST['pacakge_cat']);
    $pacakage = real_escape($_POST['pacakage']);
    $security_deposite = real_escape($_POST['security_deposite']);
    $st_id = real_escape($_POST['st_id']);
    $status = real_escape($_POST['status']);



    $query = "UPDATE `students` SET `branch`='$branch',`card_number`='$card_number',`name`='$name',`blood_group`='$blood_group',`phone_number`='$phone_number',`bed_room`='$bed_room',`check_in`='$check_in',`check_out`='$check_out',`pacakge_cat`='$pacakge_cat',`pacakage`='$pacakage',`security_deposite`='$security_deposite',`status`='$status' WHERE `student_id`='$st_id'";
    $query_update_students = mysqli_query($connection,$query);
    confirmQuery($query_update_students);
     echo "<a href='index.php?source=manage_students' class='success_message'> Updated Successfull, View Records at id={$st_id}</a>";

}

?>


<?php

if(isset($_POST['students_id'])){
    $students_id = $_POST['students_id'];
}else{
    $students_id = "";
}

$query = "SELECT * FROM `students` WHERE `student_id`='$students_id'";
$query_fetch_students = mysqli_query($connection,$query);
$all_count = mysqli_num_rows($query_fetch_students);


?>


<div class="container">

    <div class="container addBox">
        <div class="form_default_width">

            <?php

            if($all_count > 0) {

            while ($row = mysqli_fetch_assoc($query_fetch_students)) {

            $student_id = $row['student_id'];
            $branch = $row['branch'];
            $card_number = $row['card_number'];
            $name = $row['name'];
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
            $status = $row['status'];

            ?>

            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form_container">
                    <div class="form_container_half">
                        <label for="name">Name</label>
                        <input type="text" name='name' value=" <?php echo $name ?>">
                    </div>
                    <div class="form_container_half">
                        <label for="name">Branch Name</label>
                        <select name="branch">
                            <option value=" <?php echo $branch ?>"> <?php echo $branch ?></option>
                        </select>
                    </div>
                </div>
                <div class="form_container">
                    <div class="form_container_half">
                        <label for="name">Card Number</label>
                        <input type="text" name='card_number' value="<?php echo $card_number ?>">
                    </div>
                    <div class="form_container_half">
                        <label for="name">Blood Group</label>
                        <select name="blood_group">
                            <option value="<?php echo $blood_group ?>"><?php echo $blood_group ?></option>
                        </select>
                    </div>
                </div>
                <div class="form_container">
                    <div class="form_container_half">
                        <label for="name">Phone Number</label>
                        <input type="text" name='phone_number' value="<?php echo $phone_number ?>">
                    </div>
                    <div class="form_container_half">
                        <label for="name">Bed</label>
                        <input type="text" name='bed_room' value="<?php echo $bed_room ?>">
                    </div>
                </div>
                <div class="form_container">
                    <div class="form_container_half">
                        <label for="name">Check In</label>
                        <input type="date" name='check_in' value="<?php echo $check_in ?>">
                    </div>
                    <div class="form_container_half">
                        <label for="name">Check Out</label>
                        <input type="date" name='check_out' value="<?php echo $check_out ?>">
                    </div>
                </div>
                <div class="form_container">
                    <div class="form_container_half">
                        <label for="name">Package Category</label>
                        <select name="pacakge_cat">
                            <option value="<?php echo $pacakge_cat ?>"><?php echo $pacakge_cat ?></option>
                        </select>
                    </div>
                    <div class="form_container_half">
                        <label for="name">Package</label>
                        <select name="pacakage">
                            <option value="<?php echo $pacakage ?>"><?php echo $pacakage ?></option>
                        </select>
                    </div>
                </div>
                <input type="hidden" class='form-control'name='st_id' value="<?php echo $student_id ?>" >

                <div class="form_container">
                    <div class="form_container_full">
                        <label for="name">Security Deposite</label>
                        <input type="text" class='form-control'name='security_deposite' value="<?php echo $security_deposite ?>">
                    </div>
                </div>
                <div class="form_container">
                    <div class="form_container_full">
                        <label for="name">Package</label>
                        <select name="status">
                            <option value="<?php echo $pacakage ?>"><?php echo $pacakage ?></option>
                        </select>
                    </div>
                </div>


                <div class="save_feild">
                    <button type="submit" class="btn btn-primary " name='updated_students'>
                        <span>  Update Students </span>
                    </button>
                </div>
            </form>
            <?php
            }
            }
            ?>

        </div>
    </div>
</div>