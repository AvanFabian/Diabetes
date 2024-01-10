{{-- import --}}

@extends('master-layout.masterlayout')
@section('konten')
   <!-- main -->

   @if (session('userdata'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>DATA USER: {{ session('userdata') }}</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   @else
      <div>
         BELUM REGISTER
      </div>
   @endif
   <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
      <div class="absolute top-0 w-full h-full bg-center bg-cover">

         <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
      </div>
      <div class="container relative mx-auto">
         <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
               <div class="pr-12">
                  <h1 class="text-white font-semibold text-5xl">
                     A healthy body starts with taking care of yourself
                  </h1>
                  <p class="mt-4 text-lg text-gray-300">
                     Preventing diabetes begins with self-care. Nourish your body, stay active, and prioritize your
                     health to ward off diabetes risks. Your well-being matters.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
         style="height: 70px;">
         <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
         </svg>
      </div>
   </div>
   <section class="pb-20 bg-gray-300 -mt-24">
      <div class="container mx-auto px-4">
         <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
               <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                  <div class="px-4 py-5 flex-auto">
                     <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-bag-heart" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1M8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                        </svg>
                     </div>
                     <h6 class="text-xl font-semibold">Lorem</h6>
                     <p class="mt-2 mb-4 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur consectetur sed, at
                        suscipit temporibus nobis sint eos reiciendis debitis molestiae.
                     </p>
                  </div>
               </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
               <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                  <div class="px-4 py-5 flex-auto">
                     <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                        <i class="fas fa-retweet"></i>
                     </div>
                     <h6 class="text-xl font-semibold">Diabetes Check</h6>
                     <p class="mt-2 mb-4 text-gray-600">
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur consectetur sed,
                        at suscipit temporibus nobis sint eos reiciendis debitis molestiae.
                     </p>
                     </p>
                  </div>
               </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
               <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                  <div class="px-4 py-5 flex-auto">
                     <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-code-slash" viewBox="0 0 16 16">
                           <path
                              d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
                        </svg>
                     </div>
                     <h6 class="text-xl font-semibold">Machine Learning Calcualtion</h6>
                     <p class="mt-2 mb-4 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur consectetur sed, at
                        suscipit temporibus nobis sint eos reiciendis debitis molestiae.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row text-center bg-blueGray-200 rounded-3">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 mt-5 mb-5">
                     <div class="container">
                        <a href="/fitur-diabetes" class="btn btn-outline-primary">Check Diabetes</a>
                     </div>
                  </div>
                  <div class="col-md-6 mt-5 mb-5">
                     <div class="container">
                        <a href="#" disabled class="btn btn-secondary" tabindex="-1">Menu Lainnya</a>
                     </div>

                  </div>
               </div>
            </div>
         </div>

         <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
               <div
                  class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                  <i class="fas fa-user-friends text-xl"></i>
               </div>
               <h3 class="text-3xl mb-2 font-semibold leading-normal">
                  Utilizing Machine Learning for Health Assessment
               </h3>
               <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                  Harnessing state-of-the-art Machine Learning, our platform provides accurate health predictions
                  through intelligent algorithms. The analysis of your health data goes beyond typical predictions,
                  offering in-depth insights, especially in gauging the risk of diabetes.
               </p>
               <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                  Our approach represents a groundbreaking shift in understanding individual health. The application
                  of Machine Learning is not merely predictive but marks a significant stride towards a comprehensive
                  comprehension of personal well-being
               </p>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
               <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                  <img alt="..."
                     src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                     class="w-full align-middle rounded-t-lg" />
                  <blockquote class="relative p-8 mb-4">
                     <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                        class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                        <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
                     </svg>
                     <h4 class="text-xl font-bold">
                        what is diabetes?
                     </h4>
                     <p class="text-md font-light mt-2">
                        Debates are formal discussions in which different parties present and argue their arguments
                        regarding an issue, often used in political, educational, and business contexts. This
                        process involves speaking skills, a deep understanding of the issues, and quick responses to
                        opposing arguments
                     </p>
                  </blockquote>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="relative py-20">
      <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
         style="height: 80px;">
         <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
         </svg>
      </div>
      <div class="container mx-auto px-4">
         <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
               <img alt="..." class="max-w-full rounded-lg shadow-lg"
                  src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
               <div class="md:pr-12">
                  <div
                     class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                     <i class="fas fa-rocket text-xl"></i>
                  </div>
                  <h3 class="text-3xl font-semibold">Welcome to The diacare.id </h3>
                  <p class="mt-4 text-lg leading-relaxed text-gray-600">
                     where you can find out the level of diabetes based on the input you provide
                  </p>
                  <ul class="list-none mt-6">
                     <li class="py-2">
                        <div class="flex items-center">
                           <div>
                              <span
                                 class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                    class="fas fa-fingerprint"></i></span>
                           </div>
                           <div>
                              <h4 class="text-gray-600">
                                 Online Diabetes Checks
                              </h4>
                           </div>
                        </div>
                     </li>
                     <li class="py-2">
                        <div class="flex items-center">
                           <div>
                              <span
                                 class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                                    <path
                                       d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
                                 </svg></span>
                           </div>
                           <div>
                              <h4 class="text-gray-600">use of machine learning algorithms</h4>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="pt-20 pb-48">
      <div class="container mx-auto px-4">
         <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
               <h2 class="text-4xl font-semibold">Our Team</h2>
               <p class="text-lg leading-relaxed m-4 text-gray-600">
                  We, the NPC team, have developed a diabetes prediction machine using machine learning algorithms.
                  This advanced technology analyzes health data to provide accurate predictions, contributing to a
                  proactive approach in managing diabetes risk
               </p>
            </div>
         </div>
         <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
               <div class="px-6">
                  <img alt="..." src="assets\img\landingPage\team\Dimas.jpg"
                     class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                  <div class="pt-6 text-center">
                     <h5 class="text-xl font-bold">Dimas Ardiminda Edia Putra</h5>
                     <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                        Hacker
                     </p>
                     <div class="mt-6">
                        <button
                           class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-twitter"></i></button><button
                           class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-facebook-f"></i></button><button
                           class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-dribbble"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
               <div class="px-6">
                  <img alt="..." src="./assets/img/team-2-800x800.jpg"
                     class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                  <div class="pt-6 text-center">
                     <h5 class="text-xl font-bold">Avan Fabian Daniswara</h5>
                     <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                        Hacker
                     </p>
                     <div class="mt-6">
                        <button
                           class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-google"></i></button><button
                           class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-facebook-f"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
               <div class="px-6">
                  <img alt="..." src="assets\img\landingPage\team\Ammar.jpg"
                     class="shadow-lg rounded-full max-w-full mx-auto" />
                  <div class="pt-6 text-center">
                     <h5 class="text-xl font-bold">Ahmad 'Ammar Musyafa'</h5>
                     <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                        Hipster
                     </p>
                     <div class="mt-6">
                        <button
                           class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-google"></i></button><button
                           class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-twitter"></i></button><button
                           class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-instagram"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
               <div class="px-6">
                  <img alt="..." src="./assets/img/team-4-470x470.png"
                     class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                  <div class="pt-6 text-center">
                     <h5 class="text-xl font-bold">Naufal Hafiz Fakhri</h5>
                     <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                        Hustler
                     </p>
                     <div class="mt-6">
                        <button
                           class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-dribbble"></i></button><button
                           class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-google"></i></button><button
                           class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-twitter"></i></button><button
                           class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                           type="button">
                           <i class="fab fa-instagram"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="pb-20 relative block bg-gray-900">
      <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
         style="height: 80px;">
         <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
         </svg>
      </div>
      <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
         <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
               <h2 class="text-4xl font-semibold text-white">
                  Machine learning is a subset of artificial intelligence that enables computers to learn and make
                  predictions or decisions without being explicitly programmed</h2>
               <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                  In the context of health tests, machine learning utilizes algorithms to analyze health data, identify
                  patterns, and predict potential health risks or conditions. This integration enhances the accuracy and
                  efficiency of health assessments, providing more personalized insights based on individual data.
                  Ultimately, machine learning empowers a proactive approach to healthcare by aiding in early detection,
                  prevention, and management of various health issues.
               </p>
            </div>
         </div>
         <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
               <div
                  class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                  <i class="fas fa-medal text-xl"></i>
               </div>
               <h6 class="text-xl mt-5 font-semibold text-white">
                  Personalized Predictions
               </h6>
               <p class="mt-2 mb-4 text-gray-500">
                  Machine learning enables personalized health predictions by analyzing individual health data, offering
                  tailored insights into potential risks and conditions.
               </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
               <div
                  class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                  <i class="fas fa-poll text-xl"></i>
               </div>
               <h5 class="text-xl mt-5 font-semibold text-white">
                  Efficient Analysis
               </h5>
               <p class="mt-2 mb-4 text-gray-500">
                  The technology enhances the efficiency of health assessments by quickly analyzing vast amounts of data,
                  leading to faster and more accurate results in the context of health tests..
               </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
               <div
                  class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                  <i class="fas fa-lightbulb text-xl"></i>
               </div>
               <h5 class="text-xl mt-5 font-semibold text-white">Adaptive Learning</h5>
               <p class="mt-2 mb-4 text-gray-500">
                  Machine learning algorithms continually adapt and improve their predictions over time as they encounter
                  new data, ensuring that health assessments remain up-to-date and reflective of the latest insights.
               </p>
            </div>
         </div>
      </div>
   </section>
   <section class="relative block py-24 lg:pt-0 bg-gray-900">
      <div class="container mx-auto px-4">
         <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
               <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                  <div class="flex-auto p-5 lg:p-10">
                     <h4 class="text-2xl font-semibold">Any Question?</h4>
                     <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                        Send massage to us and we will reply as soon as possible
                     </p>

                     {{-- Full Name --}}
                     <div class="relative w-full mb-3 mt-8">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full
                           Name</label>
                        <input type="text" id="full-name"
                           class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                           placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                     </div>

                     {{-- Phone Number --}}
                     <div class="relative w-full mb-3 mt-8">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="phone-number">Phone
                           Number</label>
                        <input type="text" id="phone-number"
                           class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                           placeholder="Phone Number" style="transition: all 0.15s ease 0s;" />
                     </div>

                     {{-- Message --}}
                     <div class="relative w-full mb-3">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                           for="message">Message</label>
                        <textarea rows="4" cols="80" id="message"
                           class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                           placeholder="Type a message..."></textarea>
                     </div>
                     <div class="text-center mt-6">
                        <button onclick="sendMessage()"
                           class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                           type="button" style="transition: all 0.15s ease 0s;">
                           Send Message
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script>
      function sendMessage() {
         var fullName = document.getElementById('full-name').value;
         var phoneNumber = document.getElementById('phone-number').value;
         var message = document.getElementById('message').value;

         // Check if required fields are not empty
         if (fullName && phoneNumber && message) {
            // Construct the WhatsApp message
            var whatsappMessage = "Hi, this is " + fullName + ". My phone number is " + phoneNumber + ". Message: " +
               message;

            // Encode the message for a URL
            var encodedMessage = encodeURIComponent(whatsappMessage);

            // Open WhatsApp with the pre-filled message
            window.open("https://wa.me/+6283834631310/?text=" + encodedMessage, '_blank');
         } else {
            alert("Please fill in all the required fields.");
         }
      }
   </script>

   <!-- end of main -->
@endsection
