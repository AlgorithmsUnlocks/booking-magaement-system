<?php include ("includes/header.php"); ?>

<!--Header Section -->

<section id="header-part">

    <div class="container">
        <div class="footer-content">
            <h4>
                Student Booking Systems
            </h4>
            <p>
                Admin Part
            </p>
        </div>

</section>

<!--Main P Section-->
<section id="main-part">


<!--    Static -->
    <div class="top_menu_action">
        <input type="button" value="Add Records" class="add_records_btn" onClick="location.href='index.php?source=add_students'"/>
        <input type="button" value="Manage Records" class="manage_records_btn" onClick="location.href='index.php?source=manage_students'"/>
    </div>

<!--    <div class="container">-->


        <?php
        $source="";

        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }else{
            $source = "";
        }

        switch ($source){
            case "search_students":
                include "includes/search_students.php";
                break;
            case "add_students":
                include "includes/add_students.php";
                break;
            case "manage_students":
                include "includes/manage_students.php";
                break;
            case "update_students":
                include "includes/update_students.php";
                break;
            default:
                include "includes/welcomes.php";
        }

        ?>


<!--    </div>-->
</section>


<?php include ("includes/footer.php"); ?>


