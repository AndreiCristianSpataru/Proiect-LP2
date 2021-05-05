from bs4 import BeautifulSoup
from urllib.request import urlopen
import json

url = "https://www.primariatm.ro/wp-json/pmtdata/v1/avize_publicitate"
page = urlopen(url)
html = page.read().decode("utf-8")
data = json.loads(html)
for elem in data:
    elem['nr_data']
    elem['Organizator']
    elem['Amplasamente']
    print(f"Nr/Data:{elem['nr_data']} | Org:{elem['Organizator']} | Amplasamente:{elem['Amplasamente']}")