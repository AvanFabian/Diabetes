from flask import Flask, request, jsonify
import joblib

app = Flask(__name__)

# Load the scikit-learn modeln
model = joblib.load("storage/model/diabetes1.joblib")

@app.route('/predict-diabetes', methods=['POST'])
def predict():
    data = request.get_json()
    prediction = model.predict([data['input']])  # Sesuaikan dengan input model
    return jsonify({'prediction': prediction.tolist()})

if __name__ == '__main__':
    app.run(port=5000)
