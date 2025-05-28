<?php
// This namespace is not strictly necessary for a simple include,
// but good practice if you plan to add more PHP logic here.
namespace AuthBasic\Pages;

// Config is included by the main index.php, so session and PDO should be available.
// We can directly use functions like displayMessage if they are globally available
// or properly namespaced and used. For this content page, we assume config
// and functions are handled by the main index.php.

// The main index.php will handle the "remember me" logic.
// So, this page just focuses on displaying content.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Auth System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
</head>

<body>
    <?php include __DIR__ . '/../templates/navbar.php'; ?>

    <main class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <?php
                    // displayMessage() needs to be available.
                    // Assuming it's loaded by the main index.php
                    // If AuthBasic\Config\displayMessage() is the function:
                    echo \AuthBasic\Config\displayMessage();
                    ?>

                    <h1 class="display-4 fw-bold mb-4">Welcome to Our Website</h1>
                    <p class="lead mb-4">A complete authentication system built with PHP, MySQL, and Bootstrap 5.</p>

                    <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true): ?>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="<?php echo SITE_URL; ?>/register" class="btn btn-primary btn-lg px-4 gap-3">Sign Up</a>
                            <a href="<?php echo SITE_URL; ?>/login" class="btn btn-outline-secondary btn-lg px-4">Login</a>
                        </div>
                    <?php else: ?>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="<?php echo SITE_URL; ?>/dashboard" class="btn btn-primary btn-lg px-4 gap-3">Go to
                                Dashboard</a>
                            <a href="<?php echo SITE_URL; ?>/profile" class="btn btn-outline-secondary btn-lg px-4">View
                                Profile</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-shield-lock fs-1 text-primary"></i>
                            <h3 class="card-title mt-3">Secure Authentication</h3>
                            <p class="card-text">Industry-standard security practices including password hashing, CSRF
                                protection, and more.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-person-check fs-1 text-primary"></i>
                            <h3 class="card-title mt-3">User Management</h3>
                            <p class="card-text">Register, login, password reset, email verification, and profile
                                management.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-phone fs-1 text-primary"></i>
                            <h3 class="card-title mt-3">Responsive Design</h3>
                            <p class="card-text">Built with Bootstrap 5 for perfect display on all devices from mobile
                                to desktop.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Why Choose Our System?</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i
                                                class="bi bi-check-circle-fill text-success me-2"></i>Secure by design
                                        </li>
                                        <li class="list-group-item"><i
                                                class="bi bi-check-circle-fill text-success me-2"></i>Easy to implement
                                        </li>
                                        <li class="list-group-item"><i
                                                class="bi bi-check-circle-fill text-success me-2"></i>Mobile-friendly
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i
                                                class="bi bi-check-circle-fill text-success me-2"></i>Regular updates
                                        </li>
                                        <li class="list-group-item"><i
                                                class="bi bi-check-circle-fill text-success me-2"></i>Comprehensive
                                            documentation</li>
                                        <li class="list-group-item"><i
                                                class="bi bi-check-circle-fill text-success me-2"></i>Active support
                                        </li>
                                    </ul>
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