<?php include_once('header.php') ?>



    <div class="container">
    	
        <div class="page-header">
Ajax SweetAlert for Live Data Deleting Rows in with PHP~MySQL~Ajax</a></h1>
        </div>
        
        <div id="load-post"></div> <!-- products will be load here -->
    
    </div>

    <?php include_once('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/swal2/sweetalert2.min.js"></script>


<script>
	$(document).ready(function(){
		
		readProducts(); /* it will load products when document loads */
		
		$(document).on('click', '#delete_post', function(e){
			
			var selllD = $(this).data('id');
			SwalDelete(selllD);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(selllD){
		
		swal({
			title: 'Are you sure?',
			text: "It will be deleted permanently!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
			  return new Promise(function(resolve) {
			       
			     $.ajax({
			   		url: 'delete.php',
			    	type: 'POST',
			       	data: 'delete='+selllD,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('Deleted!', response.message, response.status);
					readProducts();
			     })
			     .fail(function(){
			     	swal('Oops...', 'Something went wrong with ajax !', 'error');
			     });
			  });
		    },
			allowOutsideClick: false			  
		});	
		
	}
	
	function readProducts(){
		$('#load-post').load('readForDelete.php');	
	}
	
</script>
</body>
</html>