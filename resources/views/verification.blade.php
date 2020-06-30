<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('registration/hide-show-fields-form.css')}}" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Image and text -->
<nav class="navbar" style="background-color: #2B363F; position: fixed; width: 100%;">
  <a class="navbar-brand" href="#" style="color: white;">
    Account verification
  </a>
</nav>
<div align="center" style="padding-top: 150px;">
<form action="{{URL::to('verified')}}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="email" value="">
	<input type="hidden" name="email_verified" value="1">
	<b>After activation, you have to wait for a while to log into your account, because of admins approval, due to maintain some security, you would be kind enough to us, after activation you will be notified by your phone number.</b><br><br><br>
	<button class="btn btn-primary">Activate your account</button>
</form>	
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="{{asset('registration/hide-show-fields-form.js')}}"></script>