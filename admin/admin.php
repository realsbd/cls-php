<?php
    include('session.php'); // Includes Login Script
    if(isset($login_session)){
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "howtxxfi_clsadmin", "abimbolaAbimbola", "howtxxfi_clsloan", 2083);
$query = mysqli_query($connection, "select * from detail order by id DESC");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Dashboard</h1>
    <div id="profile">
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
    </div>
    <table class="table table-dark">
        <thead>
            <tr style="font-size: .7rem;">
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Business</th>
            <th scope="col">Revenue</th>
            <th scope="col">Biz Yrs</th>
            <th scope="col">Industry</th>
            <th scope="col">requested_amount</th>
            <th scope="col">Biz Add.</th>
            <th scope="col">Biz City</th>
            <th scope="col">Biz Zip</th>
            <th scope="col">Biz Phone</th>
            <th scope="col">Structure</th>
            <th scope="col">Percentage</th>
            <th scope="col">EIN/SSN</th>
            <th scope="col">Rounting</th>
            <th scope="col">Bank Last 4 digit</th>
            <th scope="col">Website</th>
            <th scope="col">Home Add</th>
            <th scope="col">Home City</th>
            <th scope="col">Home State</th>
            <th scope="col">H. Zip</th>
            <th scope="col">SSN</th>
            <th scope="col">DOB</th>
            </tr>
        </thead>
<?php 
while ($row = mysqli_fetch_assoc($query)) {
?>
        <tbody>
            <tr style="font-size: .5rem;">
            <td><?php echo $row["first_name"]; ?></td>
            <td><?php echo $row["last_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["cell_phone"]; ?></td>
            <td><?php echo $row["business_name"]; ?></td>
            <td><?php echo $row["monthly_revenue"]; ?></td>
            <td><?php echo $row["time_in_business"]; ?></td>
            <td><?php echo $row["industry"]; ?></td>
            <td><?php echo $row["requested_amount"]; ?></td>
            <td><?php echo $row["business_address"]; ?></td>
            <td><?php echo $row["business_city"]; ?></td>
            <td><?php echo $row["business_state"]; ?></td>
            <td><?php echo $row["business_zip"]; ?></td>
            <td><?php echo $row["business_phone"]; ?></td>
            <td><?php echo $row["company_structure"]; ?></td>
            <td><?php echo $row["ownership_percent"]; ?></td>
            <td><?php echo $row["ein"]; ?></td>
            <td><?php echo $row["bank_routing_number"]; ?></td>
            <td><?php echo $row["bank_last_4_digits"]; ?></td>
            <td><?php echo $row["business_website"]; ?></td>
            <td><?php echo $row["home_address"]; ?></td>
            <td><?php echo $row["home_city"]; ?></td>
            <td><?php echo $row["home_state"]; ?></td>
            <td><?php echo $row["home_zip"]; ?></td>
            <td><?php echo $row["ssn"]; ?></td>
            <td><?php echo $row["dob"]; ?></td>
            </tr>
        </tbody>
<?php } 
mysqli_free_result($query);
?>
    </table>
</body>
<?php
mysqli_close($connection);
?>
</html>