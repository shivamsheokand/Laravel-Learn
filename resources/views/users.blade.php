<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <h3>
        Users List
    </h3>
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Password</td>
            <td>Email</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </table>
</div>
