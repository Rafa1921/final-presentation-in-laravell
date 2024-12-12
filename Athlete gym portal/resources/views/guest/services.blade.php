<!DOCTYPE html>
<html>

<head>
    <title>Our Services - MindGym</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #e0e0e0;
            /* Light grey background for a gym-like feel */
        }

        header {
            background: #2980b9;
            /* Gym-inspired blue color */
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #1f618d 1px solid;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background-color: #3498db;
            /* Blue color for buttons */
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: #fff;
            /* White background for content */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .service {
            flex: 1;
            margin: 10px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .service img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .service h2 {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <header>
            <h1 class="mb-4">Our Services</h1>
        </header>

        <div class="container">
            <div class="services">
                <div class="service">
                    <img src="https://www.nuffieldhealth.com/content/nuffieldhealth/en/gyms/services/personal-training/reading/_jcr_content/root/teaser.coreimg.jpeg/1711389346913/pt-hub-hero-21.jpeg"
                        alt="Personal Training">
                    <h2>Personal Training</h2>
                    <p>Our personal trainers are here to help you achieve your fitness goals with customized workout
                        plans and one-on-one attention. Whether you're new to fitness or looking to take your training
                        to the next level, our trainers provide expert guidance and motivation.</p>
                </div>

                <div class="service">
                    <img src="https://indigofitness.com/wp-content/uploads/2024/04/THIRD_SPACE_WIMBLEDON_057-1-scaled.jpg.webp"
                        alt="Group Classes">
                    <h2>Group Classes</h2>
                    <p>Join our dynamic group classes to stay motivated and have fun while working out. From
                        high-intensity interval training (HIIT) to yoga and spinning, our classes cater to all fitness
                        levels and preferences.</p>
                </div>

                <div class="service">
                    <img src="https://sowahealthandwellness.com/wp-content/uploads/2024/01/SoWa-Gym-homepage.jpg"
                        alt="Wellness Programs">
                    <h2>Wellness Programs</h2>
                    <p>Explore our specialized wellness programs designed to support your overall health. We offer
                        programs that include nutrition counseling, stress management, and holistic approaches to
                        well-being.</p>
                </div>

                <div class="service">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRcKNl9Kt5iHnmqn4zW1mYC5366Ie-LthbZw&s"
                        alt="State-of-the-Art Equipment">
                    <h2>State-of-the-Art Equipment</h2>
                    <p>Experience our cutting-edge fitness equipment that ensures you get the most out of your workouts.
                        From cardio machines to strength training equipment, our gym is equipped to meet all your
                        fitness needs.</p>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
