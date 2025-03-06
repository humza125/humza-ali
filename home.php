<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Welcome</a>
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
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Pickup Location</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="pickupAddress" placeholder="Enter pickup address">
                        </div>
                        <div class="mb-3">
                            <div id="pickupMap" style="height: 300px; width: 100%;">
                                <!-- Map will be loaded here -->
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.476203562977!2d67.0596139!3d24.8827757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33edf57c0d5f5%3A0x95c7ba1e4d743f26!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1677566806283!5m2!1sen!2s"
                                    width="100%" 
                                    height="300" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Delivery Location</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="deliveryAddress" placeholder="Enter delivery address">
                        </div>
                        <div class="mb-3">
                            <div id="deliveryMap" style="height: 300px; width: 100%;">
                                <!-- Map will be loaded here -->
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.476203562977!2d67.0596139!3d24.8827757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33edf57c0d5f5%3A0x95c7ba1e4d743f26!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1677566806283!5m2!1sen!2s"
                                    width="100%" 
                                    height="300" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5>Package Description</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="packageName" class="form-label">Package Name</label>
                    <input type="text" class="form-control" id="packageName" placeholder="Enter package name">
                </div>
                <div class="mb-3">
                    <label for="packageWeight" class="form-label">Weight (kg)</label>
                    <input type="number" class="form-control" id="packageWeight" placeholder="Enter package weight">
                </div>
                <div class="mb-3">
                    <label for="packageDescription" class="form-label">Package Description</label>
                    <textarea class="form-control" id="packageDescription" rows="3" placeholder="Enter package details, size, fragility, special handling instructions, etc."></textarea>
                </div>
                <div class="mb-3">
                    <label for="packageType" class="form-label">Package Type</label>
                    <select class="form-select" id="packageType">
                        <option selected>Select package type</option>
                        <option value="1">Regular</option>
                        <option value="2">Fragile</option>
                        <option value="3">Express</option>
                    </select>
                </div>
            </form>
        </div>
        <button class = "btn btn-primary">Submit Request</button>
    </div>
</div>

</body>
</html>