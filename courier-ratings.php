<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Courier Ratings</title>
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
        <div class="card">
            <div class="card-header">
                <h5>Rate Your Courier</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Tracking Number</label>
                        <input type="text" class="form-control" placeholder="Enter your tracking number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rating</label>
                        <div class="stars">
                            <i class="bi bi-star fs-4 text-warning"></i>
                            <i class="bi bi-star fs-4 text-warning"></i>
                            <i class="bi bi-star fs-4 text-warning"></i>
                            <i class="bi bi-star fs-4 text-warning"></i>
                            <i class="bi bi-star fs-4 text-warning"></i>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Comments</label>
                        <textarea class="form-control" rows="3" placeholder="Share your experience"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Rating</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
