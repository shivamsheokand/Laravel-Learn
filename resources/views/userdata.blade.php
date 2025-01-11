<div>
    <h1 style="text-align: center; color: #4CAF50; font-family: 'Arial', sans-serif; margin-bottom: 20px;">
        User Data
    </h1>
    <!-- {{print_r($data)}} -->
    @foreach($data as $userdata)
    <div style="background-color: #f9f9f9; border-radius: 8px; padding: 15px; margin: 10px 0; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <ul style="list-style-type: none; padding: 0; margin: 0;">
            <li style="font-size: 18px; color: #333; font-weight: bold; margin-bottom: 8px;">
                <span style="color: #4CAF50;">Title:</span> {{$userdata->title}}
            </li>
            <li style="font-size: 16px; color: #555; margin-bottom: 8px;">
                <span style="color: #4CAF50;">Body:</span> {{$userdata->body}}
            </li>
        </ul>
    </div>
    @endforeach
</div>

<!-- Optional CSS for a more polished look -->
<style>
    h1 {
        font-size: 32px;
        color: #4CAF50;
        text-align: center;
        font-family: 'Arial', sans-serif;
        margin-bottom: 20px;
    }

    div {
        width: 95%;
        margin: 0 auto;
        
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    li {
        font-size: 18px;
        margin-bottom: 10px;
    }

    li span {
        font-weight: bold;
    }

    .userdata-item {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 15px;
        margin: 10px 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .userdata-item ul {
        padding-left: 0;
    }
</style>
