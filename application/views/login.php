<div class = "row">
    <div class="panel1 panel-primary col-md-6">
        <!-- Default panel contents -->
        <div class="panel-heading">Login</div>
        <div class="panel-body">
            <form name="login" method="post" action="/Login/submit">
                Name: <input type="text" name="userid"/><br/><br/>
                Password: <input type="password" name="password"/><br/><br/>
                <input type="submit"/>
            </form>
        </div>
    </div>
    <div class="panel2 panel-primary col-md-6">
        <!-- Default panel contents -->
        <div class="panel-heading">Sign Up</div>
        <div class="panel-body">
            <form name ="signup" method="post" action ="/Login/signup" enctype="multipart/form-data">
                Name: <input type="text" name="userid"/><br/><br/>
                Password: <input type="password" name="password"/><br/><br/>
                Image: <input type="file" name="fileToUpload" id="fileToUpload"/><br/>
                <input type="submit"/>
            </form>
        </div>
    </div>  
</div> 
