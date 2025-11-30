# QuickPOS Landing Page

A professional, pixel-perfect landing page for a Point of Sale (POS) system built with PHP, HTML, and CSS.

## Project Overview

QuickPOS is a modern SaaS landing page designed to showcase a professional POS system. The project demonstrates proper use of:
- Modern PHP development practices
- Responsive web design
- Form validation and submission
- Professional UI/UX principles
- Agile development workflow (Jira, GitHub, Slack)

## Features

### Navigation & Header
- Sticky navigation bar with logo and menu links
- Quick access "Sign Up" button
- Smooth scroll navigation

### Hero Section
- Compelling headline and sub-headline
- Call-to-action button
- Interactive device mockup with dashboard preview
- Animation effects

### Features Section
- Grid layout showcasing 4 key features:
  - Inventory Management
  - Sales Analytics
  - Easy Integration
  - Mobile Ready
- Hover animations and icons
- Responsive design

### Pricing Section
- Three-tier pricing table (Basic, Pro, Enterprise)
- Feature comparison
- Highlighted "Most Popular" tier
- Action buttons

### Contact Form
- Client-side validation
- Server-side PHP validation
- Email validation
- Form submission with success feedback
- Redirect to thank-you page

### Footer
- Company information
- Social media links
- Quick links
- Copyright information

## Technical Stack

- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Backend**: PHP 7.4+
- **Design**: Mobile-first responsive design
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Inter)

## File Structure

```
quickpos/
├── index.php                 # Main landing page
├── thank-you.html           # Thank you page after form submission
├── README.md                # This file
├── assets/
│   ├── css/
│   │   └── styles.css      # All styling
│   ├── js/
│   │   └── main.js         # Form validation and interactions
│   └── images/             # Image assets (empty, ready for logos)
├── includes/
│   └── contact-handler.php  # Form submission handler
└── logs/
    └── submissions.log      # Form submission log file
```

## Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- Modern web browser

### Local Development

#### Option 1: Using PHP Built-in Server
```bash
cd quickpos
php -S localhost:8000
```
Then open http://localhost:8000 in your browser.

#### Option 2: Using Apache/Nginx
1. Copy the `quickpos` directory to your web root:
   - Apache: `/var/www/html/` (Linux) or `C:\xampp\htdocs\` (Windows)
   - Nginx: `/usr/share/nginx/html/` (Linux)

2. Access via: http://localhost/quickpos

### Configuration

**Log Directory**: The form submissions are logged to `logs/submissions.log`. Ensure the logs directory is writable:
```bash
chmod 755 logs/
```

## How It Works

### Form Submission Flow

1. **Client-side Validation** (JavaScript):
   - Validates empty fields
   - Checks name length (min 2 characters)
   - Validates email format
   - Checks message length (min 10 characters)
   - Shows error messages inline

2. **Server-side Validation** (PHP):
   - Validates all fields again
   - Sanitizes input data
   - Logs submission
   - Returns JSON response

3. **Success Handling**:
   - Shows success message
   - Redirects to thank-you.html after 2 seconds

### API Endpoint

**POST** `/includes/contact-handler.php`

**Request Body**:
```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "message": "I'm interested in learning more about QuickPOS."
}
```

**Response**:
```json
{
  "success": true,
  "message": "Thank you for your message! We will contact you soon."
}
```

## Development Workflow

This project follows professional development practices:

### Git Workflow (GitFlow)
- Main branch: Production-ready code
- Develop branch: Integration branch
- Feature branches: `feature/section-name`
- Bug fix branches: `bugfix/issue-name`

### Jira Integration
- All work tracked in Jira tickets
- Commit messages include ticket numbers: `[POS-XXX] Description`
- PR titles linked to tickets

### Slack Communication
- Daily standups in designated channel
- Jira and GitHub notifications integrated
- Team collaboration and updates

## Browser Support

- Chrome/Edge: Latest 2 versions
- Firefox: Latest 2 versions
- Safari: Latest 2 versions
- Mobile browsers: iOS Safari 12+, Chrome for Android

## Performance Optimization

- CSS critical path optimization
- Lazy loading ready
- Minimal JavaScript dependencies
- Optimized animations and transitions

## Accessibility

- Semantic HTML structure
- ARIA labels where needed
- Color contrast compliance
- Keyboard navigation support
- Screen reader friendly

## Security

- Input sanitization in PHP
- XSS prevention (htmlspecialchars)
- Email validation
- CSRF-safe form handling

## Responsive Design

Breakpoints:
- **Mobile**: < 480px
- **Tablet**: 480px - 768px
- **Desktop**: > 768px

## Customization

### Colors
Edit CSS variables in `assets/css/styles.css`:
```css
:root {
    --primary-color: #2563eb;
    --primary-dark: #1e40af;
    --text-dark: #1f2937;
    /* ... more variables */
}
```

### Content
- Update copy in `index.php`
- Modify feature descriptions
- Adjust pricing tiers
- Update social media links

### Fonts
Edit Google Fonts import in `index.php` and `assets/css/styles.css`

## Troubleshooting

### Form not submitting
- Check PHP error logs
- Verify `logs/` directory exists and is writable
- Check browser console for JavaScript errors

### Styling not loading
- Clear browser cache (Ctrl+Shift+R)
- Check that CSS file path is correct
- Verify web server is serving static files

### Thank you page not loading
- Ensure `thank-you.html` is in the root directory
- Check that redirects are allowed in your environment

## License

This project is created for educational purposes as part of a software engineering sprint.

## Support

For issues or questions, please create a ticket in Jira or contact the development team on Slack.

## Version History

- **v1.0.0** (2025-11-30): Initial release
  - All 6 epics implemented
  - Full responsive design
  - Contact form with PHP backend
  - Professional UI/UX

---

**Built by**: Product Owner + Team
**Last Updated**: 2025-11-30
