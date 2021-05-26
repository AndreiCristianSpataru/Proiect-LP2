from cefpython3 import cefpython as cef
import json
import sys

def open_link(link):
    sys.excepthook = cef.ExceptHook
    cef.Initialize()
    cef.CreateBrowserSync(url=link, window_title="Vizualizare locatii publicitare")
    cef.MessageLoop()

if __name__ == '__main__':
    with open("output.json") as infile:
        filecontent = infile.read()
    data = json.loads(filecontent)
    html = "<h1>Locatii publicitare</h1>\n"
    for item in data:
        html += f"<h3>Locatie publicitara pentru {item['org']}</h3>\n"
        html += f"<strong>Nr / Data:</strong> {item['nr_data']}<br>\n"
        html += f"<strong>Amplasament:</strong> {item['amplasament']}<br>\n"
        html += f"<iframe width='450' height='250' frameborder='0' style='border:0' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyDwY9QtNwODJSd6n4Cm5C0xU3BN-oPq2nE&q={item['locatie']}' allowfullscreen> </iframe> <hr><br>\n"
    with open("page.html", "w") as file:
        file.write(html)
    open_link("file:///page.html")