<div style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 100%; margin: auto;">
    <h3 style="text-align: center; color: #4CAF50; font-size: 24px; margin-bottom: 20px;">
        Users List
    </h3>
   <form action="/search" method="get" class="search-form">
    <input type="text" placeholder="Search name" name="search" class="search-input" value="{{@$sec}}"/>
    <button type="submit" class="search-button">Submit</button>
</form>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: #4CAF50; color: white; text-align: left;">
                <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Name</th>
                <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Password</th>
                <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Email</th>
                <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $user)
            <tr style="background-color: #f9f9f9; text-align: left; color: #333;">
                <td style="padding: 12px; border: 1px solid #ddd;">{{$user->name}}</td>
                <td style="padding: 12px; border: 1px solid #ddd;">{{$user->password}}</td>
                <td style="padding: 12px; border: 1px solid #ddd;">{{$user->email}}</td>
                <td style="padding: 12px; border: 1px solid #ddd;">
                    <a href="{{'delete/'.$user->id}}" style="color: #FF5733; text-decoration: none; padding: 4px 8px; border-radius: 4px; background-color: #f1f1f1; margin-right: 10px;">Delete</a>
                    <a href="{{'edit/'.$user->id}}" style="color: #4CAF50; text-decoration: none; padding: 4px 8px; border-radius: 4px; background-color: #f1f1f1; margin-right: 10px;">Edit</a>
                    <a href="/addUser" style="color: #3498db; text-decoration: none; padding: 4px 8px; border-radius: 4px; background-color: #f1f1f1;">Add</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $data->links() }}
</div>

<style>
    /* Responsive Styles */
    @media (max-width: 768px) {
        h3 {
            font-size: 20px;
        }

        table {
            font-size: 14px;
        }

        th, td {
            padding: 8px;
        }

        .operations a {
            display: block;
            margin-bottom: 5px;
        }
    }

    @media (max-width: 480px) {
        h3 {
            font-size: 18px;
        }

        table {
            font-size: 12px;
        }

        th, td {
            padding: 6px;
        }

        .operations a {
            font-size: 14px;
        }
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #4CAF50;
        color: white;
        text-align: left;
    }

    td {
        background-color: #f9f9f9;
        color: #333;
        border: 1px solid #ddd;
        text-align: left;
        padding: 12px;
    }

    /* Link Styling for Operations */
    a {
        text-decoration: none;
        padding: 4px 8px;
        border-radius: 4px;
        background-color: #f1f1f1;
        margin-right: 10px;
        transition: background-color 0.3s ease;
    }

    a:hover {
        background-color: #ddd;
    }

    /* Add some margin between buttons */
    .operations a {
        margin-right: 10px;
    }
      .search-form {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 500px;
        background-color: white;
        padding: 10px 15px;
        border-radius: 5px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Input styling */
    .search-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        color: #333;
        outline: none;
        transition: border-color 0.3s ease;
    }

    /* Input focus state */
    .search-input:focus {
        border-color: #3498db;
    }

    /* Button styling */
    .search-button {
        padding: 10px 15px;
        margin-left: 10px;
        border: none;
        background-color: #3498db;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    /* Button hover state */
    .search-button:hover {
        background-color: #2980b9;
    }

    /* Responsive styling */
    @media (max-width: 600px) {
        .search-form {
            padding: 8px 12px;
        }

        .search-input {
            font-size: 14px;
            padding: 8px;
        }

        .search-button {
            font-size: 14px;
            padding: 8px 12px;
        }
    }
</style>
