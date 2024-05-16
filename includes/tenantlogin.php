<?php include 'head.php';?>
<link rel="stylesheet" href="form.css">

<div class="container login-container">
    <div class="row w-50">
        <div class="col-sm-12  d-flex justify-content-center flex-column shadow-lg rounded-2">
            <form action="" class="p-4">
                <h1 class="h4">Login as Tenant</h1>
                <hr />

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" />
                </div>
                <button type="submit" class="buttons mb-3">Submit</button>

                <p class="text-center fw-bold">
                    Don't Have An Account?
                    <a href="tenantregister.php" class="text-decoration-none form-links">Register now</a>
                </p>
            </form>
        </div>
    </div>
</div>