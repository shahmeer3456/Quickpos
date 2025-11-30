<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - The Last POS System You'll Ever Need</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation & Header -->
    <header class="navbar">
        <div class="container">
            <div class="navbar-content">
                <div class="logo">
                    <i class="fas fa-cash-register"></i>
                    <span>QuickPOS</span>
                </div>
                <nav class="nav-links">
                    <a href="#features">Features</a>
                    <a href="#pricing">Pricing</a>
                    <a href="#contact">Contact</a>
                </nav>
                <button class="signup-btn" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Sign Up</button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-headline">The Last POS System You'll Ever Need</h1>
                <p class="hero-subheadline">Streamline your sales, manage inventory, and grow your business with QuickPOS</p>
                <button class="cta-btn" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Get Started for Free</button>
            </div>
            <div class="hero-image">
                <div class="mockup-container">
                    <div class="mockup-device">
                        <div class="mockup-screen">
                            <div class="mockup-content">
                                <div class="mockup-header">Sales Dashboard</div>
                                <div class="mockup-chart">
                                    <div class="chart-bar" style="height: 60%;"></div>
                                    <div class="chart-bar" style="height: 80%;"></div>
                                    <div class="chart-bar" style="height: 70%;"></div>
                                    <div class="chart-bar" style="height: 90%;"></div>
                                </div>
                                <div class="mockup-stats">
                                    <div class="stat">Today: $2,450</div>
                                    <div class="stat">This Month: $45,890</div>
                                </div>
                            </div>
                        </div>
                        <div class="mockup-notch"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2>Why Choose QuickPOS?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3>Inventory Management</h3>
                    <p>Real-time inventory tracking with automated stock alerts and multi-location support</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Sales Analytics</h3>
                    <p>Powerful insights with detailed reports on sales trends, customer behavior, and revenue</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3>Easy Integration</h3>
                    <p>Seamlessly integrate with your existing tools and payment gateways in minutes</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Ready</h3>
                    <p>Manage your business on-the-go with our fully responsive mobile application</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="container">
            <h2>Simple, Transparent Pricing</h2>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Basic</h3>
                    <div class="price">$29<span>/month</span></div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Up to 1 location</li>
                        <li><i class="fas fa-check"></i> Basic inventory management</li>
                        <li><i class="fas fa-check"></i> Standard reports</li>
                        <li><i class="fas fa-check"></i> Email support</li>
                    </ul>
                    <button class="pricing-btn btn-secondary">Choose Plan</button>
                </div>
                <div class="pricing-card featured">
                    <div class="badge">Most Popular</div>
                    <h3>Pro</h3>
                    <div class="price">$79<span>/month</span></div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Up to 5 locations</li>
                        <li><i class="fas fa-check"></i> Advanced inventory management</li>
                        <li><i class="fas fa-check"></i> Custom reports & analytics</li>
                        <li><i class="fas fa-check"></i> Priority email & chat support</li>
                    </ul>
                    <button class="pricing-btn btn-primary">Choose Plan</button>
                </div>
                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="price">Custom</div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Unlimited locations</li>
                        <li><i class="fas fa-check"></i> Full-featured management</li>
                        <li><i class="fas fa-check"></i> Advanced analytics & AI</li>
                        <li><i class="fas fa-check"></i> 24/7 dedicated support</li>
                    </ul>
                    <button class="pricing-btn btn-secondary">Contact Sales</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h2>Get Started Today</h2>
                    <p>Join hundreds of successful businesses using QuickPOS to streamline their operations.</p>
                    <div class="contact-details">
                        <div class="detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>support@quickpos.com</p>
                            </div>
                        </div>
                        <div class="detail">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Phone</h4>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Address</h4>
                                <p>123 Business St, Tech City, TC 12345</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                        <span class="error" id="nameError"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                        <span class="error" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                        <span class="error" id="messageError"></span>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-cash-register"></i>
                        <span>QuickPOS</span>
                    </div>
                    <p>Making POS management simple and powerful for every business.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 QuickPOS. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
