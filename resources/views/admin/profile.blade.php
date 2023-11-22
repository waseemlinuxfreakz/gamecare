@extends('layouts.admin')

@section('content')
    
<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Hi, {{auth()->user()->name}}!</h2>
      <p class="section-lead">
        Change information about yourself on this page.
      </p>

      <div class="row mt-sm-4">
        
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" class="needs-validation" novalidate="">
              <div class="card-header bg-primary">
                <h4 class="text-white">Edit Profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">                               
                    <div class="form-group col-md-6 col-12">
                      <label>First Name</label>
                      <input type="text" name="first_name"  class="form-control" value="{{auth()->user()->first_name}}" required="">
                      <div class="invalid-feedback">
                        Please fill in the first name
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Last Name</label>
                      <input type="text"  class="form-control" name="last_name" value="{{auth()->user()->first_name}}" required="">
                      <div class="invalid-feedback">
                        Please fill in the last name
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Email</label>
                      <input type="email" readonly class="form-control" value="{{auth()->user()->email}}" required="">
                      <div class="invalid-feedback">
                        Please fill in the email
                      </div>
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <label>Phone</label>
                      <input type="tel" class="form-control" value="">
                    </div>
                  </div>
                 
                 
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
              <form method="post" class="needs-validation" novalidate="">
                <div class="card-header bg-primary">
                  <h4 class="text-white">Edit Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">                               
                      <div class="form-group col-md-6 col-12">
                        <label>Password</label>
                        <input type="text" name="password"  class="form-control"  required="">
                        <div class="invalid-feedback">
                          Please fill in the first name
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-12">
                        <label>Confirm Password</label>
                        <input type="text"  class="form-control" name="last_name"  required="">
                        <div class="invalid-feedback">
                          Please fill in the last name
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input type="email" readonly class="form-control" value="{{auth()->user()->email}}" required="">
                        <div class="invalid-feedback">
                          Please fill in the email
                        </div>
                      </div>
                      <div class="form-group col-md-5 col-12">
                        <label>Phone</label>
                        <input type="tel" class="form-control" value="">
                      </div>
                    </div>
                   
                   
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </section>

@endsection