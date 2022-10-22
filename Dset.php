<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Set</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
</head>
<body>
    <div>
    <form id="settrip" class="input-group" action="dset.inc.php" method="post">
				<input type="text" name="from" class="input-field" placeholder="From" required="">
				<br><br>
                <input type="text" name="destination" class="input-field" placeholder="Destination" required="">
				<br><br>
				<input type="number" name="seatav" class="input-field" placeholder="Number of Seats Available" required="">
				<br><br>
                <input type="number" name="tcost" class="input-field" placeholder="Estimated cost of trip" required="">
				<br><br>                
                <input type="text" name="name" class="input-field" placeholder="Route to be used" required="">
				<br><br>
                <button type="submit" class="submit-btn" name="dsetsubmit"><b>SET TRIP</b></button>

				<br><br><br>
				<button type="submit" class="submit-btn" name="dsetsubmit"><b>SET TRIP</b></button>

			</form>
    </div>
</body>
</html>