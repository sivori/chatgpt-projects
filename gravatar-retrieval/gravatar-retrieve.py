from flask import Flask, render_template, request
import hashlib

app = Flask(__name__)

def get_gravatar_url(email):
    # Convert the email address to lowercase and encode it
    email_bytes = email.lower().encode('utf-8')
    # Generate the MD5 hash of the email
    digest = hashlib.md5(email_bytes).hexdigest()
    # Return the Gravatar URL
    return f'https://www.gravatar.com/avatar/{digest}'

@app.route('/', methods=['GET', 'POST'])
def index():
    gravatar_url = None
    if request.method == 'POST':
        email = request.form.get('email')
        if email:
            gravatar_url = get_gravatar_url(email)
    return render_template('index.html', gravatar_url=gravatar_url)

if __name__ == '__main__':
    app.run(debug=True)
