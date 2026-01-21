<?php session_start();?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carko237 - Clothes Delivery</title>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #009933 0%, #CE1126 50%, #FFCC00 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }



        .header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            font-size: 56px;
            font-weight: 900;
            color: white;
            margin-bottom: 10px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
            letter-spacing: 2px;
        }

        .header-subtitle {
            color: white;
            font-size: 24px;
            font-weight: 300;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .flag-emoji {
            font-size: 48px;
            margin-bottom: 10px;
            display: inline-block;
            animation: wave 2s ease-in-out infinite;
        }

        @keyframes wave {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(-10deg); }
            75% { transform: rotate(10deg); }
        }

        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .contact-form-section {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: slideInLeft 0.8s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .contact-info-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            animation: slideInRight 0.8s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .section-title {
            font-size: 32px;
            font-weight: 900;
            color: #009933;
            margin-bottom: 10px;
        }

        .section-subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 16px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }

        label i {
            margin-right: 8px;
            color: #009933;
        }

        input, textarea, select {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f8f8f8;
            font-family: inherit;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #009933;
            background: white;
            box-shadow: 0 0 0 3px rgba(0, 153, 51, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #009933 0%, #006622 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 153, 51, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 153, 51, 0.4);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        .info-card {
            background: white;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .info-card-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #009933 0%, #006622 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(0, 153, 51, 0.3);
        }

        .info-card-title {
            font-size: 22px;
            font-weight: 700;
            color: #333;
        }

        .info-card-content {
            color: #666;
            line-height: 1.8;
            font-size: 15px;
        }

        .info-card-content a {
            color: #009933;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .info-card-content a:hover {
            color: #CE1126;
            text-decoration: underline;
        }

        .map-section {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-out;
            animation-delay: 0.3s;
            animation-fill-mode: both;
        }

        .map-placeholder {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #f0f0f0 0%, #e0e0e0 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 20px;
            color: #999;
            font-size: 18px;
            position: relative;
            overflow: hidden;
        }

        .map-placeholder::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                repeating-linear-gradient(0deg, transparent, transparent 20px, rgba(0,153,51,.05) 20px, rgba(0,153,51,.05) 40px),
                repeating-linear-gradient(90deg, transparent, transparent 20px, rgba(206,17,38,.05) 20px, rgba(206,17,38,.05) 40px);
        }

        .map-placeholder i {
            font-size: 64px;
            color: #009933;
            position: relative;
            z-index: 1;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-button {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 22px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .social-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .social-facebook { background: linear-gradient(135deg, #1877F2 0%, #0c5dbf 100%); }
        .social-twitter { background: linear-gradient(135deg, #1DA1F2 0%, #0d8bd9 100%); }
        .social-instagram { background: linear-gradient(135deg, #E4405F 0%, #c13584 100%); }
        .social-whatsapp { background: linear-gradient(135deg, #25D366 0%, #1ebe57 100%); }

        .business-hours {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid #f0f0f0;
        }

        .hours-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            color: #666;
        }

        .hours-day {
            font-weight: 600;
        }

        .hours-time {
            color: #009933;
        }

        @media (max-width: 968px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
            }

            .contact-form-section, .map-section {
                padding: 35px 25px;
            }

            .logo {
                font-size: 42px;
            }

            .header-subtitle {
                font-size: 18px;
            }

            .info-card {
                padding: 25px;
            }
        }

        #products-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin: 20px;
        }

        .product-card {
        width: 200px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        text-align: center;
        padding: 15px;
        transition: transform 0.3s;
        }

        .product-card:hover {
        transform: translateY(-5px);
        }

        .product-card img {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
        height: 200px;
        }

        .product-card .price {
        font-weight: bold;
        margin: 10px 0;
        }

        .product-card button {
        padding: 10px 15px;
        border: none;
        background: #009933;
        color: white;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
        }

        .product-card button:hover {
        background: #006622;
        }

        .notification {
            position: fixed;
            top: 55%;
            right: 15.6%;
            transform: translate(-50%, -50%);
            background: linear-gradient(to right, #007a33 10.3%, #ce1126 55.6%, #fcd116 100%);
            color: #fff;
            padding: 120px 150px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            z-index: 1000; 
            font-family: Arial, sans-serif;
            font-size: 24px;
            font-weight: 400;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }
        @keyframes fadein {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframe fadeout {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
   <?php if (isset($_SESSION['user_id']) && isset($_SESSION['firstName'])): ?>
   <div class="notification" id="notification">Welcome <?php echo $_SESSION['firstName']; ?>!</div>
   <script>
    setTimeout(function() {
        document.getElementById('notification').style.display = 'none';
    }, 3000); //3000 miliseconds = 3 seconds
   </script>
    <?php endif ?>
    <header>

        <h1>Carko<span style="color: green;">2</span><span style="color: red;">3</span><span style="color: yellow;">7</span></h1>
        <input type="text" class="search-bar" placeholder="Search clothes...">
        <nav>
            <a href="#home">Home</a>
            <a href="#products">Products</a>
            <a href="#contact">Contact</a>
            <a href="#cart">Cart</a>
        </nav>
    </header>

<div class="carousel-container">
        <div class="carousel-slide slide-1 active">
            <div class="pattern-overlay"></div>
            <div class="star"></div>
            <div class="badge">CM Proudly Cameroonian</div>
            <div class="slide-content">
                <div class="logo">CARKO237</div>
                <div class="tagline">Your Premier Marketplace in Cameroon</div>
                <a href="#" class="cta-button">Shop Now</a>
            </div>
        </div>

        <div class="carousel-slide slide-2">
            <div class="pattern-overlay"></div>
            <div class="badge">New Arrivals</div>
            <div class="slide-content">
                <div class="logo">CARKO237</div>
                <div class="tagline">Discover Quality Products at Your Fingertips</div>
                <a href="#" class="cta-button">Explore Collection</a>
            </div>
        </div>

        <div class="carousel-slide slide-3">
            <div class="pattern-overlay"></div>
            <div class="star"></div>
            <div class="badge">Fast Delivery</div>
            <div class="slide-content">
                <div class="logo">CARKO237</div>
                <div class="tagline">From Yaoundé to Douala and Beyond</div>
                <a href="#" class="cta-button">Get Started</a>
            </div>
        </div>

        <button class="carousel-arrow arrow-left" onclick="prevSlide()">‹</button>
        <button class="carousel-arrow arrow-right" onclick="nextSlide()">›</button>

        <div class="carousel-dots">
            <div class="dot active" onclick="goToSlide(0)"></div>
            <div class="dot" onclick="goToSlide(1)"></div>
            <div class="dot" onclick="goToSlide(2)"></div>
        </div>
    </div>

    <section class="products" id="products">
        <div class="header">
            <div class="flag-emoji">🇨🇲</div>
            <div class="logo">Carko<span style="color: green;">2</span><span style="color: red;">3</span><span style="color: yellow;">7</span> Products </div>
        </div>
        <div class="product-card">
            <img src="img/1.jpeg" alt="T-Shirt">
            <h3>Classic T-Shirt</h3>
            <p>Premium quality cotton</p>
            <div class="price">XAF 12.000</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Jeans">
            <h3>Blue Jeans</h3>
            <p>Comfortable fit</p>
            <div class="price">XAF 52.900</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Dress">
            <h3>Summer Dress</h3>
            <p>Lightweight fabric</p>
            <div class="price">XAF 30.400</div>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="img/1.jpeg" alt="T-Shirt">
            <h3>Classic T-Shirt</h3>
            <p>Premium quality cotton</p>
            <div class="price">XAF 12.000</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Jeans">
            <h3>Blue Jeans</h3>
            <p>Comfortable fit</p>
            <div class="price">XAF 52.900</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Dress">
            <h3>Summer Dress</h3>
            <p>Lightweight fabric</p>
            <div class="price">XAF 30.400</div>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="img/1.jpeg" alt="T-Shirt">
            <h3>Classic T-Shirt</h3>
            <p>Premium quality cotton</p>
            <div class="price">XAF 12.000</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Jeans">
            <h3>Blue Jeans</h3>
            <p>Comfortable fit</p>
            <div class="price">XAF 52.900</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Dress">
            <h3>Summer Dress</h3>
            <p>Lightweight fabric</p>
            <div class="price">XAF 30.400</div>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="img/1.jpeg" alt="T-Shirt">
            <h3>Classic T-Shirt</h3>
            <p>Premium quality cotton</p>
            <div class="price">XAF 12.000</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Jeans">
            <h3>Blue Jeans</h3>
            <p>Comfortable fit</p>
            <div class="price">XAF 52.900</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Dress">
            <h3>Summer Dress</h3>
            <p>Lightweight fabric</p>
            <div class="price">XAF 30.400</div>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="img/1.jpeg" alt="T-Shirt">
            <h3>Classic T-Shirt</h3>
            <p>Premium quality cotton</p>
            <div class="price">XAF 12.000</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Jeans">
            <h3>Blue Jeans</h3>
            <p>Comfortable fit</p>
            <div class="price">XAF 52.900</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product-card">
            <img src="img/2.jpeg" alt="Dress">
            <h3>Summer Dress</h3>
            <p>Lightweight fabric</p>
            <div class="price">XAF 30.400</div>
            <button>Add to Cart</button>
        </div>
        


    </section>


    <div class="container" id="contact">
        <div class="header">
            <div class="flag-emoji">🇨🇲</div>
           <div class="logo">Carko<span style="color: green;">2</span><span style="color: red;">3</span><span style="color: yellow;">7</span> Contact </div>
            <div class="header-subtitle">Get In Touch With Us</div>
        </div>

        <div class="contact-wrapper">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <h2 class="section-title">Send Us A Message</h2>
                <p class="section-subtitle">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>

                <div class="form-group">
                    <label><i class="fas fa-user"></i>Full Name</label>
                    <input type="text" placeholder="Enter your full name" id="fullName">
                </div>

                <div class="form-group">
                    <label><i class="fas fa-envelope"></i>Email Address</label>
                    <input type="email" placeholder="your.email@example.com" id="email">
                </div>

                <div class="form-group">
                    <label><i class="fas fa-phone"></i>Phone Number</label>
                    <input type="tel" placeholder="+237 6XX XXX XXX" id="phone">
                </div>

                <div class="form-group">
                    <label><i class="fas fa-list"></i>Subject</label>
                    <select id="subject">
                        <option value="">Select a subject</option>
                        <option value="general">General Inquiry</option>
                        <option value="order">Order Support</option>
                        <option value="product">Product Question</option>
                        <option value="partnership">Partnership Opportunity</option>
                        <option value="complaint">Complaint</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label><i class="fas fa-message"></i>Your Message</label>
                    <textarea placeholder="Tell us how we can help you..." id="message"></textarea>
                </div>

                <button class="submit-button" onclick="handleSubmit()">
                    <i class="fas fa-paper-plane"></i>
                    Send Message
                </button>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-section">
                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-card-title">Call Us</div>
                    </div>
                    <div class="info-card-content">
                        <p><strong>Customer Service:</strong></p>
                        <p><a href="tel:+237600000000">+237 671 598 755</a></p>
                        <p><a href="tel:+237670000000">+237 688 104 091</a></p>
                        <p style="margin-top: 10px; font-size: 13px; color: #999;">Available 24/7 for your convenience</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-card-title">Email Us</div>
                    </div>
                    <div class="info-card-content">
                        <p><strong>General Inquiries:</strong></p>
                        <p><a href="mailto:info@carko237.com">info@carko237.com</a></p>
                        <p style="margin-top: 10px;"><strong>Support:</strong></p>
                        <p><a href="mailto:support@carko237.com">support@carko237.com</a></p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="info-card-title">Visit Us</div>
                    </div>
                    <div class="info-card-content">
                        <p><strong>Main Office:</strong></p>
                        <p>Avenue Kennedy, Yaoundé<br>Centre Region, Cameroon</p>
                        <p style="margin-top: 10px;"><strong>Douala Office:</strong></p>
                        <p>Boulevard de la Liberté, Douala<br>Littoral Region, Cameroon</p>
                        
                        <div class="business-hours">
                            <div class="hours-row">
                                <span class="hours-day">Monday - Friday</span>
                                <span class="hours-time">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="hours-row">
                                <span class="hours-day">Saturday</span>
                                <span class="hours-time">9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="hours-row">
                                <span class="hours-day">Sunday</span>
                                <span class="hours-time">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">
                            <i class="fas fa-share-nodes"></i>
                        </div>
                        <div class="info-card-title">Follow Us</div>
                    </div>
                    <div class="info-card-content">
                        <p>Stay connected with us on social media for updates, deals, and more!</p>
                        <div class="social-links">
                            <a href="#" class="social-button social-facebook" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-button social-twitter" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-button social-instagram" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-button social-whatsapp" title="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section">
            <h2 class="section-title">Find Us On The Map</h2>
            <p class="section-subtitle">Visit our offices in Yaoundé and Douala. We're here to serve you!</p>
            <div class="map-placeholder">
                <i class="fas fa-map-location-dot"></i>
                <p>Interactive map would be embedded here</p>
                <p style="font-size: 14px; color: #bbb;">Yaoundé & Douala Locations</p>
            </div>
        </div>
    </div>

    <script>
        function handleSubmit() {
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            if (!fullName || !email || !phone || !subject || !message) {
                alert('Please fill in all fields before submitting.');
                return;
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            alert('Thank you for contacting Carko237!\n\nWe have received your message and will get back to you as soon as possible.\n\nName: ' + fullName + '\nSubject: ' + subject);

            document.getElementById('fullName').value = '';
            document.getElementById('email').value = '';
            document.getElementById('phone').value = '';
            document.getElementById('subject').value = '';
            document.getElementById('message').value = '';
        }
    </script>

    
    
    <footer>
        <h3>Carko237 - Your Fashion Destination</h3>
        <p>Email: support@Carko237.com | Phone: +237 688 104 091</p>
        <p>&copy; 2026 Carko237. All rights reserved.</p>
    </footer>


<script src="script.js">
function handleSignup() {
    const data = {
        firstName: document.getElementById("firstName").value,
        lastName: document.getElementById("lastName").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        city: document.getElementById("city").value,
        gender: document.getElementById("gender").value,
        password: document.getElementById("password").value
    };

    fetch("signup.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(res => alert(res.message));
}

</script>
</body>

</html>
