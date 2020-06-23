@extends('layouts.app')
@section('about')
<div class="about py-lg-5 py-md-4 py-3" id="about">
    <div class="container py-sm-5 py-4">
    
      <div class="row">
        <div class="col-md-6 col-sm about-left">
          <img src="images/ab.jpg" alt="image" />
        </div>
        <div class="col-md-6 col-sm about-right">
            <div class="title-heading-about">
                <h3>ABOUT US</h3>
                <h4>ABOUT</h4>
            </div>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text.</p>
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary more-button" data-toggle="modal" data-target="#exampleModal33">
                  MORE INFO
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal33" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <img src="images/ab.jpg" alt="image" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text.</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
        </div>
        
      </div>
    </div>
</div>
@endsection
@section('team')
<div class="team py-lg-5 py-md-4 py-3" id="team">
    <div class="container py-sm-5 py-4">
    <div class="title-heading text-center mb-sm-5 mb-4">
        <h3>TEAM</h3>
        <h4>OUR TEAM</h4>
    </div>
        <div class="team_grids">
        <div class="row">
            <div class="col-md-3 team_grid text-center">
                <img src="images/t1.jpg" alt=" " class="img-fluid" />
                <h3>Amanda Seylon</h3>
                <p class="team_gridp">Designer</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <ul class="footer_list_icons team_icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>
            </div>
            <div class="col-md-3 team_grid text-center">
                <img src="images/t2.jpg" alt=" " class="img-fluid" />
                <h3>Laura Mark</h3>
                <p class="team_gridp">Designer</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <ul class="footer_list_icons team_icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>
            </div>
            <div class="col-md-3 team_grid text-center">
                <img src="images/t3.jpg" alt=" " class="img-fluid" />
                <h3>Lusiana James</h3>
                <p class="team_gridp">Designer</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <ul class="footer_list_icons team_icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>
            </div>
            <div class="col-md-3 team_grid text-center">
                <img src="images/t4.jpg" alt=" " class="img-fluid" />
                <h3>John Mark</h3>
                <p class="team_gridp">Designer</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <ul class="footer_list_icons team_icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>
            </div>
         </div>
        </div>
    </div>
</div>
    
@endsection