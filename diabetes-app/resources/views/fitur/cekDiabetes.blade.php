@extends('master-layout.masterlayout')
@section('title', 'Cek Diabetes')
@section('aktip_diabetes', 'active')
@section('konten')
   {{-- start konten --}}
   <div class="container mt-5">
      <div class="mt-2 container card">
         <div class="container">
            <h4 class="text-center mt-3">Latar Belakang Prediksi Resiko Diabetes</h4>
            <div class="row align-items-start">
                <div class="col">
                    <p>
                        Diabetes adalah salah satu penyakit kronis yang paling umum di Amerika Serikat, yang berdampak pada jutaan
                        orang Amerika setiap tahun dan memberikan beban keuangan yang signifikan terhadap perekonomian. Diabetes
                        adalah penyakit kronis yang serius di mana seseorang kehilangan kemampuan untuk secara efektif mengatur
                        kadar glukosa dalam darah, dan dapat menyebabkan penurunan kualitas hidup dan harapan hidup. Setelah makanan
                        yang berbeda dipecah menjadi gula selama pencernaan, gula kemudian dilepaskan ke dalam aliran darah. Hal ini
                        memberi sinyal kepada pankreas untuk melepaskan insulin. Insulin membantu sel-sel dalam tubuh untuk
                        menggunakan gula-gula dalam aliran darah sebagai energi. Diabetes umumnya ditandai dengan tubuh yang tidak
                        memproduksi cukup insulin atau tidak dapat menggunakan insulin yang dibuat seefektif yang dibutuhkan.
                    </p>
                </div>
                <div class="col">
                    <p>
                        Komplikasi seperti penyakit jantung, kehilangan penglihatan, amputasi tungkai bawah, dan penyakit ginjal
                        berhubungan dengan tingginya kadar gula yang tersisa di dalam aliran darah pada penderita diabetes. Meskipun
                        tidak ada obat untuk diabetes, strategi seperti menurunkan berat badan, makan dengan sehat, aktif, dan
                        menerima perawatan medis dapat mengurangi bahaya penyakit ini pada banyak pasien. Diagnosis dini dapat
                        mengarah pada perubahan gaya hidup dan pengobatan yang lebih efektif, sehingga membuat model prediktif
                        risiko diabetes menjadi alat yang penting bagi masyarakat dan petugas kesehatan.
                    </p>
                </div>
                <div class="col">
                    <p>
                        Skala masalah ini juga penting untuk dikenali. Pusat Pengendalian dan Pencegahan Penyakit (CDC)
                        mengindikasikan bahwa pada tahun 2018, 34,2 juta orang Amerika Serikat menderita diabetes dan 88 juta orang
                        menderita pradiabetes. Selain itu, CDC memperkirakan bahwa 1 dari 5 penderita diabetes, dan sekitar 8 dari
                        10 penderita prediabetes tidak menyadari risiko mereka. Meskipun ada berbagai jenis diabetes, diabetes tipe
                        II adalah bentuk yang paling umum dan prevalensinya bervariasi berdasarkan usia, pendidikan, pendapatan,
                        lokasi, ras, dan faktor penentu sosial kesehatan lainnya. Sebagian besar beban penyakit ini jatuh pada
                        mereka yang memiliki status sosial ekonomi yang lebih rendah. Diabetes juga memberikan beban yang sangat
                        besar bagi perekonomian, dengan biaya diabetes yang terdiagnosis sekitar $327 miliar dolar dan total biaya
                        diabetes yang tidak terdiagnosis dan pradiabetes mendekati $400 miliar dolar per tahun.
                    </p>
                </div>

            </div>
         </div>
      </div>
   </div>
   <div class="container mt-5">
      <div class="mt-2 container card">
         <div class="container">
            <form id="diabetesForm" action="/fitur-diabetes" method="POST" class="container" onsubmit="submitForm()">
               <h4 class="text-center mt-3">Data Kesehatan</h4>
               <div class="row container mt-3">
                  <div class="col-md-4 mb-3">
                     {{-- blood --}}
                     <div class="mb-3">
                        <label for="HighBP" class="form-label">High Blood Pressure <br /> 0 = no high BP 1 = high
                           BP</label>
                        <input type="number" name="HighBP" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- kolesterol --}}
                     <div class="mb-3">
                        <label for="HighChol" class="form-label">High Cholesterol <br /> 0 = no high cholesterol 1 = high
                           cholesterol</label>
                        <input type="number" name="HighChol" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- kolesterol check --}}
                     <div class="mb-3">
                        <label for="CholCheck" class="form-label"><strong>Cholesterol Check</strong> <br /> 0 = no
                           cholesterol check in 5 years 1 = yes cholesterol check in 5 years</label>
                        <input type="number" name="CholCheck" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- BMI --}}
                     <div class="mb-3">
                        <label for="Bmi" class="form-label">Number of Body Mass Index <br /> Body Mass Index</label>
                        <input type="number" name="Bmi" required placeholder="input BMI" class="form-control"
                           required>
                     </div>

                     {{-- Smoker --}}
                     <div class="mb-3">
                        <label for="Smoker" class="form-label">Smoker <br /></label>
                        <input type="number" name="Smoker" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- Stroke --}}
                     <div class="mb-3">
                        <label for="Stroke" class="form-label">Ever told you had a stroke <br /></label>
                        <input type="number" name="Stroke" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- Heart Disease or Attack --}}
                     <div class="mb-3">
                        <label for="HeartDiseaseorAttack" class="form-label">Coronary Heart Disease or
                           Myocardial <br />
                           Infarction</label>
                        <input type="number" name="HeartDiseaseorAttack" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- Physical Activity --}}
                     <div class="mb-3">
                        <label for="PhysActivity" class="form-label">Physical Activity in past 30 days <br /></label>
                        <input type="number" name="PhysActivity" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>


                  </div>

                  <div class="col-md-4 mb-3">
                     {{-- Vegges --}}
                     <div class="mb-3">
                        <label for="Veggies" class="form-label">Consume Vegetables 1 or more times per
                           day <br /></label>
                        <input type="number" name="Veggies" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- alkohol --}}
                     <div class="mb-3">
                        <label for="HvyAlcoholConsump" class="form-label">Heavy Alcohol Consumption <br /></label>
                        <input type="number" name="HvyAlcoholConsump" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- health care converage --}}
                     <div class="mb-3">
                        <label for="AnyHealthcare" class="form-label">Have any kind of health care
                           coverage <br /></label>
                        <input type="number" name="AnyHealthcare" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- Unable to see a doctor --}}
                     <div class="mb-3">
                        <label for="NoDocbcCost" class="form-label">Unable to see a doctor because of cost in
                           the
                           past 12 months <br /></label>
                        <input type="number" name="NoDocbcCost" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>


                     {{-- General Health --}}
                     <div class="mb-3">
                        <label for="GenHlth" class="form-label">General Health <br /></label>
                        <input type="number" name="GenHlth" min="0" max="5" required
                           placeholder="0 - 30" class="form-control">
                     </div>

                     {{-- Days of poor mental health --}}
                     <div class="mb-3">
                        <label for="MentHlth" class="form-label">Days of poor mental health <br /></label>
                        <input type="number" name="MentHlth" min="1" max="30" required
                           placeholder="0 - 30" class="form-control">
                     </div>

                     {{-- Physical illness or injury days in past 30 days --}}
                     <div class="mb-3">
                        <label for="PhysHlth" class="form-label">Physical illness or injury days in past 30
                           days <br /></label>
                        <input type="number" name="PhysHlth" min="1" max="30" required
                           placeholder="0 - 30" class="form-control">
                     </div>



                  </div>
                  <div class="col-md-4">
                     {{-- Fruits --}}
                     <div class="mb-3">
                        <label for="Fruits" class="form-label">Consume Fruit 1 or more times per day <br /></label>
                        <input type="number" name="Fruits" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- difwalk --}}
                     <div class="mb-3">
                        <label for="DiffWalk" class="form-label">Serious difficulty walking or climbing
                           stairs <br /></label>
                        <input type="number" name="DiffWalk" min="0" max="1" required
                           placeholder="0 = no, 1 = yes" class="form-control">
                     </div>

                     {{-- sex --}}
                     <div class="mb-3">
                        <label for="Sex" class="form-label">Sex <br /> </label>
                        <input type="number" name="Sex" min="0" max="1" required
                           placeholder="0 = female, 1 = male" class="form-control">
                     </div>

                     {{-- age --}}
                     <div class="mb-3">
                        <label for="Age" class="form-label">Age <br /> </label>
                        <input type="number" name="Age" min="1" max="13" required
                           placeholder="1 = 18-24, 9 = 60-64, 13 = 80 or older" class="form-control">
                     </div>

                     {{-- Education Level --}}

                     <div class="mb-3">
                        <label for="Education" class="form-label">Education level (Scale 1-6) <br /></label>
                        <input type="number" name="Education" min="1" max="6" required
                           placeholder="1 - 6" class="form-control">
                     </div>

                     {{-- income --}}
                     <div class="mb-3">
                        <label for="Income" class="form-label">Income Scale <br /></label>
                        <input type="number" name="Income" min="1" max="8" required
                           placeholder="1 - 8" class="form-control">
                     </div>
                     <button type="submit" class="btn btn-outline-primary">Submit</button>
                  </div>

            </form>
         </div>
         <hr>
         <div>
            <h1 class="mb-2 mt-2">Prediction:</h1>
            @if (session('prediction'))
               <p class="mb-2 mt-2">Kemungkinan diabetes {{ session('prediction') }}</p>
            @else
               <p class="mb-4 mt-4">Silahkan mengisi data kesehatan terlebih dahulu</p>
            @endif
         </div>

      </div>
   </div>
   {{-- end konten --}}
   <script>
      function submitForm() {
         // Mendapatkan nilai-nilai input
         var HighBP = document.getElementById('HighBP').value;
         var HighChol = document.getElementById('HighChol').value;
         var CholCheck = document.getElementById('CholCheck').value;
         var Bmi = document.getElementById('Bmi').value;
         var Smoker = document.getElementById('Smoker').value;
         var Stroke = document.getElementById('Stroke').value;
         var HeartDiseaseorAttack = document.getElementById('HeartDiseaseorAttack').value;
         var PhysActivity = document.getElementById('PhysActivity').value;
         var Fruits = document.getElementById('Fruits').value;
         var Veggies = document.getElementById('Veggies').value;
         var HvyAlcoholConsump = document.getElementById('HvyAlcoholConsump').value;
         var AnyHealthcare = document.getElementById('AnyHealthcare').value;
         var NoDocbcCost = document.getElementById('NoDocbcCost').value;
         var GenHlth = document.getElementById('GenHlth').value;
         var MentHlth = document.getElementById('MentHlth').value;
         var PhysHlth = document.getElementById('PhysHlth').value;
         var DiffWalk = document.getElementById('DiffWalk').value;
         var Sex = document.getElementById('Sex').value;
         var Age = document.getElementById('Age').value;
         var Education = document.getElementById('Education').value;
         var Income = document.getElementById('Income').value;


         // Membuat objek data untuk dikirimkan ke server atau diolah lebih lanjut
         var data = {
            HighBP: HighBP,
            HighChol: HighChol,
            CholCheck: CholCheck,
            Bmi: Bmi,
            Smoker: Smoker,
            Stroke: Stroke,
            HeartDiseaseorAttack: HeartDiseaseorAttack,
            PhysActivity: PhysActivity,
            Fruits: Fruits,
            Veggies: Veggies,
            HvyAlcoholConsump: HvyAlcoholConsump,
            AnyHealthcare: AnyHealthcare,
            NoDocbcCost: NoDocbcCost,
            GenHlth: GenHlth,
            MentHlth: MentHlth,
            PhysHlth: PhysHlth,
            DiffWalk: DiffWalk,
            Sex: Sex,
            Age: Age,
            Education: Education,
            Income: Income
         };
         // Sebelum mengirimkan data, hilangkan token CSRF
         console.log(data);
         // Mengirimkan data menggunakan AJAX
         var xhr = new XMLHttpRequest();
         xhr.open('POST', '/predict-diabetes', true);
         xhr.setRequestHeader('Content-Type', 'application/json');
         xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
               // Handle respons dari server (jika diperlukan)
               var response = JSON.parse(xhr.responseText);
               console.log(response);
            }
         };
         xhr.send(JSON.stringify(data));
      }
   </script>
@endsection
