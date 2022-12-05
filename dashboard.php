<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dolphin_crm';

$conn = mysqli_connect($host, $username, $password, $dbname);
if($conn === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	$check_sql = "SELECT * FROM contacttable" ;
	$result = mysqli_query($conn,$check_sql);
			}


?>


<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dashboard</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	<!-- <link rel="stylesheet" href="dashboard.css">  -->
          <style>
        .donotShow_row {
            display: none;
        }
        
    </style>
		</head>
	<body>
		<?php include 'header.php';?>
		<div class="container">
			<div class="back">
				<div class="buttons">
					<div><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
					<div><a href="newcontact.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>New Contact</a></div>
					<div><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i>Users</a></div>
					<div><a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
                    <hr>
				</div>
			</div>	
			<div class="background">
				<div class="records">
					<div class="top-button">
						<h1>Dashboard</h1>
						<div><button><a href="newcontact.php"><i class="fa fa-plus" aria-hidden="true"></i>Add Contact</a></button></div>
					</div>	
    

    <div id="filters_buttons">
        <p> <img src='user.png' style="float:left;width:20px;height:20px;">Filter by:</p>
            <button id = "all" onClick="setActive('all')" >ALL</button>
            <button id = "Sales Leads" onClick="setActive('Sales Leads')">Sales Leads</button>
            <button id = "Support" onClick="setActive('Support')">Support</button>
            <button id = "Assigned to me" onClick="setActive('Assigned to me')">Assigned to me</button>

    </div>

    <div class="table">
   
        <table class= "table" id='table_filter'>
            <thead >
                <tr >
                    <th >Name</th>
                    <th >Email</th>
                    <th >Company</th>
                    <th >Title</th>
            
                </tr>
            </thead>
            <tbody>

                <?php

                $query = "SELECT * FROM contacttable";
                $r =mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($r)){

                
                ?>
                <tr>
                    <td ><?php echo $row['title']." ".$row['firstname']." ".$row['lastname'] ?></td>
                    <td ><?php echo $row['email']?></td>
                    <td ><?php echo $row['company']?></td>
                    <td ><?php echo $row['type']?></td>
                </tr>
                <?php
            }
                ?>
            </tbody>
        </table>
  
        </div>
    <script>
        document.getElementById('Sales Leads').addEventListener('click', function(){
            table = document.getElementById('table_filter');
            console.log(table)
            tr = table.querySelector('tbody').getElementsByTagName('tr');
            for (var i = 0; i < tr.length; i++) {
                console.log(tr[i]);
                if (tr[i].getElementsByTagName('td')[3].innerText.indexOf('Sales Lead') > -1) {
                    tr[i].classList.remove('donotShow_row')
                } else {
                    tr[i].classList.add('donotShow_row')
                }
            }
        })

        document.getElementById('Support').addEventListener('click', function(){
            table = document.getElementById('table_filter');
            console.log(table)
            tr = table.querySelector('tbody').getElementsByTagName('tr');
            for (var i = 0; i < tr.length; i++) {
                console.log(tr[i]);
                if (tr[i].getElementsByTagName('td')[3].innerText.indexOf('Support') > -1) {
                    tr[i].classList.remove('donotShow_row')
                } else {
                    tr[i].classList.add('donotShow_row')
                }
            }
        })

        document.getElementById('all').addEventListener('click', function(){
            table = document.getElementById('table_filter');
            console.log(table)
            tr = table.querySelector('tbody').getElementsByTagName('tr');
            for (var i = 0; i < tr.length; i++) {
                console.log(tr[i]);
                if (tr[i].getElementsByTagName('td')[3].innerText.indexOf('all')>-1) {
                    tr[i].classList.remove('donotShow_row')
                 } else {
                     tr[i].classList.remove('donotShow_row')
                  }
            }
        })
    </script>

</body>
</html>
	</body>
</html>
