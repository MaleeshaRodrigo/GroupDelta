<?php include("partials/header.php"); ?>
<div class="booking-container">    
	<div class="body">
		<div class="container">
			<form class="bookingForm">
				<p id="topic">Tickets Booking Form</p>
				<input class="textField" type="text" name="myLocation" placeholder="Enter Your Location">
				<input	list="location" class="textField" name="myDestination" placeholder="Enter Your Destination">				
				<datalist id="location">
				<?php 


				?>
				<option value="Anchor_tag"> </option>
				</datalist>
				<p id="select">Select Ticket Class</p>
				<select class="classes">
					<option>1st class</option>
					<option>2nd class</option>
					<option>3rd class</option>
				</select>
				<p id="select">Number of Tickets</p>
				<input class="ticketsField" type="number" name="tickets" placeholder="Number of Tickets">
				<a href="#" id="pay">
					<button id="payBtn">
					Pay online
					<img src="images/pay.png">
					</button>
				</a>
			</form>
		</div>
	</div>
</div>

<?php include("partials/footer.php"); ?>