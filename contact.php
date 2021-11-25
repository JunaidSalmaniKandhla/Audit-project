<?php include_once 'inc/head.php';
		include_once 'inc/header.php'; ?>

	<section class="contact">
		<div class="container">
			<h1 class="my-5 font-weight-normal">Start Connected</h1>
			<p class="mb-3">You can talk to our online representative at Working time. Please use our Live Chat System on our website or Fill up below instant messaging programs.</p>
			<div class="row my-4">
				<div class="col-md">
					<ul class="list-unstyled">
					  <li class="media">
					    <i class="fa fa-map-marker fa-2x"></i>
					    <div class="media-body ml-4">
					      <h5 class="mt-0 mb-1">Corporate Professional Accountants L.L.C</h5>
					       <p><span>Media City,Sharjah, UAE Akhilesh Pandey(Managing Director) </span></p>
					    </div>
					  </li>
					  <li class="media my-4">
					    <i class="fas fa-envelope-square fa-2x"></i>
					    <div class="media-body">
					      <h5 class="d-none d-sm-block mt-0 mb-1 ml-4">info@gmail.com</h5>
					      
					    </div>
					  </li>
					  <li class="media py-4">
					    <i class="fa fa-phone fa-2x"></i>
					    <div class="media-body">
					      <h5 class="mt-0 mb-1 ml-4"><a href="tel:+971526640884" class="text-dark text-decoration-none" data-toggle="tooltip" title="Click to call"> +971 52 664 0884</a></h5>
					    </div>
					  </li>
					</ul>
				</div>
				<div class="col-md">
					<form method="post" action="">
					  <div class="form-row">
					  	<div class="form-group col-md-12">
			              <label for="name">Name </label>
			              <input type="text" class="form-control" id="name" name="student_name" placeholder="Enter Name" required>
			            </div>
					    <div class="form-group col-md-12">
					      <label for="inputEmail4">Email</label>
					      <input type="email" class="form-control" name="email_id" placeholder="Email" required
                          >
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="subject">Subject</label>
					    <input type="text" class="form-control" name="subject" placeholder="Your Query Subject" required>
					  </div>
					  <div class="form-group">
					    <label for="Address">Address</label>
					    <input type="text" class="form-control" name="address" placeholder="Media City,Sharjah, UAE Akhilesh Pandey(Managing Director)." required>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Message</label>
                                <textarea name="message" class="form-control" cols="10" rows="5" placeholder="Your Message" required></textarea>
                            </div>
					  </div>
                        <input type="submit" name="contact_submit" class="btn btn-primary mb-4" value="SUBMIT">
					</form>
				</div>
			</div>
		</div>
	</section>
	




		<?php include_once 'inc/footer.php'; ?>