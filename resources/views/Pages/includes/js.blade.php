

{{-- frameworks --}}
<script src="https://unpkg.com/vue@next"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>





{{-- Plugins --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('js/jquery.zoom.min.js')}}"></script>
<script src="{{ asset('js/jquery.dd.min.js')}}"></script>
<script src="{{ asset('js/jquery.slicknav.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>

@stack('js-lib')

<script src="{{asset('js/cart.js')}}"></script>
<script src="{{ asset('js/shopping-cart.js')}}"></script>
<script src="{{asset('js/cart-dashboard.js')}}"></script>
<script src="{{asset('js/product.js')}}"></script>
@stack('js-script')
</body>

