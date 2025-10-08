# Student Registration Form

A modern, responsive student registration form built with PHP and CSS.

## Features

- **Modern Design**: Beautiful gradient background with card-based layout
- **Form Validation**: HTML5 validation for all input fields
- **Secure Processing**: PHP backend with XSS protection using `htmlspecialchars()`
- **Responsive Design**: Works perfectly on desktop and mobile devices
- **Smooth Animations**: Fade-in and slide-in effects for enhanced user experience
- **Student Info Card**: Clean display of submitted information
- **Form Toggle**: Form disappears after submission (bonus feature implemented)

## Form Fields

1. **Full Name** - Text input (required)
2. **Email** - Email input with validation (required)
3. **Age** - Number input with min/max constraints (required)
4. **Course** - Dropdown with 4 options (required):
   - Computer Science
   - Information Technology
   - Business Administration
   - Engineering

## Installation & Usage

### Prerequisites
- PHP 7.0 or higher
- A web server (Apache, Nginx) or PHP's built-in server

### Running Locally

1. Clone the repository:
   ```bash
   git clone https://github.com/ifjames/studentreg-im101.git
   cd studentreg-im101
   ```

2. Start PHP's built-in server:
   ```bash
   php -S localhost:8000
   ```

3. Open your browser and navigate to:
   ```
   http://localhost:8000/index.php
   ```

### Deploying to a Web Server

Simply upload the following files to your web server:
- `index.php`
- `style.css`

## File Structure

```
studentreg-im101/
├── index.php      # Main form and PHP processing logic
├── style.css      # Modern CSS styling
└── README.md      # This file
```

## How It Works

1. User fills out the registration form
2. Upon submission, PHP processes the data using `$_POST`
3. Data is sanitized with `htmlspecialchars()` to prevent XSS attacks
4. The form is hidden and a student info card displays the submitted data
5. User can register another student by clicking the "Register Another Student" button

## Security Features

- **Input Sanitization**: All user inputs are sanitized using `htmlspecialchars()`
- **HTML5 Validation**: Client-side validation for immediate feedback
- **Type Checking**: Email and number inputs use HTML5 type attributes

## Browser Compatibility

Works on all modern browsers:
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Opera (latest)

## Screenshots

See the [Pull Request](https://github.com/ifjames/studentreg-im101/pulls) for screenshots of the form in action.

## License

MIT License - feel free to use this project for learning purposes.