from flask import Flask, request, jsonify
import joblib

app = Flask(__name__)

# Load the scikit-learn modeln
model = joblib.load("storage/model/diabetes3.joblib")

@app.route('/fitur-diabetes', methods=['POST'])
def predict():
    data = request.get_json()
    # input_values = list(map(float, data['input'].values())) -> enable if want to predict using form 
    input_values = list(map(float, data['input'])) # -> enable if want to predict using postman
    prediction = model.predict_proba([input_values]).tolist()
    # Mengambil probabilitas kelas positif (misalnya, indeks 1)
    positive_probability = prediction[0][1]
    # Mengubah probabilitas menjadi persen dengan dua desimal
    percentage = "{:.2%}".format(positive_probability)
    return jsonify({'prediction': percentage})

if __name__ == '__main__':
    app.run(port=5000)
