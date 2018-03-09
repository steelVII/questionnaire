@extends ('master')

@section('content')

<section class="hero">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
                Web Design Client Questionnaire
            </h1>
            <hr>
            <h3 class="subtitle">
                Understanding what a client really wants is one of the most difficult tasks for the designer. Answering these key questions will be invaluable to streamlining the design process. With this information, we will be able to work quicker and more efficiently to meet the desired goal and deliver satisfying results.        
            </h3>
            <h3 class="subtitle">
                Please take the time to fill out as much of this form as possible. If you are unsure about a question, don't have an answer, or it seems irrelevant, don't worry.
            </h3>
          </div>
        </div>
      </section>
    
<section class="section padding-tp-0">

    <form method="post" action="questionnaire_send" class="container is-fluid" >

            @csrf

        <fieldset>
            <legend class="title">Basic Information</legend>
            <div class="columns">
                <div class="field column">
                    <label class="label">Name</label>
                    <div class="control">
                        <input name="basic_name" class="input" type="text" placeholder="Name">
                    </div>
                </div>
                <div class="field column">
                    <label class="label">Organization</label>
                    <div class="control">
                        <input name="basic_organization" class="input" type="text" placeholder="Organization" value="">
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class="label">Email</label>
                    <div class="control"><input name="basic_email" type="email" class="input" placeholder="Email"></div>
                </div>
                <div class="field column">
                    <label class="label">Phone Number</label>
                    <div class="control"><input name="basic_phone_num" type="tel" class="input" placeholder="Phone Number"></div>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class="label">URL (internet/web address):</label>
                    <div class="control"><input name="basic_url" type="text" class="input" placeholder="Company Website"></div>
                </div>
                <div class="field column">
                    <label class="label">Briefly describe your company:</label>
                    <div class="control"><textarea name="basic_description"  class="textarea" placeholder="e.g. Hello world"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        <hr>

        <fieldset>
            <legend class="title">Design</legend>
            <div class="columns">
                <div class="field column">
                    <label class="label">Would you like us to design/redesign a logo for your company?</label>
                    <div class="control">
                        <label for="redesign_yes" class="radio">
                            <input type="radio" name="redesign_logo" id="redesign_yes" value="Yes">
                            Yes
                        </label>
                        <label for="redesign_no" class="radio">
                            <input type="radio" name="redesign_logo" id="redesign_no" value="No">
                            No
                        </label>
                        <label for="redesign_maybe" class="radio">
                            <input type="radio" name="redesign_logo" id="redesign_maybe" value="Maybe">
                            Maybe
                        </label>
                    </div>
                </div>
                <div class="field column">
                    <label for="" class="label">Is there a specific theme you had in mind to incorporate into the website?</label>
                    <div class="control"><textarea name="design_theme" id="" class="textarea"></textarea></div>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label for="" class="label">Are there any colors you had in mind to incorporate into the site?</label>
                    <div class="control"><textarea name="design_colors" id="" class="textarea"></textarea></div>
                </div>
                <div class="field column">
                    <label for="" class="label">Describe the site's desired look and feel by using adjectives and short phrases:</label>
                    <div class="control"><textarea name="design_lookandfeel" id="" class="textarea"></textarea></div>
                </div>
            </div>
            <h3 class="subtitle">Name a few sites that appeal to you, either competitors or sites unrelated to your industry that you feel may
                be relevant to the design of your site. Please comment on what you like/dislike about the design and features
                of these sites.</h3>
            <div class="columns">
                <div class="field column">
                    <div class="columns">
                        <div class="field column">
                            <h2 class="title">1.</h2>
                        </div>
                        <div class="field column is-two-fifths">
                            <label class="label">Company Name</label>
                            <div class="control"><input name="design_ref[company1][]" type="text" class="input" placeholder="Company Name"></div>
                        </div>
                        <div class="field column is-two-fifths">
                            <label class="label">URL (internet/web address):</label>
                            <div class="control"><input name="design_ref[company1][]" type="text" class="input" placeholder="URL"></div>
                        </div>
                    </div>
                </div>
                <div class="field column">
                    <label class="label">Comments</label>
                    <div class="control"><textarea name="design_ref[company1][]" class="textarea" placeholder="e.g. Hello world"></textarea>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <div class="columns">
                        <div class="field column">
                            <h2 class="title">2.</h2>
                        </div>
                        <div class="field column is-two-fifths">
                            <label class="label">Company Name</label>
                            <div class="control"><input name="design_ref[company2][]" type="text" class="input" placeholder="Company Name"></div>
                        </div>
                        <div class="field column is-two-fifths">
                            <label class="label">URL (internet/web address):</label>
                            <div class="control"><input name="design_ref[company2][]" type="text" class="input" placeholder="URL"></div>
                        </div>
                    </div>
                </div>
                <div class="field column">
                    <label class="label">Comments</label>
                    <div class="control"><textarea name="design_ref[company2][]" class="textarea" placeholder="e.g. Hello world"></textarea>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <div class="columns">
                        <div class="field column">
                            <h2 class="title">3.</h2>
                        </div>
                        <div class="field column is-two-fifths">
                            <label class="label">Company Name</label>
                            <div class="control"><input name="design_ref[company3][]" type="text" class="input" placeholder="Company Name"></div>
                        </div>
                        <div class="field column is-two-fifths">
                            <label class="label">URL (internet/web address):</label>
                            <div class="control"><input name="design_ref[company3][]" type="text" class="input" placeholder="URL"></div>
                        </div>
                    </div>
                </div>
                <div class="field column">
                    <label class="label">Comments</label>
                    <div class="control"><textarea name="design_ref[company3][]" class="textarea" placeholder="e.g. Hello world"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        <hr>

        <fieldset>
            <legend class="title">Brand/Target Audience</legend>
            <div class="columns">
                <div class="field column">
                    <label for="" class="label">List any important words that you want people to associate with your company image/brand:</label>
                    <div class="control"><textarea name="audience[keywords]" id="" class="textarea"></textarea></div>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label for="" class="label">Target Audience: Describe what kind of users you intend to attract to your site:</label>
                    <div class="control"><textarea name="audience[target]" id="" class="textarea"></textarea></div>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label for="" class="label">Where/how do people learn about your company/product/service(s)?</label>
                    <div class="control"><textarea name="audience[learn]" id="" class="textarea"></textarea></div>
                </div>
                <div class="field column">
                    <label for="" class="label">Why does your target audience need this website?</label>
                    <div class="control"><textarea name="audience[why]" id="" class="textarea"></textarea></div>
                </div>
            </div>
        </fieldset>

        <hr>

        <fieldset>
            <legend class="title">Content/Special Features</legend>
            <h3 class="subtitle">Please check any pages/features you envision as part of your site:</h3>
            <div class="columns">
                <div class="field column">
                    <label class="label">Basic</label>
                    <label for="basic_home" class="checkbox"><input type="checkbox" name="feature[basic][]" id="basic_home" class="checkbox" value="Home">Home</label>
                    <label for="basic_about" class="checkbox"><input type="checkbox" name="feature[basic][]" id="basic_about" class="checkbox" value="About Us">About Us</label>
                    <label for="basic_services" class="checkbox"><input type="checkbox" name="feature[basic][]" id="basic_services" class="checkbox" value="Services">Services</label>
                    <label for="basic_contact" class="checkbox"><input type="checkbox" name="feature[basic][]" id="basic_contact" class="checkbox" value="Contact Us">Contact Us</label>
                    <label for="basic_news" class="checkbox"><input type="checkbox" name="feature[basic][]" id="basic_news" class="checkbox" value="News">News</label>
                    <label for="basic_faqs" class="checkbox"><input type="checkbox" name="feature[basic][]" id="basic_faqs" class="checkbox" value="FAQS">FAQs</label>
                    <label for="basic_site_map" class="checkbox"><input type="checkbox" name="feature[basic][]" id="basic_site_map" class="checkbox" value="Site Map">Site Map</label>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class="label">Special Features:</label>
                    <label for="special_ecommerce" class="checkbox"><input type="checkbox" name="feature[special][]" id="special_ecommerce" class="checkbox" value="e-Commerce">e-Commerce</label>
                    <label for="special_video" class="checkbox"><input type="checkbox" name="feature[special][]" id="special_video" class="checkbox" value="Video">Video</label>
                    <label for="special_gallery" class="checkbox"><input type="checkbox" name="feature[special][]" id="special_gallery" class="checkbox" value="Image Gallery">Image Gallery</label>
                    <label for="special_portfolio" class="checkbox"><input type="checkbox" name="feature[special][]" id="special_portfolio" class="checkbox" value="Portfolio">Portfolio</label>
                    <label for="special_testimonials" class="checkbox"><input type="checkbox" name="feature[special][]" id="special_testimonials" class="checkbox" value="Testimonials">Testimonials</label>
                    <label for="special_map" class="checkbox"><input type="checkbox" name="feature[special][]" id="special_map" class="checkbox" value="Map">Map</label>
                    <label for="special_newsletter" class="checkbox"><input type="checkbox" name="feature[special][]" id="special_newsletter" class="checkbox" value="Newsletter">Newsletter</label>
                    <label for="special_events" class="checkbox"><input type="checkbox" name="feature[special][]" id="special_events" class="checkbox" value="Upcoming Events">Upcoming Events</label>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label for="other" class="label">Other — please list any additional or custom pages you would like to add. Also, feel free to ask any questions concerning the above features:</label>
                    <div class="control"><textarea name="feature[other][]" id="other" class="textarea"></textarea></div>
                </div>
            </div>
            <div class="columns">
                <div class="field column is-half">
                    <label for="" class="label">When does your website need to be completed and made available to the public?</label>
                    <div class="control"><input name="feature[completion_date]" type="text" class="input" placeholder="31/12/2018"></div>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class="label">Will you want your site to be updated regularly?</label>
                    <label for="updated_yes" class="radio"><input type="radio" name="feature[updated_regularly]" id="updated_yes" value="Yes">Yes</label>
                    <label for="updated_no" class="radio"><input type="radio" name="feature[updated_regularly]" id="updated_no" value="No">No</label>
                    <label for="updated_maybe" class="radio"><input type="radio" name="feature[updated_regularly]" id="updated_maybe" value="Maybe">Maybe</label>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class="label">Would you like us to update your site or would you like to be responsible for updates?</label>
                    <label for="responsible_update_us" class="radio"><input type="radio" name="feature[responsible_update]" id="responsible_update_us" value="Update my site for me">Update my site for me</label>
                    <label for="responsible_update_me" class="radio"><input type="radio" name="feature[responsible_update]" id="responsible_update_me" value="I'll do my own updates">I'll do my own updates</label>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label for="comments" class="label">Any additional comments are welcomed:</label>
                    <div class="control"><textarea name="feature[additional_comments]" id="comments" class="textarea"></textarea></div>
                </div>
            </div>
        </fieldset>
        <div class="columns">
            <div class="column is-half is-offset-one-quarter has-text-centered">
                <h2 class="title">Thank you for your time!</h2>
                <h3 class="subtitle">Press the button below to submit your information.</h3>
                <div class="field is-grouped justify-center">
                    <div class="control">
                        <button class="button is-link is-large">Submit</button>
                    </div>
                    <div class="control">
                    <a href="{{ url('/') }}" class="button is-danger is-large">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection