<?php include 'head.php';?>
<link rel="stylesheet" href="form.css">

<div class="container signup-container">
    <div class="row w-50">
        <div class="col-sm-12 d-flex justify-content-center flex-column shadow-lg rounded-2">
            <form action="" class="p-4">
                <h1 class="h4 text-capitalize">sign up</h1>
                <hr />
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">FullName</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="John Doe" />
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" />
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Phone number</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" />
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" />
                </div>

                <button type="submit" class="buttons mb-3">Submit</button>

                <p class="text-center fw-bold">
                    Have A Account?
                    <a href="userlogin.php" class="text-decoration-none form-links">login now</a>
                </p>
            </form>
        </div>
    </div>
</div>