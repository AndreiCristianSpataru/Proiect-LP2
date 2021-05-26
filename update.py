from bs4 import BeautifulSoup
from urllib.request import urlopen
import json
import geopy.geocoders

url = "https://www.primariatm.ro/wp-json/pmtdata/v1/avize_publicitate"
page = urlopen(url)
html = page.read().decode("utf-8")
data = json.loads(html)
date_procesate = []

geolocator = geopy.geocoders.Bing("AhxFcYMpxuEsVyKifObYxoK-vhcoIWq8V-R4EABQQutJVfLfZ1BTKq8RK-1N_wyJ")

for entry in data:
    locatii = entry['Amplasamente'].split("¦")
    for locatie in locatii:
        locatielwr = locatie.lower()
        findlist = [locatielwr.find("b-dul"), locatielwr.find("bdul"),
                    locatielwr.find("calea"), locatielwr.find("str"),
                    locatielwr.find("strada"), locatielwr.find("piata")]
        maxfind = max(findlist)
        if maxfind < 0:
            continue
        new_entry = {}
        new_entry['nr_data'] = entry['nr_data']
        new_entry['org'] = entry['Organizator']
        locationObject = geolocator.geocode(locatielwr[maxfind:] + " timisoara")
        new_entry['locatie'] = f"{locationObject.latitude} {locationObject.longitude}"
        new_entry['amplasament'] = locatie
        date_procesate.append(new_entry)
for entry in date_procesate:
    print(entry)

with open("output.json", "w") as f:
    json.dump(date_procesate, f)