<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/scrolledIntoView.js')}}"></script>
<script src="https://kit.fontawesome.com/93a8853074.js" crossorigin="anonymous"></script><script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();

    $(window).ready(function(){
        
        flagelemntinview = false 
        
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 0) {
                $(".navbar").addClass("scrolled")
            } else {
                $(".navbar").removeClass("scrolled");
            }

            var isElementInView = Utils.isElementInView($(document).find('.cardMaps'), false);

            if (isElementInView && !flagelemntinview) {
                flagelemntinview = true
                // alert('in view');
            }
        } );
    })
</script>
@stack('scripts')