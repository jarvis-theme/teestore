<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="header-form">
            <h1 class="form-title">My Account</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h4>Order History</h4>
                @if($pengaturan->checkoutType != 2) 
                    @if(list_order()->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Product</th>
                                    <th>Total</th>
                                    <th>Tracking Number</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (list_order() as $item)
                                <tr>
                                    <td>
                                        @if($pengaturan->checkoutType==3) 
                                            {{ prefixOrder().$item->kodePreorder }} 
                                        @else 
                                            {{ prefixOrder().$item->kodeOrder }} 
                                        @endif
                                    </td>
                                    <td>
                                        @if($pengaturan->checkoutType==3)
                                            {{ waktu($item->tanggalPreorder) }} 
                                        @else
                                            {{ waktu($item->tanggalOrder) }} 
                                        @endif
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach ($item->detailorder as $detail)
                                                <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ price($item->total) }}</td>
                                    <td>{{ $item->noResi }}</td>
                                    <td>
                                        @if($pengaturan->checkoutType==1)
                                            @if($item->status==0)
                                                <span class="label label-warning">Pending</span>
                                            @elseif($item->status==1)
                                                <span class="label label-info">Confirmation Received</span>
                                            @elseif($item->status==2)
                                                <span class="label label-success">Payments Accepted</span>
                                            @elseif($item->status==3)
                                                <span class="label label-important">Finish</span>
                                            @elseif($item->status==4)
                                                <span class="label label-default">Cancel</span>
                                            @endif 
                                        @else
                                            @if($item->status==0)
                                                <span class="label label-warning">Pending</span>
                                            @elseif($item->status==1)
                                                <span class="label label-info">DP Confirmation Received</span>
                                            @elseif($item->status==2)
                                                <span class="label label-success">DP Accepted</span>
                                            @elseif($item->status==3)
                                                <span class="label label-info">Waiting for Redemption</span>
                                            @elseif($item->status==4)
                                                <span class="label label-success">Payment in Full</span>
                                            @elseif($item->status==5)
                                                <span class="label label-success">Finish</span>
                                            @elseif($item->status==6)
                                                <span class="label label-default">Cancel</span>
                                            @elseif($item->status==7)
                                                <span class="label label-important">Redemption Confirmation Received</span>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($pengaturan->checkoutType==3) 
                                            @if($item->status < 4)
                                                <a href="{{URL::to('konfirmasipreorder/'.$item->id)}}" class="btn btn-form"><i class="fa fa-edit"></i></a>
                                            @endif 
                                        @endif
                                        @if($pengaturan->checkoutType==1) 
                                             @if($item->status<=1)
                                                <a href="{{URL::to('konfirmasiorder/'.$item->id)}}" class="btn btn-form"><i class="fa fa-edit"></i></a>
                                            @endif 
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ list_order()->links() }} 
                    @else
                        <p>You haven't placed any orders yet.</p>
                    @endif 
                @else 
                    @if($inquiry->count()!=0)
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No Order</td>
                                        <td>Date</td>
                                        <td>Product</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inquiry as $item)
                                    <tr>
                                        <td>
                                            {{ prefixOrder().$item->kodeInquiry }}
                                        </td>
                                        <td>
                                            {{ waktu($item->created_at) }}
                                        </td>
                                        <td>
                                            @foreach ($item->detailInquiry as $detail)
                                            <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($item->status==0)
                                                <span class="label label-warning">Pending</span>
                                            @elseif($item->status==1)
                                                <span class="label label-success">Inquiry Accepted</span>
                                            @elseif($item->status==2)
                                                <span class="label label-info">Cancel</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>You haven't placed any orders yet.</p>
                    @endif
                @endif
            </div>
            <div class="col-xs-12 col-sm-3 col-sm-offset-1">
                <h4>Account Details</h4>
                <h5>{{ @$user->nama }}</h5>
                <p>
                    {{ !empty($user->alamat) ? $user->alamat.'<br>' : '' }}
                    {{ !empty($user->kodepos) ? $user->kodepos.'<br>' : '' }}
                    @if(!empty($user->telp) && !empty($user->hp))
                        {{ $user->telp.' / '.$user->hp }}
                    @elseif(!empty($user->telp) && empty($user->hp))
                        {{ $user->telp }}
                    @elseif(empty($user->telp) && !empty($user->hp))
                        {{ $user->hp }}
                    @endif
                </p>
                <p><a href="{{ url('member/profile/edit') }}">View Addresses</a></p>
            </div>
        </div>
    </div>
</div>