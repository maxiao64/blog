 <!-- Footer -->
 <hr>

 <!-- Footer -->
 <footer>
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <p class="copyright text-muted">{!! $settings['footer_text'] !!}<br></p>
                 @if(!empty($links))
                 <p class="copyright text-muted">
                    友链：
                    @foreach ($links as $link)
                        <a href=" {{$link['link']}}">{{$link['name']}}</a> @if(!$loop->last) | @endif 
                    @endforeach
                 </p>
                 @endif
             </div>
         </div>
     </div>
 </footer>
 
 
     <!-- After footer scripts -->
     
 <!-- jQuery -->
 <script src="{{ URL::asset('static/js/jquery-2.1.4.min.js') }}"></script>
 
 <!-- Bootstrap -->
 <script src="{{ URL::asset('static/js/bootstrap.min.js') }}"></script>
 
 <!-- Gallery -->
 <script src="{{ URL::asset('static/js/featherlight.min.js') }}" type="text/javascript" charset="utf-8"></script>
 <script src="{{ URL::asset('static/js/my.js') }}" type="text/javascript" charset="utf-8"></script> 

 </body></html>