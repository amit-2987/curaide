<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/autoload.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Flatworld.ai AI Products - Empowering businesses with autonomous decision-making capabilities powered by AI solutions.">
    <title>AI Products | Flatworld.ai</title>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php') ?>
</head>

<body>
    <!-- Navigation -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header-navbar.php') ?>

    <section class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <img src="/images/404-banner.webp" alt="404 Banner" class="img-fluid mb-4 rounded">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Bootstrap & jQuery JS -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>
    <script>
        // Product card hover effects
        document.querySelectorAll('.product-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        // Form validation
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Form validation logic here
                alert('Form submitted successfully!');
            });
        });
        // Add responsive functionality
        const checkScreenSize = () => {
            const width = window.innerWidth;
            if (width < 768) {
                // Mobile adjustments
            } else {
                // Desktop adjustments
            }
        };
        window.addEventListener('resize', checkScreenSize);
        checkScreenSize();
    </script>
</body>

</html>