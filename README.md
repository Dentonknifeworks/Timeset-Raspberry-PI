# Timeset-Raspberry-PI
Web based time set for Raspberry Pi with out internet access but setup as a Hotspot 
This is used to set the time on a PI that is not connected to the internet and has a hotspot setup.
Put the 2 files in your /var/www/html directory or if you using the current Allsky version put the 2 files in /home/pi/allsky/html
If you not using TJ's allsky and just want to be able to do the time setting use the /var/www/html and you may need to install a WEB host such as apache2.

Edit your sudoers file with

sudo visudo /etc/sudoers 

NOTE YOU MUST USE VISUDO to edit this file
Add at the bottom

www-data ALL=(ALL) NOPASSWD: /bin/date, /bin/timedatectl

Time to test and use it
Point your web browsers to your device \<device ip>\timeset.html
Example one of mine is 192.168.254.178\timeset.html
It will pull from that device the time and date next hit submit and a results page will be displayed. 

If you decide to connect the internet and need NTP back on. Open a terminal window and pass this command sudo timedatectl set-ntp true This will allow the PI to get the time form the internet.

I did this because I take my Allskys out camping and wanted a easy way to set the time and date.
Next I think it would be also nice to add a way to set the latitude and Longitude of the campsite but this is proving that to be a chanlange as you have to Have HTTPS setup.
