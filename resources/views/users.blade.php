<div style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; margin: auto;">
    <h3 style="text-align: center; color: #4CAF50; font-size: 24px; margin-bottom: 20px;">
        Users List
    </h3>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: #4CAF50; color: white; text-align: left;">
                <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Password</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Oprations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $user)
            <tr style="background-color: #f9f9f9; text-align: left; color: #333;">
                <td style="padding: 10px; border: 1px solid #ddd;">{{$user->name}}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{$user->password}}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{$user->email}}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                     <a href="{{'delete/'.$user->id}}" >Delete</a>
                </tr>
                </td>
               
            @endforeach
        </tbody>
    </table>
</div>
