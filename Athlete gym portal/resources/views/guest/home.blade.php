<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindGym - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .modal {
            display: none; /* Hide modal by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal.active {
            display: flex; /* Show modal when active */
        }

        .modal-content {
            background: white;
            padding: 20px;
            max-width: 600px;
            width: 90%;
            text-align: center;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 25px;
            cursor: pointer;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        .social-links a {
            margin: 0 10px;
            font-size: 24px;
            color: #000;
            text-decoration: none;
        }

        .social-links a:hover {
            color: #007bff;
        }

        .cart {
            margin-top: 30px;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }

        /* Ensure the modal image fits properly */
        #modalImage {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
<x-app-layout>

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/dashboard')}}">MindGym</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="join">Contact</a>
                    </li>
                    <li class="nav-item">
                        Profile Link
                        <a class="nav-link" href="{{ url('/admin/profile') }}" id="profileLink">
                            <i class="bi bi-person-circle"></i> Profile
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <!-- Main content -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Welcome to MindGym</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 (Personal Training) -->
            <div class="col">
                <div class="card h-100" data-title="Personal Training" data-info="Achieve your fitness goals with our Personal Training services, where every session is customized to fit your unique needs. Whether you're aiming to lose weight, build muscle, improve endurance, or rehabilitate from an injury, our expert trainers are here to guide you every step of the way. At MindGym, we focus on creating personalized training plans that not only challenge you but also ensure you work at a pace that’s sustainable and effective for you. With one-on-one attention, regular assessments, and ongoing support, our personal training services are designed to help you maximize your results and make lasting changes. Join a supportive community that’s committed to your success – no matter where you start, we’ll help you reach your peak potential." data-img="https://th.bing.com/th/id/OIP.iZIGRE08VxW_WODMxN3eMQHaE8?rs=1&pid=ImgDetMaing">
                    <img src="https://th.bing.com/th/id/OIP.iZIGRE08VxW_WODMxN3eMQHaE8?rs=1&pid=ImgDetMain" class="card-img-top product-image" alt="Personal Training">
                    <div class="card-body">
                        <h5 class="card-title">Personal Training</h5>
                        <p class="card-text">Achieve your goals with our expert trainers.</p>
                    </div>
                </div>
            </div>
            <!-- Supplement Store (Whey Protein) -->
            <div class="col">
                <div class="card h-100" data-product-id="1" data-product-name="Whey Protein" data-product-price="1000" data-product-img="https://th.bing.com/th/id/OIP._sNhx72FtoXDq573l37gEgAAAA?rs=1&pid=ImgDetMain" data-description="Whey Protein is a high-quality protein derived from milk that is rich in essential amino acids, making it a complete source of protein. Our Whey Protein supplement (1kg pack) is designed to support muscle growth, recovery, and overall fitness goals. Packed with 25g of protein per serving, it helps to repair muscle tissue post-workout, boost protein synthesis, and prevent muscle breakdown. Whether you're an athlete, bodybuilder, or just someone looking to enhance your daily protein intake, this whey protein offers an easy and delicious way to get the protein your body needs. It is also low in fat and carbs, making it an ideal choice for those focused on lean muscle gain. No artificial colors, flavors, or sweeteners – just pure, high-quality protein." data-nutrition="Protein: 24g | Carbs: 3g | Fats: 2g | Calories: 120">
                    <img src="https://th.bing.com/th/id/OIP._sNhx72FtoXDq573l37gEgAAAA?rs=1&pid=ImgDetMain" class="card-img-top product-image" alt="Whey Protein">
                    <div class="card-body">
                        <h5 class="card-title">Whey Protein</h5>
                        <p class="card-text">High-quality whey protein to boost your workout recovery. 1kg pack.</p>
                    </div>
                </div>
            </div>
            <!-- Supplement (Creatine) -->
            <div class="col">
                <div class="card h-100" data-product-id="2" data-product-name="Creatine" data-product-price="500" data-product-img="https://i.pinimg.com/736x/34/e4/ff/34e4ff010016274c3fa66536d5039584.jpg" data-description="Creatine is a naturally occurring compound in the body that plays a crucial role in energy production, particularly during short bursts of high-intensity activities like weightlifting, sprinting, and other explosive exercises. Our Creatine supplement, in a 300g container, is made with pure, high-quality creatine monohydrate to help improve strength, enhance performance, and support muscle recovery. Each serving provides 5g of creatine to fuel your muscles, making it ideal for athletes, bodybuilders, and fitness enthusiasts looking to maximize their workout performance. This product is free of added sugars, fillers, and artificial ingredients, making it a clean and effective addition to your supplement routine." data-nutrition="Creatine: 5g per serving | No added sugars or fillers.">
                    <img src="https://i.pinimg.com/736x/34/e4/ff/34e4ff010016274c3fa66536d5039584.jpg" class="card-img-top product-image" alt="Creatine">
                    <div class="card-body">
                        <h5 class="card-title">Creatine</h5>
                        <p class="card-text">Boosts strength and energy during workouts. 300g container.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for product details -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3 id="modalTitle"></h3>
            <img id="modalImage" src="" alt="Product Image">
            <p id="modalDescription"></p>
            <p><strong>Nutrition Facts:</strong></p>
            <p id="modalNutrition"></p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 MindGym. All rights reserved.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>
    </footer>

    <script>
        // Get the modal and close button
        const modal = document.getElementById("productModal");
        const closeBtn = document.querySelector(".close-btn");

        // Add event listeners to card images
        const productCards = document.querySelectorAll(".card");

        productCards.forEach(card => {
            card.addEventListener("click", function() {
                const productTitle = this.getAttribute("data-title");
                const productImage = this.getAttribute("data-img");
                const productDescription = this.getAttribute("data-info");
                const nutritionFacts = this.getAttribute("data-nutrition");

                // Set modal content
                document.getElementById("modalTitle").innerText = productTitle;
                document.getElementById("modalImage").src = productImage;
                document.getElementById("modalDescription").innerText = productDescription;
                document.getElementById("modalNutrition").innerText = nutritionFacts;

                // Show the modal
                modal.classList.add("active");
            });
        });

        // Close the modal
        closeBtn.addEventListener("click", function() {
            modal.classList.remove("active");
        });

        // Optional: Close the modal when clicked outside
        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.classList.remove("active");
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </x-app-layout>
    
</body>

</html>
