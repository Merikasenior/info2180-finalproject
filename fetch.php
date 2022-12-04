<?php
include("config.php");
if(isset($_POST['request'])){

    $request = $_POST['request'];

    $query = "SELECT * FROM contacttable WHERE type ='$request' ";
    $query = mysqli_query($conn,$query);
    $result = mysqli_num_rows($result);

?>

<table class="table">
    <?php
        if($count){

        
    ?>
    <thead>
        <tr style="border: 1px solid black">
            <th style="border: 1px solid black">Name</th>
            <th style="border: 1px solid black">Email</th>
            <th style="border: 1px solid black">Company</th>
            <th style="border: 1px solid black">Title</th>  
        </tr>

        <?php
        }else{
            echo "Sorry! no records found";
        }
        ?>
    </thead>

    <tbody>
        <?php
        while ($row= mysqli_fetch_assoc($result)) {
           ?>
           <tr>
           <td style="border: 1px solid black"><?php echo $row['title']?></td>
                <td style="border: 1px solid black"><?php echo $row['email']?></td>
                <td style="border: 1px solid black"><?php echo $row['company']?></td>
                <td style="border: 1px solid black"><?php echo $row['type']?></td>
           </tr>
           <?php
        }
           ?>
</table>
<?php
}
?>