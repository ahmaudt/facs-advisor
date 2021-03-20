<?php 
include $rootDir . "/data/vars.php";


?>
<?php
if ($advisor) echo "<input type='hidden' name='advisor' value='$advisor'";

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <div id="advisingItems" role="tablist" aria-multiselectable="true">
        <div class="card rounded-0 my-0 py-0">
          <div class="card-header border-left border-right" role="tab" id="advisingItemsHeader">
            <h4 class="mb-0">
              <a data-toggle="collapse" data-parent="#advisingItems" href="#advisingItemsContent" aria-expanded="true" aria-controls="advisingItemsContent">
                Advising Items
              </a>
            </h4>
          </div>
          <div id="advisingItemsContent" class="collapse my-0 py-0" role="tabpanel" aria-labelledby="advisingItemsHeader">
            <div class="card-body mx-0 px-0 my-0 py-0">
              <div class="card-group px-0 mx-0 my-0 py-0">
                <div class="card rounded-0">
                  <div class="card-header bg-danger text-white rounded-0"><h5>University Requirments</h5></div>
                  <div class="card-body">
                    <?php 
                      echo
                         "<div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='Cultural Diversity' form='plan'><a href='http://bulletin.uga.edu/Bulletin/cultural_div_family_consumer.html' target='_blank'>Cultural Diversity</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='Environmental Literacy or Awareness' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#Environmental' target='_blank'>Environmental Literacy or Awareness</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='U.S. Constitution' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#Constitution' target='_blank'>U.S. Constitution</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='GA Constitution' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#Constitution' target='_blank'>GA Constitution</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='U.S. &amp; GA History' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#History' target='_blank'>U.S. &amp; GA History</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='Experiential Learning' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#Experiential' target='_blank'>Experiential Learning</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='First-Year Freshmen Odyssey' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#Oral' target='_blank'>First-Year Freshmen Odyssey</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='Physical Education' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#Physical' target='_blank'>Physical Education</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='Residency Rule' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#Resident' target='_blank'>Residency Rule</a></label></div>
                          <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='degreeItems[]' value='39-Hour Rule' form='plan'><a href='http://bulletin.uga.edu/Bulletin_Files/uga_req.html#Undergraduate_degree' target='_blank'>39-Hour Upper Division Rule</a></label></div>";
                    ?>
                  </div>
                </div>
                <div class="card rounded-0">
                  <div class="card-header bg-primary text-white rounded-0"><h5>Helpful Referrals</h5></div>
                  <div class="card-body">
                  <?php 
                    echo 
                     "<div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='Eligible Courses to fulfill Core Class Requirements' form='plan'><a href='http://bulletin.uga.edu/GenEdCoreBulletin.aspx' target='_blank'>Eligible Courses to fulfill Core Class Requirements</a></label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='Office of the Registrar' form='plan'><a href='https://reg.uga.edu' target='_blank'>Office of the Registrar</a></label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='Office of Student Financial Aid'><a href='https://osfa.uga.edu' target='_blank'>Office of Student Financial Aid</a></label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='Bursar' form='plan'><a href='https://busfin.uga.edu/bursar/bursar_quick_links/' target='_blank'>Bursar's Office</a></label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='Student Account Acknowledgement Hold' form='plan'><a href='https://busfin.uga.edu/bursar/athena_student_acknowledgement_screen_shot_instructions.pdf' target='_blank'>Student Account Acknowledgement Hold</a></label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='Student Contact Information Hold' form='plan'><a href='https://reg.uga.edu/_resources/documents/imported/Contact_Information_Hold.pdf' target='_blank'>Student Contact Information Hold</a></label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='Variable Credit Hour Courses' form='plan'><a href='https://reg.uga.edu/student-forms/late-add-form/' target='_blank'>Course Late Add Form</a></label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='Variable Credit Hour Courses' form='plan'><a href='https://reg.uga.edu/student-forms/section-change/' target='_blank'>Course Section Change Form</a></label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='campusReferrals[]' value='https://reg.uga.edu/faculty-and-staff/curriculum-changes/' form='plan'><a href='https://reg.uga.edu/faculty-and-staff/curriculum-changes/' target='_blank'>Curriculum Change Request Form</a></label></div>";
                  ?>   
                  </div>
                </div>
                <div class="card rounded-0">
                  <div class="card-header bg-warning text-white rounded-0"><h5>SAGE Items</h5></div>
                  <div class="card-body">
                  <?php 
                    echo
                     "<div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='sageFlags[]' value='Expected Graduation' form='plan'>Expected Graduation</label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='sageFlags[]' value='OSFA'>Contact OSFA</label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='sageFlags[]' value='Double Dawgs' form='plan'>Double Dawgs</label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='sageFlags[]' value='Apply to Graduate'>Apply to Graduate</label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='sageFlags[]' value='Transcripts to UGA'>Transcripts to UGA</label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='sageFlags[]' value='Submit POD Form'>Submit POD Form</label></div>
                      <div class='form-check'><label class='form-check-label'><input type='checkbox' class='form-check-input' name='sageFlags[]' value='FACS Scholarship'>Apply for FACS Scholarship</label></div>";
                  ?>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
