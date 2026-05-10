<?php
// index.php - QuickPOS Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Modern Point of Sale System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- ========== HEADER ========== -->
<header class="header">
    <div class="container">
        <div class="logo">
            <i class="fas fa-cash-register"></i>
            <span>QuickPOS</span>
        </div>
        <nav class="nav">
            <a href="#hero">Home</a>
            <a href="#features">Features</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact">Contact</a>
        </nav>
        <a href="#contact" class="btn-signup">Get Started Free</a>
    </div>
</header>

<!-- ========== HERO ========== -->
<section class="hero" id="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Run Your Business<br><span>Smarter & Faster</span></h1>
            <p>QuickPOS is the modern point of sale system that helps you manage sales, inventory, and customers — all in one place.</p>
            <a href="#contact" class="btn-primary">Start Free Trial</a>
            <a href="#features" class="btn-secondary">See How It Works</a>
        </div>
        <div class="hero-image">
            <div class="hero-mockup">
                <i class="fas fa-cash-register"></i>
                <p>QuickPOS Dashboard</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURES ========== -->
<section class="features" id="features">
    <div class="container">
        <h2>Everything You Need to Run Your Store</h2>
        <p class="section-subtitle">Powerful features built for modern businesses</p>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                <h3>Lightning Fast Sales</h3>
                <p>Process transactions in seconds. No lag, no errors. Just smooth, fast sales every time.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Real-Time Analytics</h3>
                <p>Track your sales, revenue, and top products instantly with beautiful dashboards.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-boxes"></i></div>
                <h3>Inventory Management</h3>
                <p>Never run out of stock. Get automatic alerts when inventory is running low.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-users"></i></div>
                <h3>Customer Management</h3>
                <p>Build loyalty programs, track purchase history, and keep your customers coming back.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== PRICING ========== -->
<section class="pricing" id="pricing">
    <div class="container">
        <h2>Simple, Transparent Pricing</h2>
        <p class="section-subtitle">No hidden fees. Cancel anytime.</p>
        <div class="pricing-grid">
            <div class="pricing-card">
                <div class="plan-name">Basic</div>
                <div class="plan-price">$9<span>/mo</span></div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> 1 Terminal</li>
                    <li><i class="fas fa-check"></i> Basic Reports</li>
                    <li><i class="fas fa-check"></i> 500 Products</li>
                    <li><i class="fas fa-check"></i> Email Support</li>
                </ul>
                <a href="#contact" class="btn-plan">Get Started</a>
            </div>
            <div class="pricing-card popular">
                <div class="popular-badge">Most Popular</div>
                <div class="plan-name">Pro</div>
                <div class="plan-price">$29<span>/mo</span></div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> 5 Terminals</li>
                    <li><i class="fas fa-check"></i> Advanced Analytics</li>
                    <li><i class="fas fa-check"></i> Unlimited Products</li>
                    <li><i class="fas fa-check"></i> Priority Support</li>
                </ul>
                <a href="#contact" class="btn-plan">Get Started</a>
            </div>
            <div class="pricing-card">
                <div class="plan-name">Enterprise</div>
                <div class="plan-price">$99<span>/mo</span></div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Unlimited Terminals</li>
                    <li><i class="fas fa-check"></i> Custom Reports</li>
                    <li><i class="fas fa-check"></i> API Access</li>
                    <li><i class="fas fa-check"></i> 24/7 Dedicated Support</li>
                </ul>
                <a href="#contact" class="btn-plan">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== CONTACT FORM ========== -->
<section class="contact" id="contact">
    <div class="container">
        <h2>Get In Touch</h2>
        <p class="section-subtitle">Have questions? We'd love to hear from you.</p>

        <?php
        if (isset($_GET['status']) && $_GET['status'] === 'error') {
            echo '<div class="alert alert-error">Please fill in all fields correctly.</div>';
        }
        ?>

        <form class="contact-form" action="contact.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message here..."></textarea>
            </div>
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <i class="fas fa-cash-register"></i>
                <span>QuickPOS</span>
                <p>Modern POS system for modern businesses.</p>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <a href="#hero">Home</a>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="footer-social">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>