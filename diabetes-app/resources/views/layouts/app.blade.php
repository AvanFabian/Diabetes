<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diacare.id</title>
</head>
<body>
    @yield('content')

    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: env('FIREBASE_API_KEY'),
          authDomain: env('FIREBASE_AUTH_DOMAIN'),
          projectId: env('FIREBASE_PROJECT_ID'),
          storageBucket: env('FIREBASE_STORAGE_BUCKET'),
          messagingSenderId: env('FIREBASE_MESSAGING_SENDER_ID'),
          appId: env('FIREBASE_APP_ID'),
          measurementId: env('FIREBASE_MEASUREMENT_ID')
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
</body>
</html>