<!DOCTYPE html>
<html>
<head >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);

    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById('response').innerHTML = `<div class="alert alert-info">${data}</div>`;
        this.reset();
    });
});
</script>

    <title>TechSync Solutions</title>
    <style>
        body { font-family: Arial; mar gin: 40px; background: #f4f4f4; }
        h1 { color: #333; }
        .section { margin-bottom: 20px; }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Welcome to TechSync Solution</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Our Services</h2>
                <ul class="list-group">
                    <li class="list-group-item">Electronic Components Sales</li>
                    <li class="list-group-item">Custom PCB Design</li>
                    <li class="list-group-item">Electrical Wiring</li>
                    <li class="list-group-item">Medical Device Services</li>
                    <li class="list-group-item">STEM & IoT Training</li>
                    <li class="list-group-item">Live Sound & Music Production</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Contact Us</h2>
                <form method="POST" action="submit.php" id="contactForm">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Query</label>
                        <textarea name="query" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <div id="response" class="mt-3"></div>
            </div>
        </div>
    </div>
</body>
