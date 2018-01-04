@extends('layouts.default')

@section('content')
    <div class="mt-4 mb-4"></div>
    <div class="row wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="col s12 pl-0 pr-0">
            <div class="row valign-wrapper bg-turquesa donate-content relative">
                <div class="col s6">
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="col s6">
                    <img src="http://via.placeholder.com/320x480" class="responsive-img d-block mx-auto">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="row wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="col s12 pl-0 pr-0">
            <div class="row valign-wrapper">
                <div class="col s6">
                    <img src="http://via.placeholder.com/320x480" class="responsive-img d-block mx-auto">
                </div>
                <div class="col s6">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    @include('partials.main-banner')
    <div class="mt-4 mb-4"></div>
    <div class="row">
        <div class="col s12">
            <hr>
            <h3 class="center-align">
                {{ Lang::get('lang.make_a_donation') }}
            </h3>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="row">
        <div class="col s12">
            <strong>{{ Lang::get('lang.donation_data') }} Epékeina</strong>
        </div>
        @foreach($accounts as $a)
        <div class="col s12 m6">
            <strong>{{ Lang::get('lang.account') }} {{ $a->name }}</strong>
            <p>{{ $a->type }}, {{ $a->bank }}: {{ $a->number }}</p>
            <p>{{ Lang::get('lang.account_name') }} {{ $a->social_name }}</p>
            <p>Rif: {{ $a->rif }}</p>
        </div>
        @endforeach
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="row">
        <div class="col s12"><hr></div>
        <div class="col s12 center-align valign-wrapper">
            <img src="{{ asset('images/logo.png') }}" class="d-inline-block ml-auto">
            <h3 class="d-inline-block mr-auto">
                {{ Lang::get('lang.make_a_donation') }}
            </h3>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    <form method="POST" action="{{ URL::to('contacto/donaciones/enviar') }}">
    <div class="row">
        <div class="col s12 m6 input-field">
            <input type="text" required name="fullname" value="{{ Input::old('fullname') }}" class="rounded" >
            <label class="rounded">{{ Lang::get('lang.fullname') }}</label>
        </div>
        <div class="col s12 m6 input-field">
            <select required name="account" class="rounded" >
                <option value="" disabled selected>{{ Lang::get('lang.accounts') }}</option>
                @foreach($accounts as $a)
                <option value="{{ $a->id }}" @if(Input::old('account') && Input::old('account') == $a->id) selected @endif>{{ $a->name }}</option>
                @endforeach
            </select>
            <label class="rounded"></label>
        </div>
    </div>
    <div class="row">
            <div class="col s12 m6 input-field mb-2">
                <input type="email" required name="email" value="{{ Input::old('email') }}" class="rounded" >
                <label class="rounded">E-mail</label>
            </div>
            <div class="col s12 m6 input-field mb-2">
                <input type="text" required name="date" value="{{ Input::old('date') }}" class="rounded datepicker" >
                <label class="rounded">{{ Lang::get('lang.date') }}</label>
            </div>
            <div class="col s12 m6 input-field mb-2">
                <input type="text" required name="amount" value="{{ Input::old('amount') }}" class="rounded" >
                <label class="rounded">{{ Lang::get('lang.amount') }}</label>
            </div>
            <div class="col s12 m6 input-field mb-2">
                <input type="text" required name="reference_number" value="{{ Input::old('reference_number') }}" class="rounded" >
                <label class="rounded">{{ Lang::get('lang.reference_number') }}</label>
            </div>
            <div class="col s12">
                <button class="btn bg-red waves-effect waves-light">{{ Lang::get('lang.send') }}</button>
            </div>
    </div>
    </form>
@stop

@section('postscript')
@if(count($errors->getMessageBag()) > 0)
      @foreach($errors->all() as $i => $err)
          <input type="hidden" class="errors error{{$i}}" value="{{ $err }}">
      @endforeach    
      <script type="text/javascript">
      jQuery(document).ready(function($) {
          $('.errors').each(function(index, el) {
                var $content = $("<p/>").html($(el).val());
                type = 'red lighten-1';
                Materialize.toast($content, 6000, type);
          });
          $('[name = fullname]').focus();
      });
      </script>
@endif
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            format: 'd-m-yyyy'
        });
        $('select').material_select();
        $('input.select-dropdown').addClass('rounded');
    });
</script>
@stop