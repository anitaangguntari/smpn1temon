<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">// send an email  </font></font><font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
$ this-> load-> library ('email');  </font></font><font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
$ this-> email-> from ('alamat_email_kamu@gmail.com ',' Sender's name ');  </font></font><font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
$ this-> email-> to ("something@someaddress.com"); </font><font style="vertical-align: inherit;">// filled with the destination address</font></font><font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
$ this-> email-> subject ('A test email from CodeIgniter using Gmail');  </font></font><font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
$ this-> email-> message ("I can now email from CodeIgniter using Gmail as my server!");  </font></font><font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
$ this-> email-> send ();</font></font>