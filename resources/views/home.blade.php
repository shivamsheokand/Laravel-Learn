<div class="container">
    <h1>Add User</h1>
    <!-- {{print_r($errors)}}-->

<!-- @if($errors->any())
@foreach($errors->all() as $error)
<div class="error-message">
    {{$error}}
</div>
@endforeach
@endif -->
    <form action="/user" method="post">
        <input type="hidden" name="_method" value="DELETE"/>
        @csrf
        <div class="input-wrapper">
            <input type="text" class="inputf" placeholder="Enter User Name" name="username">
            <!-- <span class="error-message">@error('username'){{$message}}@enderror</span> -->
        </div>

        <div class="input-wrapper">
            <!-- <input class="inputf" type="email" placeholder="Enter User Email" name="email"> -->
            <!-- <span class="error-message">@error('email'){{$message}}@enderror</span> -->
        </div>

        <div class="input-wrapper">
            <input type="text" class="inputf" placeholder="Enter User City" name="city">
            <!-- <span class="error-message">@error('city'){{$message}}@enderror</span> -->
        </div>

        <div>
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
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 400px;
    }

    h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
        color: #ff6600;
    }

    .input-wrapper {
        margin-bottom: 15px;
    }

    .inputf {
        border: 1px solid #ff6600;
        height: 35px;
        width: 100%;
        border-radius: 4px;
        padding: 5px;
        color: #ff6600;
        font-size: 16px;
    }

    button {
        border: 1px solid #ff6600;
        height: 35px;
        width: 100%;
        border-radius: 4px;
        background-color: #ff6600;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #e65c00;
    }

    fieldset {
        border: none;
        margin: 10px 0;
        padding: 0;
    }

    legend {
        font-weight: bold;
        color: #ff6600;
    }

    label {
        margin-left: 5px;
        font-size: 14px;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    .error-message {
        display: block;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        padding: 10px;
        border-radius: 5px;
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 20px;
        text-align: left;
        font-family: Arial, sans-serif;
    }

    .error-message a {
        color: #721c24;
        text-decoration: underline;
    }
</style>