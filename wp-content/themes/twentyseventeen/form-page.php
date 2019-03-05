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
	<div class="container">
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
					<div class="form-group col-12 text-center">
						<input class="btn btn-primary" type="submit" value="Search">
					</div>
				</div>
			</form>
		</div>
		<div class="filter_sheet_data">
			<div class="row">
				<div class="col-lg-12">
					<small>For Trial request and pricing information please click <span id="sel">"Select"</span> next any of the titles of interest</small>
				</div>
			</div>
			<table id="example" class="display " style="width:100%">
		        <thead>
		        	<tr>
			            <th scope="col">Code</th>
			            <th scope="col">Format</th>
			            <th scope="col">Format</th>
			            <th scope="col">Product Name</th>
			            <th scope="col">Type</th>
			            <th scope="col">&nbsp;</th>
		            </tr>
		        </thead>
		    </table>
		</div>

		<div class="filter_contactform">
			<form>
				<div class="form-row">
					<p>Please Fill in your details to send the request:</p>
				    <div class="form-group col-lg-12">
				    	<label for="name">Full Name</label>
				      	<input type="name" class="form-control" id="name">
				    </div>
				    <div class="form-group col-lg-6">
				      	<label for="phone">Phone</label>
				      	<input type="tel" class="form-control" id="phone">
				    </div>
				  <div class="form-group col-lg-6">
				    	<label for="email">Email</label>
				    	<input type="email" class="form-control" id="email">
				  </div>
				  <div class="form-group col-lg-6">
				    	<label for="institution">Institution</label>
				    	<input type="text" class="form-control" id="institution">
				  </div>
				    <div class="form-group col-lg-6">
					  	<div class="form-group">
					    	<label for="country">Country</label>
					    	<select id="countries" class="form-control">
								<option value="-1">-- Select --</option>
								<option value="3">Saudi Arabia</option>
								<option value="4">Bahrain</option>
								<option value="5">Qatar</option>
								<option value="6">United Arab Emirates</option>
								<option value="7">Oman</option>
								<option value="8">Sudan</option>
								<option value="9">Lebanon</option>
								<option value="10">Jordan</option>
								<option value="11">Syria</option>
								<option value="12">Egypt</option>
								<option value="13">Iran</option>
								<option value="14">Iraq</option>
								<option value="15">Turkey</option>
								<option value="16">Libya</option>
								<option value="17">Morocco</option>
								<option value="18">Tunisia</option>
								<option value="19">Algeria</option>
								<option value="20">Yemen</option>
								<option value="21">Kuwait</option>
							</select>
					 	</div>
					</div>
				  <div class="form-group col-lg-12">
				  		<label for="notes">Notes</label>
				    	<textarea id="notes" class="form-control"></textarea>
				  </div>
				  	<button type="submit" class="btn btn-primary">Send Request</button>
				  	<button type="submit" class="btn btn-primary">Cancel</button>

				  </div>
				</form>
		</div>
	</div>
		<?php
get_footer();
		?>