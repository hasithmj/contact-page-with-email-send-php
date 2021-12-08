<?php

    $page_title = 'Address, Telephone, Email | Contact Codzbee Sri Lanka Online';
    $meta_description = 'Get connected with digital travel technology agency for all web, app development or digital marketing solutions. Contact Codzbee Sri Lanka via Post, Email or Phone.';
    $meta_keywords = ['contact codzbee'];
    include('../../_includes/header.php'); 
?>

<div class="container-fluid text-center page-banner">
    <h1 class="text-secondary">Contact</h1>
    <p>
        CODZBEE PVT LTD, No.50/1/3 Dehiwala Road,
        Boralesgamuwa,
        Sri Lanka.
    </p>
</div>


<div class="page-content margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8">
                <form id="contact-form" novalidate>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nature_of_enquiry">Nature of Enquiry</label>
                            <select class="form-control text-field" id="nature_of_enquiry" name="nature_of_enquiry">
                                <option>Travel Portal Development</option>
                                <option>Mobile Application Development</option>
                                <option>Web Designing and Development</option>
                                <option>E-Commerce Website Development</option>
                                <option>Customized Web Application Development</option>
                                <option>Payment Gateway Plugins</option>
                                <option>Business registration Services</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control text-field" id="name" name="name" placeholder="Name" required/> 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control text-field" id="email" name="email" placeholder="E-mail" required/> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control text-field valid" id="phone" name="phone" aria-required="true" placeholder="Phone" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country">Country of Origin</label>
                            <select class="form-control text-field" id="country_of_origin" name="country_of_origin"> 
                                <option>United Kingdom</option>
                                <option>Sri Lanka</option>
                                <option>Australia</option>
                                <option>Singapore</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control text-field" id="company_name" name="company_name" placeholder="Company Name" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="enquiry">Your Enquiry</label>
                        <textarea class="form-control text-field" id="enquiry" name="enquiry" rows="7" required></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">What is the answer for <span id="cn1"><?php echo(rand(1,10)) ?></span> + <span id="cn2"><?php echo(rand(1,10)) ?></span> = ?</label>
                            <input type="text" id="an1" name="an1" class="form-control text-field"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label style="font-size:10px">Just to make sure you are not a robot...</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button id="submit" name="submit" value="Submit" class="btn btn-primary text-uppercase send-mail-button">Send Email</button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label id="info" style="font-size:18px"></label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-4">
                <div class="h5 font-weight-bold">Location</div>
                <p class="form-content">
                    CODZBEE PVT LTD,<br>
                    No. 50/1/3 Dehiwala Road,<br>
                    Boralesgamuwa,<br>
                    Sri Lanka.
                </p>

                <div class="h5 font-weight-bold">Telephone</div>
                <p class="form-content"> <a href="tel:+94112057533">+94 11 205 75 33</a></p>

                <div class="h5 font-weight-bold">Email</div>
                <p class="form-content"> <a href="mailto:info@codzbee.com">info@codzbee.com</a></p>
            </div>
        </div>
        <div class="row">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.415894983432!2d79.89791231527511!3d6.840640321291778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25befa3c69ae1%3A0x9360f5c8d61a1209!2sCodz%20Bee%20(PVT)%20Ltd!5e0!3m2!1sen!2slk!4v1618228810771!5m2!1sen!2slk"
                    width="100%"
                    height="300px"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
            </iframe>
        </div>
    </div>
</div>


<!-- <script src="http://code.jquery.com/jquery-latest.min.js"></script> -->
<!-- <script src="contact-form.js"></script> -->

<?php include('../../_includes/footer.php'); ?>


