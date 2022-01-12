<a class="btn btn-primary col-md-1.5" href="{{ url('/')}}">  Back</a>
<br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
<!-- nderhyrje -->
@if ($errors->any())
<ul class="alert alert-warning">
  @foreach($errors->all() as $error)
       <li>{{  $error }}</li>
       @endforeach
</ul>
@endif



<h4 style="color:blue;font:bold;">Please fill the Application Web Form</h4>
<br>
<form method="post" action="{{ url('/add-person') }}">
    {{ csrf_field() }}
    <div class="form-group col-md-6 mb-3">
      <label for="exampleFormControlInput1">First Name</label>
      <input type="text" name="name" class="form-control" placeholder="First Name">
    </div>
    <div class="form-group col-md-6 mb-3">
      <label for="exampleFormControlInput1">Last Name</label>
      <input type="text" name="lname" class="form-control" placeholder="Last Name">
    </div>
    <div class="form-group col-md-6 mb-3">
      <label for="exampleFormControlInput1">Phone</label>
      <input type="text" name="phone" class="form-control" placeholder="Phone">
    </div>
    <div class="form-group col-md-6 mb-3">
      <label for="exampleFormControlInput1">Email</label>
      <input type="email" name="email" class="form-control" placeholder="example@coderytech.com">
    </div>
    <div class="form-group col-md-6 mb-3">
    <label for="SelectGrid">Martial Status</label>
      <select name="status_id" class="form-control" id="exampleFormControlSelect1">
        @foreach($statuses as $status)
        <option value="{{$status->id}}">{{$status->name}}</option>
        @endforeach
      </select>
    </div>

    <button class="btn btn-primary col-md-1.5 mt-3">Save Application</button>

</form>
</div>
