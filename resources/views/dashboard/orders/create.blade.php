@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Order') }}</div>
                @if($errors->any())
                    <div class="alert alert-danger " role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card-body">
                   
                    <form method="POST" action="{{ route('orders.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status da Order') }}</label>

                            <div class="col-md-6">
                                <select id="status" type="text" class="form-control" name="status" value="{{ old('status') }}" required>
                                    <option value="pending">Pendente</option>
                                    <option value="delivered">Enviado</option>
                                </select>
                            </div>

                            
                        </div>

                        <div class="form-group row">
                            <label for="paid" class="col-md-4 col-form-label text-md-right">{{ __('Está paga?') }}</label>

                            <div class="col-md-6">
                                <select id="paid" type="text" class="form-control" name="paid" value="{{ old('paid') }}" required>
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="track_code" class="col-md-4 col-form-label text-md-right">{{ __('Track Code') }}</label>

                            <div class="col-md-6">
                                <input id="track_code" type="text" class="form-control" value="{{ old('track_code') }}" name="track_code">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
