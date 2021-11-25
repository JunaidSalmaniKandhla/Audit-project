<?php include_once 'inc/head.php';
	include_once 'inc/header.php'; ?>

	<section class="top-bar">
		<div class="container">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
			    <li class="breadcrumb-item active text-white" aria-current="page">About</li>
			  </ol>
			</nav>
			<div class="top-text look">
				<h1>Company Overview</h1>
			</div>
		</div>
	</section>
	<!-- End of top bar  -->

<section class="service-bottom my-3">
    	<div class="container">
    		<div class="row">
    			<div class="col-md"><img src="images/about.jpg" class="img-fluid"></div>
    			<div class="col-md">
    				<form class="float-right py-3 px-3 bg-light" >
							<p class="pt-2"><b><big>How can we help you?</big></b></p>
							<p>Contact us at the Consulting WP office nearest to you or submit a business inquiry online.</p>
                            <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number">
                            <small id="mobile" class="form-text text-muted pb-3">We assure that your submitted information will be confidential with us.</small>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
                        </div>
                           <a href="#" class="btn btn-success" type="button">Submit</a>
                        </form>
    			</div>
    		</div>
    	</div>
    </section>

	<?php include_once 'inc/footer.php'; ?>