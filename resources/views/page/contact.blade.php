@extends('layouts.app');

@section('contacts')
<div class="contact py-lg-5 py-md-4 py-3" id="contact">
    <div class="container py-sm-5 py-4">
        <div class="title-heading text-center mb-sm-5 mb-4">
            <h3>CONTACT</h3>
            <h4>CONTACT US</h4>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
            <div class="contact-left">
                <h3>About Us</h3>
                <p class="para-w3-agileits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tortor est, malesuada at nulla in.</p>
                <h3>Find Us</h3>
                <div class="add-info">
                    <p>1608 US-19, Ellaville, USA</p>
                </div>
                <div class="add-info">
                    <p>+(012) 345 6789</p>
                </div>
                <div class="add-info">
                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
                <ul class="contact-social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            </div>
            <div class="col-lg-8 col-sm-6">
            <div class="contact-middle">
                <h3>Write to Us</h3>
                 @if (session()->has('message'))
                      <div class="alert alert-success"> <strong>Success</strong> {{ session()->get('message')}} </div>
                          
                    @endif

              @if(!session()->has('message'))

                    
                <form action="/feedback" method="post">
                    @csrf
                  <div class="form-group">
               
                    <label>Name</label>
                  <input type="text" class="form-control" value="{{ old('name')}}" placeholder="First name" name="name" class="@error('name') is-invalid @enderror" >
                     @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                  </div>
                            
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control"  placeholder="Email" name="email" >
                    @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror						
                  </div>
                    <div class="form-group">
                    <label>Message</label>
                        <textarea class="form-control" rows="3" name="message"  class="@error('message') is-invalid @enderror"></textarea>
                        @error('mesaage')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                  <button type="submit" class="btn btn-2">Send Message</button>
                </form>
                @endif
            </div>
            
            </div>
    </div>
</div>
</div>

<div class="map-w3ls">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13152320.404165294!2d-103.55034684755314!3d36.40881487153194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f30059df4864d5%3A0x3ef8d5e2e1ec947!2sKing&#39;s+Custom+Builders!5e0!3m2!1sen!2sin!4v1510548882552"></iframe>
</div>
<div class="w3layouts_newsletter_right">
    <div class="container">
    <div class="row">
        <div class="col-md-4 n-left">
            <h6>Newsletter</h6>
        </div>
        <div class="col-md-8 n-right">
            <form action="#" method="post">
                <div class="input-flds">
                    <input type="text" name="Name" placeholder="Name" required="">
                </div>
                <div class="input-flds">
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="input-flds">
                    <input type="submit" value="Subscribe">
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
