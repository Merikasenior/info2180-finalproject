<?php include 'header.php'?>
<!-- <?php include 'config.php'?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
    
<h2>   Dashboard </h2>
    <div class="sidebar">
        <div class="home">
            <a href="#homepage"> <img src="home.png" alt="home Icon" width="25" height="25" /> Home</a>
        </div>
        <div class="newcontact">
            <a href="register_form.php"> <img src="newcontact.png" alt="New Contact Icon" width="25" height="25" /> New Contact </a>
        </div>
        <div class="users">
            <a href="#user"> <img src="user.png" alt="User Icon" width="25" height="25" /> Users</a>
        </div>
        <div class="logout">
            <a href="#logout"> <img src="logout.png" alt="logout Icon" width="25" height="25" />Logout</a>
        </div>

    </div>
    <div id="filters">
        <span>Fetch results by &nbsp</span>
        <select name= "fetchval" id="fetchval">
            <option value="" disabled="" selected=""> Filter By:</option>
            <option value="Sales Leads">Sales Leads</option>
            <option value="Support"> Support</option>
            <option value="Assigned to me "> Assigned to me</option>
             <!-- <option> Fashion</option>  -->
        </select>
    </div>

    <div class="container">
        <table class= "table" style="border: 1px solid black">
            <thead >
                <tr style="border: 1px solid black">
                    <th style="border: 1px solid black">Name</th>
                    <th style="border: 1px solid black">Email</th>
                    <th style="border: 1px solid black">Company</th>
                    <th style="border: 1px solid black">Title</th>
            
                </tr>
            </thead>
            <tbody>

                <?php

                $query = "SELECT * FROM contacttable";
                $r =mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($r)){

                
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
            </tbody>
        </table>
    </div>


        <script type= "text/javascript">
            $(document).ready(function(){
                $("#fetchval").on('change',function(){
                   var value = $(this).val();
                   //alert(value);

                   $.ajax({
                        url: "fetch.php",
                        type: "POST",
                        data: 'request=' + value;
                        beforeSend: function(){
                            $(".container").html("<span>Working...</span>");
                        },
                        success:function(data){
                            $(".container").html(data);
                        }
                   });
                });
            });
        </script>
</body>
</html>
