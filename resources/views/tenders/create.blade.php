@extends('layouts.app')

@section('content')
    <div class="md-card-content">
        @if(Session::has('success'))
            <div style="text-align: center" class="uk-alert uk-alert-success" data-uk-alert="">
                {!! Session::get('success') !!}
            </div>
        @endif

        @if(Session::has('error'))
            <div style="text-align: center" class="uk-alert uk-alert-danger" data-uk-alert="">
                {!! Session::get('error') !!}
            </div>
        @endif
        <div>
            <!-- if there are login errors, show them here -->
            @if (count($errors) > 0)

                <div class="uk-form-row">
                    <div class="alert alert-danger" style="background-color: red;color: white">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {!!  $error  !!} </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>


    </div>
    <h3 class="heading_b uk-margin-bottom">Create a Tender</h3>

    <div class="md-card">
        <div class="md-card-content large-padding">

            <form  novalidate id="wizard_advanced_form" class="uk-form-stacked"   action="{{route("tender.store")}}" method="post" accept-charset="utf-8"  name="updateForm"  v-form>
                @csrf
                <div data-uk-observe="" id="wizard_advanced" role="application" class="wizard clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="fill_form_header first current" aria-disabled="false" aria-selected="true" v-bind:class="{ 'error' : !in_payment_section}">
                                <a aria-controls="wizard_advanced-p-0" href="#wizard_advanced-h-0" id="wizard_advanced-t-0">
                                    <span class="current-info audible">current step: </span><span class="number">1</span> <span class="title">Stage One</span>
                                </a>
                            </li>
                            <li role="tab" class="payment_header disabled" aria-disabled="true"   v-bind:class="{ 'error' : in_payment_section}" >
                                <a aria-controls="wizard_advanced-p-1" href="#wizard_advanced-h-1" id="wizard_advanced-t-1">
                                    <span class="number">2</span> <span class="title">Stage Two</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=" clearfix " style="box-sizing: border-box;display: block;padding:15px!important;position: relative;">

                        <!-- first section -->
                        {{-- <h3 id="wizard_advanced-h-0" tabindex="-1" class="title current">Fill Form</h3> --}}
                        <section id="fill_form_section" role="tabpanel" aria-labelledby="fill form section" class="body step-0 current" data-step="0" aria-hidden="false"   v-bind:class="{'uk-hidden': in_payment_section} ">

                            <div data-uk-grid-margin="" class="uk-grid uk-grid-width-medium-1-4 uk-grid-width-large-1-4">


                                <div class="parsley-row">
                                    <div class="uk-input-group">

                                        <div class="md-input-wrapper md-input-filled"><label for="wizard_referer">Osikani :</label><input type="text" id="type" name="type" class="md-input"   required="required"     v-model="type"  v-form-ctrl><span class="md-input-bar"></span></div>
                                        <p  class=" uk-text-danger uk-text-small  "   v-if="updateForm.type.$error.required">type is required</p>
                                    </div>
                                </div>


                                <div class="parsley-row">
                                    <div class="uk-input-group">

                                        <div class="md-input-wrapper md-input-filled"><label for="wizard_referer">Opportunity :</label><input type="text" id="opportunity" name="opportunity" class="md-input"   required="required"     v-model="opportunity"  v-form-ctrl><span class="md-input-bar"></span></div>
                                        <p  class=" uk-text-danger uk-text-small  "   v-if="updateForm.opportunity.$error.required">Opportunity is required</p>
                                    </div>
                                </div>



                                <div class="parsley-row">
                                    <div class="uk-input-group">

                                        <div class="md-input-wrapper md-input-filled"><label for="wizard_skype">Year :</label><input type="number" id="year" name="year" v-form-ctrl  class="md-input"    v-model="year"   required    /><span class="md-input-bar"></span></div>
                                        <p  class=" uk-text-danger uk-text-small  "   v-if="updateForm.year.$error.required">Year is required</p>

                                    </div>
                                </div>

                                <div class="parsley-row">
                                    <div class="uk-input-group">

                                        <div class="md-input-wrapper md-input-filled"><label for="wizard_referer">Industry:</label><input type="text" id="industry" name="industry" class="md-input"   required="required"       v-model="industry"  v-form-ctrl><span class="md-input-bar"></span></div>
                                        <p  class=" uk-text-danger uk-text-small  "   v-if="updateForm.industry.$error.required">industry is required</p>
                                    </div>
                                </div>

                            </div>





                        </section>

                        <!-- second section -->
                        {{-- <h3 id="payment-heading-1" tabindex="-1" class="title">Payment</h3> --}}
                        <section id="payment_section" role="tabpanel" aria-labelledby="payment section" class="body step-1 "  v-bind:class="{'uk-hidden': !in_payment_section} "  data-step="1"  aria-hidden="true">
                            <h2 class="heading_a"></h2>


                            <div data-uk-grid-margin="" class="uk-grid uk-grid-width-medium-1-4 uk-grid-width-large-1-4">
                                <div class="parsley-row">
                                    <div class="uk-input-group">

                                        <div class="md-input-wrapper md-input-filled"><label for="wizard_referer">Expression of interest</label><textarea id="interest" name="interest" class="md-input"       rows="15" cols="50"   v-model="interest"  v-form-ctrl> </textarea></div>
                                    </div>
                                </div>





                            </div>




                        </section>


                    </div>
                    <div class="actions clearfix "  >
                        <ul aria-label="Pagination" role="menu">
                            <li class="button_previous " aria-disabled="true"  v-on:click="go_to_fill_form_section()"  v-show="in_payment_section==true"  >
                                <a role="menuitem" href="#previous" >
                                    <i class="material-icons"></i> Previous
                                </a>
                            </li>
                            <li class="button_next button"   v-on:click="go_to_payment_section()"  aria-hidden="false" aria-disabled="false"  v-show="updateForm.$valid && in_payment_section==false"  >
                                <a role="menuitem" href="#next"  >Next
                                    <i class="material-icons">
                                    </i>
                                </a>
                            </li>
                            <li class="button_finish "    aria-hidden="true"  v-show="updateForm.$valid && in_payment_section==true"  >
                                <input class="md-btn md-btn-primary uk-margin-small-top" type="submit" name="submit_order"  value="Submit"   v-on:click="submit_form"  />
                            </li>
                        </ul>
                    </div>
                </div>
            </form>

            <div class="uk-modal" id="confirm_modal"   >
                <div class="uk-modal-dialog"  v-el:confirm_modal>
                    <div class="uk-modal-header uk-text-large uk-text-success uk-text-center" >Confirm Data</div>
                    Are you certain of all the info
                    {{-- <div class="uk-modal-footer ">
        <center>
          <button class="md-btn md-btn-primary uk-margin-small-top" type="submit" name="submit_order" > Cancel</button>
          <button class="md-btn md-btn-primary uk-margin-small-top" type="submit" name="submit_order" > Ok</button>
          </center>
        </div> --}}
                </div>
            </div>

        </div>
    </div>

@endsection
@section("js")
    <script src="{!! url('public/assets/js/select2.full.min.js') !!}"></script>

    <script>
        $(document).ready(function(){
            $('select').select2({ width: "resolve" });


        });


    </script>
    <script>


        //code for ensuring vuejs can work with select2 select boxes
        Vue.directive('select', {
            twoWay: true,
            priority: 1000,
            params: [ 'options'],
            bind: function () {
                var self = this
                $(this.el)
                    .select2({
                        data: this.params.options,
                        width: "resolve"
                    })
                    .on('change', function () {
                        self.vm.$set(this.name,this.value)
                        Vue.set(self.vm.$data,this.name,this.value)
                    })
            },
            update: function (newValue,oldValue) {
                $(this.el).val(newValue).trigger('change')
            },
            unbind: function () {
                $(this.el).off().select2('destroy')
            }
        })


        var vm = new Vue({
            el: "body",
            ready : function() {
            },
            data : {


                options: [
                ],
                in_payment_section : false,
            },
            methods : {
                go_to_payment_section : function (event){
                    UIkit.modal.confirm(vm.$els.confirm_modal.innerHTML, function(){

                        vm.$data.in_payment_section=true
                    })

                },
                submit_form : function(){
                    return (function(modal){ modal = UIkit.modal.blockUI("<div class='uk-text-center'>Saving Data<br/><img class='uk-thumbnail uk-margin-top' src='{!! url('assets/img/spinners/spinner_success.gif')  !!}' /></div>"); setTimeout(function(){ modal.hide() }, 50000) })();
                },

                go_to_fill_form_section : function (event){
                    vm.$data.in_payment_section=false
                }
            }
        })

    </script>
    <script type="text/javascript">
        $('.metro').hide();

        $("select[name='region']").change(function(){


            var region= $(this).val();

            var token = $("input[name='_token']").val();

            $.ajax({

                url: "<?php echo route('ajax_district') ?>",

                method: 'POST',

                data: {region:region, _token:token},


                success: function(data) {



                    $('.metro').show();
                    $("select[name='district']").html('');

                    $("select[name='district']").html(data.options);

                }

            });

        });


    </script>
@endsection