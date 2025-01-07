<div>
    <h2>User Form</h2>
    <form action="addUser" method="post">
        @csrf
        <div class="input-raper">
            <input type="text" placeholder="Enter User Name" name="username">
        </div>
        <div class="input-raper">
            <input type="text" placeholder="Enter User Email" name="email">
        </div>
        <div class="input-raper">
            <input type="text" placeholder="Enter User Name City" name="city">
        </div>
        <div class="input-raper">
            <button>Submit</button>
        </div>
    </form>
</div>

<style>
    input{
        border:orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 4px;
        color:orange;
    }
    .input-raper{
        margin: 10px;
    }
    button{
        border:orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 4px;
        color:orange;
        background-color: white;
    cursor: pointer;
    }
</style>