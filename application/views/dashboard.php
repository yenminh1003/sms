

<div class="row">
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<a href="student?opt=mgst" style="color:white;">
					Tổng số sinh viên : <span class="badge"><?php echo $countTotalStudent; ?></span>	
				</a>				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<a href="teacher">
					
Tổng số giáo viên : <span class="badge"><?php echo $countTotalTeacher; ?></span>	 	
				</a>
				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-heading">
				<a href="classes">
					
Tổng số lớp : <span class="badge"><?php echo $countTotalClasses; ?></span>		
				</a>
				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<a href="marksheet?opt=mngms">
					Tổng số bảng : <span class="badge"><?php echo $countTotalMarksheet; ?></span>	
				</a>
			</div>			
		</div>
	</div>

	<div class="col-md-5">
		<div class="panel panel-default">
			<div class="panel-heading"> 
Thu nhập trọn đời </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo $totalIncome; ?> </b></h3>	
				</center>				
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"> 
Học phí trọn đời </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo $totalExpenses; ?></b></h3>	
				</center>
				
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"> 
Ngân sách hiện tại </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo $totalBudget; ?></b></h3>
				</center>
			</div>	
		</div>
	</div>

	<div class="col-md-7">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Lịch</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
	</div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $("#topNavDashboard").addClass('active');
    $("#calendar").fullCalendar();
  });
</script>

