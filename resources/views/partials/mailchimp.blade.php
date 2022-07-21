<section id="mailchimp" class="bg-light">
    <div class="col-lg-10 col-12 mx-auto">
       <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:600px;}
                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                    <form action="https://timelessf1.us18.list-manage.com/subscribe/post?u=0427094c4b99ad3f50efc8b4f&amp;id=9818640a57" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll" class="p-3">
                        <h2 class="text-primary heading pb-4">{{__('Subscribe to the Newsletter') }}</h2>
                        <div class="mc-field-group">
                            <label for="mce-NAME" class="my-3"><strong>Name <span class="asterisk">*</span></strong></label>
                            <input type="text" value="" name="NAME" class="required name bg-light" id="mce-NAME" placeholder="Your name...">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL" class="my-3"><strong>Email  <span class="asterisk">*</span></strong>
                        </label>
                            <input type="email" value="" name="EMAIL" class="required email bg-light" id="mce-EMAIL" placeholder="Your email...">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-HOW" class="my-3"><strong>How did you find Timeless F1? <span class="asterisk">*</span></strong></label>
                            <select name="mce-HOW" id="mce-HOW" class="bg-light">
                                <option value="all">Please select an option...</option>
                                <option value="search">Search engines</option>
                                <option value="social">Social media</option>
                                <option value="word">Word of mouth</option>
                            </select>
                            <div class="select-group-append">
                                <span class="select-group-text">
                                    <i class="fas fa-arrow-circle-down text-primary"></i>
                                </span>
                            </div>
                        </div>
                        <div id="mce-responses" class="clear foot">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0427094c4b99ad3f50efc8b4f_9818640a57" tabindex="-1" value=""></div>
                                <div class="optionalParent">
                                    <div class="my-3">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn m-0">
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
            </div>

            <div class="col-lg-6 col-12 py-5">
                <div class="row">
                    @include('partials.twitter-timeline')
                </div>
            </div>
       </div> 
    </div>
</section>