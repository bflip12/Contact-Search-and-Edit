
<footer class="footer">
 <p >Copyright 2016</p>
 <script>
 	$.fn.editable.defaults.mode = 'popup';
 	$(document).ready(function() {
 		$('.fname').editable();
 		$('.lname').editable();
 		$('.phone').editable();
 		$('.email').editable();
 		$("#txtSearch").keyup(function(){
 			if($(this).val() == ''){
 				$("#tbFull").show();
 				$("#tbListing").hide();
 			}
 			else{
 				var data = $(this).val();
 				$.ajax({
 					type: "POST",
 					url: "<?= base_url();?>index.php?/Search/LiveSearch/" + $("#txtSearch").val(),
 					data: data,
 					success: function(data){ // this happens after we get results
 						var newhtml = [];
 						var myObject = JSON.parse(data);
 						newhtml.push(" <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>E-mail</th></tr>");
 						for (var i = 0; i < myObject.length; i++){
 									var r = myObject[i];
 									newhtml.push("<tr><td>" + r.id + "</td><td>" + r.fname + "</td><td>" + r.lname + "</td><td>" + r.phone + "</td><td>" + r.email + "</td></tr>");
 									$("#tbListing").html(newhtml);
 						}
 					}
 				});
 				$("#tbFull").hide();
 				$("#tbListing").show();
 			}
 			return false;
 		});

 	});
  </script>
 </footer>

</body>
</html>
