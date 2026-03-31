<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body> 
<h1>Appointment</h1>

<table> 
<tr>
    <th>id</th>
    <th>FN</th>
    <th>LN</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Home Address</th>
    <th>Doctor Assigned</th>
    <th>Date</th>
    <th>Time Slot</th>
    <th>Status</th>
    <th>Actions</th> <!-- either update or delete -->
</tr>

@foreach ($data as $appt)
<tr>
    <td>{{ $appt->appt_id }}</td>
    <td>{{ $appt->Patient_FN}}</td>
    <td>{{ $appt->Patient_LN}}</td>
    <td>{{ $appt->phone_number }}</td>
    <td>{{ $appt->email }}</td>
    <td>{{ $appt->HomeAddress }}</td>
    <td>{{ $appt->Doctor_Assigned }}</td>
    <td>{{ $appt->Date }}</td>
    <td>{{ $appt->Time_slot }}</td>
    <td>{{ $appt->Status }}</td>

    <td>
    <!-- EDIT BUTTON -->
    <a href="/appts/{{ $appt->appt_id }}/edit">Edit</a>

    <!-- FOR DELETE-->
    <td>
        <form action="/appts/{{ $appt->appt_id }}" method="POST">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </td>

</tr>
@endforeach 

</table>

<br>

<a href="{{ route('pages.create') }}">Add New Appointment</a>


</body>
</html>