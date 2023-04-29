git clone
cd /Shareviaphp
sudo apt update
sudo apt install php apache2
sudo mv * /var/www/html
sudo mkdir /var/www/html/shares
sudo chmod 777 /var/www/html/shares
sudo service apache2 start
echo "This is Your IP Connect your Mobile with Hotspot/Wifi and got to browser in your phone and type this address:--"
ip route get 8.8.8.8 | awk -F"src " 'NR==1{split($2,a," ");print a[1]}'
echo "PC-MOBILE  --> Copy the files you want to share to /var/www/html/shares then you could download it in your mobile without Internet and cables/Wires"
echo "MOBILE-PC  --> Click send button in the browser and choose the file and upload You can find the uploaded file in /var/www/html/shares after complete upload(upload may take some time)"
