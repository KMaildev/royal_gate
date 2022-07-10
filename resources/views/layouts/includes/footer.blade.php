<!-- Start Footer Area -->
<footer class="footer-area pt-100 pb-70"
    style="background-image: url(https://www.nginx.com/nginxconf/wp-content/uploads/Conf2018-background-bottom-desktop-1366x705.png)">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3 style="color: white">Contact Information</h3>

                    <ul class="address">
                        <li>
                            <i class="bx bx-phone-call"></i>
                            <span style="color: white">Phone:</span>
                            <a href="tel:951 201484" style="color: white">
                                951 201484,
                            </a>
                            <a href="tel:8619080" style="color: white">
                                8619080,
                            </a>
                        </li>

                        <li>
                            <i class="bx bx-phone-call"></i>
                            <span style="color: white">Phone</span>
                            <a href="tel:959 5100542" style="color: white">
                                959 5100542,
                            </a>
                            <a href="tel:951 202836" style="color: white">
                                951 202836
                            </a>
                        </li>

                        <li>
                            <i class="bx bx-envelope"></i>
                            <span style="color: white">Email</span>
                            <a href="mailto:info@royalgatecompany.com" style="color: white">
                                info@royalgatecompany.com
                            </a>
                        </li>

                        <li>
                            <i class="bx bx-envelope"></i>
                            <span style="color: white">Email</span>
                            <a href="mailto:admin@royalgatecompany.com" style="color: white">
                                admin@royalgatecompany.com
                            </a>
                        </li>

                        <li>
                            <i class="bx bx-envelope"></i>
                            <span style="color: white">Gmail</span>
                            <a href="mailto:royalgateagency@gmail.com" style="color: white">
                                royalgateagency@gmail.com
                            </a>
                        </li>

                        <li class="location" style="color: white">
                            <i class="bx bx-location-plus"></i>
                            <span style="color: white">Address</span>
                            No. 76/80, 2nd Floor, Banyardala Road, Tha Pyay Gone Quarter, Mingalar Taung Nyunt Township,
                            Yangon.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3 style="color: white">Helpful Resources</h3>

                    <ul class="import-link">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link active" style="color: white">
                                <i class="fa fa-arrow-right"></i> Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Company Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('director_message.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Director Message
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('statement.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Vision & Misstion
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('process_chart.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Process Chart
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('organization.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Our Organization Chart
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('team.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Our Team
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('recruitment_services.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Our Recruitment Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('milestones.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Milestones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('cv.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Submit CV
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('employer.index') }}" class="nav-link" style="color: white">
                                <i class="fa fa-arrow-right"></i> Employer Form
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3 style="color: white">Find Overseas Jobs</h3>
                    <ul class="import-link">
                        @foreach ($countries as $country)
                            <li>
                                <a href="{{ route('country.show', $country->id) }}" style="color: white">
                                    {{ $country->country ?? '' }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget single-bg">
                    <h3 style="color: white">
                        Social Media
                    </h3>
                    <ul class="social-icon">
                        <li>
                            <a href="https://www.facebook.com/royal.gate.56" target="_blank">
                                <i class="bx bxl-facebook" style="background-color: #0046b8; color: white;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-instagram" style="background-color: #ea4e3a; color: white;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-linkedin-square"
                                    style="background-color: #2977b5; color: white;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-twitter" style="background-color: #3aa1f2; color: white;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copy-right-area">
    <div class="container">
        <p>
            Copyright &copy; {{ now()->year }} <span style="font-weight: bold; color: blue;">ROYAL GATE
                INTERNATIONAL
                CO.,LTD.</span> All Rights Reserved
        </p>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="bx bx-chevrons-up"></i>
    <i class="bx bx-chevrons-up"></i>
</div>
<!-- End Go Top Area -->


<!-- Jquery Min JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Popper Min JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap Min JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Meanmenu Min JS -->
<script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
<!-- Wow Min JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Nice Select Min JS -->
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<!-- Mixitup JS -->
<script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
<!-- Appear Min JS -->
<script src="{{ asset('assets/js/appear.min.js') }}"></script>
<!-- Odometer Min JS -->
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<!-- Range Slider Min JS -->
<script src="{{ asset('assets/js/range-slider.min.js') }}"></script>
<!-- Datepicker Min JS -->
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Form Validator Min JS -->
{{-- <script src="{{ asset('assets/js/form-validator.min.js') }}"></script> --}}
<!-- Contact JS -->
<!-- Ajaxchimp Min JS -->
<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

{{-- Install --}}
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
@yield('script')

<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
</script>

<script>
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Japan', 'Singapore', 'Thailand', 'Malaysia'],
            datasets: [{
                label: '# Sending Worker',
                data: [1000, 900, 1500, 1200],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>

</html>
