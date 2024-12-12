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
<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\gbrls\Documents\Gym Portal Dec 2024\Athlete gym portal\resources\views/guest/contacts.blade.php ENDPATH**/ ?>