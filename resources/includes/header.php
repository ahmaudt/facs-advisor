<!doctype html>
<html lang="en">
  <head>
    <title>SSAC Advising</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The College of Family and Consumer Sciences">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/uga-header.css">
    <link rel="stylesheet" href="./css/uga-footer.css">
	
<style type="text/css" media="print">
    
.noprint { display: none; }
</style>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	
  </head>

  <body>
  <header class="ugaheader ugaheader--black ugaheader--border ugaheader--border-red">
			<div class="ugaheader__container">
				<div class="ugaheader__row">
					<div class="ugaheader__wordmark">
						<a class="ugaheader__wordmark-link" href="https://www.uga.edu/">
							University of Georgia
						</a>
					</div>
					<div class="ugaheader__nav-container">
						<!-- Menu toggle button displays on smaller screen sizes -->
						<button id="ugaheader__nav-menu-toggle" class="ugaheader__nav-menu-toggle" aria-expanded="false" aria-label="Toggle Menu">
							<i class="fas fa-fw fa-caret-down" title="Toggle Menu" aria-hidden="true"></i>
						</button>
						
						<nav class="ugaheader__nav">
							<!-- Standard Links -->
								<div class="dropdown ugaheader__nav-list ugaheader__nav-links">
  									<button class="btn btn-secondary btn-sm dropdown-toggle rounded-0 border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 Forms
									</button>
									<div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton">
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://reg.uga.edu/student-forms/late-add-form/" target="_blank">Late-Add</a>
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://reg.uga.edu/student-forms/section-change/" target="_blank">Section Change</a>
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://reg.uga.edu/faculty-and-staff/curriculum-changes/" target="_blank">Curriculum Change</a>
									</div>
								</div>
								<div class="dropdown ugaheader__nav-list ugaheader__nav-links">
  									<button class="btn btn-secondary btn-sm dropdown-toggle rounded-0 border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 Advising
									</button>
									<div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton">
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://sage.uga.edu" target="_blank">SAGE</a>
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://degreeworks.uga.edu" target="_blank">DegreeWorks</a>
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://sso.uga.edu/cas/login?service=https://ssomanager-prod.uga.edu:443/ssomanager/c/SSB" target="_blank">ATHENA</a>
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://banneradmin-prod.uga.edu/applicationNavigator/" target="_blank">Banner</a>
									</div>
								</div>
								<div class="dropdown ugaheader__nav-list ugaheader__nav-links">
  									<button class="btn btn-secondary btn-sm dropdown-toggle rounded-0 border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 How-To's
									</button>
									<div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton">
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://reg.uga.edu/_resources/documents/Variable_Hour_Guide.pdf" target="_blank">Change Credit Hrs</a>
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://busfin.uga.edu/bursar/athena_student_acknowledgement_screen_shot_instructions.pdf" target="_blank">Acct Acknowldgmnt Hold</a>
										<a class="ugaheader__nav-list-link dropdown-item py-1" href="https://reg.uga.edu/_resources/documents/imported/Contact_Information_Hold.pdf" target="_blank">Contact Info Hold</a>
									</div>
								</div>
								<ul class="ugaheader__nav-list ugaheader__nav-links">
									<li class="ugaheader__nav-list-element">
										<a class="ugaheader__nav-list-link" href="https://reg.uga.edu" target="_blank">Registrar</a>
									</li>
									<li class="ugaheader__nav-list-element">
										<a class="ugaheader__nav-list-link" href="https://osfa.uga.edu" target="_blank">OSFA</a>
									</li>
									<li class="ugaheader__nav-list-element">
										<a class="ugaheader__nav-list-link" href="https://busfin.uga.edu/bursar/bursar_quick_links/" target="_blank">Bursar</a>
									</li>
								</ul>
                
							
							<!-- Button Links -->
							<ul class="ugaheader__nav-list ugaheader__nav-buttons">
								
							</ul>
							<!-- Social Media Icons (FontAwesome 5) -->
							
							<!-- Search Element -->
							<form action="https://www.uga.edu/search.php" class="ugaheader__search">
								<button type="button" id="ugaheader__search-toggle" class="ugaheader__search-toggle" aria-expanded="false" aria-label="Toggle Search">
									<i class="fas fa-fw fa-search" title="Toggle Search" aria-hidden="true"></i>
								</button>
								<div id="ugaheader__search-field" class="ugaheader__search-field">
									<label id="ugaheader__search-label" class="ugaheader__form-label" for="ugaheader__search-input">Search</label>
									<input id="ugaheader__search-input" class="ugaheader__search-input" type="search" name="q" placeholder="Search" aria-labelledby="ugaheader__search-label" autocomplete="off">
								</div>
								<button type="submit" class="ugaheader__search-submit">Submit</button>
							</form>
						</nav>
					</div>
				</div>
			</div>
		</header>
		