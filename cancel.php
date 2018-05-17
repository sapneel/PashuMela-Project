<?php include_once('header.php') ?>
				
<script>
				function numbersonly(input) {
				var regex = /[^0-9]/g;
				input.value = input.value.replace(regex, "");
			}
			</script>
				<br>
				<form action="deleteIndex.php" method="get">
Enter Your Mobile:
<input  name="mobile" id="mobile" type="mobile"  maxlength="10" placeholder="phone-number" onkeyup="numbersonly(this)"  autocomplete="off" required>
<input type="submit" name="show data" value="Show Data" class="w3-btn w3-light-blue w3-hover-blue-grey w3-round">


</form>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<br><br>

<?php include_once('footer.php'); ?>
</body>
</html>