<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Status</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>User</th>
                <th>Vehicle</th>
                <th>STNK Validity Status</th>
                <th>Oil Change Reminder Status</th>
                <th>Brake Change Reminder Status</th>
                <th>Battery Change Reminder Status</th>
                <th>Tire Change Reminder Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                @foreach($user->vehicles as $vehicle)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>Vehicle ID: {{ $vehicle->id }}</td>
                        <td>
                            @if($vehicle->notifications->where('reminder_type', 'STNK')->where('reminder_status', 'pending')->count())
                                Pending
                            @else
                                Up-to-date
                            @endif
                        </td>
                        <td>
                            @if($vehicle->notifications->where('reminder_type', 'oil')->where('reminder_status', 'pending')->count())
                                Pending
                            @else
                                Up-to-date
                            @endif
                        </td>
                        <td>
                            @if($vehicle->notifications->where('reminder_type', 'brake')->where('reminder_status', 'pending')->count())
                                Pending
                            @else
                                Up-to-date
                            @endif
                        </td>
                        <td>
                            @if($vehicle->notifications->where('reminder_type', 'battery')->where('reminder_status', 'pending')->count())
                                Pending
                            @else
                                Up-to-date
                            @endif
                        </td>
                        <td>
                            @if($vehicle->notifications->where('reminder_type', 'tire')->where('reminder_status', 'pending')->count())
                                Pending
                            @else
                                Up-to-date
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>
