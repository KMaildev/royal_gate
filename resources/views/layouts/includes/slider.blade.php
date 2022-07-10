<link href="{{ asset('slider/src/skdslider.css') }}" rel="stylesheet">

<style type="text/css">
    body {
        margin: 0;
        padding: 0;
    }

    .demo-code {
        background-color: #ffffff;
        border: 1px solid #333333;
        display: block;
        padding: 10px;
    }

    .option-table td {
        border-bottom: 1px solid #eeeeee;
    }
</style>

<div id="demo1">
    <div class="slide">
        <img src="{{ asset('slider/photo/2.jpeg') }}" />
        <div class="slide-desc">
            <h2>Our Mission</h2>
            <p>
                Our customers are central to our mission.
                Our employment agency will follow our mission to staff with great employees. Our businesses services
                will allow the business to stay focused on their core values.  We have a mission to connect employees
                that are talented, motivated, and driven to excellence with great businesses by opening up opportunities
                for both. Our goals are to provide high-quality outsourced employment, human resource services, and to
                empower business owners and employees to be their best.

            </p>
        </div>
    </div>


    <div class="slide">
        <img src="{{ asset('slider/photo/17.jpg') }}" />
        <div class="slide-desc">
            <h2>Our Vision</h2>
            <p>
                To be the leading partner that clients and candidates always choose to connect with.
                We continuously strive to become the preferred source for employment and human resource services. We are
                dedicated to serving our customers and the community with the highest levels of service, knowledge,
                professionalism, honesty and integrity.
            </p>
        </div>
    </div>

    <div class="slide">
        <img src="{{ asset('slider/photo/1.jpeg') }}" />
        <div class="slide-desc">
            <h2>
                Our slogan
            </h2>
            <p>
                "ROYAL GATE INTERNATIONAL CO.,LTD" aims to increase employment opportunities for citizens and promote
                their growth.
            </p>
        </div>
    </div>

    <div class="slide">
        <img src="{{ asset('slider/photo/7.jpg') }}" />
    </div>
</div>

@section('script')
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{ asset('slider/src/skdslider.min.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                slideSelector: '.slide',
                delay: 5000,
                animationSpeed: 2000,
                showNextPrev: true,
                showPlayButton: true,
                autoSlide: true,
                animationType: 'fading'
            });

            jQuery('#demo2').skdslider({
                slideSelector: '.slide',
                delay: 5000,
                animationSpeed: 1000,
                showNextPrev: true,
                showPlayButton: false,
                autoSlide: true,
                animationType: 'sliding'
            });
        });
    </script>
@endsection
