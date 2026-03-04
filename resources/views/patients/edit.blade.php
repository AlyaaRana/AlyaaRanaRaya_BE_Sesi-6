<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
</head>
<body>

    <h1>Edit Patient</h1>

    <form action="{{ route('patients.update', $patient->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $patient->name }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $patient->email }}"><br><br>

        <label>Current Photo:</label><br>
        @if($patient->photo)
            <img src="{{ asset('storage/'.$patient->photo) }}" width="120"><br><br>
        @else
            No Photo<br><br>
        @endif

        <label>New Photo (optional):</label><br>
        <input type="file" name="photo"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('patients.index') }}">Back</a>

</body>
</html>
