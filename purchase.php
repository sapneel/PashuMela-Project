<?php include_once('header.php') ?>

<div class="w3-container w3-white"> 

<center>Search Animals</center>

</div>
<form action="search.php" method="get">
<br><br><br><center><b>Select Animal Type</b> <br><br>
<table style= "width:30%; background-color:lightblue " >
<tr>
<td><input  name="animal" type="radio" value="Buffallo">Buffallo</td> 
<td><input  name="animal" type="radio" value="Cow">Cow </td>
<td><input  name="animal" type="radio" value="Goat">Goat </td>
<td><input  name="animal" type="radio" value="Dog">Dog </td>
<td><input  name="animal" type="radio" value="Puppies">Puppies</td>
<td><input name="animal" type="radio" value="Other">Other</td>
</tr>
</table><br>
<b>Giving Milk</b>&nbsp;&nbsp;&nbsp;
<input  name="milk" type="radio" value="yes">Yes 
<input  name="milk" type="radio" value="no">No
<br><br>
<p>      
<input type="submit" class="w3-btn w3-light-blue w3-hover-blue-grey w3-round-xxlarge" value="Search"></p>

</center>

</form>


<br><br><br><br><br><br><br><br>
<?php include_once('footer.php'); ?>
</body>




























</html>