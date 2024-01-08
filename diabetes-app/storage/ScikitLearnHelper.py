# ScikitLearnHelper.py

import joblib

def load_scikit_learn_model(model_path):
    return joblib.load(model_path)