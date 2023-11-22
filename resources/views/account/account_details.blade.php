
@extends('layouts.main')
@section('title','Manage Account')
@section('content')
<!-- Account details section start -->
<section class="latest_account_page_wrap ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page_heading">
                    <h2> <span>HI,</span> {{auth()->user()->name}}</h2>
                </div>
            </div>
            <!-- details info -->
            <div class="account-details-outer">
                <x-account.sidebar />

                <div class="right_side_inner">

                    <div>
                        <!-- form -->
                        <div class="account_detalis-form">
                            <form class="row g-3" action="{{route('account.update')}}" method="POST">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputtext4" class="form-label">First</label>
                                    <input type="text" value=" {{auth()->user()->first_name}}" name="first_name" class="form-control"
                                        id="inputtext4" / placeholder="Jek">
                                    @error('first_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputtext4" class="form-label">last name</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->last_name}}" name="last_name"
                                        id="inputtext4" placeholder="Johnson" />
                                    @error('last_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputtext4" class="form-label">nickname</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->nick_name}}" name="nick_name"
                                        id="inputtext4" / placeholder="jekjek5152 ">
                                    @error('nick_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputtext4" class="form-label">Field label</label>
                                    <input type="email" class="form-control" value="{{auth()->user()->email}}" name="email" id="inputtext4"
                                        placeholder="jekjohnsonson@gmail.com" />
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                    
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select" name="state">
                                        <option {{(auth()->user()->state=='virgina')?"selected":""}}>Virginia
                                        </option>
                                        <option {{(auth()->user()->state=='Alabama')?"selected":""}}>Alabama
                                        </option>
                                        <option {{(auth()->user()->state=='Alaska')?"selected":""}}>Alaska</option>
                                    </select>
                                    @error('state')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">College</label>
                                    <select id="inputState" class="form-select" name="college">
                                        <option {{(auth()->user()->college=='virgina')?"selected":""}}>Virginia
                                            College</option>
                                        <option {{(auth()->user()->college=='Alabama')?"selected":""}}>Alabama
                                            College</option>
                                        <option {{(auth()->user()->college=='Alaska')?"selected":""}}>Alaska College
                                        </option>
                                    </select>
                                    @error('college')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                    
                                <div class="col-12">
                                    <button type="submit" class="btn save_btn">save</button>
                                </div>
                            </form>
                        </div>
                        <!-- Reset your password -->
                        <div class="Reset_password_area">
                            <h3>Reset your password</h3>
                            <p>We will send you an email to resend your password</p>
                            <div class="email-flid">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="jekjohnsonson@gmail.com" />
                            </div>
                            <div class="col-12">
                                <button data-bs-toggle="modal" data-bs-target="#UserEmailConfirm" type="submit"
                                    class="btn save_btn send-email-btn">send email</button>
                            </div>
                        </div>
                        <!-- Delete your account -->
                        <div class="Reset_password_area">
                            <h3>Delete your account</h3>
                            <p>If you would like to delete your account, press the button below</p>
                            <div class="email-flid">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="jekjohnsonson@gmail.com" />
                            </div>
                            <div class="col-12">
                                <button data-bs-toggle="modal" data-bs-target="#UserDelete" type="submit"
                                    class="btn save_btn send-email-btn delete-account-btn">delete account</button>
                            </div>
                        </div>
                    </div>


                </div>









            </div>
        </div>
    </div>
    </div>
    </div>
</section>

@endsection