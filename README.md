# Health Symptoms Checker 🩺

A comprehensive web application for checking health symptoms and managing user profiles with disease and condition information.

![Health Symptoms Checker](https://img.shields.io/badge/Version-1.0.0-blue)
![License](https://img.shields.io/badge/License-MIT-green)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue)
![MySQL](https://img.shields.io/badge/Database-MySQL-orange)

## 🌟 Features

- **Interactive Symptom Checker**: Input symptoms and get potential diagnoses
- **Comprehensive Disease Database**: Extensive information about diseases and conditions  
- **User Authentication System**: Secure login and registration
- **User Profile Management**: Create and manage personal health profiles
- **Contact System**: Contact form for user inquiries
- **Dark/Light Mode**: Toggle between themes for better user experience
- **Responsive Design**: Mobile-friendly interface

## 🚀 Demo

Visit the live demo: [Health Symptoms Checker](your-demo-url-here)

## 📸 Screenshots

| Light Mode | Dark Mode |
|------------|-----------|
| ![Light Mode](screenshot-light.png) | ![Dark Mode](screenshot-dark.png) |

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Styling**: Custom CSS with CSS Variables
- **Icons**: Font Awesome, Boxicons

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- **Web Server**: Apache/Nginx with PHP support
- **PHP**: Version 7.4 or higher
- **MySQL**: Version 5.7 or higher
- **Composer** (optional, for dependency management)

## 🔧 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/health-symptoms-checker.git
cd health-symptoms-checker
```

### 2. Database Setup

1. Create a MySQL database:
```sql
CREATE DATABASE users_info;
```

2. Import the database schema:
```sql
USE users_info;

-- Users table
CREATE TABLE users_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Profiles table
CREATE TABLE profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    occupation VARCHAR(255),
    age INT,
    gender VARCHAR(10),
    profile_image VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Submissions table (for contact form)
CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 3. Configure Database Connection

Edit `php/database_login_values.php` with your database credentials:

```php
<?php
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$database = "users_info";
```

### 4. Set Up File Permissions

Ensure the uploads directory has proper permissions:
```bash
mkdir -p php/uploads
chmod 755 php/uploads
```

### 5. Configure Web Server

#### Apache
Place the project in your web server directory (e.g., `htdocs`, `www`, or `public_html`)

#### Nginx
Configure your nginx server block to serve the project directory

### 6. Test Installation

1. Navigate to your domain/localhost in a web browser
2. You should see the Health Symptoms Checker homepage
3. Test the symptom checker functionality
4. Try registering a new user account

## 🎯 Usage

### For End Users

1. **Check Symptoms**: Navigate to the symptom checker and input your symptoms
2. **Create Account**: Register for a new account to access profile features
3. **Manage Profile**: Create and update your health profile
4. **Browse Diseases**: Explore the comprehensive disease database
5. **Contact Support**: Use the contact form for inquiries

### For Developers

1. **Custom Styling**: Modify CSS variables in `assets/css/design.css`
2. **Add Diseases**: Update the disease database in `assets/js/symptoms.js`
3. **Database Modifications**: Update schema and PHP files as needed
4. **Security Settings**: Configure additional security measures in PHP files

## 🏗️ Project Structure

```
health-symptoms-checker/
├── index.html              # Main homepage
├── README.md               # Project documentation
├── assets/                 # Static assets
│   ├── css/               # Stylesheets
│   │   ├── design.css     # Main design system
│   │   ├── home.css       # Homepage styles
│   │   └── ...            # Other CSS files
│   ├── js/                # JavaScript files
│   │   ├── home.js        # Main functionality
│   │   ├── symptoms.js    # Symptom checker logic
│   │   └── ...            # Other JS files
│   └── data/              # Data files
│       ├── data.json      # Application data
│       └── diseases.txt   # Disease information
├── pages/                 # HTML pages
│   ├── home.html          # Home page
│   ├── login.html         # Login page
│   ├── register.html      # Registration page
│   └── ...                # Other pages
├── php/                   # PHP backend scripts
│   ├── database_login_values.php  # DB configuration
│   ├── user_registration.php      # User registration
│   ├── check_login.php           # Login validation
│   └── ...                       # Other PHP scripts
└── docs/                  # Documentation
    └── README.md          # Additional documentation
```

## 🔒 Security Features

- **Password Hashing**: All passwords are securely hashed using PHP's `password_hash()`
- **SQL Injection Protection**: Prepared statements used throughout
- **XSS Prevention**: Output escaping with `htmlspecialchars()`
- **File Upload Security**: Image validation and file type restrictions
- **Input Validation**: Server-side validation for all forms

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guidelines](CONTRIBUTING.md).

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 🐛 Bug Reports

If you find a bug, please create an issue with:
- Clear bug description
- Steps to reproduce
- Expected vs actual behavior
- Screenshots (if applicable)
- Environment details

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **Your Name** - *Initial work* - [@yourusername](https://github.com/yourusername)

## 🙏 Acknowledgments

- Font Awesome for icons
- Boxicons for additional icons
- Google Fonts for typography
- Bootstrap for responsive utilities
- Community contributors

## 📞 Support

For support and questions:
- Email: support@healthsymptoms.com
- Issues: [GitHub Issues](https://github.com/yourusername/health-symptoms-checker/issues)
- Documentation: [Wiki](https://github.com/yourusername/health-symptoms-checker/wiki)

## 🔮 Roadmap

- [ ] Mobile app development
- [ ] AI-powered symptom analysis
- [ ] Integration with medical APIs
- [ ] Multi-language support
- [ ] Enhanced user dashboard
- [ ] Export health reports to PDF

---

⭐ **Star this repository if you found it helpful!**