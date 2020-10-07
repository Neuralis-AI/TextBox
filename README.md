# TextBox
Spraak-naar-text applicatie met zelfgetrained nederlandstalig model.

Deze handleiding legt uit hoe je een Raspberry Pi 4 kan gebruiken om live transcriptie (of spraak-naar-tekst) uit te voeren bet behulp van een neuraal netwerk genaamd DeepSpeech.   
Verde rin de handleiding geven we ook een voorbeeld hoe je vanop een ander apparaat (laptop/gsm/console/...) via een webbrowser kan lezen wat er door de Raspberry Pi opgevangen wordt.      

**Benodigdheden:**   
1x Raspberry Pi 4 (minimum 2GB) (https://neuralis.ai/?product=raspberry-pi-4-model-b-2gb)   
1x ReSpeaker 4-Mic Array ( https://neuralis.ai/?product=respeaker-4-mic-array )   
OF   
1x ReSpeaker 2-Mic Array (https://neuralis.ai/?product=respeaker-2-mics-pi-hat)
1X MicroSD kaart van minimum 16GB (https://neuralis.ai/?product_cat=microsd)

Een usb microfoon zou afhankelijk van de compatibiliteit even goed moeten werken.   
   
**Voorbereiding**   
Flash een nieuwe SDkaart met Raspbian 32 bit en voer de standaardconfguratie uit.

Voer volgende commando's 1 voor 1 uit in de terminal om de Respeaker 4-Mic of 2-Mic Array te installeren:
```
sudo apt-get update
sudo apt-get upgrade
git clone https://github.com/respeaker/seeed-voicecard.git
cd seeed-voicecard
sudo ./install.sh  --compat-kernel
reboot
```
Na het heropstarten is de geluidskaart werkend en kunnen we beginnen aan het project.

**Deepspeech installeren/configureren:**   
Voer volgende commando's 1 voor 1 uit in de terminal:   
```
sudo apt install -y python3-pip git
sudo pip3 install numpy
sudo pip3 install deepspeech
sudo apt-get install libatlas-base-dev
sudo apt install portaudio19-dev
pip install -r requirements.txt
```

Clone deze repository met volgende commando:
```
git clone https://github.com/Neuralis-AI/TextBox.git
```
Open vervolgens naar de map Textbox.   

Voer nu een nieuwe terminal uit in deze map en voer volgende commando uit:
```
python3 mic_vad_streaming.py --device 1 -m deepspeech-0.8.2-models.tflite -s deepspeech-0.8.2-models.scorer
```
Hiermee zie je nu de live tekst van wat er in de microfoon gesproken wordt.

**Remote volgen via een webserver:**   
# BINNENKORT
