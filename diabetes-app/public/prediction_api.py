from flask import Flask, request, jsonify
import joblib

app = Flask(__name__)

# Load the scikit-learn modeln
model = joblib.load("storage/model/diabetes2.joblib")

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    print(data)
    input_values = list(map(float, data['input'].values()))
    prediction = model.predict([input_values])
    return jsonify({'prediction': prediction.tolist()})

if __name__ == '__main__':
    app.run(port=5000)
