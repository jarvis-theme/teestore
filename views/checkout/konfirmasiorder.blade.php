    <!-- Checkout Page -->
    <section class="order">
        <div class="row standard">
            <header class="col-xs-12 col-sm-12">
                <h1>Confirmation Order</h1>
            </header>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="form-horizontal">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Product</th>
                                <th>Total</th>
                                @if($checkouttype != 1)
                                <th>Remaining Payment</th>
                                @endif
                                <th>Tracking Number</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>{{ $checkouttype == 1 ? prefixOrder().$order->kodeOrder : prefixOrder().$order->kodePreorder }}</td>
                                <td>{{ $checkouttype == 1 ? waktu($order->tanggalOrder) : waktu($order->tanggalPreorder) }}</td>
                                <td>
                                    <ul>
                                    @if ($checkouttype==1) 
                                        @foreach ($order->detailorder as $detail)
                                        <li>{{ $detail->produk->nama }} {{ $detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':'' }} - {{ $detail->qty }}</li>
                                        @endforeach
                                    @else 
                                        {{ $order->preorderdata->produk->nama }} 
                                        ({{ $order->opsiSkuId==0 ? 'No Opsi' : $order->opsisku->opsi1.($order->opsisku->opsi2!='' ? ' / '.$order->opsisku->opsi2:'').($order->opsisku->opsi3!='' ? ' / '.$order->opsisku->opsi3:'') }})
                                         - {{ $order->jumlah }}
                                    @endif 
                                    </ul>
                                </td>
                                <td>{{ price($order->total) }}</td>
                                @if($checkouttype != 1)
                                <td>
                                    @if($checkouttype==1)
                                    - {{ price($order->total) }} 
                                    
                                    @else 
                                        @if($order->status < 2)
                                        - {{ price($order->total) }} 

                                        @elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
                                        - {{ price($order->total - $order->dp) }} 

                                        @else
                                        0
                                        @endif
                                    @endif
                                </td>
                                @endif
                                <td>{{ $order->noResi }}</td>
                                <td>
                                @if($checkouttype==1)
                                    @if($order->status==0)
                                    <span class="label label-warning">{{ trans("content.order_admin.status.pending") }}</span>
                                    @elseif($order->status==1)
                                    <span class="label label-info">{{ trans("content.order_admin.status.confirm") }}</span>
                                    @elseif($order->status==2)
                                    <span class="label label-success">{{ trans("content.order_admin.status.pay") }}</span>
                                    @elseif($order->status==3)
                                    <span class="label label-important">{{ trans("content.order_admin.status.sent") }}</span>
                                    @elseif($order->status==4)
                                    <span class="label label-default">{{ trans("content.order_admin.status.cancel") }}</span>
                                    @endif
                                @else 
                                    @if($order->status==0)
                                    <span class="label label-warning">Pending</span>
                                    @elseif($order->status==1)
                                    <span class="label label-info">DP Confirmation Received</span>
                                    @elseif($order->status==2)
                                    <span class="label label-success">DP Accepted</span>
                                    @elseif($order->status==3)
                                    <span class="label label-info">Waiting for Redemption</span>
                                    @elseif($order->status==4)
                                    <span class="label label-success">Payment in Full</span>
                                    @elseif($order->status==5)
                                    <span class="label label-success">Finish</span>
                                    @elseif($order->status==6)
                                    <span class="label label-default">Cancel</span>
                                    @elseif($order->status==7)
                                    <span class="label label-important">Redemption Confirmation Received</span>
                                    @endif
                                @endif
                                </td>
                            </tr>
                        </table>
                    </div>

                    @if($paymentinfo!=null)
                        <h3><center>Paypal Payment Details</center></h3>
                        <hr>
                        <table class="table table-bordered">
                            <tr>
                                <td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
                            </tr>
                            <tr>
                                <td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
                            </tr>
                            <tr>
                                <td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
                            </tr>
                            <tr>
                                <td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
                            </tr>
                            <tr>
                                <td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
                            </tr>
                            <tr>
                                <td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
                            </tr>
                            <tr>
                                <td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
                            </tr>
                        </table>
                        <p>Thanks you for your order.</p>
                    @endif 
 
                    @if($order->jenisPembayaran==1)
                    <div class="well">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                <h2><center>Confirmation Form</center></h2>
                                @if($checkouttype==1) 
                                {{-- */ $url = 'konfirmasiorder/' /* --}}
                                @else 
                                {{-- */ $url = 'konfirmasipreorder/' /* --}}
                                @endif
                                {{ Form::open(array('url'=> $url.$order->id, 'method'=>'put', 'class'=> 'form-horizontal')) }} 
                                    <div class="control-group">
                                        <label class="control-label"> Bank Account Name</label>
                                        <div class="controls">
                                            <input class="col-xs-12 col-sm-6" type="text" name="nama" value="{{ Input::old('nama') }}" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"> Bank Account Number</label>
                                        <div class="controls">
                                            <input type="text" class="col-xs-12 col-sm-6" name="noRekPengirim" value="{{ Input::old('noRekPengirim') }}" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"> Payment</label>
                                        <div class="controls">
                                            <select name="bank">
                                                <option value="">-- Select Payment --</option>
                                                @foreach (list_banks() as $bank)
                                                    @if($bank->status == 1)
                                                    <option value="{{ $bank->id }}">{{ $bank->bankdefault->nama }} - {{ $bank->noRekening }} - A/n {{ $bank->atasNama }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"> Amount Paid</label>
                                        <div class="controls">
                                        @if($checkouttype==1)
                                            <input class="col-xs-12 col-sm-6" type="text" name="jumlah" value="{{ $order->total }}" required>
                                        @else
                                            @if($order->status < 2)
                                                <input class="col-xs-12 col-sm-6" type="text" name="jumlah" value="{{ $order->dp }}" required>
                                            @elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
                                                <input class="col-xs-12 col-sm-6" type="text" name="jumlah" value="{{ $order->total - $order->dp }}" required>
                                            @endif
                                        @endif
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                          <button type="submit" class="btn btn-form">Save</button>
                                        </div>
                                    </div>
                                {{ Form::close() }} 
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($order->jenisPembayaran==2)
                    <div class="well text-center">
                        <div class="paypal">
                            <h3><center>{{ trans('content.step5.confirm_btn') }} Paypal</center></h3>
                            <p>{{ trans('content.step5.paypal') }}</p>
                            {{ $paypalbutton }} 
                        </div>
                    </div>
                    @elseif($order->jenisPembayaran==4) 
                        @if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
                        <div class="well text-center">
                            <div class="ipaymu">
                                <h2>{{ trans('content.step5.confirm_btn') }} iPaymu</h3>
                                <p>{{ trans('content.step5.ipaymu') }}</p>
                                <a class="btn btn-ipaymu" href="{{ url('ipaymu/'.$order->id) }}" target="_blank">{{ trans('content.step5.ipaymu_btn') }}</a>
                            </div>
                        </div>
                        @endif
                    @elseif($order->jenisPembayaran==5 && $order->status == 0)
                    <div class="well text-center">
                        <div class="doku">
                            <h2>{{ trans('content.step5.confirm_btn') }} DOKU MyShortCart</h2>
                            <p>{{ trans('content.step5.doku') }}</p>
                            {{ $doku_button }}
                        </div>
                    </div>
                    @elseif($order->jenisPembayaran == 6 && $order->status == 0)
                    <div class="well text-center">
                        <h2>{{ trans('content.step5.confirm_btn') }} Bitcoin</h2>
                        <p>{{ trans('content.step5.bitcoin') }}</p>
                        {{ $bitcoinbutton }}
                    </div>
                    @elseif($order->jenisPembayaran == 8 && $order->status == 0)
                    <div class="well text-center">
                        <h2>{{ trans('content.step5.confirm_btn') }} Midtrans</h2>
                        <p>{{ trans('content.step5.veritrans') }}</p>
                        <button class="btn btn-midtrans" onclick="location.href='{{ $veritrans_payment_url }}'">
                            {{ trans('content.step5.veritrans_btn') }}
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>