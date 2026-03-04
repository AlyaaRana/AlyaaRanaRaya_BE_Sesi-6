<!DOCTYPE html>
<html>
<head>
    <title>Patients List</title>
</head>
<body>

    <h1>Patients</h1>

    <a href="{{ route('patients.create') }}">+ Add Patient</a>

    <hr>

    @foreach($patients as $patient)
        <div style="margin-bottom:20px; border:1px solid #ccc; padding:10px;">

            <p><strong>Name:</strong> {{ $patient->name }}</p>
            <p><strong>Email:</strong> {{ $patient->email }}</p>

            @if($patient->photo)
                <img src="{{ asset('storage/'.$patient->photo) }}" width="120">
            @else
                <p>No Photo</p>
            @endif

            <br><br>

            <a href="{{ route('patients.edit', $patient->id) }}">Edit</a>

            <form action="{{ route('patients.destroy', $patient->id) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this patient?')">
                    Delete
                </button>
            </form>

        </div>
    @endforeach

</body>
</html>
