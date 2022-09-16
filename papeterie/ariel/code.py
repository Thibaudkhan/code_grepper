import requests

response = requests.get('https://ariel.pfregistres.com/apiUnlocked/all/{siren}')
print(response.text) 
