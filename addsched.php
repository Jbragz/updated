<?php

@include 'tracking_db.php';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $time_in = $_POST['time_in'];
    $time_out = $_POST['time_out'];
    $subject = $_POST['subject'];
    $from_month = $_POST['from_month'];
    $to_month = $_POST['to_month'];
    $details = $_POST['details'];
    $room = $_POST['room'];

    // Perform database insert
    $sql = "INSERT INTO professorschedule (professor_id, course_id, room_id, day_of_week, start_time, end_time, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $professor_id = 1; // Replace with the actual professor_id
    $course_id = 1; // Replace with the actual course_id
    $room_id = 1; // Replace with the actual room_id

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiisssss", $professor_id, $course_id, $room_id, $day_of_week, $time_in, $time_out, $from_month, $to_month);

    // Set parameters and execute
    $day_of_week = "Monday"; // Example, you should get this from the form
    $stmt->execute();

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="addsched.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CSD Faculty</title>
  </head>
<body>
<nav>  

<div class="wrapper">
  <nav class="navbar">
    <div class="navbar_left">
      <div class="nav__logo">
        <a href="#"><img src="imahe/FAST.png" alt="logo" /></a>
      </div>
    </div>
    <div class="navbar_center_text">
      <a href="#">Home</a>
      <a href="addsched.php">Add Schedule</a>
      <a href="schedule.php">View schedule</a>
    </div>

    <div class="navbar_right">
      <div class="notifications">
        <div class="icon_wrap"><i class="far fa-bell"></i></div>
        
        <div class="notification_dd">
            <ul class="notification_ul">
                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="baskin_robbins failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="mcd success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="pizzahut failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="kfc success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li> 
                <li class="show_all">
                    <p class="link">Show All Activities</p>
                </li> 
            </ul>
        </div>
        
      </div>
      <div class="profile">
        <div class="icon_wrap">
          <img src="imahe/profile/1.jpeg" alt="profile_pic">
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i>
                </span>Profile</a>
              <div class="btn">My Account</div>
            </li>
            <li><a class="address" href="#"><span class="picon"><i class="fas fa-map-marker"></i></span>Address</a></li>
            <li><a class="settings" href="#"><span class="picon"><i class="fas fa-cog"></i></span>Settings</a></li>
            <li><a class="logout" href="#"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

    </nav>
    
    <header class="itloog__container header__container" id="homealone">
      <div class="header__content">
        <h1>Computer Studies<br><h1 class="dp">Department</h1></h1>
    
        <form action="" class="search-bar">
         <input type="text" placeholder="search name..">
         <button type="submit" i class="ri-search-line"></i></button>
        </form> 

      </div>
      <div class="header__image">
        <img src="imahe/torch.png" alt="header" />
      </div>
    </header>

    <div class="form-container">
        <h2>Add Schedule</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="time_in">Time In:</label>
            <input type="text" name="time_in" required>

            <label for="time_out">Time Out:</label>
            <input type="text" name="time_out" required>

            <label for="subject">Subject:</label>
            <input type="text" name="subject" required>

            <label for="from_month">From Month:</label>
            <input type="text" name="from_month" required>

            <label for="to_month">To Month:</label>
            <input type="text" name="to_month" required>

            <label for="details">Details:</label>
            <textarea name="details" required></textarea>

            <label for="room">Room:</label>
            <input type="text" name="room" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>

