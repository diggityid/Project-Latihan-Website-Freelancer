<script src="{url{('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
<script src="{{url('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js') }}" defer></script> 
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js')}}" 
    integrity="sha512-UUOD/t+4/Sg3p0eBYK+1G16MaNF8aqmermRIZ8d1mQh0lBnw6iQrnt41jty513WB3w+q430751x0310j6qQNA=="
    crossorigin="anonymous"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/dragscroll/8.8.8/dragscroll.min.js') }}"
    integrity="sha512-/ncZd0hQm5pgj5KHу720Ck7XF5RZYK61tUsLNnGcitXIKT3wuYzTIP10SG7SdL2kDzkuLEOFVIQRyllcZkeAlg=="
    crossorigin="anonymous"></script>
<script src="{{ asset('/js/toggleModal.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".modal").on('click', ':not(.relative)', function (e) {
            e.stopPropagation();
    });
    $("#loginModal").on('click', function (e) {
        toggleModal ('loginModal');
    });

    $("#registerModal").on('click', function (e) {
            toggleModal ('registerModal');
    });
});
</script>