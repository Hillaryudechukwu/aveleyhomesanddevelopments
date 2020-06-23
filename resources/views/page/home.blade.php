@extends('layouts.app')
@section('slider')
   
<div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block" src="images/b1.jpg" alt="First slide">
        <div class="carousel-caption ">
            <h5>Modern Houses</h5>
            <p>Lorem Ipsum is simply dummy text</p>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="images/b2.jpg" alt="Second slide">
        <div class="carousel-caption ">
                <h5>Modern Villas</h5>
                <p>Lorem Ipsum is simply dummy text</p>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="images/b3.jpg" alt="Third slide">
        <div class="carousel-caption">
                <h5>Modern Apartments</h5>
                <p>Lorem Ipsum is simply dummy text</p>
        </div>		
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
@endsection
@section('video')
<div class="video-w3l" data-vide-bg="video/1">
    <h2>We Make Your Dreams As Real</h2>
    <p>Contrary to popular belief, Lorem Ipsum is not simply random text</p>
        <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary more-button3" data-toggle="modal" data-target="#exampleModal32">
                  MORE INFO
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal32" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <img src="images/contact.jpg" alt="image" />
                        <p class="model-body-text-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text.</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
</div>
    
@endsection
@section('testimonies')
<div class="container">
  <section class="wthree-row w3-gallery py-lg-5 py-md-4 py-3" id="gallery">   
  <div class="container-fluid text-center">
          <div class="title-heading text-center">
              <h3>TESTIMONIES</h3>
              <h4>TESTIMONIES</h4>
          </div>
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#quote-carousel" data-slide-to="1"></li>
              <li data-target="#quote-carousel" data-slide-to="2"></li>
            </ol>
            
            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">
            
              <blockquote class="blockquote text-center">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
            
            <!-- Carousel Buttons Next/Prev -->
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
          </div> 
    
  
      </div>
      <!-- //gallery container -->
  </section>
  </div>
@endsection