@extends('layouts.app')
@section('content')
   <main>
      <form id="diabetesForm" action="/predict" method="POST" onsubmit="submitForm()">
         <label for="HighBP">High Blood Pressure (0 = no, 1 = yes):</label>
         <input type="number" name="HighBP" min="0" max="1" required>
         <br>

         <label for="HighChol">High Cholesterol (0 = no, 1 = yes):</label>
         <input type="number" name="HighChol" min="0" max="1" required>
         <br>

         <label for="CholCheck">Cholesterol Check (0 = no, 1 = yes):</label>
         <input type="number" name="CholCheck" min="0" max="1" required>
         <br>

         <label for="Bmi">Number of Body Mass Index:</label>
         <input type="number" name="Bmi" required>
         <br>

         <label for="Smoker">Smoker (0 = no, 1 = yes):</label>
         <input type="number" name="Smoker" min="0" max="1" required>
         <br>

         <label for="Stroke">Ever told you had a stroke (0 = no, 1 = yes):</label>
         <input type="number" name="Stroke" min="0" max="1" required>
         <br>

         <label for="HeartDiseaseorAttack">Coronary Heart Disease or Myocardial Infarction (0 = no, 1 = yes):</label>
         <input type="number" name="HeartDiseaseorAttack" min="0" max="1" required>
         <br>

         <label for="PhysActivity">Physical Activity in past 30 days (0 = no, 1 = yes):</label>
         <input type="number" name="PhysActivity" min="0" max="1" required>
         <br>

         <label for="Fruits">Consume Fruit 1 or more times per day (0 = no, 1 = yes):</label>
         <input type="number" name="Fruits" min="0" max="1" required>
         <br>

         <label for="Veggies">Consume Vegetables 1 or more times per day (0 = no, 1 = yes):</label>
         <input type="number" name="Veggies" min="0" max="1" required>
         <br>

         <label for="HvyAlcoholConsump">Heavy Alcohol Consumption (0 = no, 1 = yes):</label>
         <input type="number" name="HvyAlcoholConsump" min="0" max="1" required>
         <br>

         <label for="AnyHealthcare">Have any kind of health care coverage (0 = no, 1 = yes):</label>
         <input type="number" name="AnyHealthcare" min="0" max="1" required>
         <br>

         <label for="NoDocbcCost">Unable to see a doctor because of cost in the past 12 months (0 = no, 1 = yes):</label>
         <input type="number" name="NoDocbcCost" min="0" max="1" required>
         <br>

         <label for="GenHlth">General Health (Scale 1-5):</label>
         <input type="number" name="GenHlth" min="1" max="5" required>
         <br>

         <label for="MentHlth">Days of poor mental health (Scale 1-30):</label>
         <input type="number" name="MentHlth" min="1" max="30" required>
         <br>

         <label for="PhysHlth">Physical illness or injury days in past 30 days (Scale 1-30):</label>
         <input type="number" name="PhysHlth" min="1" max="30" required>
         <br>

         <label for="DiffWalk">Serious difficulty walking or climbing stairs (0 = no, 1 = yes):</label>
         <input type="number" name="DiffWalk" min="0" max="1" required>
         <br>

         <label for="Sex">Sex (0 = female, 1 = male):</label>
         <input type="number" name="Sex" min="0" max="1" required>
         <br>

         <label for="Age">Age (1 = 18-24, 9 = 60-64, 13 = 80 or older):</label>
         <input type="number" name="Age" min="1" max="13" required>
         <br>

         <label for="Education">Education level (Scale 1-6):</label>
         <input type="number" name="Education" min="1" max="6" required>
         <br>

         <label for="Income">Income scale (Scale 1-8):</label>
         <input type="number" name="Income" min="1" max="8" required>
         <br>

         <button type="submit">Submit</button>
      </form>
      <h1>Prediction:</h1>
      @if (isset($prediction))
         <p>Hasil Prediksi: {{ $prediction[0] }}</p>
      @else
         <p>Tidak ada hasil prediksi</p>
      @endif
   </main>

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
