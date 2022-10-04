<?php

include 'header.php';
include '../conn.php';

$id = $_GET['id'];

$sql1 = "SELECT * FROM `products` WHERE `pro_id` = '$id'";
$run1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($run1);

?>


<div class="row justify-content-center py-5">
    <div class="col-12 card shadow">
        <h1 class="text-primary text-center text-uppercase my-3">Update product</h1>
        <form action="updateProductData.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $row1[0];  ?>" name="pro_id">
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Name</label>
                <input type="text" name="proName" value="<?php echo $row1[1];  ?>" class="form-control" placeholder="Enter Product Name" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Price</label>
                <input type="number" value="<?php echo $row1[2];  ?>" name="proPrice" class="form-control" placeholder="Enter Product Price" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Description</label>
                <input type="text" value="<?php echo $row1[3];  ?>"  name="proDesc" class="form-control" placeholder="Enter Product Descrption" required>
            </div>
            <div class="mb-3">
                <img src="<?php echo $row1[4];  ?>" style="width:120px; height:80px;"  alt="">
                <input type="hidden" value="<?php echo $row1[4];  ?>" name="old_image">
                <br>
                <label for="formFile" class="form-label">Product Image</label>
                <input class="form-control" name="proImage" type="file">
            </div>
            <div class="mb-3">
            <label for="formFile" class="form-label">Product Category</label>
                <select class="form-select" name="cat_id" aria-label="Default select example">
                   
                    <?php

                        $sql = "SELECT * FROM `cateogory`";
                        $query = mysqli_query($con, $sql); 
                        while($row = mysqli_fetch_array($query))
                        {
                            ?>
                            <?php if($row[0] == $row1[5] ){
                                
                                ?>
                                    <option selected value="<?php echo $row[0];  ?>"><?php echo $row[1];  ?></option>
                                <?php
                             }else{
                             ?>
                             <option value="<?php  echo $row[0]  ?>"><?php   echo $row[1];  ?></option>
                            <?php
                             }
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" name="updatebtn" value="Update" class="btn btn-success w-75">
            </div>
        </form>
    </div>
</div>


<?php

include 'footer.php';

?>