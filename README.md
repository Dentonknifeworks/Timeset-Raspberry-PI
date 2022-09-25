# Timeset-Raspberry-PI
Web based time set for Raspberry Pi with out internet access but setup as a Hotspot 
This is used to set the time on a PI that is not connected to the internet and has a hotspot setup.
Put the 3 files in your /var/www/html directory. "Note the index.php is to replace the Allsky index file" so that you have a link on the home page.
Edit your sudoers file with sudo visudo /sudoers NOTE YOU MUST USE VISUDO to edit this file
Add at the bottom www-data ALL=(ALL) NOPASSWD: /bin/date, /bin/timedatectl
Time to test and use it
Point your web browsers device that is connected to the Raspbery PI to your allsky page and click the timeset on the left
It will pull from that device the time and date next hit submit and a results page will be displayed. Hit the return to Home and done.

If you decide to connect the internet and need NTP back on. Open a terminal window and pass this command sudo timedatectl set-ntp true This will allow the PI to get the time form the internet.

I did this because I take my Allskys out camping and wanted a easy way to set the time and date.
Next I think it would be also nice to add a way to set the latitude and Longitude of the campsite but this is proving that to be a chanlange as you have to Have HTTPS setup.
