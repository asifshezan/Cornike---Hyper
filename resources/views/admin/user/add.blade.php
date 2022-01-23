@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <form>
        <div class="card">
          <div class="card-header card_header bg-dark">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="uil-align-justify"></i>Add User Information
              </div>
              <div class="col-md-4 card_header_btn">
                <a href="{{url('admin.user.all')}}" class="btn btn-sm btn-secondary chb_btn"><i class="uil-plus-circle"></i> All User</a>
              </div>
            </div>
          </div>
          <div class="card-body card_body">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="email" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Password<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="password" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Confirm-password<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="password" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
          </div>
          <div class="card-footer card_footer bg-dark text-center">
            <button class="btn btn-secondary" type="submit">REGISTRATION</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-1"></div>
  </div>
@endsection
