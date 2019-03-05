<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
					<?php
				endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->



	<script type="text/javascript">

		function getAllUrlParams(url) {

			// get query string from url (optional) or window
			var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

			// we'll store the parameters here
			var obj = {};

			// if query string exists
			if (queryString) {

				// stuff after # is not part of query string, so get rid of it
				queryString = queryString.split('#')[0];

				// split our query string into its component parts
				var arr = queryString.split('&');

				for (var i = 0; i < arr.length; i++) {
				// separate the keys and the values
				var a = arr[i].split('=');

				// set parameter name and value (use 'true' if empty)
				var paramName = a[0];
				var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

				// if the paramName ends with square brackets, e.g. colors[] or colors[2]
				if (paramName.match(/\[(\d+)?\]$/)) {

					// create key if it doesn't exist
					var key = paramName.replace(/\[(\d+)?\]/, '');
					if (!obj[key]) obj[key] = [];

					// if it's an indexed array e.g. colors[2]
					if (paramName.match(/\[\d+\]$/)) {
					// get the index value and add the entry at the appropriate position
					var index = /\[(\d+)\]/.exec(paramName)[1];
					obj[key][index] = paramValue;
					} else {
					// otherwise add the value to the end of the array
					obj[key].push(paramValue);
					}
				} else {
					// we're dealing with a string
					if (!obj[paramName]) {
					// if it doesn't exist, create property
					obj[paramName] = paramValue;
					} else if (obj[paramName] && typeof obj[paramName] === 'string'){
					// if property does exist and it's a string, convert it to an array
					obj[paramName] = [obj[paramName]];
					obj[paramName].push(paramValue);
					} else {
					// otherwise add the property
					obj[paramName].push(paramValue);
					}
				}
				}
			}

			return obj;
		}

		ajaxurl = "<?= get_site_url(); ?>/" + 'wp-admin/admin-ajax.php';

		$(document).ready(function () {

			$('#countries, #subject').change(function (e) { 
				e.preventDefault();
				var $this = $(this);
				if($this.val() != '-1') {
					$this.prev('label').find('.required-field').hide();
				} else {
					$this.prev('label').find('.required-field').show();
				}
				
			});

			
			var table = $('#example').DataTable({
				searching: false,
				ordering:  false,
				"lengthChange":   false
			});

			$('.search-submit-form').submit(function (e) { 
				e.preventDefault();
			
				
				var $this = $(this);
				var submit_data = $this.serialize();

				var parsed_data = getAllUrlParams(ajaxurl+'?'+submit_data);

				if(parsed_data.countries != '-1' && parsed_data.subject != '-1' ) {
					
					var data = {
						action: 'get_sheet_data',
						data: parsed_data
					}

					var loader = $('.naseej-loader');
					loader.show();

					$.post(ajaxurl, data, function(response) {

						table.destroy();
						
						$('.dynamic_data').remove();

						$(response).appendTo('#example');
				
						table = $('#example').DataTable({
							searching: false,
							ordering:  false,
							"lengthChange":   false
						});
						

						$('.filter_sheet_data').show();

						loader.hide();

					});
					
				} else {
					alert('Please Fill Country and Subject Properly');
				}

				
				
			});

			$(document).on('click', '.sel', function (e) {

				e.preventDefault();

				var $this = $(this);

				if (!$this.hasClass('selected-row')) {
					
					$this.addClass('selected-row');
					
					var row = $this.closest('tr');
					var code = row.find('.index-row').text();
					var vendor = row.find('.vendor-row').text();
					var name = row.find('.product-name-row').text();
					var deleteLink = '<a href="#" class="delete-row">Delete</a>';

					var appendRow = '<tr class="selected_data_row_" style="display: none; " data-code="'+code+'"><td>'+code+'</td><td>'+vendor+'</td><td>'+name+'</td><td>'+deleteLink+'</td></tr>';
					var appended_row = $(appendRow).appendTo('.selected_data table');
					appended_row.fadeIn();
					
				
					$('.selected_data').slideDown('fast', function() {
						$('.filter_contactform').show();
					});

				}




			});


			$(document).on('click', '.delete-row', function (e) {
				e.preventDefault();
				if (confirm('Are you sure you want to delete this product?')) {
					

					var $this = $(this);
					var $this_tr = $this.closest('tr');
					var $this_tr_id = $this_tr.attr('data-code');

					$this_tr.closest('tr').fadeOut( "fast", function() {

						$this_tr.closest('tr').remove();
						
						$('[data-code="'+$this_tr_id+'"]').find('.selected-row').removeClass('selected-row');
						
						if($('.selected_data tr').length == 1) {

							$('.filter_contactform, .selected_data').slideUp();

						}

					});

					

				}
			});


			$('#cancel-form').click(function (e) { 
				e.preventDefault();

				$('.filter_search, .filter_sheet_data, .selected_data, .filter_contactform').slideUp();
				$('<div class="alert alert-success">Thank you the operation has been canceled</div>').appendTo('.knowledge');

			});

			



		});
		

	</script>

	
<?php wp_footer(); ?>

</body>
</html>