@extends('layouts.app')

	
@section('content')

@foreach ($invoices as $invoice)
    
    <p>{{ $invoice->name }}</p>

@endforeach


@endsection