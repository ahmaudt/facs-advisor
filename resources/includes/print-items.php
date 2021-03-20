<?php
$rootDir = dirname(__DIR__) . "/ssac";
$srcDir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'ssac/vendor';
require $srcDir . DIRECTORY_SEPARATOR . 'autoload.php';
$Extra = new ParsedownExtra();
include $rootDir . "/includes/common.php";
include $rootDir . "/data/vars.php";
include $rootDir . "/data/post_vars.php";

?>
  
  <div class="card rounded-0">
        <div class="card-header bg-danger text-white rounded-0"><h4 class="font-weight-bold">Academic Notifications</h4></div>
        <div class="card-body">
          <div class="table-responsive-lg">
            <table class="table table-sm">
              <tbody>
                <?php 
                if ($advisor == "hull") {
                  for($i = 1; $i <= 9; $i++) { 
                      if(isset($_POST["hull".$i])) { 
                        echo "<tr><td>";?><?php "" . "";?><?php echo $Extra->text("`".$_POST["hull".$i]."`") ."</td></tr>"; 
                      } 
                  }
                }
                if($advisor == "patt") {
                  for($i = 1; $i <= 9; $i++) { 
                    if(isset($_POST["patt".$i])) { 
                      echo "<tr><td>";?><?php "" . "";?><?php echo $Extra->text("`".$_POST["patt".$i]."`") ."</td></tr>"; 
                    } 
                  }
                }
                if ($advisor == "allen") {
                  for($i = 1; $i <= 9; $i++) { 
                    if(isset($_POST["allen".$i])) { 
                      echo "<tr><td>";?><?php "" . "";?><?php echo $Extra->text("`".$_POST["allen".$i]."`") ."</td></tr>"; 
                    } 
                  }
                }
                if($advisor == "ahmaud") {
                  for($i = 1; $i <= 9; $i++) { 
                    if(isset($_POST["ahmaud".$i])) { 
                      echo "<tr><td>";?><?php "" . "";?><?php echo $Extra->text("`".$_POST["ahmaud".$i]."`") ."</td></tr>"; 
                    } 
                  }    
                }
                ?>
              </tbody>
            </table>
        </div>
    </div>
      </div>

