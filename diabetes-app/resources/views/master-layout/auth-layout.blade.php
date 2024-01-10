<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title> @yield("title") | diacare.id</title>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="/">diacare.id
                    Kit</a><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#"><i
                                class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>
                            Docs</a>
                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Share</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Tweet</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Star</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield("konten")
    <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
        <div class="container mx-auto px-4">
            <hr class="mb-6 border-b-1 border-gray-700" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4">
                    <div class="text-sm text-white font-semibold py-1">
                        diacare.id
                    </div>
                </div>
                <div class="w-full md:w-8/12 px-4">
                    <ul class="flex flex-wrap list-none md:justify-end justify-center">
                        <li>
                            <a href="#"
                            class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">About
                            Us</a>
                        </li>
                        <li>
                            <a href="#"
                            class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">contact
                            us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>
<script type="module">
    // Import the functions you need from the SDKs you need
	import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
				import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-analytics.js";
				// TODO: Add SDKs for Firebase products that you want to use
				// https://firebase.google.com/docs/web/setup#available-libraries

				// Your web app's Firebase configuration
				// For Firebase JS SDK v7.20.0 and later, measurementId is optional
				const firebaseConfig = {
						apiKey: process.env.FIREBASE_API_KEY,
						authDomain: process.env.FIREBASE_AUTH_DOMAIN,
						projectId: process.env.FIREBASE_PROJECT_ID,
						storageBucket: process.env.FIREBASE_STORAGE_BUCKET,
						messagingSenderId: process.env.FIREBASE_MESSAGING_SENDER_ID,
						appId: process.env.FIREBASE_APP_ID,
						measurementId: process.env.FIREBASE_MEASUREMENT_ID,
				};

				// Initialize Firebase
				const app = initializeApp(firebaseConfig);
				const analytics = getAnalytics(app);
		</script>