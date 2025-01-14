<div class="container">
    <h1>Add User</h1>
    <!-- Error message display -->
    <!-- {{print_r($errors)}}-->

    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="error-message">
        {{$error}}
    </div>
    @endforeach
    @endif -->
    <form action="/edit/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT"/>

        <div class="input-wrapper">
            <input type="text" class="inputf" placeholder="Enter User Name" name="name" value="{{$data->name}}">
            <span class="error-message">@error('name'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
            <input class="inputf" type="email" placeholder="Enter User Email" name="email" value="{{$data->email}}">
            <span class="error-message">@error('email'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
            <input type="password" class="inputf" placeholder="Enter User Password" name="password" value="{{$data->password}}">
            <span class="error-message">@error('password'){{$message}}@enderror</span>
        </div>
        
        <div class="button-wrapper">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f7f7f7;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        padding: 25px;
        width: 100%;
        max-width: 450px;
        box-sizing: border-box;
    }

    h1 {
        text-align: center;
        font-size: 28px;
        margin-bottom: 25px;
        color: #2c3e50;
    }

    .input-wrapper {
        margin-bottom: 20px;
    }

    .inputf {
        border: 1px solid #ccc;
        height: 40px;
        width: 100%;
        border-radius: 5px;
        padding: 0 10px;
        font-size: 16px;
        color: #333;
        transition: border-color 0.3s ease;
    }

    .inputf:focus {
        outline: none;
        border-color: #3498db;
    }

    .inputf::placeholder {
        color: #aaa;
    }

    .button-wrapper {
        margin-top: 20px;
    }

    button {
        border: none;
        height: 40px;
        width: 100%;
        border-radius: 5px;
        background-color: #3498db;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #2980b9;
    }

    .error-message {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        padding: 10px;
        border-radius: 5px;
        font-size: 14px;
        margin-top: 5px;
        display: block;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .container {
            padding: 15px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .inputf {
            height: 35px;
            font-size: 14px;
        }

        button {
            font-size: 14px;
            height: 35px;
        }
    }
</style>
