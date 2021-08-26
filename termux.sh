cd templates
apt update 
apt install php
apt install zip wget -y
wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip
unzip ngrok-stable-linux-arm.zip
chmod +x ngrok
echo "Eg:./ngrok authtoken asdfff"
echo "Go to https://ngrok.com/ and login to get token."
read -p "Enter the tocken :" text
$text
