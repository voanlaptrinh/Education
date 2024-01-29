@extends('index')
@section('content')
    <h1>Subscription Plans</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach($subscriptions as $subscription)
            <li>
                {{ $subscription->name }} - ${{ $subscription->price }} ({{ $subscription->duration_in_days }} days)
                @if($subscription->can_do_exercises)
                    - Can do exercises
                @endif
                @if($subscription->can_view_lectures)
                    - Can view lectures
                @endif
            </li>
            <form action="{{ route('subscriptions.purchase', $subscription->id) }}" method="get">
                @csrf
                <button type="submit">Buy</button>
            </form>
        @endforeach
    </ul>
@endsection
