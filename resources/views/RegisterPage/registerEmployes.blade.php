<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Company | Remote Working Monitoring</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/loginSection.css') }}">
</head>
<body>
    <section class="loginSection">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto loginBox px-4 py-4 text-center">
                    <h4 class="mb-4">Register Company Account</h4>
                    <form action="app/models/auth/auth.php" method="POST">
                        <div class="text-start">
                            <div class="mb-3">
                                <label for="company_id" class="form-label">Company ID</label>
                                <input type="text" class="form-control" id="company_id" placeholder="company id" name="company_id" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Your name</label>
                                <input type="text" class="form-control" id="name" placeholder="your name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" placeholder="Password" id="password">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-login mb-2" name="authIn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
</body>
</html>