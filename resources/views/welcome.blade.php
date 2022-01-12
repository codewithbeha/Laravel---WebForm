<a class="btn btn-primary col-md-1.5" href="{{ url('/statuses')}}">  Status</a>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
<h4 style="color:blue;font:bold;">Applications List</h4>
<br>
<a class="btn btn-primary float-right mb-4" href="{{ url ('/add-person') }}" >Add Person</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Martial Status</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($people as $person)
    <tr>
      <th scope="row">{{$person->id}}</th>
      <td>{{$person->name}}</td>
      <td>{{$person->lname}}</td>
      <td>{{$person->phone}}</td>
      <td>{{$person->email}}</td>
      <td>{{$person->status->name}}</td>
      <td style="display:flex">
      <div>
      </div>
      <form action="{{ url('/delete-person/'.$person->id)}}" method="post">
      {{ method_field('Delete') }}
      @csrf
        <button class="btn btn-danger " type='submit'>Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
