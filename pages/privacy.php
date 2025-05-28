<?php
namespace AuthBasic\Pages;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Auth System</title>
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
                    <h1 class="display-4 fw-bold mb-4">Privacy Policy</h1>
                    <p class="lead">Last updated: May 26, 2025</p>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-info-circle text-primary me-2"></i>1. Information We Collect
                            </h2>
                            <p>We collect the following types of information when you use our authentication system:</p>
                            <ul>
                                <li>Personal identification information (Username, email address)</li>
                                <li>Account credentials (hashed passwords)</li>
                                <li>Technical data (IP addresses, browser type)</li>
                                <li>Usage data (login timestamps)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-gear text-primary me-2"></i>2. How We Use Your Information
                            </h2>
                            <p>We use the information we collect to:</p>
                            <ul>
                                <li>Provide and maintain our service</li>
                                <li>Secure user accounts</li>
                                <li>Prevent fraud and abuse</li>
                                <li>Communicate with users</li>
                                <li>Improve our services</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-shield-lock text-primary me-2"></i>3. Data Security</h2>
                            <p>We implement industry-standard security measures including:</p>
                            <ul>
                                <li>Password hashing with bcrypt</li>
                                <li>CSRF protection</li>
                                <li>Secure session management</li>
                                <li>Regular security audits</li>
                            </ul>
                            <p>While we strive to protect your data, no method of transmission over the Internet is 100%
                                secure.</p>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-file-earmark-text text-primary me-2"></i>4. Changes to This
                                Policy</h2>
                            <p>We may update our Privacy Policy from time to time. We will notify you of any changes by
                                posting the new Privacy Policy on this page.</p>
                            <p>You are advised to review this Privacy Policy periodically for any changes.</p>
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