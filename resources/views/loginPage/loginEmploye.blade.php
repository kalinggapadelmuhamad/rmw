<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Employes | Remote Working Monitoring</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/loginSection.css">
</head>
<body>
    @error('error')
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container top-0 end-0 p-3">
            <!-- Then put toasts within -->
            <div class="toast bg-warning" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body text-white">
                        {{ $message }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = (event) => {
            let myAlert = document.querySelectorAll('.toast')[0];
            if (myAlert) {
                let bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
            }
        };
    </script>
    @enderror
    @if (session('success'))
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container top-0 end-0 p-3">
                <!-- Then put toasts within -->
                <div class="toast shadow border-0 border-start border-5 border-success rounded-0" role="alert" aria-live="assertive" aria-atomic="true" style="width: fit-content;">
                    <div class="d-flex gap-5">
                        <div class="toast-body d-flex flex-column pe-5">
                            <h6>Success</h6>
                            <p class="fw-light m-0">{{ session('success') }}</p>
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.onload = (event) => {
                let myAlert = document.querySelectorAll('.toast')[0];
                if (myAlert) {
                    let bsAlert = new bootstrap.Toast(myAlert);
                    bsAlert.show();
                }
            };
        </script>
    @endif
    <section class="loginSection">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto loginBox px-4 py-4 text-center">
                    <h4>Login as employes</h4>
                    <p class="mb-4">Use your credentials to access your account.</p>
                    <form action="{{ route('employes.login') }}" method="POST">
                        @csrf
                        <div class="text-start">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Conpany ID</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="2011010098" name="companyid" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="admin@mail.com" name="email" required>
                            </div>
                            <div class="mb-4">
                                <label for="exampleFormControlInput2" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="*******" name="password" required>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-login mb-2">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>