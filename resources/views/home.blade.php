@include('common.header')
<x-massage-banner msg="user login sucess" class="sucess"/>
<x-massage-banner msg="user signup sucess" class="sucess"/>
<br/>
<br/>
<br/>
<x-massage-banner msg="Error User not Foung :)" class="error"/>
<h1>Home page </h1>
@include('common.inner',['data'=>'this is Home page'])


<style>
    .sucess{
        background-color: lawngreen;
        color:green;
        padding:3px 10px;
        border: 2px solid black;
        border-radius: 13px;
        display: inline-block;
        margin: 10px;
        font-size:  40px;
        font-weight :bold;
    }
    .error{
        background-color: rebeccapurple;
        color:red;
        padding:3px 10px;
        border: 2px solid black;
        border-radius: 13px;
        display: inline-block;
        margin: 10px;
        font-size:  40px;
        font-weight :bold;
    }
</style>