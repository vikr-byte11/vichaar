<?php include 'db_connect.php' ?>
<?php 
$answers = $conn->query("SELECT distinct(survey_id) from answers where user_id ={$_SESSION['login_id']}");
?>
<div class="col-lg-12">
	<div class=" w-100" id='ns' style="display: none">
	  <center><b>No Result.</b></center>
	</div>
	<div class="row">
		<?php 
		$survey = $conn->query("SELECT * FROM survey_set where user_id ={$_SESSION['login_id']} ");
		while($row=$survey->fetch_assoc()):
		?>
		<div class="col-md-3 py-1 px-1 survey-item">
			<div class="card card-outline ">
              <div class="card-header">
                <h3 class="card-title"><?php echo ucwords($row['title']) ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: block;">
               <?php echo $row['description'] ?>
               <div class="row">
               	<hr class="border-success">
               	<div class="d-flex justify-content-center w-100 text-center">
					   <br>
               			<a href="index.php?page=view_survey_report&id=<?php echo $row['id'] ?>" class="btn btn-secondary"> View Report</a>
               	</div>
               </div>
              </div>
            </div>
		</div>
	<?php endwhile; ?>
	</div>
</div>
<script>
	function find_survey(){
		start_load()
		var filter = $('#filter').val()
			filter = filter.toLowerCase()
			console.log(filter)
		$('.survey-item').each(function(){
			var txt = $(this).text()
			if((txt.toLowerCase()).includes(filter) == true){
				$(this).toggle(true)
			}else{
				$(this).toggle(false)
			}
			if($('.survey-item:visible').length <= 0){
				$('#ns').show()
			}else{
				$('#ns').hide()
			}
		})
		end_load()
	}
	$('#search').click(function(){
		find_survey()
	})
	$('#filter').keypress(function(e){
		if(e.which == 13){
		find_survey()
		return false;
		}
	})
</script>