@extends('layouts.app')

@section('content')
<div class="row">

	<div class="col-12">
		
                <div class="card">
                  <div class="card-header">
                    <h3>Manage Ads</h3>
                  </div>
                  <div class="card-body">
                      <form action="">
                        <div class="row form-group">
                          <div class="col-sm-6">
                            <label for="">Ad ID #</label>
                            <input type="text" class="form-control" name="ad_id">
                          </div>
                          <div class="col-sm-6">
                            <label for="">Ad Unit </label>
                            <input type="text" class="form-control" name="ad_unit">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-sm-6">
                            
                          </div>
                          <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </form>
                  </div>
                </div>
              
	</div>



</div>

@endsection

