<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Request Delivery</title>
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
                <h5>Delivery Request Form</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Contact Information</label>
                        <input type="text" class="form-control mb-2" placeholder="Sender Name">
                        <input type="tel" class="form-control mb-2" placeholder="Sender Phone">
                        <input type="text" class="form-control mb-2" placeholder="Receiver Name">
                        <input type="tel" class="form-control" placeholder="Receiver Phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Delivery Priority</label>
                        <select class="form-select">
                            <option>Standard (2-3 days)</option>
                            <option>Express (Next day)</option>
                            <option>Same Day</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Payment Method</label>
                        <select class="form-select">
                            <option>Cash on Pickup</option>
                            <option>Credit Card</option>
                            <option>Bank Transfer</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
