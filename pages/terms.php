<?php
// This namespace is not strictly necessary for a simple include,
// but good practice if you plan to add more PHP logic here.
namespace AuthBasic\Pages;

// Config is included by the main index.php (front controller),
// so session, SITE_URL, PROJECT_ROOT_PATH etc. should be available.
// We can directly use functions like displayMessage if they are globally available.
// For this content page, we assume config and functions are handled by the main index.php.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service | Auth System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
</head>

<body>
    <?php
    // The main index.php (front controller) should ideally handle including the navbar and footer.
    // If this page is directly included by index.php which wraps content with navbar/footer,
    // then these includes might be redundant or cause issues.
    // For consistency with how home.php was structured (as a full page included by index.php),
    // we'll include them here for now.
    // However, a better long-term approach is a layout file in index.php.
    // Assuming PROJECT_ROOT_PATH is defined in config.php (loaded by index.php)
    if (defined('PROJECT_ROOT_PATH')) {
        include PROJECT_ROOT_PATH . '/templates/navbar.php';
    } else {
        // Fallback if PROJECT_ROOT_PATH is not defined (should not happen if index.php loads config)
        include __DIR__ . '/../templates/navbar.php';
    }
    ?>

    <main class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Terms of Service</h1>
                    <p class="lead">Last updated: <?php echo date("F j, Y"); // Or a static date ?></p>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-file-text text-primary me-2"></i>1. Acceptance of Terms</h2>
                            <p>By accessing and using AuthBasic (the "Service"), you accept and agree to be bound by the
                                terms and provision of this agreement. In addition, when using this Service, you shall
                                be subject to any posted guidelines or rules applicable to such services. Any
                                participation in this Service will constitute acceptance of this agreement.</p>
                            <p>If you do not agree to abide by the above, please do not use this Service.</p>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-person-check-fill text-primary me-2"></i>2. User Accounts
                            </h2>
                            <p>When you create an account with us, you must provide us information that is accurate,
                                complete, and current at all times. Failure to do so constitutes a breach of the Terms,
                                which may result in immediate termination of your account on our Service.</p>
                            <p>You are responsible for safeguarding the password that you use to access the Service and
                                for any activities or actions under your password, whether your password is with our
                                Service or a third-party service.</p>
                            <p>You agree not to disclose your password to any third party. You must notify us
                                immediately upon becoming aware of any breach of security or unauthorized use of your
                                account.</p>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-slash-circle text-primary me-2"></i>3. Prohibited Uses</h2>
                            <p>You may use the Service only for lawful purposes and in accordance with these Terms. You
                                agree not to use the Service:</p>
                            <ul>
                                <li>In any way that violates any applicable national or international law or regulation.
                                </li>
                                <li>For the purpose of exploiting, harming, or attempting to exploit or harm minors in
                                    any way by exposing them to inappropriate content or otherwise.</li>
                                <li>To transmit, or procure the sending of, any advertising or promotional material,
                                    including any "junk mail", "chain letter," "spam," or any other similar
                                    solicitation.</li>
                                <li>To impersonate or attempt to impersonate the Company, a Company employee, another
                                    user, or any other person or entity.</li>
                                <li>In any way that infringes upon the rights of others, or in any way is illegal,
                                    threatening, fraudulent, or harmful, or in connection with any unlawful, illegal,
                                    fraudulent, or harmful purpose or activity.</li>
                                <li>To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment
                                    of the Service, or which, as determined by us, may harm or offend the Company or
                                    users of the Service or expose them to liability.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-shield-x text-primary me-2"></i>4. Disclaimer of Warranties
                            </h2>
                            <p>The Service is provided on an "AS IS" and "AS AVAILABLE" basis. The Service is provided
                                without warranties of any kind, whether express or implied, including, but not limited
                                to, implied warranties of merchantability, fitness for a particular purpose,
                                non-infringement, or course of performance.</p>
                            <p>AuthBasic, its subsidiaries, affiliates, and its licensors do not warrant that a) the
                                Service will function uninterrupted, secure or available at any particular time or
                                location; b) any errors or defects will be corrected; c) the Service is free of viruses
                                or other harmful components; or d) the results of using the Service will meet your
                                requirements.</p>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-gavel text-primary me-2"></i>5. Limitation of Liability</h2>
                            <p>In no event shall AuthBasic, nor its directors, employees, partners, agents, suppliers,
                                or affiliates, be liable for any indirect, incidental, special, consequential or
                                punitive damages, including without limitation, loss of profits, data, use, goodwill, or
                                other intangible losses, resulting from (i) your access to or use of or inability to
                                access or use the Service; (ii) any conduct or content of any third party on the
                                Service; (iii) any content obtained from the Service; and (iv) unauthorized access, use
                                or alteration of your transmissions or content, whether based on warranty, contract,
                                tort (including negligence) or any other legal theory, whether or not we have been
                                informed of the possibility of such damage, and even if a remedy set forth herein is
                                found to have failed of its essential purpose.</p>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-arrow-repeat text-primary me-2"></i>6. Changes to Terms</h2>
                            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any
                                time. If a revision is material we will try to provide at least 30 days' notice prior to
                                any new terms taking effect. What constitutes a material change will be determined at
                                our sole discretion.</p>
                            <p>By continuing to access or use our Service after those revisions become effective, you
                                agree to be bound by the revised terms. If you do not agree to the new terms, please
                                stop using the Service.</p>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="h4"><i class="bi bi-envelope-paper text-primary me-2"></i>7. Contact Us</h2>
                            <p>If you have any questions about these Terms, please contact us via the <a
                                    href="<?php echo SITE_URL; ?>/contact">contact page</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    if (defined('PROJECT_ROOT_PATH')) {
        include PROJECT_ROOT_PATH . '/templates/footer.php';
    } else {
        include __DIR__ . '/../templates/footer.php';
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/script.js"></script>
</body>

</html>