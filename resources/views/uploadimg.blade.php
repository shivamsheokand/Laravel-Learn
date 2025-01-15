<div style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 40px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 500px; margin: auto;">
    <h1 style="text-align: center; color: #4CAF50; font-size: 28px; margin-bottom: 20px;">Image Upload</h1>
    <form style="display: flex; flex-direction: column; align-items: center;" action="/uploadimg" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="img" id="imgUpload" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; color: #333; margin-bottom: 20px; width: 100%; max-width: 400px;"/>
        <button type="submit" style="padding: 10px 20px; border: none; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer; border-radius: 5px; width: 100%; max-width: 400px; transition: background-color 0.3s ease;">
            Upload Image
        </button>
    </form>
</div>

<style>
    /* Form Styling */
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* File Input Styling */
    input[type="file"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        margin-bottom: 20px;
        width: 100%;
        max-width: 400px;
        background-color: #f9f9f9;
    }

    /* Button Styling */
    button {
        padding: 10px 20px;
        border: none;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        width: 100%;
        max-width: 400px;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
    }

    /* Heading Styling */
    h1 {
        color: #4CAF50;
        font-size: 28px;
        margin-bottom: 20px;
    }
</style>
