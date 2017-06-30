<form>
    <div>
        <h1>Latest Rates</h1>
        <input type="submit" name="latest" value="latest">
    </div>
</form>
       
<form>
    <div>
        <h1>Historical Rates</h1>
        <input type="date" name="historical" placeholder="Date. ex: 2003-09-11" required>
        <input type="submit" value="Historical Rates">
    </div>
</form>
    
<form>
    <div>
        <h1>Symbolic Rates</h1>
        <input type="text" name="base" placeholder="Base currency. ex: USD" required>
        <input type="text" name="target" placeholder="Exchange currency. ex: GBP" required>
        <button type="submit" name="symbolic" value="symbolic">Symbolic Rates</button>
    </div>
</form>
    
<div>
    <pre>{!! print_r($result, true) !!}</pre>
</div>