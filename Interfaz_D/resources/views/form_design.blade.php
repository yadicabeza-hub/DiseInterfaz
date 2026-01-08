<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usable Form Design</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            max-width: 600px;
            width: 100%;
        }
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
        }
        .form-control {
            padding: 12px 16px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
            transition: all 0.2s ease;
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.1);
        }
        .form-control:invalid:not(:placeholder-shown) {
            border-color: #dc3545;
        }
        .invalid-feedback {
            font-size: 0.85rem;
            font-weight: 500;
        }
        .submit-btn {
            padding: 14px;
            font-weight: 700;
            border-radius: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
        }
        .form-header {
            margin-bottom: 30px;
        }
        .form-header h2 {
            font-weight: 700;
            margin-bottom: 10px;
        }
        .required-star {
            color: #dc3545;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <div class="form-header text-center text-md-start">
            <a href="{{ route('landing') }}" class="btn btn-link p-0 mb-3 text-decoration-none"><i class="fas fa-arrow-left me-2"></i>Back to Landing</a>
            <h2>Get in Touch</h2>
            <p class="text-muted">Feel free to drop us a message. We usually respond within 24 hours.</p>
        </div>

        <form action="#" class="needs-validation" novalidate>
            <div class="row g-3">
                <!-- Name -->
                <div class="col-md-12">
                    <label for="fullName" class="form-label">Full Name <span class="required-star">*</span></label>
                    <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
                    <div class="invalid-feedback">
                        Please enter your full name.
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label for="emailAddr" class="form-label">Email Address <span class="required-star">*</span></label>
                    <input type="email" class="form-control" id="emailAddr" placeholder="john@example.com" required>
                    <div class="invalid-feedback">
                        Please provide a valid email address.
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <label for="phoneNum" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneNum" placeholder="+1 (555) 000-0000" pattern="[0-9+() -]*">
                    <div class="invalid-feedback">
                        Please enter a valid phone number.
                    </div>
                </div>

                <!-- Message -->
                <div class="col-md-12">
                    <label for="message" class="form-label">Message <span class="required-star">*</span></label>
                    <textarea class="form-control" id="message" rows="4" placeholder="How can we help you?" required></textarea>
                    <div class="invalid-feedback">
                        Please write something for us.
                    </div>
                </div>

                <!-- Checkbox -->
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="privacyPolicy" required>
                        <label class="form-check-label text-muted" for="privacyPolicy">
                            I agree to the <a href="#" class="text-decoration-none">Privacy Policy</a> and terms of service.
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-md-12 d-grid">
                    <button type="submit" class="btn btn-primary submit-btn mt-3">Send Message</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    
    <!-- Bootstrap JS for Validation UI -->
    <script>
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>
</html>
