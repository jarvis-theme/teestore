    <footer class="main-footer">
        <div class="data-content">
            <div class="row-fluid footer">
                <div class="col-xs-12 col-sm-12">
                    <div class="grid-item text-center">
                        <h4>FOLLOW US</h4>
                        <ul class="sosmed">
                            @if(!empty($kontak->fb))
                            <li>
                                <a href="{{ URL::to($kontak->fb) }}" target="_blank" title="Facebook"><i class="fa fa-facebook icons"></i></a>
                            </li>
                            @endif
                            @if(!empty($kontak->tw))
                            <li>
                                <a href="{{ URL::to($kontak->tw) }}" target="_blank" title="Twitter"><i class="fa fa-twitter icons"></i></a>
                            </li>
                            @endif
                            @if(!empty($kontak->gp))
                            <li>
                                <a href="{{ URL::to($kontak->gp) }}" target="_blank" title="Google+"><i class="fa fa-google-plus icons"></i></a>
                            </li>
                            @endif
                            @if(!empty($kontak->pt))
                            <li>
                                <a href="{{ URL::to($kontak->pt) }}" target="_blank" title="Pinterest"><i class="fa fa-pinterest icons"></i></a>
                            </li>
                            @endif
                            @if(!empty($kontak->tl))
                            <li>
                                <a href="{{ URL::to($kontak->tl) }}" target="_blank" title="Tumblr"><i class="fa fa-tumblr icons"></i></a>
                            </li>
                            @endif
                            @if(!empty($kontak->ig))
                            <li>
                                <a href="{{ URL::to($kontak->ig) }}" target="_blank" title="Instagram"><i class="fa fa-instagram icons"></i></a>
                            </li>
                            @endif
                            @if($kontak->picmix)
                            <li>
                                <a href="{{ URL::to($kontak->picmix) }}" target="_blank" title="Picmix">
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/blogs/event/icon-picmix.png" style="height: 40px; margin-top: -5px;">
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="grid-item text-center">
                        @foreach(all_menu() as $key=>$group)
                        @if($key==2)
                        <ul class="footer-link">
                            @foreach($group->link as $key=>$link)
                            <li>
                                <a href="{{menu_url($link)}}">{{$link->nama}}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        @endforeach 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="grid-item text-center">
                        <p>{{ Theme::place('title') }} • {{ !empty($kontak->email) ? 'Email: '.$kontak->email : '' }} {{ !empty($kontak->telepon) ? ' ➕ Telp: '.$kontak->telepon : ''}} {{ !empty($kontak->hp) ? ' ➕ SMS/WA: '.$kontak->hp : ''}} {{ !empty($kontak->bb) ? ' ➕ BBM: '.$kontak->bb : ''}}</p>
                    </div>
                </div>
            </div>
            <hr class="clear">
            <div class="row-fluid footer">
                <div class="col-xs-12 col-sm-12 text-center">
                    <p class="copyright">Copyright &copy; {{date('Y')}} {{ Theme::place('title') }}. Powered by <a href="http://jarvis-store.com" target="_blank">Jarvis Store</a></p>
                </div>
            </div>
        </div>
    </footer>
    {{ pluginPowerup() }} 