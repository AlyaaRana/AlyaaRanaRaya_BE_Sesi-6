<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
</head>
<body>

    <h1>Add Patient</h1>

    <form action="{{ route('patients.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Photo:</label><br>
        <input type="file" name="photo"><br><br>

        <button type="submit">Save</button>
    </form>

    <br>
    <a href="{{ route('patients.index') }}">Back</a>

</body>
</html>
