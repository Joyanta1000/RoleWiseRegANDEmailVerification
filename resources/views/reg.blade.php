<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('registration/hide-show-fields-form.css')}}" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Image and text -->
<nav class="navbar" style="background-color: #2B363F; position: fixed; width: 100%;">
  <a class="navbar-brand" href="#" style="color: white;">
    Registration form
  </a>
</nav>

<div class="p-3" style="padding-top: 150px;">
  <div class="form-group">
    
  </div>
  <div class="form-group">
    <label for="seeAnotherField">Type</label>
    <select class="form-control" id="seeAnotherField">
      <option value="None">Select the type</option>
          <option value="Middleclass">Middleclass</option>
          <option value="Lowerclass">Lowerclass</option>
          <option value="Poor">Poor</option>
          <option value="Volunteer">Volunteer</option>
          <option value="Donor">Donor</option>
    </select>
  </div>

  @if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  @if(\Session::has('message'))
  <div class="alert alert-success" align="center">
    <p>{{\Session::get('message')}}</p>
  </div>
  @endif

  <div class="form-group" id="otherFieldDiv">
    <form method="post" action="{{URL::to('/store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
    <input type="hidden" name="tbl_user_types_id" value="Middleclass" id="otherField">
    <label for="otherField">Name</label>
    <span style="color: red;">{{$errors->first('name')}}</span>
    <input type="text" class="form-control" name="name" id="otherField" value="{{old('name')}}"  required="required">
    <label for="otherField">Email</label>
    <span style="color: red;">{{$errors->first('email')}}</span>
    <input type="text" name="email" class="form-control" id="otherField" value="{{old('email')}}"  required="required">
    <label for="otherField">NID</label>
    <span style="color: red;">{{$errors->first('nid')}}</span>
    <input type="text" name="nid" class="form-control" id="otherField" value="{{old('nid')}}" >
    <label for="otherField">NID front image</label>
    <span style="color: red;">{{$errors->first('nid_front_image')}}</span>
    <input type="file" name="nid_front_image" class="form-control" id="otherField" value="{{old('nid_front_image')}}">
    <label for="otherField">NID back image</label>
    <span style="color: red;">{{$errors->first('nid_back_image')}}</span>
    <input type="file" name="nid_back_image" class="form-control" id="otherField" value="{{old('nid_back_image')}}">
    <label for="otherField">Birth-date</label>
    <span style="color: red;">{{$errors->first('birth_date')}}</span>
    <input type="date" name="birth_date" class="form-control" id="otherField" value="{{old('birth_date')}}" required="required">
    <label for="otherField">Birth certificate ID</label>
    <span style="color: red;">{{$errors->first('bid')}}</span>
    <input type="text" name="bid" class="form-control" id="otherField" value="{{old('bid')}}">
    <label for="otherField">Birth certificate image</label>
    <span style="color: red;">{{$errors->first('bid_image')}}</span>
    <input type="file" name="bid_image" class="form-control" value="{{old('bid_image')}}" id="otherField">
    <label for="otherField">Address</label>
    <span style="color: red;">{{$errors->first('address')}}</span>
    <input type="text" name="address" class="form-control" id="otherField" value="{{old('address')}}" required="required">
    <label for="otherField">Image</label>
    <span style="color: red;">{{$errors->first('image')}}</span>
    <input type="file" name="image" class="form-control" id="otherField" value="{{old('image')}}" required="required">
    <label for="otherField">Phone</label>
    <span style="color: red;">{{$errors->first('phone')}}</span>
    <input type="text" name="phone" class="form-control" id="otherField" value="{{old('phone')}}" required="required">
    <label for="otherField">Card no</label>
    <span style="color: red;">{{$errors->first('card_no')}}</span>
    <input type="text" name="card_no" class="form-control" value="{{old('card_no')}}" id="otherField" required="required">
    <label for="otherField">Total family members</label>
    <span style="color: red;">{{$errors->first('family_members')}}</span>
    <input type="text" name="family_members" class="form-control" id="otherField" value="{{old('family_members')}}" required="required">
    <label for="otherField">Total earners</label>
    <span style="color: red;">{{$errors->first('earners')}}</span>
    <input type="text" name="earners" class="form-control" id="otherField" value="{{old('earners')}}" required="required">
    <label for="otherField">Password</label>
    <span style="color: red;">{{$errors->first('password')}}</span>
    <input type="password" name="password" class="form-control" id="otherField" value="{{old('password')}}" required="required">
    <br>
    <div align="center">
    <button type="submit" class="btn btn-primary" id="otherField">Submit</button>
  </div>
  </form>
  </div>

  <div class="form-group" id="otherFieldDiv3">
    <form method="post" action="{{URL::to('/store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
    <input type="hidden" name="tbl_user_types_id" value="Lowerclass" id="otherField3">
    <label for="otherField3">Name</label>
    <span style="color: red;">{{$errors->first('name')}}</span>
    <input type="text" class="form-control" name="name" id="otherField3" value="{{old('name')}}" required="required">
    <label for="otherField3">Email</label>
    <span style="color: red;">{{$errors->first('email')}}</span>
    <input type="text" name="email" class="form-control" id="otherField3" value="{{old('email')}}" required="required">
    <label for="otherField3">NID</label>
    <span style="color: red;">{{$errors->first('nid')}}</span>
    <input type="text" name="nid" class="form-control" id="otherField3" value="{{old('nid')}}">
    <label for="otherField3">NID front image</label>
    <span style="color: red;">{{$errors->first('nid_front_image')}}</span>
    <input type="file" name="nid_front_image" class="form-control" id="otherField3" value="{{old('nid_front_image')}}">
    <label for="otherField3">NID back image</label>
    <span style="color: red;">{{$errors->first('nid_back_image')}}</span>
    <input type="file" name="nid_back_image" class="form-control" id="otherField3" value="{{old('nid_back_image')}}">
    <label for="otherField3">Birth-date</label>
    <span style="color: red;">{{$errors->first('birth_date')}}</span>
    <input type="date" name="birth_date" class="form-control" id="otherField3" required="required" value="{{old('birth_date')}}">
    <label for="otherField3">Birth certificate ID</label>
    <span style="color: red;">{{$errors->first('bid')}}</span>
    <input type="text" name="bid" class="form-control" id="otherField3" value="{{old('bid')}}">
    <label for="otherField3">Birth certificate image</label>
    <span style="color: red;">{{$errors->first('bid_image')}}</span>
    <input type="file" name="bid_image" class="form-control" id="otherField3" value="{{old('bid_image')}}">
    <label for="otherField3">Address</label>
    <span style="color: red;">{{$errors->first('address')}}</span>
    <input type="text" name="address" class="form-control" id="otherField3" value="{{old('address')}}" required="required">
    <label for="otherField3">Image</label>
    <span style="color: red;">{{$errors->first('image')}}</span>
    <input type="file" name="image" class="form-control" id="otherField3" value="{{old('image')}}" required="required">
    <label for="otherField3">Phone</label>
    <span style="color: red;">{{$errors->first('phone')}}</span>
    <input type="text" name="phone" class="form-control" id="otherField3" value="{{old('phone')}}" required="required">
    <label for="otherField3">Card no</label>
    <span style="color: red;">{{$errors->first('card_no')}}</span>
    <input type="text" name="card_no" class="form-control" id="otherField3" value="{{old('card_no')}}" required="required">
    <label for="otherField3">Total family members</label>
    <span style="color: red;">{{$errors->first('family_members')}}</span>
    <input type="text" name="family_members" class="form-control" id="otherField3" value="{{old('family_members')}}" required="required">
    <label for="otherField3">Total earners</label>
    <span style="color: red;">{{$errors->first('earners')}}</span>
    <input type="text" name="earners" class="form-control" id="otherField3" value="{{old('earners')}}" required="required">
    <label for="otherField3">Password</label>
    <span style="color: red;">{{$errors->first('password')}}</span>
    <input type="password" name="password" class="form-control" id="otherField3" value="{{old('password')}}" required="required">
    <br>
    <div align="center">
    <button type="submit" class="btn btn-primary" id="otherField3">Submit</button>
  </div>
  </form>
  </div>

  <div class="form-group" id="otherFieldDiv1">
    <form method="post" action="{{URL::to('/store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
    <input type="hidden" name="tbl_user_types_id" value="Volunteer" id="otherField3">
    <label for="otherField1">Name</label>
    <span style="color: red;">{{$errors->first('name')}}</span>
    <input type="text" class="form-control" name="name" id="otherField1" required="required" value="{{old('name')}}">
    <label for="otherField1">Email</label>
    <span style="color: red;">{{$errors->first('email')}}</span>
    <input type="text" name="email" class="form-control" id="otherField1" required="required" value="{{old('email')}}">
    
    <label for="otherField1">NID</label>
    <span style="color: red;">{{$errors->first('nid')}}</span>
    <input type="text" name="nid" class="form-control" id="otherField1" value="{{old('nid')}}">
    <label for="otherField1">NID front image</label>
    <span style="color: red;">{{$errors->first('nid_front_image')}}</span>
    <input type="file" name="nid_front_image" class="form-control" id="otherField1" value="{{old('nid_front_image')}}">
    <label for="otherField1">NID back image</label>
    <span style="color: red;">{{$errors->first('nid_back_image')}}</span>
    <input type="file" name="nid_back_image" class="form-control" id="otherField1" value="{{old('nid_back_image')}}">
    <label for="otherField1">Birth-date</label>
    <span style="color: red;">{{$errors->first('birth_date')}}</span>
    <input type="date" name="birth_date" class="form-control" id="otherField1" value="{{old('birth_date')}}" required="required">
    <label for="otherField1">Birth certificate ID</label>
    <span style="color: red;">{{$errors->first('bid')}}</span>
    <input type="text" name="bid" class="form-control" id="otherField1" value="{{old('bid')}}" >
    <label for="otherField1">Birth certificate image</label>
    <span style="color: red;">{{$errors->first('bid_image')}}</span>
    <input type="file" name="bid_image" class="form-control" id="otherField1" value="{{old('bid_image')}}">
    <label for="otherField1">Address</label>
    <span style="color: red;">{{$errors->first('address')}}</span>
    <input type="text" name="address" class="form-control" id="otherField1" required="required" value="{{old('address')}}">
    <label for="otherField1">Image</label>
    <span style="color: red;">{{$errors->first('image')}}</span>
    <input type="file" name="image" class="form-control" id="otherField1" required="required" value="{{old('image')}}">
    <label for="otherField1">Phone</label>
    <span style="color: red;">{{$errors->first('phone')}}</span>
    <input type="text" name="phone" class="form-control" id="otherField1" required="required" value="{{old('phone')}}">
    <label for="otherField1">Password</label>
    <span style="color: red;">{{$errors->first('password')}}</span>
    <input type="password" name="password" class="form-control" id="otherField1" required="required" value="{{old('password')}}">
    <br>
    <div align="center">
    <button type="submit" class="btn btn-primary" id="otherField1">Submit</button>
  </div>
  </form>
  </div>

<div class="form-group" id="otherFieldDiv2">
  <form method="post" action="{{URL::to('/store')}}" enctype="multipart/form-data">
      {{csrf_field()}}


  <input type="hidden" name="tbl_user_types_id" value="Poor" id="otherField2">
   <label for="otherField2">Name</label>
   <span style="color: red;">{{$errors->first('name')}}</span>
    <input type="text" class="form-control" name="name" id="otherField2" required="required" value="{{old('name')}}">
    <label for="otherField2">Address</label>
    <span style="color: red;">{{$errors->first('address')}}</span>
    <input type="text" name="address" class="form-control" id="otherField2" required="required" value="{{old('address')}}">
    <label for="otherField2">Image</label>
    <span style="color: red;">{{$errors->first('image')}}</span>
    <input type="file" name="image" class="form-control" id="otherField2" value="{{old('image')}}">
    <label for="otherField2">Phone</label>
    <span style="color: red;">{{$errors->first('phone')}}</span>
    <input type="text" name="phone" class="form-control" id="otherField2" required="required" value="{{old('phone')}}">
    <label for="otherField2">Password</label>
    <span style="color: red;">{{$errors->first('password')}}</span>
    <input type="password" name="password" class="form-control" id="otherField2" required="required" value="{{old('password')}}">
    <br>
    <div align="center">
    <button type="submit" class="btn btn-primary" id="otherField2">Submit</button>
  </div>
  </form>
  </div>

<div class="form-group" id="otherFieldDiv4">
  <form method="post" action="{{URL::to('/store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
  <input type="hidden" name="tbl_user_types_id" value="Donor" id="otherField4">
   <label for="otherField4">Name/Website</label>
   <span style="color: red;">{{$errors->first('name')}}</span>
    <input type="text" class="form-control" name="name" id="otherField4" required="required" value="{{old('name')}}">
    <label for="otherField4">Contactable Email</label>
    <span style="color: red;">{{$errors->first('email')}}</span>
    <input type="text" class="form-control" name="email" id="otherField4" required="required" value="{{old('email')}}">
    <label for="otherField4">Address</label>
    <span style="color: red;">{{$errors->first('address')}}</span>
    <input type="text" name="address" class="form-control" id="otherField4" required="required" value="{{old('address')}}">
    <label for="otherField4">Owners image</label>
    <span style="color: red;">{{$errors->first('image')}}</span>
    <input type="file" name="image" class="form-control" id="otherField4" required="required" value="{{old('image')}}">
    <label for="otherField4">Phone</label>
    <span style="color: red;">{{$errors->first('phone')}}</span>
    <input type="text" name="phone" class="form-control" id="otherField4" required="required" value="{{old('phone')}}">
    <label for="otherField4">Password</label>
    <span style="color: red;">{{$errors->first('password')}}</span>
    <input type="password" name="password" class="form-control" id="otherField4" required="required" value="{{old('password')}}">
    <br>
    <div align="center">
    <button type="submit" class="btn btn-primary" id="otherField4">Submit</button>
  </div>
  </form>
  </div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="{{asset('registration/hide-show-fields-form.js')}}"></script>
