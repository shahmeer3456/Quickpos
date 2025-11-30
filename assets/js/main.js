// Form validation and submission
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset errors
            clearErrors();
            
            // Get form values
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();
            
            let isValid = true;
            
            // Validate name
            if (!name) {
                showError('name', 'Name is required');
                isValid = false;
            } else if (name.length < 2) {
                showError('name', 'Name must be at least 2 characters');
                isValid = false;
            }
            
            // Validate email
            if (!email) {
                showError('email', 'Email is required');
                isValid = false;
            } else if (!isValidEmail(email)) {
                showError('email', 'Please enter a valid email');
                isValid = false;
            }
            
            // Validate message
            if (!message) {
                showError('message', 'Message is required');
                isValid = false;
            } else if (message.length < 10) {
                showError('message', 'Message must be at least 10 characters');
                isValid = false;
            }
            
            // If valid, submit the form
            if (isValid) {
                submitForm(name, email, message);
            }
        });
    }
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showError(fieldId, message) {
    const field = document.getElementById(fieldId);
    const errorElement = document.getElementById(fieldId + 'Error');
    const formGroup = field.closest('.form-group');
    
    formGroup.classList.add('error-state');
    errorElement.textContent = message;
}

function clearErrors() {
    document.querySelectorAll('.form-group').forEach(group => {
        group.classList.remove('error-state');
    });
    document.querySelectorAll('.error').forEach(error => {
        error.textContent = '';
    });
}

function submitForm(name, email, message) {
    const formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('message', message);
    
    const submitBtn = document.querySelector('.submit-btn');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    
    fetch('includes/contact-handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            showSuccessMessage();
            // Redirect after 2 seconds
            setTimeout(() => {
                window.location.href = 'thank-you.html';
            }, 2000);
        } else {
            alert('Error: ' + (data.message || 'An error occurred'));
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    });
}

function showSuccessMessage() {
    const form = document.getElementById('contactForm');
    const successMsg = document.createElement('div');
    successMsg.style.cssText = `
        padding: 1rem;
        background: #d1fae5;
        color: #065f46;
        border-radius: 8px;
        border: 2px solid #6ee7b7;
        margin-bottom: 1rem;
        text-align: center;
        font-weight: 500;
    `;
    successMsg.textContent = '✓ Message sent successfully! Redirecting...';
    form.insertBefore(successMsg, form.firstChild);
}

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// Navbar shadow on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 10) {
        navbar.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
    } else {
        navbar.style.boxShadow = '0 2px 4px rgba(0,0,0,0.05)';
    }
});
