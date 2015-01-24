@extends('layouts.default')

@section('content')


<!-- MAIN CONTENT -->



<div class="row">
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <h1 class="page-title txt-color-blueDark">

            <!-- PAGE HEADER -->
            <i class="fa-fw fa fa-user"></i> 
            Unos polaznika

        </h1>
    </div>

</div>



<!-- widget grid -->
<section id="widget-grid" class="">


    <!-- START ROW -->

    <div class="row">

        <!-- NEW COL START -->
        <article class="col-sm-12 col-md-12 col-lg-6">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false"  data-widget-custombutton="false"     data-widget-deletebutton="false"  data-widget-colorbutton="false" >
                <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                        
                        data-widget-colorbutton="false"	
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true" 
                        data-widget-sortable="false"
                        
                -->
                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Unos polaznika </h2>				

                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        {{ Form::open(array('action' => 'AdminController@storeUser',
                                            'metod' => 'post',
                                            'id' => 'checkout-form',
                                            'class' => 'smart-form',
                                            'novalidate' => 'novalidate'
                            )) }}

                            <input type="hidden" name="role" value="{{ $role }}" />
                        <fieldset>
                            <legend>Osobni podaci </legend>


                            <div class="row">

                                <section class="col col-6">
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="ime" placeholder="Ime">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="prezime" placeholder="Prezime">
                                    </label>
                                </section>
                            </div>

                            <div class="row">



                                <section class="col col-6">
                                    <label class="input"> <i class="icon-prepend fa fa-calendar"></i>
                                        <input type="text" name="datum_rodenja" placeholder="Datum rođenja" data-mask="99.99.9999">
                                    </label>
                                </section>

                                <section class="col col-6">
                                    <label class="input"> <i class="icon-prepend fa fa-code"></i>
                                        <input type="text" name="oib" placeholder="MB/OIB">
                                    </label>
                                </section>
                            </div>




                            <div class="row">
                                <section class="col col-6">
                                    <label class="input"> <i class="icon-prepend fa fa-home"></i>
                                        <input type="text" name="adresa" placeholder="Adresa">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="select">
                                        <select name="grad">
                                            <option value="0" selected="" disabled="">Grad</option>
                                            <option value="244">Aaland Islands</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Albania</option>
                                        </select> <i></i> </label>
                                </section>

                                <section class="col col-6">
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="ime_roditelja" placeholder="Ime roditelja">
                                    </label>
                                </section>

                                <section class="col col-6">
                                    <div class="inline-group">
                                        <label class="radio"><b>Spol:</b> </label>
                                        <label class="radio">
                                            <input type="radio" name="spol" checked="">
                                            <i></i>Muško</label>
                                        <label class="radio">
                                            <input type="radio" name="spol">
                                            <i></i>Žensko</label>
                                    </div>
                                </section>

                            </div>
                        </fieldset>
                        <!--                            <div class="alert alert-block alert-warning">
                                                        <a class="close" data-dismiss="alert" href="#">×</a>
                                                        <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Check validation!</h4>
                                                        <p>
                                                            You may also check the form validation by clicking on the form action button. Please try and see the results below!
                                                        </p>
                                                    </div>-->
                        <fieldset>


                            <div class="row">       
                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                        <input type="tel" name="telefon" placeholder="Telefon" >
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-mobile-phone"></i>
                                        <input type="tel" name="mobitel" placeholder="Mobitel" >
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                        <input type="email" name="email" placeholder="E-mail">
                                    </label>
                                </section>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">   
                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-medkit"></i>
                                        <input type="tel" name="broj_ljecnickog" placeholder="Broj lječničkog uvjerenja" >
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-hospital-o"></i>
                                        <input type="text" name="mjesto_izdavanja" placeholder="Mjesto izdavanja">
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-calendar"></i>
                                        <input type="text" name="datum_isteka" placeholder="Datum isteka" data-mask="99.99.9999">
                                    </label>
                                </section>
                            </div>
                        </fieldset> 
                        <fieldset>
                            <section>
                                <label class="textarea"> 										
                                    <textarea rows="3" name="info" placeholder="Dodatne informacije"></textarea> 
                                </label>
                            </section>
                        </fieldset>


                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Unos
                            </button>
                        </footer>
                        {{ Form::close() }}

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->



        </article>

    </div>

    <!-- END ROW -->

</section>
<!-- end widget grid -->
<!-- END MAIN CONTENT -->
@stop


@section('page-related-scripts')

<!-- PAGE RELATED PLUGIN(S) -->
<script src="js/plugin/jquery-form/jquery-form.min.js"></script>


<script type="text/javascript">

// DO NOT REMOVE : GLOBAL FUNCTIONS!

$(document).ready(function () {

    pageSetUp();

    var $checkoutForm = $('#checkout-form').validate({
        // Rules for form validation
        rules: {
            ime: {
                required: true
            },
            prezime: {
                required: true
            },
            datum_rodenja: {
                required: true,

            },
            oib: {
                required: true,
                digits: true
            },
            adresa: {
                required: true
            },
            city: {
                required: true
            },
            grad: {
                required: true,
            },
            ime_roditelja: {
                required: true
            },
            spol: {
                required: true
            },
            telefon: {
                required: true,
                digits: true
            },
            mobitel: {
                required: true,
                digits: true
            },
            email: {
                required: true,
                email: true
            },
            broj_ljecnickog: {
                required: true,
            },
            mjesto_izdavanja: {
                required: true,
            },
            datum_isteka: {
                required: true,


            }
        },
        // Messages for form validation
        messages: {
            ime: {
                required: 'Molimo unesite ime'
            },
            prezime: {
                required: 'Molimo unesite prezime'
            },
            datum_rodenja: {
                required: 'Molimo unesite datum rođenja',
          
            },
            oib: {
                required: 'Molimo unesite OIB',
                digits: 'OIB nije valjan'
            },
            adresa: {
                required: 'Molimo unesite adresu'
            },
            grad: {
                required: 'Molimo unesite grad'
            },
            ime_roditelja: {
                required: 'Molimo unesite ime roditelja'
            },
            spol: {
                required: true
            },
            telefon: {
                required: 'Molimo unesite broj telefona',
                digits: 'Telefonski broj nije valjan'
            },
            mobitel: {
                required: 'Molimo unesite broj mobitela',
                digits: 'Broj mobitela nije valjan'
            },
            email: {
                required: 'Molimo unesite email',
                email: 'Email nije valjan'
            },
            broj_ljecnickog: {
                required: 'Molimo unesite broj lječničkog uvjerenja'

            },
            mjesto_izdavanja: {
                required: 'Molimo unesite mjesto izdavanja lječničkog uvjerenja'

            },
            datum_isteka: {
                required: true,


            }

        },
        // Do not change code below
        errorPlacement: function (error, element) {
            error.insertAfter(element.parent());
        }
    });


})

</script>




@stop