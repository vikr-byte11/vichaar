<?php include('db_connect.php') ?>
<!-- Info boxes -->
        <div class="row">
        <div > 
           <center> <p style="font-size:60px; "> Welcome to Vichar | The Online Survey</p> </center>
            
        </div>
        <br>
          <div class="col-12 col-sm-6 col-md-3" style="margin-left:250px;margin-top:50px; ">
            <div class="info-box" style="background-color: #dff3e3">
              <span class="info-box-icon " style="background-color: #1fab89"><i class="fas fa-users" style="color:white;"></i></span> 
                <!-- colors  -->
              <div class="info-box-content">
    
                <span class="info-box-text">Total Surveys taken</span>
                <span class="info-box-number">
                <?php echo $conn->query("SELECT distinct(survey_id) FROM answers  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3" style="margin-top:50px">
            <div class="info-box mb-3" style="background-color: #dff3e3">
              <span class="info-box-icon elevation-1" style="background-color:#1fab89"><i class="fas fa-poll-h" style="color:white;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Surveys created</span>
                 <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM survey_set where user_id = {$_SESSION['login_id']}")->num_rows; ?>
                
                </span>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
      </div>