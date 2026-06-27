from flask import Flask, request
import subprocess

app = Flask(__name__)

@app.route("/~ishin/cmi/ping", methods=["POST"])
def ping():
    query = request.form.get("query", "")
    cmd = f"ping -c 3 {query}"
    output = subprocess.check_output(
        ["/bin/sh", "-c", cmd],
        timeout=5
    )
    return output

app.run(host='0.0.0.0', port=5000)
