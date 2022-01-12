<head>
<!-- <a href="{{ url('/home')}}">  Home</a> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<a class="btn btn-primary col-md-1.5" href="{{ url('/')}}">  Back</a>

<div class="container">
<h4 style="color:blue;font:bold;">Here you can see Martial Status</h4>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Status Name</th>
      <th scope="col">Date Created</th>

    </tr>
  </thead>
  <tbody>
    @foreach($statuses as $status)
    <tr>
      <th scope="row">{{$status->id}}</th>
      <td>{{$status->name}}</td>
      <td>{{$status->created_at->diffForHumans()}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
