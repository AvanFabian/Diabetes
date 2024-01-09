from flask import Flask, request, jsonify
import joblib

app = Flask(__name__)

# Load the scikit-learn modeln
model = joblib.load("storage/model/diabetes3.joblib")

@app.route('/fitur-diabetes', methods=['POST'])
def predict():
    data = request.get_json()
    # print(data)
    input_values = list(map(float, data['input'].values()))
    prediction = model.predict_proba([input_values]).tolist()
    print(prediction)
    # Mengambil probabilitas kelas positif (misalnya, indeks 1)
    positive_probability = prediction[0][1]
    # Mengubah probabilitas menjadi persen dengan dua desimal
    percentage = "{:.2%}".format(positive_probability)
    print(f"Percentage chance of diabetes: {percentage}")
    return jsonify({'prediction': percentage})

if __name__ == '__main__':
    app.run(port=5000)
