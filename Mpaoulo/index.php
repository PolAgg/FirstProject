<?php include('server.php');?>
<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>



						<?php if(isset($_SESSION['success'])): ?>
							<div class="error success">
								 <h3>
								<?php
								 echo $_SESSION['success'];
								 unset($_SESSION['success']);
								 ?>
								 </h3>
							</div>
						<?php endif ?>

						<?php if (isset($_SESSION["username"])): ?>
							<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
						<?php endif ?>

						    <div class="container">
						        <section class="col-md-12 content" id="home">
						           <div class="col-lg-6 col-md-6 content-item">
						               <img src="img/img2.jpg" alt="Image" class="tm-image">
						           </div>
						           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
						               <h2 class="section-title">Services</h2>
						               <p>UNDERSTANDING THE USER
														 In general users are impatient. Your text needs to be both compelling and short to catch attention. Keep a few facts in mind before you start typing:
														 Visitors visit a site with a specific task in mind, and leave quickly if they can’t find what they want.
														 Visitors tend to quick scan pages and headlines, they don't read every word.
														 Users switch quickly between pages extracting only the most relevant information.
														 Most users have limited tolerance for scrolling up and down a page.
														 Many visitors navigate around your site in ways you didn’t expect and can’t control.
													 </p>
						               <button type="button" class="btn btn-big dark-blue-bordered-btn">Button One</button>
						               <button type="button" class="btn btn-big dark-blue-btn">Button Two</button>
						           </div>
						       </section>

						       <section class="col-md-12 content padding" id="services">
						        <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
						           <img src="img/img2.jpg" alt="Image" class="tm-image">
						       </div>
						       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
						           <h2 class="section-title">THINGS TO AVOID</h2>
						           <p class="section-text">There are a few general pitfalls you should always attempt to avoid when writing your text for a website:</p>
						           <ul class="dark-blue-text">
						               <li>+ Boasting and overly dramatic PR 'fluff' </li>
						               <li>+ Long, dense blocks of text </li>
						               <li>+ Inconsistent terminology</li>
						               <li>+ Using ALL CAPITAL LETTERS (it’s hard to read on a screen)</li>
						           </ul>
						       </div>

						   </section>

						   <section class="col-md-12 content" id="clients">
						       <div class="col-lg-6 col-md-6 content-item">
						           <img src="img/img2.jpg" alt="Image" class="tm-image">
						       </div>
						       <div class="col-lg-6 col-md-6 content-item background flexbox">
						           <h2 class="section-title">Our Clients</h2>
						           <p>Maecenas tempus nisi in arcu facilisis venenatis. Fusce ac turpis sem. Nulla eget sem sit amet turpis tempus viverra at et odio. Crasvel eros id ipsum accumsan venenatis ut nec ipsum. </p>
						           <p>Nulla odio nunc, rhoncus quis porttitor quis, convallis sed tortor. Quisque dui metus, euismod vel sapien at, maximus feugiat tellus. </p>
						           <p>Curabitur vel rutrum augue, id tristique diam. Sed imperdiet quis ipsum a vulputate. Suspendisse sit amet nibh mi. In quis sapien a metus interdum hendrerit. </p>
						           <p>Ut a dignissim est, sodales pellentesque purus. Pellentesque porttitor ante at nulla ornare, eget sagittis sapien pulvinar.</p>
						           <div>
						               <button type="button" class="btn dark-blue-bordered-btn normal-btn">Button One</button>
						               <button type="button" class="btn yellow-btn normal-btn">Button Two</button>
						               <button type="button" class="btn green-btn normal-btn">Button Three</button>
						           </div>
						       </div>
						   </section>

							 <section class="col-md-12 content padding" id="services">
								<div class="col-lg-6 col-md-6 col-md-push-6 content-item">
									 <img src="img/img2.jpg" alt="Image" class="tm-image">
							 </div>
							 <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
									 <h2 class="section-title">THINGS TO REMEMBER</h2>
									 <p class="section-text">Use informal language, write the way you speak – use active verbs and use short words, short sentences and short paragraphs.</p>
									 <p>
										 Remember that people often scan web pages quickly – so highlight key words, use bullet points and numbering, use sub-headings to entice people to keep reading, and link brief summaries to longer, downloadable files.
                     Call to action - Tell your readers explicitly what you want them to do next: 'Order', 'buy', 'visit' etc.
										 Remember SEO - Use plain English, the kind of words people actually use when they’re searching. Use popular search keywords as much as possible in your content.
										 Make the names of your buttons and links intuitively meaningful to the reader.
										 Delete content that’s irrelevant to the user’s task
										 Be consistent in your spelling  (e.g. British or American spelling; the way you write dates, times, telephone/fax numbers, place names etc.)
									 </p>
							 </div>

					 </section>

						</div>



	<?php include('templates/footer.php'); ?>
</html>
