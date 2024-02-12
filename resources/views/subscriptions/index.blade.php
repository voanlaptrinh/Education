@extends('index')
@section('content')
    <h1>Subscription Plans</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        <h1>Danh Sách Gói Mua</h1>

        @foreach ($subscriptions as $subscription)
            <div>
                <h3>{{ $subscription->name }}</h3>
                <p>Giá: ${{ $subscription->price }}</p>
                <form action="{{ route('subscriptions.purchase', $subscription) }}" method="post">
                    @csrf
                    <button type="submit">Mua Gói</button>
                </form>
            </div>
        @endforeach
    </ul>
@endsection
