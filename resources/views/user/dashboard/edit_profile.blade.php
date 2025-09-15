@extends('user.dashboard.layout')

@section('user_content')
<div class="row">
    <!-- Profile Content -->
    <div class="col-sm-11 col-sm-offset-0">
        <div class="user_profile_card000">
            <div class="panel-body">
                <h4>  Personal Information </h4>
                <hr>       
            <div class="form-wrapper">
            <form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="field-group">
              <div class="field">
                <label for="firstName">First Name <span style="color:red">*</span></label>
                <input type="text" name="first_name"  value="{{$user->first_name}}" />
                  @error('first_name')
                  <p class="message-danger">{{$message}}</p>
                  @enderror
              </div>
              <div class="field">
                <label for="lastName">Last Name <span style="color:red">*</span></label>
                <input type="text"  name="last_name" id="account-ln" value="{{$user->last_name}}" />
                 @error('last_name')
                  <p class="message-danger">{{$message}}</p>
                  @enderror
              </div>
            </div>
            <div class="field-group">
            <div class="field">
              <label for="email">Email <span style="color:red">*</span></label>
              <input type="email" name="email" value="{{$user->email}}" />
                 @error('email')
                  <p class="message-danger">{{$message}}</p>
                  @enderror
            </div>
          
            </div>
            <div class="field-group">
            <div class="field">
              <label for="dob">Phone <span style="color:red">*</span></label>
              <input type="text" name="phone"  value="{{$user->phone}}" />
              @error('email')
                <p class="message-danger">{{$phone}}</p>
                @enderror
            </div>
            </div>
            <div class="footer">
              <button type="submit" class="save-btn">Save Changes</button>
            </div>
          </form>

            </div>
</div>



            </div>
        </div>
    </div>
</div>

@endsection