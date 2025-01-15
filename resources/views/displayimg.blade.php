<div style="text-align: center; padding: 20px; max-width: 100%; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
     <a href="/addimg" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        Add new
    </a> <br/>
    @foreach($img as $images)
        <img src="{{url('storage/'.$images->path)}}" alt="Uploaded Image" 
             style="max-width: 200px; height: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); margin: 10px 0;"/>
    @endforeach

   
</div>
