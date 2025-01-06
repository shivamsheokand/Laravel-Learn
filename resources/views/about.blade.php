@include('common.header')
<div>
    <h1>About page</h1>
</div>
<x-massage-banner msg="user signup sucess" class="sucess"/>
<br/>
<br/>
<br/>
<x-massage-banner msg="Error User not Foung :)" class="error"/>
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
@include('common.inner',['data'=>'this is about page'])
<!-- file not found error buypass use @incudeIf('filename') -->
<!-- @includeIf('common.inners',['data'=>'this is about page'])   -->


