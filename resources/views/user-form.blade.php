<h1>this is form</h1>
<form action="adduser" method = "post">
    @csrf
    <div class = "input-wrapper">
        <input type="text" placeholder = "enter name" name = "username">
        <span style = "color:red">@error('username'){{$message}}@enderror</span>
    </div>
    <div class = "input-wrapper">
        <input type="text" placeholder = "enter email" name = "useremail">
        <span style = "color:red">@error('useremail'){{$message}}@enderror</span>
    </div>
    <div class = "input-wrapper">
        <input type="text" placeholder = "enter city" name = "usercity">
        <span style = "color:red">@error('usercity'){{$message}}@enderror</span>
    </div>
    <div class = "input-wrapper">
        <input type="file" name = "upload" accept=".pdf, .png, .jpg">
        <span style = "color:red">@error('usercity'){{$message}}@enderror</span>
    </div>
    <div class = "input-wrapper">
        <button>add user </button>
    </div>
</form>
<style>
    input{
        border:orange 1px solid;
        height: 35px;
        width:200px;
        border-radius: 2px;
        color: orange;
    }
    .input-wrapper{
        margin: 10px;
    }
    button{
        border:orange 1px solid;
        height: 35px;
        width:200px;
        border-radius: 2px;
        color: orange;
        cursor: pointer;
        background-color: white;
    }
</style>
