 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_booking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security

$name = $_POST['name'];

$email = $_POST['email'];

$phone = $_POST ['phone'];

$arrive = $_POST['arrive'];

$depart = $_POST['depart'];

$people = $_POST ['people'];

$rooms = $_POST['rooms'];

$comments = $_POST ['comments'];

// attempt insert query execution

mysqli_query($conn, "INSERT INTO booking (name, email, phone, arrive, depart, people, rooms, comments) VALUES ('$name', '$email', '$phone', '$arrive', '$depart', '$people', '$rooms', '$comments')");

if(mysqli_affected_rows($conn)>0){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

 

// close connection

mysqli_close($conn);

?>