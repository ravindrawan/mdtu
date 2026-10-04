<?php
$servername = "localhost";
$username = "root";
$password = "Ravi@2025";
$dbname = "mdtunwgo_mdtu";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NIC Search</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-3xl mx-auto bg-white shadow-lg p-6 rounded-xl">
        <h2 class="text-2xl font-bold mb-4 text-center">Search by NIC</h2>

        <form method="GET" class="mb-4">
            <label class="block font-semibold mb-1">Enter NIC</label>
            <input type="text" name="nic" id="nic" class="w-full p-2 border rounded" placeholder="Type NIC...">
            <button class="mt-3 w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Search</button>
        </form>

        <?php
        if(isset($_GET['nic']) && $_GET['nic'] !== ''){
            $nic = $_GET['nic'];
            $sql = "SELECT * FROM resource_persons WHERE nic LIKE '%$nic%'";
            $result = mysqli_query($conn, $sql);

            echo '<div class="flex justify-between items-center mb-2">';
            echo '<h3 class="text-lg font-semibold">Search Results</h3>';
            echo '<button onclick="window.print()" class="bg-green-600 text-white px-3 py-1 rounded">Download PDF</button>';
            echo '</div>';

            if(mysqli_num_rows($result) > 0){
                echo '<table class="w-full border text-sm">';
                echo '<tr class="bg-gray-200 font-bold">';
                echo '<td class="p-2 border">#</td>';
                echo '<td class="p-2 border">NIC</td>';
                echo '<td class="p-2 border">Name</td>';
                echo '<td class="p-2 border">Contact</td>';
                echo '</tr>';
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){
                    $rowColor = $i % 2 === 0 ? 'bg-gray-100' : 'bg-white';
                    echo "<tr class='$rowColor'>";
                    echo '<td class="p-2 border">'.$i.'</td>';
                    echo '<td class="p-2 border">'.$row['nic'].'</td>';
                    echo '<td class="p-2 border">'.$row['fullname'].'</td>';
                    echo '<td class="p-2 border">'.$row['contact'].'</td>';
                    echo '</tr>';
                    $i++;
                }
                echo '</table>';
                echo "<p class='mt-2 font-semibold'>Total: ".($i-1)." record(s)</p>";
            } else {
                echo '<p class="text-red-600 font-semibold">No records found.</p>';
            }
        }
        ?>
    </div>

<script>
// NIC Autocomplete
$(document).ready(function(){
    $('#nic').keyup(function(){
        let query = $(this).val();
        if(query.length >= 2){
            $.ajax({
                url:'nic_auto.php',
                method:'POST',
                data:{query:query},
                success:function(data){
                    $('#nic').autocomplete({ source: JSON.parse(data) });
                }
            });
        }
    });
});
</script>

</body>
</html>