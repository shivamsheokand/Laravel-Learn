<div>
    <h1> Add User</h1>
    <form action="addUser" method="post">
        @csrf
        <div>
            <h4>Skills</h4>
            <input type="checkbox" value="PHP" name="skill[]" id="php"/>
            <label for="php">PHP</label>
            <input type="checkbox" value="JS" name="skill[]" id="js"/>
            <label for="js">JS</label>
            <input type="checkbox" value="Java" name="skill[]" id="java"/>
            <label for="java">Java</label>
        </div>
        <div>
            <h4>Gender</h4>
            <input type="radio" value="Male" name="gender" id="male"/>
            <label for="male">Male</label>
            <input type="radio" value="Femail" name="gender" id="femail"/>
            <label for="femail">Femail</label>
            
        </div>
        <div>
            <h4>City</h4>
            <select name="city">
                <option value="hisar">Hisar</option>
                <option value="jind">Jind</option>
                <option value="Narwana">Narwana</option>
            </select>
        </div>
        <div>
            <h1>Range</h1>
            <input type="range" name="age" min="18" max="100">
        </div>
    <div>
        <button>submit</button>
    </div>
    </form>
</div>
