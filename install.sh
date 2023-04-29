git clone https://github.com/Code-Tamil/Shareviaphp.git
cd Shareviaphp
sudo apt update
sudo apt install php apache2
sudo cp -r * /var/www/html
sudo mkdir /var/www/html/shares
sudo chmod 777 /var/www/html/shares
sudo chmod 777 Share.sh
echo "Run 'sudo ./Shareviaphp/Share.sh'"
