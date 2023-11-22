@extends('layouts.main')
@section("content")
<section class="contact_banner_top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="match_bg team_bg_header">
                    <div class="img_b">
                        <img src="images/contact_bg.svg" alt="">
                    </div>
                    <div class="match_bg_content contact_banner_content">
                        <h3>Let’s calloborate</h3>
                        <p>Ready to get involved with CCS or have questions for our team? We're here to help. Fill
                            out the contact form below, and we'll get back to you as soon as possible. Whether
                            you're a prospective player, a coach, a sponsor, or simply a fan of collegiate esports,
                            we're eager to hear from you. Let's shape the future of collegiate Counter-Strike
                            together!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form_box">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea rows="8" placeholder="Enter your message here"
                                    class="form-control textarea_contact"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection