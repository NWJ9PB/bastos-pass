<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bastos-Pass Registry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="text-white" style="background-color: rgb(29, 44, 82);">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Bastos Pass Registry</h2>
                <p class="lead">This is only for fun, but it has a working database to see if a user has a "Bastos Pass"</p>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <h4 class="mb-3">Register</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Username"
                                        required>
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <h4 class="mb-3">Validity (Soon)</h4>
                        <div class="my-3">
                            <div class="form-check">
                                <input id="1month" name="validity" type="radio" class="form-check-input " checked disabled
                                    required>
                                <label class="form-check-label" for="1month">1 Month</label>
                            </div>
                            <div class="form-check">
                                <input id="6months" name="validity" type="radio" class="form-check-input" required disabled>
                                <label class="form-check-label" for="6months">6 Months</label>
                            </div>
                            <div class="form-check">
                                <input id="12months" name="validity" type="radio" class="form-check-input" required disabled>
                                <label class="form-check-label" for="12months">1 Year</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Create Pass</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017–2021 NExxT Development</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://github.com/NWJ9PB">GitHub</a></li>
                <li class="list-inline-item"><a href="privacy.php">Privacy</a></li>
                <li class="list-inline-item"><a href="https://github.com/NWJ9PB/Bastos-Pass">Source Code</a></li>
            </ul>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>