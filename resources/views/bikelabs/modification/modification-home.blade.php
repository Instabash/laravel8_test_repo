@extends('layout.app')
@section('custom-css')
<link href="{{asset("assets/css/jquery.steps.css")}}" rel='stylesheet' type='text/css' />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<style>
    .select2-selection__rendered {
        line-height: 31px !important;
    }

    .select2-container .select2-selection--single {
        height: 35px !important;
    }

    .select2-selection__arrow {
        height: 34px !important;
    }

    /* Pricing table CSS */


    /* Pricing table CSS */

    /* Pricing table CSS */
        @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
        @import url(https://fonts.googleapis.com/css?family=Montserrat:800);

        .snip1214 {
            font-family: 'Raleway', Arial, sans-serif;
            color: #000000;
            text-align: center;
            font-size: 16px;
            width: 100%;
            /* max-width: 1000px; */
            margin: 40px 10px 0 15%
        }

        .snip1214 .plan {
            margin: 0;
            width: 25%;
            position: relative;
            float: left;
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .snip1214 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .snip1214 header {
            position: relative;
        }

        .snip1214 .plan-title {
            position: relative;
            top: 0;
            font-weight: 800;
            padding: 5px 15px;
            margin: 0 auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin: 0;
            display: inline-block;
            background-color: #222f3d;
            color: #ffffff;
            text-transform: uppercase;
        }

        .snip1214 .plan-cost {
            padding: 0px 10px 20px;
        }

        .snip1214 .plan-price {
            font-family: 'Montserrat', Arial, sans-serif;
            font-weight: 800;
            font-size: 2.4em;
            color: #34495e;
        }

        .snip1214 .plan-type {
            opacity: 0.6;
        }

        .snip1214 .plan-features {
            padding: 0;
            margin: 0;
            text-align: center;
            list-style: outside none none;
            font-size: 0.8em;
        }

        .snip1214 .plan-features li {
            border-top: 1px solid #d2d7e2;
            padding: 10px 5%;
        }

        .snip1214 .plan-features li:nth-child(even) {
            background: rgba(0, 0, 0, 0.08);
        }

        .snip1214 .plan-features i {
            margin-right: 8px;
            opacity: 0.4;
        }

        .snip1214 .plan-select {
            border-top: 1px solid #d2d7e2;
            padding: 10px 10px 0;
        }

        .snip1214 .plan-select a {
            background-color: #222f3d;
            color: #ffffff;
            text-decoration: none;
            padding: 0.5em 1em;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
            font-weight: 800;
            text-transform: uppercase;
            display: inline-block;
        }

        .snip1214 .plan-select a:hover {
            background-color: #46627f;
        }

        .snip1214 .featured {
            margin-top: -10px;
            background-color: #34495e;
            color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .snip1214 .featured .plan-title,
        .snip1214 .featured .plan-price {
            color: #ffffff;
        }

        .snip1214 .featured .plan-cost {
            padding: 10px 10px 20px;
        }

        .snip1214 .featured .plan-features li {
            border-top: 1px solid rgba(255, 255, 255, 0.4);
        }

        .snip1214 .featured .plan-select {
            padding: 20px 10px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.4);
        }

        @media only screen and (max-width: 767px) {
            .snip1214 .plan {
                width: 50%;
            }

            .snip1214 .plan-title,
            .snip1214 .plan-select a {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            .snip1214 .plan-cost,
            .snip1214 .featured .plan-cost {
                padding: 20px 10px 20px;
            }

            .snip1214 .plan-select,
            .snip1214 .featured .plan-select {
                padding: 10px 10px 10px;
            }

            .snip1214 .featured {
                margin-top: 0;
            }
        }

        @media only screen and (max-width: 440px) {
            .snip1214 .plan {
                width: 100%;
            }
        }
    /* Pricing table CSS */

    /* Tab wizard CSS */
    .wizard > .steps .done a, .wizard > .steps .done a:hover, .wizard > .steps .done a:active {
        background: #69696b;
    }

    .wizard > .steps .current a, .wizard > .steps .current a:hover, .wizard > .steps .current a:active {
        background: #454546;
    }

    .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active {
        background: #454546;
        display: block;
        padding: 0.5em 1em;
        text-decoration: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }
    /* Tab wizard CSS */

    .cust-part-select a{
        background-color: #222f3d;
        color: #ffffff;
        text-decoration: none;
        padding: 0.5em 1em;
        /* -webkit-transform: translateY(50%);
        transform: translateY(50%); */
        font-weight: 800;
        text-transform: uppercase;
        /* display: inline-block; */
    }
</style>
@endsection
@section('content')
<section id="async" class="container">
    <h2 class="page-header">Motorbike Modification</h2>
    <p></p>
    <div id="example-async">
        <h3>Select your motorbike</h3>

        <section class="mt-5" style="width:100%;">
            <div class="">
                <span>Choose the Model, Year, and Make of your Motorbike</span>
            </div>
            <form class="mt-5">
                <div class="form-group">
                    <label class="pr-2">Model</label>
                    <select class="custom-select js-example-responsive model" id="modelSelect" name="modmodelselect">
                        <option selected value="">Model</option>
                        <option value="70cc">70cc</option>
                        <option value="125cc">125cc</option>
                        <option value="150cc">150cc</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="pr-2">Make</label>
                    <select class="custom-select js-example-responsive year" id="makeSelect" name="modmakeselect">
                        <option selected value="">Make</option>
                        <option value="Honda">Honda</option>
                        <option value="SuperPower">SuperPower</option>
                        <option value="Unique">Unique</option>
                        <option value="Superstar">Superstar</option>
                        <option value="Yamaha">Yamaha</option>
                        <option value="United">United</option>
                        <option value="Suzuki">Suzuki</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="form-one-year">Year</label>
                    <input style="text-align: center;" type="number" onKeyPress="if(this.value.length == 4) return false;" class="form-control"
                        id="form-one-year" placeholder="eg. : 2012">
                </div>
            </form>
        </section>
        <h3>Select a package</h3>
        {{-- <section data-mode="async" data-url="/Examples/AsyncContent">
        </section> --}}
        <section>
            <div class="row">
                <div class="col-md-12 snip1214">
                    <div class="plan">
                        <h3 class="plan-title">
                            Package 1
                        </h3>
                        <div class="plan-cost"><span class="plan-price">$19</span><span class="plan-type">/ Monthly</span></div>
                        <ul class="plan-features" style="list-style: none !important;">
                            <li><i class="ion-checkmark"> </i>Remove mudguard</li>
                            <li><i class="ion-checkmark"> </i>Body paint</span><span class="unlimited">(User defined)</li>
                            <li><i class="ion-checkmark"> </i>Remove jump cover</li>
                            <li><i class="ion-checkmark"> </i>Reflectors</li>
                        </ul>
                        <div class="plan-select"><a class="pkg-select" data-val="1" data-pkg="1" href="javascript:void(0)">Select Plan</a></div>
                    </div>
                    <div class="plan featured">
                        <h3 class="plan-title">
                            Package 2
                        </h3>
                        <div class="plan-cost"><span class="plan-price">$49</span><span class="plan-type">/ Monthly</span></div>
                        <ul class="plan-features" style="list-style: none !important;">
                            <li><i class="ion-checkmark"> </i>Remove mudguard</li>
                            <li><i class="ion-checkmark"> </i>Body paint</span><span class="unlimited">(User defined)</li>
                            <li><i class="ion-checkmark"> </i>HID Lights</li>
                            <li><i class="ion-checkmark"> </i>Add theme</span><span class="unlimited">(User defined)</li>
                            <li><i class="ion-checkmark"> </i>Remove jump cover</li>
                            <li><i class="ion-checkmark"> </i>Reflectors</li>
                        </ul>
                        <div class="plan-select"><a class="pkg-select" data-val="2" data-pkg="1" href="javascript:void(0)">Select Plan</a></div>
                    </div>
                    <div class="plan">
                        <h3 class="plan-title">
                            Package 3
                        </h3>
                        <div class="plan-cost"><span class="plan-price">$99</span><span class="plan-type">/ Monthly</span></div>
                        <ul class="plan-features" style="list-style: none !important;">
                            <li><i class="ion-checkmark"> </i>Remove mudguard</li>
                            <li><i class="ion-checkmark"> </i>Body paint</span><span class="unlimited">(User defined)</li>
                            <li><i class="ion-checkmark"> </i>HID Lights</li>
                            <li><i class="ion-checkmark"> </i>Add theme</span><span class="unlimited">(User defined)</li>
                            <li><i class="ion-checkmark"> </i>Short meter</li>
                            <li><i class="ion-checkmark"> </i>Remove headlight holders</li>
                            <li><i class="ion-checkmark"> </i>Remove jump cover</li>
                            <li><i class="ion-checkmark"> </i>Reflectors</li>
                        </ul>
                        <div class="plan-select"><a class="pkg-select" data-val="3" data-pkg="1" href="javascript:void(0)">Select Plan</a></div>
                    </div>

                </div>
                <div class="mt-3 col-md-12">
                    <h3>OR</h3>
                    <div style="width: 100%; float: left;">
                        <div class="cust-part-select"><a class="pkg-select" data-val="4" data-pkg="2" href="javascript:void(0)">Select the parts yourself.</a></div>
                        <div id="custom-part-select-box" style="display: none;">
                            <select id="custom-select-box" class="js-example-responsive-1" multiple="multiple">
                                <option selected="selected">orange</option>
                                <option>white</option>
                                <option selected="selected">purple</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <h3>Third Step</h3>
        <section>
            <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum
                dapibus. Fusce eros justo,
                pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper.
                Aliquam erat volutpat.
                Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus
                sollicitudin in auctor mauris
                venenatis.</p>
        </section>
        <h3>Fourth Step</h3>
        <section>
            <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate.
                Aliquam sed sem tortor.
                Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet
                varius est pellentesque vitae.
                Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
        </section>
        <h3>Fifth Step</h3>
        <section>
            <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate.
                Aliquam sed sem tortor.
                Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet
                varius est pellentesque vitae.
                Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
        </section>
        <h3>Sixth Step</h3>
        <section>
            <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate.
                Aliquam sed sem tortor.
                Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet
                varius est pellentesque vitae.
                Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
        </section>
    </div>
</section>
<div style="display: none;">
    <input type="hidden" id="inp_model">
    <input type="hidden" id="inp_make">
    <input type="hidden" id="inp_year">
    <input type="hidden" id="inp_pkg">
</div>
@endsection

@section('custom-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $("#example-async").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slide",
        onStepChanged: function(event, currentIndex, priorIndex){
            if(priorIndex === 0){
                $('#inp_model').val($('#modelSelect').val());
                $('#inp_make').val($('#makeSelect').val());
                $('#inp_year').val($('#form-one-year').val());
            }
            if(priorIndex === 1){
                if($('.selected-package').data('pkg') == 2){
                    $('#inp_pkg').val($('#custom-select-box').val());
                }else{
                    $('#inp_pkg').val($('.selected-package').data('val'));
                }
            }
        }
    });
    $(".js-example-responsive").select2({
		minimumResultsForSearch: -1,
		placeholder: "Select..",
    	width: 'resolve' // need to override the changed default
	});

    $(".js-example-responsive-1").select2({
		minimumResultsForSearch: -1,
		placeholder: "Select..",
    	width: '100%' // need to override the changed default
	});


</script>
<script>
    $('.pkg-select').on('click', function(){
        $('.pkg-select').removeClass('selected-package');
        $(this).addClass('selected-package');
        let package = $(this).data('pkg');
        if(package == 2){
            $('#custom-part-select-box').show();
            $('.cust-part-select').hide();
        }else{
            $('#custom-part-select-box').hide();
            $('.cust-part-select').show();
        }
    });
</script>
@endsection
