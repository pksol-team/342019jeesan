<?php
/* Template Name: Form Page */
?>
<?php
if ( is_front_page() ) :
get_header( 'home' );
elseif ( is_page( 'About' ) ) :
get_header( 'about' );
else:
get_header();
endif;

$mainRootDirectory = dirname(dirname(dirname(get_template_directory())));

require $mainRootDirectory.DIRECTORY_SEPARATOR.'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();



?>
	<div class="test">

		<div class="knowledge">
			<p>Naseej provides Knowledge organizations with the most renowned and best specialized databases in the world.  </p>
			<p>To get access to the databases, please use the below form:</p>

			

		</div>

		<br><br>

		<div class="filter_search">
			<form class="search-submit-form">
				<div class="form-row">
					<!-- COUNTRY -->
					<div class="form-group col-lg-6">
						  	<div class="form-group">
						    	<label for="country">Country <span class="required-field">*</span> </label>
								<?php 
									$countries_file = $mainRootDirectory.DIRECTORY_SEPARATOR.'Naseej Databases'.DIRECTORY_SEPARATOR.'Countries.xlsx';
									$spreadsheet_country = $reader->load($countries_file);
									$sheet_country = $spreadsheet_country->getSheet(0);
									$sheetData_country = $sheet_country->toArray(null, true, true, true);
									

									$countries_string = '';
									$country_index = 0;
									foreach ($sheetData_country as $key => $single_country) {
										
										if ($country_index != 0) {
											$countries_string .= '<option value="'.$single_country['B'].'">'.$single_country['B'].'</option>';	
										}
										
										$country_index++;
									}

								?>
						    	<select id="countries" class="form-control" name="countries">
									<option value="-1">-- Select --</option>
									<?= $countries_string; ?>
								</select>
						 	</div>
					</div>
					
					<!-- SUBJECT -->

					<div class="form-group col-lg-6">
							<div class="form-group">
							    <label for="subject">Subject <span class="required-field">*</span></label>
								<?php 
									
									$subjects_file = $mainRootDirectory.DIRECTORY_SEPARATOR.'Naseej Databases'.DIRECTORY_SEPARATOR.'Subjects.xlsx';
									$spreadsheet_subjects = $reader->load($subjects_file);
									$sheet_subjects = $spreadsheet_subjects->getSheet(0);
									$sheetData_subjects = $sheet_subjects->toArray(null, true, true, true);
									

									$subject_string = '';
									$subject_index = 0;
									foreach ($sheetData_subjects as $key => $single_subject) {
										
										if ($subject_index != 0) {
											$subject_string .= '<option value="'.$single_subject['A'].'">'.$single_subject['A'].'</option>';	
										}
										
										$subject_index++;
									}

								?>
							    <select id="subject" class="form-control" name="subject">
									<option value="-1">-- Select --</option>
									<?= $subject_string; ?>
								</select>
						  	</div>
					</div>
					<div class="form-group col-12 text-center button-search">
						<input class="btn btn-primary" type="submit" value="Search">
					</div>
				</div>
								
				<div class="naseej-loader">
					<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
				</div>

			</form>
		</div>
		<div class="filter_sheet_data">
			<div class="row">
				<div class="col-lg-12">
					<small style="margin-bottom: 10px; display: block;">For Trial request and pricing information please click <span id="sel">"Select"</span> next any of the titles of interest</small>
				</div>
			</div>
			<table id="example" class="display " style="width:100%">
		        <thead>
		        	<tr>
			            <th scope="col">Code</th>
			            <th scope="col">Vendor</th>
			            <th scope="col">Format</th>
			            <th scope="col">Product Name</th>
			            <th scope="col">Type</th>
			            <th scope="col">&nbsp;</th>
		            </tr>
		        </thead>
		    </table>
		</div>


		<form class="contact-form-naseej">
			<div class="selected_data">

				<br>
				<h5>Selected Resources</h5>

				<table class="display" style="width:100%">
							<thead>
								<tr>
										<th scope="col">Code</th>
										<th scope="col">Vendor</th>
										<th scope="col">Product Name</th>
										<th scope="col">&nbsp;</th>
								</tr>
							</thead>



					</table>
			</div>


		<div class="filter_contactform">
				<div class="form-row">
					<p>Please Fill in your details to send the request:</p>
				    <div class="form-group col-lg-12">
				    	<label for="name">Full Name <span class="required-field">*</span> </label>
				      	<input type="name" class="form-control rrequired" id="name" name="name">
				    </div>
				    <div class="form-group col-lg-6">
				      	<label for="phone">Phone <span class="required-field">*</span> </label>
				      	<input type="tel" class="form-control rrequired" id="phone" name="phone">
				    </div>
				  <div class="form-group col-lg-6">
				    	<label for="email">Email <span class="required-field">*</span> </label>
				    	<input type="email" class="form-control rrequired" id="email" name="email">
				  </div>
				  <div class="form-group col-lg-6">
				    	<label for="institution">Institution <span class="required-field">*</span></label>
				    	<input type="text" class="form-control rrequired" id="institution" name="institution">
				  </div>
				    <div class="form-group col-lg-6">
					  	<div class="form-group">
					    	<label for="country">Country <span class="required-field">*</span></label>
					    	<select id="countries" class="form-control rrequired" name="countries">
								<option value="">-- Select --</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Qatar">Qatar</option>
								<option value="United Arab Emirates">United Arab Emirates</option>
								<option value="Oman">Oman</option>
								<option value="Sudan">Sudan</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Jordan">Jordan</option>
								<option value="Syria">Syria</option>
								<option value="Egypt">Egypt</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Turkey">Turkey</option>
								<option value="Libya">Libya</option>
								<option value="Morocco">Morocco</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Algeria">Algeria</option>
								<option value="Yemen">Yemen</option>
								<option value="Kuwait">Kuwait</option>
							</select>
					 	</div>
					</div>
				  <div class="form-group col-lg-12">
				  		<label for="notes">Notes</label>
				    	<textarea id="notes" name="notes" class="form-control"></textarea>
				  </div>
				  	<button type="submit" id="btnSubmit" class="btn btn-primary">Send Request</button>
				  	<button type="button" id="cancel-form" class="btn btn-primary">Cancel</button>
				  </div>
		</div>
		</form>
	</div>

		<?php
get_footer();
		?>