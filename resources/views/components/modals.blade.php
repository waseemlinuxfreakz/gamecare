<div>
  
<!-- Login Popup -->

<!-- Modal -->
<div class="modal login_modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">            
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body login_page_wrap"> 
  
            <div class="different_area">
            <ul class="nav nav-tabs tabs_style" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-bs-toggle="tab" href="#register">Register</a>
              </li>
          </ul>
  
          <div class="tab-content">
              <div id="login" class="tab-pane active"> 		    	
  
                            <div class="login_form">
                              <h3>Login with Your Soical Profile</h3>
                              <div class="login_with_social">
                                  <a href="{{route('auth.facebook')}}">
                                      <img src="images/facebook.svg" alt="">
                                  </a>
                                  <a href="{{route('auth.google')}}">
                                      <img src="images/google.svg" alt="">
                                  </a>
                                  <a href="#">
                                      <img src="images/steam.svg" alt="">
                                  </a>
                              </div>
  
                              <div class="or-dividor">
                                  <span>OR</span>
                              </div>
  
                              <div class="sign_with">
                                  <h3>Sign in with email</h3>
                                  <form method="POST" action="/loginPost">
                                    @csrf
                                      <div class="form-group">
                                          <label>email</label>
                                          <input type="email" placeholder="Email" name="email">
                                      </div>
                                      <div class="form-group">
                                          <label>password</label>
                                          <div class="pwd_icon">
                                              <input type="password" placeholder="Password" name="password">
                                              <img src="images/eye-off.svg" alt="">
                                          </div>
                                      </div>
                                      <a class="forgot_password" id="forgotPasswordLink" href="#">Forgot your password?</a>
                                      <div class="form-group">
                                          <button type="submit">Sign Ins
                                              <img src="images/black_arrow.svg" alt="">
                                          </button>
                                      </div>	
                                  </form>	
                              </div>	
  
                          </div>
  
  
              </div>
              <div id="register" class="tab-pane fade">			    
  
                  <div class="register_form">
                  <livewire:register-user/>
                  </div> 
  
              </div>
          </div>
  
         </div>
  
  
          <div class="forgot_email_box" style="display: none;">
             <h3>Forgot password?</h3>
             <p>Fill in your email and we will sind you instruction on how to reset your passowrd via e-mail.</p>
             <p>Contact us via Support if you need further help.</p>
             <form>
                     <div class="form-group">
                      <label>email</label>
                      <input type="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                      <button id="send_email">Send Email
                          <img src="images/black_arrow.svg" alt="">
                      </button>
                  </div>
             </form>	
          </div>
  
  
          <div class="check_email" style="display: none;">
              <h3>Check your email</h3>
              <p>We have sent a password reset link to your email. Please check your inbox.</p>					
              <div class="form-group">
                  <a href="#" class="backtohome">Back to log in page</a>
              </div>
          </div>		
  
  
  
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Update Password -->
  <div class="modal login_modal fade" id="password_update_Modal" tabindex="-1" aria-labelledby="password_update_Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">            
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body login_page_wrap"> 
                  
  
                    <div class="login_form password_update_form">
                      <div class="sign_with">
                          <h3>Update password</h3>
                          <p class="form_text">We have sent a password reset link to your email. Please check your inbox.</p>
                              <div class="form-group">
                                  <div class="d-flex content_between">
                                  <label>Enter password</label>
                                  <label class="pstrength">Password srength: None <span class="green_text">Strong</span></label>
                                  </div>
                                  <div class="pwd_icon">
                                      <input type="password" placeholder="Password">
                                      <img src="images/eye-off.svg" alt="">
                                  </div>
                                  <div class="success_message">
                                      <p><img src="images/success.svg" alt="">Your password it strong.</p>
                                  </div>    				
                              </div>
                              <div class="form-group">
                                  <label>cONFIRM PASSWORD</label>
                                  <div class="pwd_icon">
                                      <input type="password" placeholder="Password">
                                      <img src="images/eye-off.svg" alt="">
                                  </div>
                                  <div class="error_message">
                                      <p><img src="images/error.svg" alt=""> Please enter the same passowrd again.</p>
                                  </div>
  
                              </div>
                              <div class="form-group">
                                  <button id="update_pwd">Update Password	</button>
                              </div>	
                      </div>
  
                      <div class="success_password_message" style="display: none;">
                          <div class="check_email">
                              <h3>Password Updated Successfully</h3>
                              <p>Your password has been successfully updated. You can now log in to your account using the new password.</p>					
                              <div class="form-group">
                                  <a href="#" class="backtohome">go to the login page</a>
                              </div>
                          </div>
                      </div>	
  
                  </div>
            </div>
      </div>
    </div>
  </div>
  
  
  <!-- Search Model -->
  <div class="modal search_model_size fade" id="search_model" tabindex="-1" aria-labelledby="search_model" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">            
            <div class="modal-body search_page_wrap"> 
                  <div class="search_input_model">
                    <div class="input_field">
                      <i class="fas fa-search"></i>
                      <input type="text" id="searchInput" onclick="showDiv()" placeholder="Search teams, players, matches, etc.">
                    </div>
                  </div>
            </div>
  
            <div class="search_dropdown" id="searchDropdown" style="display: none;">
                <div class="lists_search">
                    <h4>Teams</h4>
                    <ul class="search_list">
                        <li><a href="#"><img src="images/user-img/Avatar1.svg" alt=""> Spirit</a></li>
                        <li><a href="#"><img src="images/user-img/Avatar1.svg" alt=""> Spirit</a></li>
                        <li><a href="#"><img src="images/user-img/Avatar1.svg" alt=""> Spirit</a></li>
                    </ul>
                </div>
  
                <div class="lists_search">
                    <h4>Players</h4>
                    <ul class="search_list">
                        <li><a href="#"><img src="images/team_roaster_1.svg" alt=""> Spice</a></li>
                        <li><a href="#"><img src="images/r4.svg" alt=""> Spin</a></li>
                    </ul>
                </div>
                <div class="lists_search">
                    <h4>Videos</h4>
                    <ul class="search_list">
                        <li><a href="#"><img src="images/user-img/Avatar5.svg" alt=""> Spirit vs EOM <img src="images/user-img/Avatar1.svg" alt=""> - VIRL 2023 Summer</a></li>
                        <li><a href="#"><img src="images/user-img/Avatar5.svg" alt=""> Spirit vs EOM <img src="images/user-img/Avatar1.svg" alt=""> - VIRL 2023 Summer</a></li>
                        <li><a href="#"><img src="images/user-img/Avatar5.svg" alt=""> Spirit vs EOM <img src="images/user-img/Avatar1.svg" alt=""> - VIRL 2023 Summer</a></li>
                    </ul>
                </div>
  
                 <div class="lists_search">
                    <h4>News</h4>
                    <ul class="search_list">
                        <li><a href="#"><img src="images/ani_post.svg" alt=""> Spectacular CS:GO Major Tournament Announced with Record Prize Pool!</a></li>
                        <li><a href="#"><img src="images/ani_post.svg" alt=""> Spectacular CS:GO Major Tournament Announced with Record Prize Pool!</a></li>
                        <li><a href="#"><img src="images/ani_post.svg" alt=""> Spectacular CS:GO Major Tournament Announced with Record Prize Pool!</a></li>
                    </ul>
                </div>	
      
  
           </div>
      </div>
    </div>
  </div>
</div>

