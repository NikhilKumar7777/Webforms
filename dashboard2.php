<?php
include ("dbcon.php");
$query="SELECT * FROM user2";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);




if($total!=0){
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
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Logout</span></li>
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
                    <a href="index.html" class="btn">Add Member</a>
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
              
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Users details</h2>

                        <a href="display.php" class="btn">View All</a>
                    </div>
                    <table border="1">
                        <tr>
                           <th width="10%">Firstname</th>
        <th width="10%">Lastname</th>
        <th width="10%">Email</th>
        <th width="10%">Phone</th>
        <th width="10%">Password</th>
        <th width="10%">DOB</th>
        <th width="10%">Bio</th>
        <th width="10%">Operations</th>

                        </tr>
                            <?php
    
    while($result=mysqli_fetch_assoc($data)){
        echo"<tr>
        
        <td>".$result['Firstname']."</td>
        <td>".$result['Lastname']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Phone']."</td>
        <td>".$result['Password']."</td>
        <td>".$result['DOB']."</td>
        <td>".$result['Bio']."</td>
        <td><a href='update_data.php?Id=$result[Id]' >Update</a></td>
        </tr>";
        

    }
}
else{
    echo "no records founds";
}
?>
                      
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</body>

</html>