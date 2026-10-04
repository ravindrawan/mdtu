
<html>
<header>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
	</header>
<body>
<?Php

	include "db.php"; // call the database connection

$sql ="SELECT cp_trainingapplications.tapp_atpid, cp_trainingapplications.tapp_id, cp_trainingapplications.tapp_officerNid, cp_trainingapplications.tapp_trstartdate, cp_staff.stf_Nid, cp_staff.stf_Name, cp_staff.stf_dob, cp_staff.stf_sex, cp_staff.stf_desig, cp_staff.stf_office, cp_staff.stf_suboff, cp_staff.stf_mobile, cp_staff.stf_email, cp_staff.stf_service, cp_staff.stf_class, cp_staff.stf_firstappdate FROM cp_trainingapplications  INNER JOIN cp_staff ON cp_trainingapplications.tapp_officerNid = cp_staff.stf_Nid";


				
			


//$sql = "SELECT * FROM `cp_trainingapplications` WHERE `tapp_atpid`='800'";
$result = $con->query($sql);
//	$off=trim(htmlspecialchars($_POST["office"]));
//	$atpid=trim(htmlspecialchars($_POST["trname"]));
// 
	//$sqld="SELECT * FROM trdate where trd_id='1'";
//	$rsd=mysqli_query($con,$sqld);
//	$rowsd=mysqli_fetch_assoc($rsd);
	//------------





// SQL query to retrieve data from the table

if ($result->num_rows > 0) {
    // Output data as a table
    echo "<table>
            <tr>
                <th>ID</th>
				<th>tapp_atpid</th>
                <th>NIC</th>
                <th>Office</th>
				<th>tr</th>
                <th>Training</th>
                <th>Date</th>
				<th>Relevent</th>
                <th>Priort</th>
                <th>Accomodation</th>
				<th>ffff</th>
                <th>dddd</th>
                <th>dd</th>
                <th>dddd</th>
                <th>dd</th>
            </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
				<td>".$row["tapp_id"]."</td>
				<td>".$row["tapp_atpid"]."</td>
				<td>".$row["tapp_officerNid"]."</td>
				<td>".$row["tapp_applieddate"]."</td>
				<td>".$row["stf_Nid"]."</td>
				<td>".$row["stf_Name"]."</td>
				<td>".$row["stf_dob"]."</td>
				<td>".$row["stf_sex"]."</td>
				<td>".$row["stf_desig"]."</td>
				<td>".$row["stf_office"]."</td>
				<td>".$row["stf_suboff"]."</td>
				<td>".$row["stf_mobile"]."</td>
				<td>".$row["stf_email"]."</td>
				<td>".$row["stf_service"]."</td>
				<td>".$row["stf_class"]."</td>
				<td>".$row["stf_firstappdate"]."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$con->close();
?>


</body>
</html>