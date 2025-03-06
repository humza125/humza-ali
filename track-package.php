<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Track Package</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="home.php">Home</a>
        <a class="nav-link" href="request-delivery.php">Request Delivery</a>
        <a class="nav-link" href="track-package.php">Track Package</a>
        <a class="nav-link" href="courier-ratings.php">Rate Courier</a>
      </div>
    </div>
  </div>
</nav>
    <div class="container mt-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Track Your Package</h5>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter tracking number">
                    <button class="btn btn-primary" type="button">Track</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Tracking Status</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span>Package Picked Up</span>
                            <span class="text-success">Completed</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span>In Transit</span>
                            <span class="text-primary">Current Status</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span>Out for Delivery</span>
                            <span class="text-secondary">Pending</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span>Delivered</span>
                            <span class="text-secondary">Pending</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
