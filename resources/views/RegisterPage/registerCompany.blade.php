<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Company | Remote Working Monitoring</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        *{
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: 'Poppins' !important;
        }
        body{
            background: #fafafa;
        }
        .card{
            color: #293b5f;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.07) !important;
            border: none
        }

        ::placeholder{
            font-weight: 300;
        }

        .fs-small{
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row min-vh-100 py-5 px-3 p-md-0">
            <div class="card my-auto mx-auto" style="max-width:60rem">
                <div class="card-body">
                    <h3 class="card-title text-center fw-bold">Register Company Account</h3>
                    <p class="fw-light text-center my-3">Fill the form to create new company account</p>
                    <form action="{{ route('company.register') }}" method="POST">
                        @csrf
                        <div class="text-start">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                                @error('email')
                                    <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="password" id="password" name="password">
                                @error('password')
                                    <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                                <input type="password" class="form-control" placeholder="password confirmation" name="password_confirmation" id="password_confirmation">
                                @error('password_confirmation')
                                    <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" placeholder="company name" name="company_name" required>
                                @error('company_name')
                                    <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="admin_name" class="form-label">Admin Name</label>
                                <input type="text" class="form-control" id="admin_name" placeholder="admin name" name="admin_name" required>
                                @error('admin_name')
                                    <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" placeholder="phone number" name="phone_number" required>
                                @error('phone_number')
                                    <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" placeholder="country" name="country" required>
                                    @error('country')
                                        <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="city" name="city" required>
                                    @error('city')
                                        <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm mb-3">
                                    <label for="zip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder="zip" name="zip" required>
                                    @error('zip')
                                        <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="company_address" class="form-label">Company Address</label>
                                <textarea type="text" class="form-control" id="company_address" placeholder="company address" name="company_address" required></textarea>
                                @error('company_address')
                                    <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary mb-2">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>