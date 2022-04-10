<?php include("partials/header.php"); ?>
<div class="sign-up-body">
	<div class="container">
		<div class="red">
			<p align="center">LOG-IN FOR THE SRI LANKA RAILWAY SCHEDULE</p>
		</div>
		<div class="red123">
			<form align="center">
				User Name <br>
				<input class="textField" type="text" placeholder="Enter Your User Name"><br><BR>
				Email <br>
				<INPUT class="textField" TYPE="TEXT" Placeholder="Enter Your Email Adress"><br><BR>
				Contact Number<br>
				<INPUT class="code" TYPE="NUMBER" size="10" maxlength="3" placeholder="+94"><input type="text" PLACEHOLDER="Enter The Contact Number" class="textField"><br><BR>
				Password<BR>
				<input class="passwordField" type="password" PLACEHOLDER="Enter Password">
				<button class="resetbtn">
					<INPUT class="reset" type="ceset" value="Reset">
				</button><br>
				<input class="passwordField" type="password" PLACEHOLDER="Confirm Password">
				<button class="resetbtn">
					<INPUT class="reset" type="ceset" value="Reset">
				</button><br><BR>
				Nationality<br>
				<div class="national">
					<label for="aaa">Sri Lankan</label>
					<input type="radio" name="aaa" id="aaa">
					<label for="abb">Other</label> 
					<input type="radio" name="aaa" id="abb">
				</div>
				<BR><BR><BR>
				<button class="submitbtn">Submit</button>
			</form>
		</div>
	</div>
</div>

<?php include("partials/footer.php"); ?>