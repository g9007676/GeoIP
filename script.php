<?php
//shell_exec('rm mmdb/GeoLite2-City.mmdb.gz mmdb/GeoLite2-Country.mmdb.gz mmdb/GeoIP.dat.gz');
//取得 MMDB 
shell_exec('wget -P mmdb/ http://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz');
//shell_exec('wget -P mmdb/ http://geolite.maxmind.com/download/geoip/database/GeoLite2-Country.mmdb.gz');
//shell_exec('wget -P mmdb/ http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz');


//shell_exec('gunzip mmdb/GeoIP.dat.gz');
shell_exec('gunzip mmdb/GeoLite2-City.mmdb.gz');
//shell_exec('gunzip mmdb/GeoLite2-Country.mmdb.gz');
//shell_exec('rm mmdb/GeoLite2-City.mmdb.gz mmdb/GeoLite2-Country.mmdb.gz mmdb/GeoIP.dat.gz');
