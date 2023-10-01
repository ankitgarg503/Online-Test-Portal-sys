<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Online Test Series Portal</title>
    <style>
      /* Reset some default styles */
body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
}

/* Basic styling */
body {
    font-family: Arial, sans-serif;
}

.image-slider {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    transition: background-image 1s ease-in-out;
    background-color: #f4f4f4;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
header {
    background-color: white;
    color: #fff;
    padding: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo img {
    height: 50px;
}

.search-box input {
    padding: 8px;
    border: 1px solid khaki;
    border-radius: 20px;
    outline: palegreen;
}

.exam-dropdown {
    position: relative;
}

.dropbtn {
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 8px 16px;
    border-radius: 20px;
    outline: none;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.admin-login, .user-login, .whatsapp {
    margin-left: 20px;
}

.admin-login a, .user-login a, .whatsapp a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.admin-login a:hover, .user-login a:hover, .whatsapp a:hover {
    color: #666;
}

.footer {
    background-color: #000;
    color: #fff;
    text-align: center;
    padding: 20px;
}

#contact-us {
	max-width: 1500px;
	margin: 80px auto;
	padding: 20px;
    background-color: #f9efef;
}

.contact-info {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-top: 40px;
    size: 10px;
}

.contact-item {
	display: flex;
	align-items: center;
}




/* Social media links */
.social-media {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.social-link {
    margin: 0 10px;
    text-decoration: none;
    color: #333;
    font-size: 18px;
    transition: color 0.3s ease;
}

.social-link:hover {
    color: #666;
}

/* Add more styling as needed */

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="OTP.png" alt="Portal Logo">
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
            </div>
            <div class="exam-dropdown">
                <!-- <button class="dropbtn">Exams</button>
                <div class="dropdown-content">
                    <a href="file:///C:/xampp/htdocs/CEE/dash_bored.html">Exam 1</a>
                    <a href="file:///C:/xampp/htdocs/CEE/dash_bored.html">Exam 2</a>
                    <a href="file:///C:/xampp/htdocs/CEE/dash_bored.html">Exam 3</a>
                </div> -->
                <div class="admin-login">
                <a href="http://localhost/CEE/Courses.php">EXAMS</a>
            </div>
            </div>
            <div class="admin-login">
                <a href="http://localhost/cee/adminpanel/admin/">Admin Login</a>
            </div>
            <div class="user-login">
                <a href="http://localhost/cee/">User Login</a>
            </div>
            <div class="whatsapp">
                <a href="http://localhost/mailsender/index.php" target="_blank">New User Sign In</a>
            </div>
        </nav>
    </header>
       
    <!-- <main>
        -- Rest of the page content 
        <div class="image-slider"></div>

        <script src="script.js"></script>
    </main> -->
    <section> 
        <div></div>
         
        <div class="image-slider"></div>
         
        <script src="script.js"></script>
        <div></div>
    </section>
    <section id="contact-us">
        <h2>Contact Us</h2>
        <p>Thank you for your interest in Health Care Center. Please use the information below to contact us.</p>
        <div class="contact-info">
            <div class="contact-item">
                <img src="gmail2 (1).png" alt="Location">
                <p>123 Main Street<br>Anytown, USA 12345</p>
            </div>
            <div class="contact-item">
                <img src="gmail2 (1).png" alt="Phone">
                <p>+91 8708271878</p>
            </div>
            <div class="contact-item">
                <img src="gmail2 (1).png" alt="Email"> 
                <p>info@healthcarecenter.com</p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="social-media">
            <a href="#" class="social-link">Facebook</a>
            <a href="#" class="social-link">Twitter</a>
            <a href="#" class="social-link">Instagram</a>
        </div>
        <div class="other-links">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
        </div>
    </footer>
    <script>
        /* Add your JavaScript code here */
        const imageUrls = [
            'test123.png',
            't2.jpg',
            'test123.png',
            't2.jpg',
            'test123.png'
        ];
        
        const slider = document.querySelector('.image-slider');
        let currentIndex = 0;
        
        function changeBackgroundImage() {
            slider.style.backgroundImage = `url(${imageUrls[currentIndex]})`;
            currentIndex = (currentIndex + 1) % imageUrls.length;
        }
        
        changeBackgroundImage(); // Initial load
        
        setInterval(changeBackgroundImage, 3000); // Change image every 3 seconds
    </script>
</body>
</html>
