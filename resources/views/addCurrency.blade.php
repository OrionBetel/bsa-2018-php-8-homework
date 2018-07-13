@extends('layout')

@section('title', 'Add currency')

@section('content')
<div class="card">
    <div class="card-body">
        <form role="form" method="POST" action="{{ route('add-currency') }}">
            @csrf

            <div class="form-group">
                <label for="title" class="col-md-4 control-label">Currency name *</label>

                <div class="col-md-6">
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    
                    <input class="form-control {{ $errors->has('title') ? ' has-error' : '' }}" 
                        id="title" type="text"  name="title" value="{{ old('title') }}" 
                        placeholder="Dollar killer" autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="short_name" class="col-md-4 control-label">Currency short name *</label>

                <div class="col-md-6">
                    @if ($errors->has('short_name'))
                        <span class="text-danger">{{ $errors->first('short_name') }}</span>
                    @endif
                    
                    <input class="form-control {{ $errors->has('logo_url') ? ' is-invalid' : '' }}"
                        id="short_name" type="text" value="{{ old('short_name') }}"
                        name="short_name" placeholder="DKL" autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="logo_url" class="col-md-4 control-label">Currency image (URL) *</label>

                <div class="col-md-6">
                    @if ($errors->has('logo_url'))
                        <span class="text-danger">{{ $errors->first('logo_url') }}</span>
                    @endif
                    
                    <input class="form-control {{ $errors->has('logo_url') ? ' is-invalid' : '' }}" 
                        id="logo_url" type="text" name="logo_url" value="{{ old('logo_url') }}" 
                        placeholder="https://example.com/image.png" autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="col-md-4 control-label">Currency price, USD *</label>

                <div class="col-md-6">
                    @if ($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                    
                    <input class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
                        id="price" type="text" name="price" value="{{ old('price') }}"
                        placeholder="43.21" autofocus>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
