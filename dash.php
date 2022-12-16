<?php
$alert="<script>alert('login successfully');</script>";
$Email=$_POST['Email'];
$Password=md5($_POST['Password']);
$conn=new mysqli("localhost","root"," ","db");
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
else{
	$stmt= $conn->prepare("SELECT * FROM user2 WHERE Email=?");
	$stmt->bind_param("s",$Email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data = $stmt_result->fetch_assoc();
		if($data['Password'] === $Password){
			echo $alert ;

		}
		else{
			echo '<script>alert("Invalid Email or Password")
            window.location.href="Login.html";</script>';
	
		}

	}
	else{
		echo  '<script>alert("Invalid Email or Password")
            window.location.href="Login.html";</script>';
	}


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Users dashboard</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Welcome </h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <a href="dashboard1.html">
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Home</span> </li>
            </a>
            <a href="login.html">
            <li><img src="teacher2.png" alt="">&nbsp;<span>User login</span> </li>
            </a>
            <a href="Signup.html">
            <li><img src="school.png" alt="">&nbsp;<span>Signup</span> </li>
        </a>
        <a href="display.php">
            <li><img src="payment.png" alt="">&nbsp;<span>View</span> </li>
        </a>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="Signup.html" class="btn">Add Member</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>20</h1>
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Information</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Oraganization</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <!--<div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>-->
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Users details</h2>

                        <a href="display.php" class="btn">View All</a>
                    </div>
                    <table border="1">
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>DOB</th>
                            <th>Bio</th>
                            <th>Operation</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                             <td>$120</td>
                              <td>$120</td>
                               <td>$120</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Update</a></td>
                            


                           <!--<td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                             <td>$120</td>
                              <td>$120</td>
                               <td>$120</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Update</a></td>


                            <!--<td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td> <td>$120</td>
                              <td>$120</td>
                               <td>$120</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Update</a></td>


                            <!--<td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td> <td>$120</td>
                              <td>$120</td>
                               <td>$120</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Update</a></td>


                            <!--<td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td> 
                            <td>$120</td>
                              <td>$120</td>
                               <td>$120</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Update</a></td>


                            <!--<td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                             <td>$120</td>
                              <td>$120</td>
                               <td>$120</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Update</a></td>


                           <!-- <td><a href="#" class="btn">View</a></td>-->
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>