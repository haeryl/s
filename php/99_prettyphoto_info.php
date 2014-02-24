			<section id="footer">
				<div class="row">
					<div class="four columns">
						<section id="crum_widget_flickr-2" class="widget instagram-widget">
							<div class="subtitle">Small subtitle here</div>
							<div class="title"><h3>Flickr Photos</h3></div>        
							<div id="flickr">
							<script type="text/javascript">
								jQuery(document).ready(function() {
									jQuery('#flickr').jflickrfeed({
										limit: 6,
										qstrings: {
											id: '31733623@N04'
										},
										itemTemplate:
												'<a class="zoom" rel="prettyPhoto[flikr_gal]" href="{{image}}" title="{{title}}">' +
												'<img src="{{image_q}}"  />' +
												'<span><img src="libraries/images/big-plus.gif" alt="zoom" /></span>'+
												'</a>'
									}, function(data) {
										jQuery('#flickr a').prettyPhoto();
									});
								});
							</script>
						</section>        
					</div>
					<div class="four columns">
						<section id="crum-text-widget-2" class="widget widget_crum-text-widget">
							<div class="subtitle">Small subtitle here</div>
							<div class="title"><h3>ABOUT COMPANY</h3></div>
							<img src="libraries/images/uploads/html1.png" alt="about-img" width="122" height="158" class="alignleft size-full wp-image-238" />
							Crumina is an elite author on ThemeForest.   
							<p>Our team works really hard creating the best themes! We thoroughly examine customers’ needs and try to satisfy all the demands! Here you will find not only brilliant design, but also lots of possibilities to adjust the theme to your needs. Maestro Theme is a brilliant looking, super comfortable and ultra-modern template that will meet all your requirements! We have tried our best to join the gorgeous design and extreme functionality. It contains all necessary options that will surely make your site the most attractive and unique. </p>
						</section>        	
					</div>
					<div class="four columns">
						<section id="roots_vcard_widget-2" class="widget contacts-widget">
							<div class="subtitle">Small subtitle here</div>
							<div class="title"><h3>Contact information</h3></div>
							<div class="vcard">
								<p class="adress">
									<span class="adr">
										<span class="street-address">223 Mainstreet Blvd. New-York,</span>
										<span class="locality"></span>,
										<span class="region"></span>
										<span class="postal-code"></span>
								  </span>
								</p>
								<p class="phone">Phone: (305) 444-3235-45, Fax: (305) 555-4447</p>
								<p class="mail">E-Mail: <a class="email" href="#">johndoe@yourdomain.com</a></p>
								<p class="other">Web: <a class="fn org url" href="#">http://theme.crumina.net/maestro</a></p>
								<p class="twitter">Twitter: <a class="fn org url" href="#">https://twitter.com/crumina</a></p>
							</div>
						</section>      	
					</div>
				</div>
			</section>