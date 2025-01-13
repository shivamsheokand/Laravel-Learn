<div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #4CAF50;">Upload File</h1>
    <form action="uploads" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: center;">
        @csrf
        <input type="file" name="file" id="" style="margin: 10px 0; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; width: 100%; max-width: 300px;">
        <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
            Upload
        </button>
    </form>
</div>
