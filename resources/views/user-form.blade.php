<div class="container">
    <h1>Add User</h1>
    <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" class="inputf" placeholder="Enter User Name" name="username">
        </div>
        <div class="input-wrapper">
            <input class="inputf" type="email" placeholder="Enter User Email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" class="inputf" placeholder="Enter User City" name="city">
        </div>
        <div>
            <fieldset>
                <legend>Select Your Subjects:</legend>
                <input type="checkbox" name="check[]" id="checkbox1" value="html" checked>
                <label for="checkbox1">HTML</label>
                <br>

                <input type="checkbox" name="check[]" id="checkbox2" value="css">
                <label for="checkbox2">CSS</label>
                <br>

                <input type="checkbox" name="check[]" id="checkbox3" value="javascript">
                <label for="checkbox3">JavaScript</label>
            </fieldset>
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
        margin-bottom: 10px;
    }

    input[type="email"] {
        color: #ff6600;
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
</style>
