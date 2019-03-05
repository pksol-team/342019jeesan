<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php endif; ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentynineteen' ) ); ?>" class="imprint">
				<?php
				/* translators: %s: WordPress. */
				printf( __( 'Proudly powered by %s.', 'twentynineteen' ), 'WordPress' );
				?>
			</a>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

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


		$(document).ready(function() {
			
			// $('#example').DataTable({
			// 	searching: false,
			// 	ordering:  false,
			// 	"lengthChange":   false
			// });
			
		});


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

					$.post(ajaxurl, data, function(response) {
						$(response).appendTo('#example');
					});
					
				} else {
					alert('Please Fill Country and Subject Properly');
				}

				
				
			});


		});

	</script>
<?php wp_footer(); ?>

</body>
</html>


