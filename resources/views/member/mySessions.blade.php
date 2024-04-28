@extends('layouts.guest')

@section('content')
    <div class="container">
        <h1>My Sessions</h1>
        
        @if ($sessions->isEmpty())
            <p>You don't have any reserved sessions yet.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sessions as $session)
                        <tr>
                            <td>{{ $session->date}}</td> <!-- Format the date -->
                            <td>{{ $session->start_time}}</td> <!-- Format the time -->
                            <td>{{ $session->end_time }}</td>
                            <td>
                                <form action="{{ route('cancelReserv', ['reservation' => $session->reservation_id]) }}" method="post">
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit">Cancel</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
