<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>


<script>
	$(document).ready(function() {
    $('#datatable1').DataTable();
});

</script>



<!-- Testing javascript function -->
<script>
	$(document).ready(function(){
		

		$('.confirm-delete').click(function (e){
			e.preventDefault();



			confirmDialog = confirm("Are you sure you want to delete this data?");
             if (confirmDialog) {

              var id = $(this).val();
				//alert($id);

				$.ajax({
					type: "POST",
					url: "/employee/confirmdelete/"+id,
					success: function(response) {
						alert("Data Deleted Successfully");
						window.location.reload();
					}
});



				}




			//alert("I am Here");

			


			});

	});


</script>


<!-- <script>
	$(document).ready(function(){
		$('.confirm-delete').click(function (e){
			e.preventDefault();
			var id = $(this).val();

			confirmDialog = confirm("Are you sure you want to delete this data?");
			if (confirmDialog) {
				$.ajax({
					type: "DELETE",
					url: "/employee/confirmdelete/" + id,
					success: function(response) {
						alert("Data Deleted Successfully");
						window.location.reload();
					}
				});
			}
		});
	});
</script> -->

</body>

</html>
