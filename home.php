<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">REGISTRATION</h2>
            
            <form action="about.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label">Phone number</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter your Phone number">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control"  name="email" placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label for="url" class="form-label">Facebook URL</label>
                    <input type="url" class="form-control"  name="url" placeholder="Enter your Facebook URL">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pwd" placeholder="Enter password">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpwd" placeholder="Confirm password">
                    </div>
                </div>

                <fieldset class="mb-3">
                    <legend class="col-form-label pt-0">Gender</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </fieldset>

                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" name="country">
                        <option selected disabled>Choose your country</option>
                        <option value="United States">United States</option>
                        <option value="Canada">Canada</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Phillipines">Phillipines</option>
                        <option value="Australia">Australia</option>
                    </select>
                </div>

                <fieldset class="mb-3">
                    <legend class="col-form-label pt-0">Skills</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="HTML">
                        <label class="form-check-label">HTML</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="PHP">
                        <label class="form-check-label">PHP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="JavaScript">
                        <label class="form-check-label">JavaScript</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="Flutter">
                        <label class="form-check-label">Flutter</label>
                    </div>
                </fieldset>

                <div class="mb-3">
                    <label for="biography" class="form-label">Biography</label>
                    <textarea class="form-control" name="bio" rows="3" placeholder="Tell us about yourself"></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
</body>
</html>
