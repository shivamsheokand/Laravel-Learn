<div>
    <h1>Home Page</h1>
    <h3>
        <!-- {{URL::current()}} -->
        {{url()->current()}}
    </h3>
    <h3>
        <!-- {{URL::full()}} -->
        {{url()->full()}}
    </h3>
    <a href="/about">About Page</a>
    <a href={{URL::to('about')}}>About Page</a>
    <a href={{URL::to('about',['sam'])}}>About Page</a>
    
</div>
