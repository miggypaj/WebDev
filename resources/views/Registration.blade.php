<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name">Middle Name (Optional)</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="birthdate">Birthdate</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <div class="form-group">
                <label for="full_address">Full Address</label>
                <textarea class="form-control" id="full_address" name="full_address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="user_type_id">User Type</label>
                <select class="form-control" id="user_type_id" name="user_type_id" required>
                    <option value="">Select User Type</option>
                    <option value="1">Administrator</option>
                    <option value="2">Standard User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="branch_assigned">Branch Assigned (Optional)</label>
                <select class="form-control" id="branch_assigned" name="branch_assigned">
                    <option value="">Select Branch</option>
                    <option value="1">Main Branch</option>
                    <option value="2">Branch 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required minlength="8">
                <small class="form-text text-muted">Minimum 8 characters</small>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required minlength="8">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
