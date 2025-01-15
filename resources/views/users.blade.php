<div style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 100%; margin: auto;">
    <h3 style="text-align: center; color: #4CAF50; font-size: 24px; margin-bottom: 20px;">
        Users List
    </h3>
    <form action="/search" method="get" class="search-form">
        <input type="text" placeholder="Search name" name="search" class="search-input" value="{{@$sec}}"/>
        <button type="submit" class="search-button">Search</button>
    </form>
    
    <form action="/deletemut" method="post" style="margin-top: 20px;">
        @csrf
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #4CAF50; color: white; text-align: left;">
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Select</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Section</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Name</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Password</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Email</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 16px;">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $user)
                    <tr style="background-color: #f9f9f9; text-align: left; color: #333;">
                        <td style="padding: 12px; border: 1px solid #ddd;">
                            <input type="checkbox" name="ids[]" value="{{$user->id}}"/>
                        </td>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{$user->section}}</td>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{$user->name}}</td>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{$user->password}}</td>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{$user->email}}</td>
                        <td style="padding: 12px; border: 1px solid #ddd; text-align: center;">
                            <a href="{{'delete/'.$user->id}}" class="btn-delete">Delete</a>
                            <a href="{{'edit/'.$user->id}}" class="btn-edit">Edit</a>
                            <a href="/addUser" class="btn-add">Add</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn-delete-all">Delete Selected</button>
    </form>

    <div style="margin-top: 20px;">
        {{ $data->links() }}
    </div>
</div>

<style>
    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
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
        padding: 6px 12px;
        border-radius: 4px;
        background-color: #f1f1f1;
        margin-right: 10px;
        transition: background-color 0.3s ease;
    }

    a:hover {
        background-color: #ddd;
    }

    .btn-delete {
        color: #FF5733;
    }

    .btn-edit {
        color: #4CAF50;
    }

    .btn-add {
        color: #3498db;
    }

    .btn-delete-all {
        background-color: #FF5733;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .btn-delete-all:hover {
        background-color: #e04e2e;
    }

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

        .search-form {
            flex-direction: column;
            align-items: stretch;
        }

        .search-input {
            margin-bottom: 10px;
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

    /* Search Form Styles */
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
        margin-bottom: 20px;
    }

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

    .search-input:focus {
        border-color: #3498db;
    }

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

    .search-button:hover {
        background-color: #2980b9;
    }

    /* Pagination Styling */
    .w-5.h-5 {
        width: 20px;
    }
</style>
