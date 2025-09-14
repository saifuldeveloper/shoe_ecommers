@extends('user.dashboard.layout')

@section('user_content')
<div class="row">
    <!-- Profile Content -->
    <div class="col-sm-11 col-sm-offset-0">
        <div class="user_profile_card000">
            <div class="panel-body">
                <h4>
                    Personal Information 
                </h4>
                <hr>
             
  <div class="form-wrapper">
   <form>
  <div class="field-group">
    <div class="field">
      <label for="firstName">First Name *</label>
      <input type="text" id="firstName" value="Alamin" />
    </div>
    <div class="field">
      <label for="lastName">Last Name *</label>
      <input type="text" id="lastName" value="Islam" />
    </div>
  </div>
  <div class="field-group">
  <div class="field">
    <label for="email">Email *</label>
    <input type="email" id="email" value="alamincsetpi@gmail.com" />
  </div>
  <div class="field">
    <label for="gender">Gender *</label>
    <select id="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </div>
   </div>
   <div class="field-group">
  <div class="field">
    <label for="dob">Date of Birth *</label>
    <input type="date" id="dob" value="2001-09-12" />
  </div>
  <div class="field">
    <label for="anniversary">Anniversary</label>
    <input type="date" id="anniversary" />
  </div>
   </div>
   <div class="field-group">
  <div class="field">
    <label for="familyMembers">Number of Family Members</label>
    <input type="number" id="familyMembers" value="0" />
  </div>
  <div class="field">
    <label for="kids">Number of Kids</label>
    <input type="number" id="kids" value="0" />
  </div>
   </div>
   <div class="field-group">
  <div class="field">
    <label for="preferredBrand">Preferred Brand</label>
    <select id="preferredBrand">
      <option value="brand1">Brand 1</option>
      <option value="brand2">Brand 2</option>
    </select>
  </div>
  <div class="field">
    <label for="preferredStore">Preferred Store</label>
    <select id="preferredStore">
      <option value="store1">Store 1</option>
      <option value="store2">Store 2</option>
    </select>
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