<?php
include 'header.php';
include '../conn.php';

$id =$_GET['id'];

$sql = "SELECT * FROM `cateogory` WHERE `cat_id` = '$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>
        <div class="row justify-content-center">
            <div class="col-12 card shadow">
                <h1 class="text-primary text-center text-uppercase my-3">Update Cateogry</h1>
                <form action="updateData.php" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="catId" class="form-control" value="<?php  echo $row[0];  ?>">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Cateogry Name</label>
                        <input type="text" name="catName" class="form-control" value="<?php  echo $row[1];  ?>">
                    </div>
                    <div class="mb-3">
                        <img src="<?php  echo $row[2] ?>" width="120" height="80" alt="">
                        <br/>
                        <input type="hidden" value="<?php  echo $row[2] ?>" name="oldImage">
                        <label for="formFile" class="form-label">Cateogry Image</label>
                        <input class="form-control" name="catImage" type="file">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" name="updatebtn" value="Update" class="btn btn-primary w-75">
                    </div>
                </form>
            </div>
        </div>

<?php

include 'footer.php';

?>