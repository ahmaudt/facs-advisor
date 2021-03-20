<?php 
include $rootDir . "/data/vars.php";


?>
<?php
if ($advisor) echo "<input type='hidden' name='advisor' value='$advisor'";

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <div id="customItems" role="tablist" aria-multiselectable="true">
      <div class="card rounded-0">
        <div class="card-header" role="tab" id="customItemsHeader">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#customItems" href="#customItemsContent" aria-expanded="true" aria-controls="customItemsContent">
              Custom Items
            </a>
          </h5>
        </div>
        <div id="customItemsContent" class="collapse in" role="tabpanel" aria-labelledby="customItemsHeader">
          <div class="card-body">
          <?php if ($advisor == "allen") {
                    for ($i = 1; $i <= 18; $i++) {
                      if ($i == 8 || $i == 9 || $i == 10 || $i == 11 || $i == 14 || $i == 15 || $i == 18)
                        $checked = "checked";
                      else
                        $checked = "";
                      echo "<div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' $checked name='allen$i' value='" . ${"allen" . $i} . "'>${"allen" . $i}</label></div>";
                      } 
                    } 
                  if ($advisor == "hull") {
                        for ($i = 1; $i <= 9; $i++) {
                          if ($i == 8 || $i == 9 || $i == 10 || $i == 11 || $i == 14 || $i == 15 || $i == 18)
                            $checked = "checked";
                          else
                            $checked = "";
                          echo "<div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' $checked name='hull$i' value='" . ${"hull" . $i} . "'>${"hull" . $i}</label></div>";
                        } 
                    } 
                  if ($advisor == "patt") {
                        for ($i = 1; $i <= 30; $i++) {
                          if ($i == 8 || $i == 9 || $i == 10 || $i == 11 || $i == 14 || $i == 15 || $i == 18)
                            $checked = "checked";
                          else
                            $checked = "";
                        echo "<div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' $checked name='patt$i' value='" . ${"patt" . $i} . "'>${"patt" . $i}</label></div>";
                        } 
                    } 
                  if ($advisor == "ahmaud") {
                    $select_item = array(
                      array('name' => 'Summer Online Courses: These courses are typically offered every summer- HDFS 2100E, 2950E, 2200E, 3700E, 3930E, 4610E, FDNS 4050E, FHCE 3200E',
                            'value' => 'Summer Online Courses: These courses are typically offered every summer- HDFS 2100E, 2950E, 2200E, 3700E, 3930E, 4610E, FDNS 4050E, FHCE 3200E'    
                      ),
                    );
                    $item_detail = array(
                      array('name' => 'Summer Online Courses: These courses are typically offered every summer- HDFS 2100E, 2950E, 2200E, 3700E, 3930E, 4610E, FDNS 4050E, FHCE 3200E',
                            'value' => 'Summer Online Courses: These courses are typically offered every summer- HDFS 2100E, 2950E, 2200E, 3700E, 3930E, 4610E, FDNS 4050E, FHCE 3200E'    
                      ),
                    );
                    $string = "";
                    foreach($select_item as $key => $val) {
                      $string .= ',' .$val['value'];
                    }
                    $string = substr($string,1);
                    $string = explode(',',$string);
                    foreach($item_detail as $ld)
                    if(in_array($ld['value'],$string)) { ?>
                      <div class='form-check'><input type='checkbox' class='form-check-input' checked name='ahmauds[]' value='<?php echo $ld['value'] ?>'><label class='form-check-label'><?php echo $ld['name'];?></label></div>
                    <?php } else { ?>
                      <div class='form-check'><input type='checkbox' class='form-check-input' checked name='ahmauds[]' value='<?php echo $ld['value'] ?>'><label class='form-check-label'><?php echo $ld['name'];?></label></div>
                   <?php }
                            
                   }
                  ?>
          </div>
        </div>
      </div>
      <div class="card rounded-0">
        <div class="card-header" role="tab" id="section2HeaderId">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#advisingItems" href="#section2ContentId" aria-expanded="true" aria-controls="section2ContentId">
              General Items
            </a>
          </h5>
        </div>
        <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
          <div class="card-body">
          <?php
            for ($i = 1; $i < 6; $i++) {
                    echo "<div class='form-check'><label class=''form-check-label><input type='checkbox' class='form-check-input' name='gen$i' value='" . ${"gen" . $i} . "'>${"gen" . $i}</label></div>";
          }?>
          </div>
        </div>
      </div>
    </div>
