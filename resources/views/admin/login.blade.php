<!-- <h1>admin Page</h1> -->
<h2>user name is :{{$username}}</h2>
<!-- <h3>{{rand()}}</h3> -->

<!-- <h3>{{$usersArr[2]}}</h3> -->

@if($username=='sam')
    <h3>this is {{$usersArr[0]}}</h3>
@elseif($username=='anil')
    <h3>this is {{$usersArr[1]}}</h3>
@else
    <h3>this is {{$usersArr[2]}}</h3>
@endif

<div>
    @foreach($usersArr as $users)
    <h5>{{$users}}</h5>
    @endforeach
</div>

<div>
@for($i=0;$i<=10;$i++)
    <h3>{{$i}}</h3>
@endfor
</div>