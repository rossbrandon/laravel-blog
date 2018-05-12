<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/form-actions.js') }}"></script>
<script src="{{ asset('app/js/velocity.min.js') }}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>
<script id="dsq-count-scr" src="//lavablog.disqus.com/count.js" async></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5af67a0b3b8a12cf"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @elseif(Session::has('info'))
    toastr.info("{{ Session::get('info') }}");
    @elseif(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif
</script>
