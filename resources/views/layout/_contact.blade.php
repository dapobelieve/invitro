<section id="contact" class="ls section_padding_top_150 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 text-center">
                <div class="background_cover contact-form-wrapper">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h2 class="section_header">Drop us a message or make an enquiry</h2>
                    <form class="contact-form row" method="POST" id="contact-form" action="{{ route('mail-message') }}">
                        <div class="col-sm-6">
                            <div class="contact-form-name">
                                <label for="name">Full Name <span class="required">*</span></label>
                                <input type="text" size="30" value="" name="iv_name" class="form-control text-center" placeholder="Name"> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-email"> <label for="email">Email address<span class="required">*</span></label> <input type="email"  size="30" value="" name="iv_email"  class="form-control text-center" placeholder="Email Address"> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-phone">
                                <label for="phone">Phone<span class="required">*</span></label>
                                <input type="text"  size="30" value="" name="iv_phone" class="form-control text-center" placeholder="Phone Number"> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-subject">
                                <label for="subject">Subject<span class="required">*</span></label>
                                <input type="text"  size="30" value="" name="iv_subject" class="form-control text-center" placeholder="Your Subject"> </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="contact-form-message">
                                <label for="message">Message</label>
                                <textarea  rows="4" cols="45" name="iv_message" id="message" class="form-control text-center" placeholder="Message..."></textarea> </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="col-sm-12">
                            <div class="contact-form-submit topmargin_10">
                                <button onclick="event.preventDefault(); document.getElementById('contact-form').submit()" type="submit" class="theme_button color2 inverse min_width_button">Send Message</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>