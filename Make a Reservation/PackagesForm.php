<html>
<head>
<title>Packages From PHP</title>
</head>

<body>
	<?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pixcelencedb";

        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //check connection
        if($conn->connect_error){
            die("Connection Failed: ".$conn->connect_error);
        }
        
        $sql = "INSERT INTO 
                reservation(FirstName,LastName,Email,Phone,EventDate,Venue,Package,CustomerMessage)
                VALUES
                ('".$_POST["fname"]."',
                '".$_POST["lname"]."',
                '".$_POST["email"]."',
                ".$_POST["phone"].",
                '".$_POST["date"]."',
                '".$_POST["venue"]."',
                '".$_POST["Category"]."',
                '".$_POST["textarea"]."')";
        
        if($conn->query($sql) === TRUE){
            echo "<h2 style = 'color: green; text-align:center;'>Your data was sent successfully to Pixcelence | Art Studio!</h2>";
        }
        else{
            echo "<h2 style = 'color: red; text-align:center;'>Error: Your data is unable sent to Pixcelence | Art Studio! </h2>".$conn->error;
        }

        $conn->close();
	?>
</body>

</html>