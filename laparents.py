from flask import Flask,render_template
app = Flask(__name__,static_folder=None)
app.config.from_envvar('LAPARENTS_SETTINGS')
if app.config['PRODUCTION']:
    app.static_folder=None
    app.add_url_rule('/<path:filename>', endpoint='static',
    view_func=app.send_static_file, subdomain='static')
else:
    app.static_folder='static'
    app.add_url_rule('/<path:filename>', endpoint='static',
    view_func=app.send_static_file)

@app.route("/")
@app.route("/index.php")
def index():
    return render_template('index.html', cur_page="Home")

@app.route("/about")
@app.route("/about.php")
def about():
    return render_template('about.html', cur_page="About")
    
@app.route("/bylaws")
@app.route("/bylaws.php")
def bylaws():
    return render_template('bylaws.html', cur_page="About")

@app.route("/meeting/agenda")
@app.route("/agenda.php")
def agenda():
    return render_template('agenda.html', cur_page="Annual")
    
@app.route("/meeting/lodging")
@app.route("/lodging.php")
def lodging():
    return render_template('lodging.html', cur_page="Annual")
    
@app.route("/meeting/handouts")
@app.route("/mtg_handouts.php")
def handouts():
    return render_template('handouts.html', cur_page="Annual")

@app.route("/meeting/")
@app.route("/reginfo.php")
def meeting():
    return render_template('meeting.html', cur_page="Annual")
    
@app.route("/parishes")
@app.route("/parishes.php")
def parishes():
    return render_template('parishes.html', cur_page="About")
    
if __name__ == "__main__":
    app.run()
