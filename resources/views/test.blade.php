<div>
    @foreach($data as $user)
    <ul class="user-list">
        <li class="user-item"><strong>Name:</strong> {{$user->name}}</li>
        <li class="user-item"><strong>Password:</strong> {{$user->password}}</li>
        <li class="user-item"><strong>Email:</strong> {{$user->email}}</li>
    </ul>
    @endforeach
    <div class="pagination-container">
        {{$data->links()}}
    </div>
</div>

<style>
    /* General list styling */
    .user-list {
        list-style-type: none;
        padding: 10px;
        margin: 10px 0;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .user-item {
        margin: 8px 0;
        font-size: 16px;
    }

    .user-item strong {
        font-weight: bold;
    }

    /* Pagination styling */
    .pagination-container {
        text-align: center;
        margin-top: 20px;
    }

    .w-5.h-5 {
        height: 20px;
        width: 20px;
    }

    .pagination {
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    .pagination li {
        margin: 0 5px;
        font-size: 14px;
    }

    .pagination a {
        color: #007BFF;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 4px;
        border: 1px solid #007BFF;
    }

    .pagination a:hover {
        background-color: #007BFF;
        color: white;
    }

    .pagination .disabled a {
        color: #ddd;
        border-color: #ddd;
    }

    .pagination .active a {
        background-color: #007BFF;
        color: white;
    }
</style>
