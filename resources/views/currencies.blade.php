@extends('layout')

@section('title', 'All currencies')

@section('content')

<h1 class="display-4 text-center">Currency market</h1>

@if (count($currencies) == 0)

<p class="text-center">No currencies</p>

@else

<table class="table table-striped" style="width:500px; margin:25px auto 0;">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price, USD</th>
            <th scope="col">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($currencies as $index => $currency)
            <tr>
                <td>
                    <span>{{ ++$index }}</span>
                </td>
                <td>
                    <img src="{{ $currency['logo_url'] }}" alt="{{ $currency['title'] . ' logo' }}">
                    <span>
                        <a href="{{ route('particular-currency', ['id' => $index]) }}">
                            {{ $currency['title'] }}
                        </a>
                        ({{ $currency['short_name'] }})
                    </span>
                </td>
                <td>
                    <span>{{ $currency['price'] }}</span>
                </td>
                <td>
                    <button type="button" class="btn btn-dark">
                        <a href="{{ route('edit-currency', ['id' => $index]) }}">Edit</a>
                    </button>
                    <button type="button" class="btn btn-danger">
                        <a href="{{ route('delete-currency', ['id' => $index]) }}">Delete</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endif

@endsection
