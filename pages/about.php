<?php
namespace AuthBasic\Pages;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Auth System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
</head>

<body>
    <?php include __DIR__ . '/../templates/navbar.php'; ?>

    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">About Our Authentication System</h1>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-shield-check text-primary me-2"></i>Our Mission</h2>
                            <p>To provide a secure, reliable, and easy-to-use authentication system that follows
                                industry best practices for web application security.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-lightning-charge text-primary me-2"></i>Key Features</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Secure password hashing with bcrypt</li>
                                <li class="list-group-item">Email verification system</li>
                                <li class="list-group-item">Password reset functionality</li>
                                <li class="list-group-item">CSRF protection</li>
                                <li class="list-group-item">Responsive Bootstrap 5 design</li>
                                <li class="list-group-item">Session management</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-people text-primary me-2"></i>The Team</h2>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                                style="width: 60px; height: 60px;">
                                                <i class="bi bi-person fs-4"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0">John Doe</h5>
                                            <p class="mb-0 text-muted">Lead Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                                style="width: 60px; height: 60px;">
                                                <i class="bi bi-person fs-4"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0">Jane Smith</h5>
                                            <p class="mb-0 text-muted">Security Specialist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../templates/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/script.js"></script>
</body>

</html>