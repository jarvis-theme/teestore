<div class="row">
    <div class="col-xs-12 col-sm-6">
        <h1>Confirmation Order</h1>
        <div>
            <p>Enter your order ID</p>
            {{ Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline')) }} 
                <input type="text" class="input-large" placeholder="Order ID" name="kodeorder">
                <button type="submit" class="btn btn-form">Search</button>
            {{ Form::close() }} 
        </div>
    </div>
</div>