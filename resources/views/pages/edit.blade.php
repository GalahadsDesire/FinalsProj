<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment</title>
</head>

<body>

<h1>Edit Appointment</h1>

<form action="/appts/{{ $appt->appt_id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Patient Last Name:</label><br>
    <input type="text" name="lname" value="{{ $appt->Patient_LN }}" required><br>

    <label>Patient First Name:</label><br>
    <input type="text" name="fname" value="{{ $appt->Patient_FN }}" required><br>

    <label>Phone number:</label><br>
    <input type="number" name="pnumber" value="{{ $appt->phone_number }}" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ $appt->email }}"><br>

    <label>Home Address:</label><br>
    <input type="text" name="address" value="{{ $appt->HomeAddress }}" required><br>

    <label>Doctor Assigned:</label><br>
    <input type="text" name="doctor" value="{{ $appt->Doctor_Assigned }}" required><br>

    <label>Date:</label><br>
    <input type="date" name="date" value="{{ $appt->Date }}" required><br>

    <label>Time Slot:</label><br>
    <input type="time" name="time" value="{{ $appt->Time_slot }}" required><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="Available" {{ $appt->Status == 'Available' ? 'selected' : '' }}>Available</option>
        <option value="Waiting" {{ $appt->Status == 'Waiting' ? 'selected' : '' }}>Waiting</option>
        <option value="Ongoing" {{ $appt->Status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
        <option value="Finished" {{ $appt->Status == 'Finished' ? 'selected' : '' }}>Finished</option>
        <option value="Cancelled" {{ $appt->Status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
    </select>

    <br><br>
    <button>Update Appointment</button>

</form>

</body>
</html>