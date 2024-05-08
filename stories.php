
<?php
    include './config.php';
    $select = "SELECT * FROM story";
    $result = mysqli_query($connection,$select);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            // print_r($row);
?>


<div class="image ">
    
    <img style="object-fit: cover;" class="rounded-circle" width="70px" height="70px" src="./images/<?php echo $row['image'] ?>" alt=""> 
</div>

<?php 
        }}
?>