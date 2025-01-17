<div class="form-container">
    <h1>Item Form</h1>
    <form action="/addItem" method="post">
        @csrf
        <input type="text" name="item" placeholder="Enter Your Name" class="input-field" />
        <input type="text" name="price" placeholder="Enter Price" class="input-field" />
        <input type="text" name="sellerid" placeholder="Enter Seller id" class="input-field" />
        <button type="submit" class="submit-btn">Submit</button>
    </form>
</div>

<style>
    /* Style the form container */
    .form-container {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style the input fields */
    .input-field {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box;
    }

    /* Style the button */
    .submit-btn {
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Hover effect for button */
    .submit-btn:hover {
        background-color: #45a049;
    }

    /* Optional: Add some basic responsiveness */
    @media screen and (max-width: 600px) {
        .form-container {
            padding: 15px;
        }
    }
</style>
