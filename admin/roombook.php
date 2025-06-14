<?php
session_start();
include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    <link rel="stylesheet" href="./css/luxury-roombook.css">
    <link rel="stylesheet" href="./css/table-fixes.css">
    <link rel="stylesheet" href="./css/luxury-roombook-table.css">
    <link rel="stylesheet" href="./css/luxury-roombook-table-enhancements.css">
    <link rel="stylesheet" href="./css/luxury-visual-enhancements.css">
    <link rel="stylesheet" href="./css/calendar-luxury.css">
    <link rel="stylesheet" href="./css/consistency-fixes.css">
    <link rel="stylesheet" href="./css/booking-cards.css">
    <!-- FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <title>Golden Palace - Room Bookings</title>
</head>

<body>
    <!-- guestdetailpanel -->

    <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="adduserclose()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name" placeholder="Enter Full name" required>
                    <input type="email" name="Email" placeholder="Enter Email" required>

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput" required>
						<option value selected >Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
                            //close your tags!!
							endforeach;
						?>
                    </select>
                    <input type="text" name="Phone" placeholder="Enter Phoneno" required>
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <select name="RoomType" class="selectinput">
						<option value selected >Type Of Room</option>
                        <option value="Superior Room">SUPERIOR ROOM</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
						<option value="Guest House">GUEST HOUSE</option>
						<option value="Single Room">SINGLE ROOM</option>
                    </select>
                    <select name="Bed" class="selectinput">
						<option value selected >Bedding Type</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
						<option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
						<option value="None">None</option>
                    </select>
                    <select name="NoofRoom" class="selectinput">
						<option value selected >No of Room</option>
                        <option value="1">1</option>
                        <!-- <option value="1">2</option>
                        <option value="1">3</option> -->
                    </select>
                    <select name="Meal" class="selectinput">
						<option value selected >Meal</option>
                        <option value="Room only">Room only</option>
                        <option value="Breakfast">Breakfast</option>
						<option value="Half Board">Half Board</option>
						<option value="Full Board">Full Board</option>
					</select>
                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type ="date">
                        </span>
                        <span>
                            <label for="cin"> Check-Out</label>
                            <input name="cout" type ="date">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>

        <?php       
        // <!-- room availablity start-->

        $rsql ="select * from room";
        $rre= mysqli_query($conn,$rsql);
        $r = 0;
        $sc = 0;
        $gh = 0;
        $sr = 0;
        $dr = 0;

        while($rrow=mysqli_fetch_array($rre))
        {
            $r = $r + 1;
            $s = $rrow['type'];
            if($s=="Superior Room")
            {
                $sc = $sc+ 1;
            }
            if($s=="Guest House")
            {
                $gh = $gh + 1;
            }
            if($s=="Single Room" )
            {
                $sr = $sr + 1;
            }
            if($s=="Deluxe Room" )
            {
                $dr = $dr + 1;
            }
        }

        $csql ="select * from payment";
        $cre= mysqli_query($conn,$csql);
        $cr =0 ;
        $csc =0;
        $cgh = 0;
        $csr = 0;
        $cdr = 0;
        while($crow=mysqli_fetch_array($cre))
        {
            $cr = $cr + 1;
            $cs = $crow['RoomType'];
                        
            if($cs=="Superior Room")
            {
                $csc = $csc + 1;
            }
                        
            if($cs=="Guest House" )
            {
                $cgh = $cgh + 1;
            }
            if($cs=="Single Room")
            {
                $csr = $csr + 1;
            }
            if($cs=="Deluxe Room")
            {
                $cdr = $cdr + 1;
            }
        }
        // room availablity
        // Superior Room =>
        $f1 =$sc - $csc;
        if($f1 <=0 )
        {	
            $f1 = "NO";
        }
        // Guest House =>
        $f2 =  $gh -$cgh;
        if($f2 <=0 )
        {	
            $f2 = "NO";
        }
        // Single Room =>
        $f3 =$sr - $csr;
        if($f3 <=0 )
        {	
            $f3 = "NO";
        }
        // Deluxe Room =>
        $f4 =$dr - $cdr; 
        if($f4 <=0 )
        {	
            $f4 = "NO";
        }
        //total available room =>
        $f5 =$r-$cr; 
        if($f5 <=0 )
        {
            $f5 = "NO";
        }
        ?>
        <!-- room availablity end-->

        <!-- ==== room book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }                else{
                    $sta = "NotConfirm";
                    
                    // Calculate days difference using PHP DateTime
                    $date1 = new DateTime($cin);
                    $date2 = new DateTime($cout);
                    $interval = $date1->diff($date2);
                    $nodays = $interval->days;
                    
                    // Use the properly calculated days
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta','$nodays')";
                    $result = mysqli_query($conn, $sql);

                    // if($f1=="NO")
                    // {
                    //     echo "<script>swal({
                    //         title: 'Superior Room is not available',
                    //         icon: 'error',
                    //     });
                    //     </script>";
                    // }
                    // else if($f2=="NO")
                    // {
                    //     echo "<script>swal({
                    //         title: 'Guest House is not available',
                    //         icon: 'error',
                    //     });
                    //     </script>";
                    // }
                    // else if($f3 == "NO")
                    // {
                    //     echo "<script>swal({
                    //         title: 'Si Room is not available',
                    //         icon: 'error',
                    //     });
                    //     </script>";
                    // }
                    // else if($f4 == "NO")
                    // {
                    //     echo "<script>swal({
                    //         title: 'Deluxe Room is not available',
                    //         icon: 'error',
                    //     });
                    //     </script>";
                    // }
                    // else if($result = mysqli_query($conn, $sql))
                    // {
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                    // }
                }
            }
        ?>    </div>

      <!-- ================================================= -->    <div class="searchsection">
        <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
        <div class="button-group">
            <button id="view-toggle-btn" class="btn btn-outline-light btn-sm me-2" onclick="toggleView()">
                <i class="fas fa-table me-1"></i>Table View
            </button>
            <button class="adduser" id="adduser" onclick="adduseropen()"><i class="fa-solid fa-bookmark"></i> Add</button>
            <form action="./exportdata.php" method="post" style="display: inline;">
                <button class="exportexcel" id="exportexcel" name="exportexcel" type="submit"><i class="fa-solid fa-file-arrow-down"></i></button>
            </form>
        </div>
    </div>

    <!-- Booking Summary Section -->
    <div class="booking-summary-container">
        <?php
        // Get booking statistics
        $totalBookingsQuery = "SELECT COUNT(*) as total FROM roombook";
        $totalBookingsResult = mysqli_query($conn, $totalBookingsQuery);
        $totalBookings = mysqli_fetch_array($totalBookingsResult)['total'];

        $confirmedBookingsQuery = "SELECT COUNT(*) as confirmed FROM roombook WHERE stat = 'Confirm'";
        $confirmedBookingsResult = mysqli_query($conn, $confirmedBookingsQuery);
        $confirmedBookings = mysqli_fetch_array($confirmedBookingsResult)['confirmed'];

        $pendingBookingsQuery = "SELECT COUNT(*) as pending FROM roombook WHERE stat = 'NotConfirm'";
        $pendingBookingsResult = mysqli_query($conn, $pendingBookingsQuery);
        $pendingBookings = mysqli_fetch_array($pendingBookingsResult)['pending'];

        // Get today's check-ins
        $todayCheckinQuery = "SELECT COUNT(*) as today_checkin FROM roombook WHERE cin = CURDATE()";
        $todayCheckinResult = mysqli_query($conn, $todayCheckinQuery);
        $todayCheckins = mysqli_fetch_array($todayCheckinResult)['today_checkin'];

        // Get today's check-outs
        $todayCheckoutQuery = "SELECT COUNT(*) as today_checkout FROM roombook WHERE cout = CURDATE()";
        $todayCheckoutResult = mysqli_query($conn, $todayCheckoutQuery);
        $todayCheckouts = mysqli_fetch_array($todayCheckoutResult)['today_checkout'];

        // Get total revenue (assuming you have a price calculation)
        $totalRevenueQuery = "SELECT SUM(nodays) as total_days FROM roombook WHERE stat = 'Confirm'";
        $totalRevenueResult = mysqli_query($conn, $totalRevenueQuery);
        $totalDays = mysqli_fetch_array($totalRevenueResult)['total_days'] ?? 0;

        // Get room type statistics
        $roomTypeQuery = "SELECT RoomType, COUNT(*) as count FROM roombook GROUP BY RoomType";
        $roomTypeResult = mysqli_query($conn, $roomTypeQuery);
        $roomTypes = [];
        while($row = mysqli_fetch_array($roomTypeResult)) {
            $roomTypes[$row['RoomType']] = $row['count'];
        }

        // Get current month bookings
        $currentMonthQuery = "SELECT COUNT(*) as month_bookings FROM roombook WHERE MONTH(cin) = MONTH(CURDATE()) AND YEAR(cin) = YEAR(CURDATE())";
        $currentMonthResult = mysqli_query($conn, $currentMonthQuery);
        $currentMonthBookings = mysqli_fetch_array($currentMonthResult)['month_bookings'];
        ?>

        <div class="summary-grid">
            <!-- Total Bookings -->
            <div class="summary-card total-bookings">
                <div class="summary-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="summary-content">
                    <h3 class="summary-number"><?php echo $totalBookings; ?></h3>
                    <p class="summary-label">Total Bookings</p>
                </div>
            </div>

            <!-- Confirmed Bookings -->
            <div class="summary-card confirmed-bookings">
                <div class="summary-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="summary-content">
                    <h3 class="summary-number"><?php echo $confirmedBookings; ?></h3>
                    <p class="summary-label">Confirmed</p>
                    <span class="summary-percentage"><?php echo $totalBookings > 0 ? round(($confirmedBookings / $totalBookings) * 100) : 0; ?>%</span>
                </div>
            </div>

            <!-- Pending Bookings -->
            <div class="summary-card pending-bookings">
                <div class="summary-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="summary-content">
                    <h3 class="summary-number"><?php echo $pendingBookings; ?></h3>
                    <p class="summary-label">Pending</p>
                    <span class="summary-percentage"><?php echo $totalBookings > 0 ? round(($pendingBookings / $totalBookings) * 100) : 0; ?>%</span>
                </div>
            </div>

            <!-- Today's Check-ins -->
            <div class="summary-card todays-checkins">
                <div class="summary-icon">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <div class="summary-content">
                    <h3 class="summary-number"><?php echo $todayCheckins; ?></h3>
                    <p class="summary-label">Today's Check-ins</p>
                </div>
            </div>

            <!-- Today's Check-outs -->
            <div class="summary-card todays-checkouts">
                <div class="summary-icon">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <div class="summary-content">
                    <h3 class="summary-number"><?php echo $todayCheckouts; ?></h3>
                    <p class="summary-label">Today's Check-outs</p>
                </div>
            </div>

            <!-- Total Guest Nights -->
            <div class="summary-card total-nights">
                <div class="summary-icon">
                    <i class="fas fa-moon"></i>
                </div>
                <div class="summary-content">
                    <h3 class="summary-number"><?php echo $totalDays; ?></h3>
                    <p class="summary-label">Total Guest Nights</p>
                </div>
            </div>

            <!-- This Month -->
            <div class="summary-card month-bookings">
                <div class="summary-icon">
                    <i class="fas fa-calendar-month"></i>
                </div>
                <div class="summary-content">
                    <h3 class="summary-number"><?php echo $currentMonthBookings; ?></h3>
                    <p class="summary-label">This Month</p>
                </div>
            </div>

            <!-- Average Stay -->
            <div class="summary-card average-stay">
                <div class="summary-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="summary-content">
                    <h3 class="summary-number"><?php echo $confirmedBookings > 0 ? round($totalDays / $confirmedBookings, 1) : 0; ?></h3>
                    <p class="summary-label">Avg Stay (Days)</p>
                </div>
            </div>
        </div>

        <!-- Room Type Distribution -->
        <?php if (!empty($roomTypes)) { ?>
        <div class="room-type-distribution">
            <h4 class="distribution-title">
                <i class="fas fa-chart-pie"></i>
                Room Type Distribution
            </h4>
            <div class="room-type-grid">
                <?php foreach ($roomTypes as $roomType => $count) { 
                    $percentage = $totalBookings > 0 ? round(($count / $totalBookings) * 100) : 0;
                ?>
                <div class="room-type-item">
                    <div class="room-type-info">
                        <span class="room-type-name"><?php echo htmlspecialchars($roomType); ?></span>
                        <span class="room-type-count"><?php echo $count; ?> bookings</span>
                    </div>
                    <div class="room-type-progress">
                        <div class="progress-bar" style="width: <?php echo $percentage; ?>%"></div>
                    </div>
                    <span class="room-type-percentage"><?php echo $percentage; ?>%</span>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="booking-cards-container">
        <?php
            // Force a fresh database connection to ensure we get the latest data
            if (!$conn || !mysqli_ping($conn)) {
                include '../config.php';
            }
            
            // Use query to get all room bookings and order by most recent first
            $roombooktablesql = "SELECT * FROM roombook ORDER BY id DESC";
            $roombookresult = mysqli_query($conn, $roombooktablesql);
            
            // Check for SQL errors
            if (!$roombookresult) {
                echo '<div class="alert alert-danger">Error retrieving bookings: ' . mysqli_error($conn) . '</div>';
            }
            
            $nums = mysqli_num_rows($roombookresult);
            
            // Show a message if no bookings found
            if ($nums == 0) {
                echo '<div class="no-bookings-message">
                        <i class="fas fa-calendar-times"></i>
                        <h3>No Room Bookings Found</h3>
                        <p>There are currently no room bookings in the database.</p>
                      </div>';
            }
        ?>

        <div class="bookings-grid" id="bookings-data">
            <?php
            // Reset result pointer for card view
            mysqli_data_seek($roombookresult, 0);
            
            // Ensure we properly handle the result
            if ($roombookresult && mysqli_num_rows($roombookresult) > 0) {
                while ($res = mysqli_fetch_array($roombookresult)) {
                    // Format check-in and check-out dates
                    $checkin_formatted = date('M d, Y', strtotime($res['cin']));
                    $checkout_formatted = date('M d, Y', strtotime($res['cout']));
                    
                    // Determine status class
                    $status_class = ($res['stat'] == 'Confirm') ? 'status-confirmed' : 'status-pending';
                    $status_icon = ($res['stat'] == 'Confirm') ? 'fas fa-check-circle' : 'fas fa-clock';
            ?>
                <div class="booking-card" data-booking-id="<?php echo $res['id'] ?>">
                    <div class="booking-header">
                        <div class="booking-id">
                            <span class="id-label">Booking #</span>
                            <span class="id-number"><?php echo str_pad($res['id'], 4, '0', STR_PAD_LEFT) ?></span>
                        </div>
                        <div class="booking-status <?php echo $status_class ?>">
                            <i class="<?php echo $status_icon ?>"></i>
                            <span><?php echo $res['stat'] ?></span>
                        </div>
                    </div>

                    <div class="guest-info">
                        <div class="guest-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="guest-details">
                            <h3 class="guest-name"><?php echo htmlspecialchars($res['Name']) ?></h3>
                            <p class="guest-email"><?php echo htmlspecialchars($res['Email']) ?></p>
                            <div class="guest-contact">
                                <span class="country">
                                    <i class="fas fa-globe-americas"></i>
                                    <?php echo htmlspecialchars($res['Country']) ?>
                                </span>
                                <span class="phone">
                                    <i class="fas fa-phone"></i>
                                    <?php echo htmlspecialchars($res['Phone']) ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="room-details">
                        <div class="room-type">
                            <i class="fas fa-bed"></i>
                            <div class="room-info">
                                <span class="room-label">Room Type</span>
                                <span class="room-value"><?php echo htmlspecialchars($res['RoomType']) ?></span>
                            </div>
                        </div>
                        <div class="bed-type">
                            <i class="fas fa-moon"></i>
                            <div class="bed-info">
                                <span class="bed-label">Bed Type</span>
                                <span class="bed-value"><?php echo htmlspecialchars($res['Bed']) ?></span>
                            </div>
                        </div>
                        <div class="room-count">
                            <i class="fas fa-door-open"></i>
                            <div class="count-info">
                                <span class="count-label">Rooms</span>
                                <span class="count-value"><?php echo $res['NoofRoom'] ?></span>
                            </div>
                        </div>
                        <div class="meal-plan">
                            <i class="fas fa-utensils"></i>
                            <div class="meal-info">
                                <span class="meal-label">Meal Plan</span>
                                <span class="meal-value"><?php echo htmlspecialchars($res['Meal']) ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="stay-details">
                        <div class="date-range">
                            <div class="checkin">
                                <i class="fas fa-calendar-check"></i>
                                <div class="date-info">
                                    <span class="date-label">Check-in</span>
                                    <span class="date-value"><?php echo $checkin_formatted ?></span>
                                </div>
                            </div>
                            <div class="checkout">
                                <i class="fas fa-calendar-times"></i>
                                <div class="date-info">
                                    <span class="date-label">Check-out</span>
                                    <span class="date-value"><?php echo $checkout_formatted ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="duration">
                            <i class="fas fa-calendar-day"></i>
                            <div class="duration-info">
                                <span class="duration-label">Duration</span>
                                <span class="duration-value"><?php echo $res['nodays'] ?> day<?php echo ($res['nodays'] > 1) ? 's' : '' ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="card-actions">
                        <?php if($res['stat'] != "Confirm") { ?>
                            <a href='roomconfirm.php?id=<?php echo $res['id'] ?>' class="action-btn confirm-btn">
                                <i class="fas fa-check"></i>
                                <span>Confirm</span>
                            </a>
                        <?php } ?>
                        <a href="roombookedit.php?id=<?php echo $res['id'] ?>" class="action-btn edit-btn">
                            <i class="fas fa-edit"></i>
                            <span>Edit</span>
                        </a>
                        <a href="roombookdelete.php?id=<?php echo $res['id'] ?>" class="action-btn delete-btn">
                            <i class="fas fa-trash"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- Table View (Hidden by default) -->
    <div class="roombooktable table-responsive-xl" id="table-view" style="display: none;">
        <table id="table-data">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Type of Room</th>
                    <th scope="col">Type of Bed</th>
                    <th scope="col">No of Room</th>
                    <th scope="col">Meal</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">No of Day</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Reset result pointer for table view
            mysqli_data_seek($roombookresult, 0);
            
            // Ensure we properly handle the result
            if ($roombookresult && mysqli_num_rows($roombookresult) > 0) {
                while ($res = mysqli_fetch_array($roombookresult)) {
            ?>
                <tr>
                    <td><?php echo $res['id'] ?></td>
                    <td><?php echo $res['Name'] ?></td>
                    <td><?php echo $res['Email'] ?></td>
                    <td><?php echo $res['Country'] ?></td>
                    <td><?php echo $res['Phone'] ?></td>
                    <td><?php echo $res['RoomType'] ?></td>
                    <td><?php echo $res['Bed'] ?></td>
                    <td><?php echo $res['NoofRoom'] ?></td>
                    <td><?php echo $res['Meal'] ?></td>
                    <td><?php echo $res['cin'] ?></td>
                    <td><?php echo $res['cout'] ?></td>
                    <td><?php echo $res['nodays'] ?></td>
                    <td><?php echo $res['stat'] ?></td>
                    <td class="action">
                        <?php
                            if($res['stat'] == "Confirm")
                            {
                                echo " ";
                            }
                            else
                            {
                                echo "<a href='roomconfirm.php?id=". $res['id'] ."'><button class='btn btn-success'>Confirm</button></a>";
                            }
                        ?>
                        <a href="roombookedit.php?id=<?php echo $res['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="roombookdelete.php?id=<?php echo $res['id'] ?>"><button class='btn btn-danger'>Delete</button></a>
                    </td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
<!-- Calendar requirements -->
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>

<!-- Core scripts -->
<script src="./javascript/roombook.js"></script>
<script src="./javascript/table-layout-fix.js"></script>
<script src="./javascript/booking-counter.js"></script>
<script src="./javascript/status-styling.js"></script>

<!-- Calendar implementation -->
<script src="./javascript/calendar-actions.js"></script>
<script src="./javascript/calendar-config.js"></script>
<script src="./javascript/calendar-toggle-new.js"></script>
<script src="./javascript/calendar-edit-debug.js"></script>
<script src="./javascript/enhanced-calendar-buttons.js"></script>

</html>
