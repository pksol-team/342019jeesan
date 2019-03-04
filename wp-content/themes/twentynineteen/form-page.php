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
?>
	<div class="container">
		<div class="filter_search">
			<form class="search-submit-form">
				<div class="form-row">
					<!-- COUNTRY -->
					<div class="form-group col-lg-6">
						  	<div class="form-group">
						    	<label for="country">Country</label>
						    	<select id="countries" class="form-control" name="countries">
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
					
					<!-- SUBJECT -->

					<div class="form-group col-lg-6">
							<div class="form-group">
							    <label for="subject">Subject</label>
							    <select id="subject" class="form-control" name="subject">
									<option value="-1">-- Select --</option>
									<option value="3">Agriculture (Plants, Food &amp; Animals)</option>
									<option value="4">Applied Science</option>
									<option value="5">Arts &amp; Humanities</option>
									<option value="6">Business &amp; Commerce</option>
									<option value="7">Computer Science &amp; Technology</option>
									<option value="8">Dentistry</option>
									<option value="9">Education</option>
									<option value="10">Engineering</option>
									<option value="11">Fine Arts &amp; Music</option>
									<option value="12">Information References &amp; Tools</option>
									<option value="13">Language &amp; Linguistics</option>
									<option value="14">Law</option>
									<option value="15">Library &amp; Information Science</option>
									<option value="16">Medicine &amp; Health</option>
									<option value="17">Military</option>
									<option value="18">Multi-Discipline</option>
									<option value="19">Nursing</option>
									<option value="20">Pharmaceuticals</option>
									<option value="21">Tourism - Leisure &amp; Recreation</option>
									<option value="22">{ --Select-- }</option>
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
					<small>For Trial request and pricing information please click <a id="sel" href="">"Select"</a> next any of the titles of interest</small>
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
		        <tbody>
		            <tr>
		                <td>Tiger Nixon</td>
		                <td>System Architect</td>
		                <td>Edinburgh</td>
		                <td>61</td>
		                <td>2011/04/25</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Garrett Winters</td>
		                <td>Accountant</td>
		                <td>Tokyo</td>
		                <td>63</td>
		                <td>2011/07/25</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		        </tbody>
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