 

<script>
			function lettersonly(input) {
				var regex = /[^a-z]/gi;
				input.value = input.value.replace(regex, "");
			}
			</script>
				
<script>
				function numbersonly(input) {
				var regex = /[^0-9]/g;
				input.value = input.value.replace(regex, "");
			}
			</script>
				
<script>
				function numberof(input) {
				var regex = /[^1,2,3,4,5,6,7,8,9,]/g;
				input.value = input.value.replace(regex, "");
			}
			</script>	
				
				<script>
				function priceonly(input) {
				var regex = /[^0-9,.]/g;
				input.value = input.value.replace(regex, "");
			}
			</script>

<br>
<form  action="sellsubmit.php"  class="w3-container w3-card-4 w3-light-grey" method="post" enctype="multipart/form-data">

<h3>SELL FORM</h3>

<p style="text-align: left">
<label>Owner Name<b style="color:red">*</b></label>
<input class="w3-input w3-border w3-round-xxlarge" name="owner" id="owner" type="text" maxlength="40" placeholder="First-name only" onkeyup="lettersonly(this)" autocomplete="on" required>


<label>Mobile Number<b style="color:red">*</b></label>
<input class="w3-input w3-border w3-round-xxlarge" name="mobile" id="mobile" type="tel"  maxlength="10" placeholder="phone-number" onkeyup="numbersonly(this)" autocomplete="off" required>


<label>District<b style="color:red">*</b></label>
<input class="w3-input w3-border w3-round-xxlarge" name="district" id="district" type="text" maxlength="26" placeholder="your-district" onkeyup="lettersonly(this)" autocomplete="off" required></p>


<p style="text-align: left">
<label>Village<b style="color:red">*</b></label>

<input class="w3-input w3-border w3-round-xxlarge" name="village" id="village" type="text" maxlength="26" placeholder="your-village" onkeyup="lettersonly(this)" autocomplete="off" required>

<br>
<label>Animal Type (like cow,dog,buffallo)<b style="color:red">*</b></label>
<select  name="type" id="type">
    <option value="" selected >Selected </option>
    <option value="Buffallo He">Buffallo He</option>
    <option value="Buffallo She">Buffallo She</option>
    <option value="Cow">Cow</option>               
    <option value="Goat">Goat</option>   
	<option value="Dog">Dog</option>
	<option value="Puppies">Puppies</option>
	<option value="Other">Other</option>
  </select>
<br><br>


<label>Bread</label>
<input class="w3-input w3-border w3-round-xxlarge" name="breed" id="bread" type="text" placeholder="animal bread/nasal" autocomplete="off"></p>



<p style="text-align: left">
<label>Animal Age(Month)<b style="color:red">*</b></label>
<input class="w3-input w3-border w3-round-xxlarge" name="age" id="age" placeholder="1 " type="number" min="1" autocomplete="off" required>


<label>No of Animals</label>
<input class="w3-input w3-border w3-round-xxlarge" name="animalno" id="animalno" type="number" placeholder="1" value="1" readonly required >


<label>Expected Price<b style="color:red">*</b></label>
<input class="w3-input w3-border w3-round-xxlarge" name="price" id="price" type="text" onkeyup="priceonly(this)" placeholder="20,000" maxlength="6" autocomplete="off" required>
<br>
<label>Giving Milk</label>&nbsp;&nbsp;
<input  name="radio" id="radio" type="radio" value="Yes" required >Yes 
<input type="radio" id="radio" name="radio" value="No">No<br><br>


<label>Milk Per Day in litres </label>
<input class="w3-input w3-border w3-round-xxlarge" name="litter" id="litter" type="number" value="0"  min="0" max="40">


<label>Date </label>
<input class="w3-input w3-border w3-round-xxlarge" name="date" id="date" type="date" min="2017-01-01"  max="2019-01-01" >

<br>
<label>Upload Image of Animal</lable>
<input class="w3-input w3-border w3-round-xxlarge" type="file" name="fileToUpload" id="fileToUpload" required multiple></p>

<p>      
<input type="submit" name="sell" class="w3-btn w3-light-blue w3-hover-blue-grey w3-round-xxlarge"></p>



</form>




















