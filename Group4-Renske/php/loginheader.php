<?php
if(!empty($_POST)){    
    echo("<br><a href='IngelogdeLeerling.php'>Access granted</a>");
}
?>
<div class='row'>                                                               <!-- Make a new row -->                
    <!-- Modal to show a login screen -->
    <div class="modal fade" id="LoginModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="modal-title">Please sign in</h2>
          </div>
          <div class="modal-body"> 
            <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
                <div class="form-group">
                  <label for="username">Your ID:</label>
                  <input required type="text" class="form-control" id="username" name="sUsername" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input required type="password" class="form-control" id="pwd" name="sPassword" placeholder="Password" autocomplete="off">
                </div>                        
                <td class="buttonsubmit" type="submit" class="btn btn-default">Sign in</td>
              </form>                    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->
    <div class='col-xs-3 col-sm-3 col-md-2 col-lg-2 align-left'>                <!-- Left part of the header block -->
        <div class="well well-lightgreen">                                      <!-- Fill color left part of the header block -->
            <img src="../images/global-logo.png" alt='logo global exploration' class="responsive" width="100"> <!-- Image with logo of the company -->
        </div>
    </div>
    <div class='col-xs-6 col-sm-6 col-md-8 col-lg-8 align-left'>               <!-- Middle part of the header block -->
        <div class="well well-lightgreen">
            <div class='h2 text-center white'>Global Exploration</div><!-- Titlebox of the application -->
        </div>
    </div>
    <div class='col-xs-3 col-sm-3 col-md-2 col-lg-2 align-left'>                <!-- Right part of the header block -->                                                                          
        <div class="well well-lightgreen">
            <button data-toggle="modal" data-target="#LoginModal"><h3>Sign-in</h3></button> <!-- Button to start the sign-in modal -->                                                                                                  
        </div>
    </div>                
</div>