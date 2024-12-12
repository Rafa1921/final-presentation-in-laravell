<!DOCTYPE html>
<html>

<head>
    <title>Join Us - MindGym</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            /* Light grey background for a gym-like feel */
        }

        header {
            background: #2c3e50;
            /* Darker blue-grey for gym aesthetics */
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #34495e 1px solid;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background-color: #2980b9;
            /* Blue color for buttons */
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #1f618d;
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

        .content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-right: 20px;
            flex: 1;
        }

        .content p {
            flex: 2;
            max-width: 600px;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <header>
            <h1 class="mb-4">Join the Family Now!</h1>
        </header>

        <div class="container">
            <div class="content">
                <img src="https://www.goodmorningquote.com/wp-content/uploads/2015/12/one-hour-workout-gym-quotes.jpg"
                    alt="Gym Membership">
                <p>At MindGym, we're excited to offer a variety of membership options to suit your fitness needs and
                    goals. Whether you're seeking access to our top-of-the-line equipment, a diverse range of fitness
                    classes, or one-on-one sessions with our expert personal trainers, we have a plan that fits your
                    lifestyle. Our flexible membership packages are designed to accommodate all levels of commitment and
                    offer great value for your investment in health and wellness. Joining MindGym means becoming part of
                    a supportive community dedicated to helping you achieve your fitness aspirations. With our
                    state-of-the-art facilities, motivating environment, and friendly staff, you'll have everything you
                    need to start transforming your health. Don’t miss out on the opportunity to be part of something
                    special—join us today and take the first step towards a healthier, more active you.</p>
            </div>

        </div>
    </x-app-layout>
</body>

</html>
