<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | MindGym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #contact-us {
            background-color: #ecf0f1;
            padding: 50px 0;
        }
        #contact-us h1 {
            font-size: 36px;
            font-weight: bold;
            color: #2c3e50;
        }
        #contact-us h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #3498db;
        }
        #contact-us p {
            font-size: 16px;
            line-height: 1.5;
            color: #7f8c8d;
        }
        .contact-info {
            font-size: 16px;
            color: #7f8c8d;
        }
        .contact-info i {
            color: #3498db;
            margin-right: 10px;
        }
        .form-group input, .form-group textarea {
            border-radius: 5px;
            padding: 15px;
            width: 100%;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<x-app-layout>
    <div class="container my-5" id="contact-us">
        <h1 class="text-center mb-4">Contact Us</h1>

        <div class="row">
            <div class="col-lg-6">
                <h3>Get In Touch</h3>
                <p>We’d love to hear from you! Whether you have questions about our gym, memberships, or need assistance, feel free to reach out. Our team is here to help you on your fitness journey!</p>

                <div class="contact-info">
                    <p><i class="bi bi-telephone-fill"></i><strong>Phone:</strong> 09989786675</p>
                    <p><i class="bi bi-envelope-fill"></i><strong>Email:</strong> <a href="mailto:MindGym@gmail.com">MindGym@gmail.com</a></p>
                    <p><i class="bi bi-geo-alt-fill"></i><strong>Address:</strong> San Mateo Rizal, Philippines</p>
                </div>
            </div>
            

            <div class="col-lg-6">
                <h3>Send Us A Message</h3>
                <form action="/send-message" method="POST">
                    <div class="form-group mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </x-app-layout>
</body>
</html>
