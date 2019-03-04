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
			<form>
				<div class="form-row">
					<!-- COUNTRY -->
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
					<!-- SUBJECT -->
					<div class="form-group col-lg-6">
							<div class="form-group">
							    <label for="subject">Subject</label>
							    <select id="subject" class="form-control">
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
		            <tr>
		                <td>Ashton Cox</td>
		                <td>Junior Technical Author</td>
		                <td>San Francisco</td>
		                <td>66</td>
		                <td>2009/01/12</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Cedric Kelly</td>
		                <td>Senior Javascript Developer</td>
		                <td>Edinburgh</td>
		                <td>22</td>
		                <td>2012/03/29</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Airi Satou</td>
		                <td>Accountant</td>
		                <td>Tokyo</td>
		                <td>33</td>
		                <td>2008/11/28</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Brielle Williamson</td>
		                <td>Integration Specialist</td>
		                <td>New York</td>
		                <td>61</td>
		                <td>2012/12/02</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Herrod Chandler</td>
		                <td>Sales Assistant</td>
		                <td>San Francisco</td>
		                <td>59</td>
		                <td>2012/08/06</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Rhona Davidson</td>
		                <td>Integration Specialist</td>
		                <td>Tokyo</td>
		                <td>55</td>
		                <td>2010/10/14</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Colleen Hurst</td>
		                <td>Javascript Developer</td>
		                <td>San Francisco</td>
		                <td>39</td>
		                <td>2009/09/15</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Sonya Frost</td>
		                <td>Software Engineer</td>
		                <td>Edinburgh</td>
		                <td>23</td>
		                <td>2008/12/13</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Jena Gaines</td>
		                <td>Office Manager</td>
		                <td>London</td>
		                <td>30</td>
		                <td>2008/12/19</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Quinn Flynn</td>
		                <td>Support Lead</td>
		                <td>Edinburgh</td>
		                <td>22</td>
		                <td>2013/03/03</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Charde Marshall</td>
		                <td>Regional Director</td>
		                <td>San Francisco</td>
		                <td>36</td>
		                <td>2008/10/16</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Haley Kennedy</td>
		                <td>Senior Marketing Designer</td>
		                <td>London</td>
		                <td>43</td>
		                <td>2012/12/18</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Tatyana Fitzpatrick</td>
		                <td>Regional Director</td>
		                <td>London</td>
		                <td>19</td>
		                <td>2010/03/17</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Michael Silva</td>
		                <td>Marketing Designer</td>
		                <td>London</td>
		                <td>66</td>
		                <td>2012/11/27</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Paul Byrd</td>
		                <td>Chief Financial Officer (CFO)</td>
		                <td>New York</td>
		                <td>64</td>
		                <td>2010/06/09</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Gloria Little</td>
		                <td>Systems Administrator</td>
		                <td>New York</td>
		                <td>59</td>
		                <td>2009/04/10</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Bradley Greer</td>
		                <td>Software Engineer</td>
		                <td>London</td>
		                <td>41</td>
		                <td>2012/10/13</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Dai Rios</td>
		                <td>Personnel Lead</td>
		                <td>Edinburgh</td>
		                <td>35</td>
		                <td>2012/09/26</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Jenette Caldwell</td>
		                <td>Development Lead</td>
		                <td>New York</td>
		                <td>30</td>
		                <td>2011/09/03</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Yuri Berry</td>
		                <td>Chief Marketing Officer (CMO)</td>
		                <td>New York</td>
		                <td>40</td>
		                <td>2009/06/25</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Caesar Vance</td>
		                <td>Pre-Sales Support</td>
		                <td>New York</td>
		                <td>21</td>
		                <td>2011/12/12</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Doris Wilder</td>
		                <td>Sales Assistant</td>
		                <td>Sidney</td>
		                <td>23</td>
		                <td>2010/09/20</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Angelica Ramos</td>
		                <td>Chief Executive Officer (CEO)</td>
		                <td>London</td>
		                <td>47</td>
		                <td>2009/10/09</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Gavin Joyce</td>
		                <td>Developer</td>
		                <td>Edinburgh</td>
		                <td>42</td>
		                <td>2010/12/22</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Jennifer Chang</td>
		                <td>Regional Director</td>
		                <td>Singapore</td>
		                <td>28</td>
		                <td>2010/11/14</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Brenden Wagner</td>
		                <td>Software Engineer</td>
		                <td>San Francisco</td>
		                <td>28</td>
		                <td>2011/06/07</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Fiona Green</td>
		                <td>Chief Operating Officer (COO)</td>
		                <td>San Francisco</td>
		                <td>48</td>
		                <td>2010/03/11</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Shou Itou</td>
		                <td>Regional Marketing</td>
		                <td>Tokyo</td>
		                <td>20</td>
		                <td>2011/08/14</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Michelle House</td>
		                <td>Integration Specialist</td>
		                <td>Sidney</td>
		                <td>37</td>
		                <td>2011/06/02</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Suki Burks</td>
		                <td>Developer</td>
		                <td>London</td>
		                <td>53</td>
		                <td>2009/10/22</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Prescott Bartlett</td>
		                <td>Technical Author</td>
		                <td>London</td>
		                <td>27</td>
		                <td>2011/05/07</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Gavin Cortez</td>
		                <td>Team Leader</td>
		                <td>San Francisco</td>
		                <td>22</td>
		                <td>2008/10/26</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Martena Mccray</td>
		                <td>Post-Sales support</td>
		                <td>Edinburgh</td>
		                <td>46</td>
		                <td>2011/03/09</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Unity Butler</td>
		                <td>Marketing Designer</td>
		                <td>San Francisco</td>
		                <td>47</td>
		                <td>2009/12/09</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Howard Hatfield</td>
		                <td>Office Manager</td>
		                <td>San Francisco</td>
		                <td>51</td>
		                <td>2008/12/16</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Hope Fuentes</td>
		                <td>Secretary</td>
		                <td>San Francisco</td>
		                <td>41</td>
		                <td>2010/02/12</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Vivian Harrell</td>
		                <td>Financial Controller</td>
		                <td>San Francisco</td>
		                <td>62</td>
		                <td>2009/02/14</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Timothy Mooney</td>
		                <td>Office Manager</td>
		                <td>London</td>
		                <td>37</td>
		                <td>2008/12/11</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Jackson Bradshaw</td>
		                <td>Director</td>
		                <td>New York</td>
		                <td>65</td>
		                <td>2008/09/26</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Olivia Liang</td>
		                <td>Support Engineer</td>
		                <td>Singapore</td>
		                <td>64</td>
		                <td>2011/02/03</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Bruno Nash</td>
		                <td>Software Engineer</td>
		                <td>London</td>
		                <td>38</td>
		                <td>2011/05/03</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Sakura Yamamoto</td>
		                <td>Support Engineer</td>
		                <td>Tokyo</td>
		                <td>37</td>
		                <td>2009/08/19</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Thor Walton</td>
		                <td>Developer</td>
		                <td>New York</td>
		                <td>61</td>
		                <td>2013/08/11</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Finn Camacho</td>
		                <td>Support Engineer</td>
		                <td>San Francisco</td>
		                <td>47</td>
		                <td>2009/07/07</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Serge Baldwin</td>
		                <td>Data Coordinator</td>
		                <td>Singapore</td>
		                <td>64</td>
		                <td>2012/04/09</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Zenaida Frank</td>
		                <td>Software Engineer</td>
		                <td>New York</td>
		                <td>63</td>
		                <td>2010/01/04</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Zorita Serrano</td>
		                <td>Software Engineer</td>
		                <td>San Francisco</td>
		                <td>56</td>
		                <td>2012/06/01</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Jennifer Acosta</td>
		                <td>Junior Javascript Developer</td>
		                <td>Edinburgh</td>
		                <td>43</td>
		                <td>2013/02/01</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Cara Stevens</td>
		                <td>Sales Assistant</td>
		                <td>New York</td>
		                <td>46</td>
		                <td>2011/12/06</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Hermione Butler</td>
		                <td>Regional Director</td>
		                <td>London</td>
		                <td>47</td>
		                <td>2011/03/21</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Lael Greer</td>
		                <td>Systems Administrator</td>
		                <td>London</td>
		                <td>21</td>
		                <td>2009/02/27</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Jonas Alexander</td>
		                <td>Developer</td>
		                <td>San Francisco</td>
		                <td>30</td>
		                <td>2010/07/14</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Shad Decker</td>
		                <td>Regional Director</td>
		                <td>Edinburgh</td>
		                <td>51</td>
		                <td>2008/11/13</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Michael Bruce</td>
		                <td>Javascript Developer</td>
		                <td>Singapore</td>
		                <td>29</td>
		                <td>2011/06/27</td>
		                <td><a id="sel" href="">Select</a></td>
		            </tr>
		            <tr>
		                <td>Donna Snider</td>
		                <td>Customer Support</td>
		                <td>New York</td>
		                <td>27</td>
		                <td>2011/01/25</td>
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