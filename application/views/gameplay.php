<form name="register" method="post" action="/gameplay/register">
    Password: <input type="password" name="pass"></input><br/><br/>
    <input type="submit"/>
</form>

<hr/>

<h3>Buy</h3>
<form name="buy" method="post" action="/gameplay/buy">
    <select name="Name" class="form-control">
        {stock_array}
            <option value="{Code}">{Name}</option>
        {/stock_array}
    </select><br/>
    Amount: <input type="text" name="amount"><br/><br/>
    <input type="submit"/>
    
</form>

<hr/>

<h3>Sell</h3>
<form name="sell" method="post" action="/gameplay/sell">
    
</form>

