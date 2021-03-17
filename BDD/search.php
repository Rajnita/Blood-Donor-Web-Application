<html>
<head>
<title>Sign In</title>
<style type="text/css">
<!--
.style2 {color: #3300CC}
.style3 {
	color: #FF0000;
	font-weight: bold;
}
.style4 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>

<body background="blu2.jpg">
<form action="donor.php" method="post" name="form3">
   <table width="1109" border="0" align="center">
    <tr>
      <td width="107"><div align="center"><a href="index.php" class="style4">Home | </a></div></td>
      <td width="263"><div align="center"><a href="signup.php" class="style4">Register as a Blood Donor | </a></div></td>
      <td width="208"><div align="center"><a href="search.php" class="style4">Search Blood Donor | </a></div></td>
      <td width="145"><div align="center"><a href="bloodtips.php"><span class="style4">Blood Tips </span>| </a></div></td>
      <td width="110"><div align="center"><a href="sponsor.php"><span class="style4">Sponsor </span>|</a> </div></td>
    </tr>
  </table>
   <div align="center"><img src="give_blood_give_life.jpg" width="1108" height="233" />    </div>
   <table width="735" border="0" align="center">
    <tr>
      <td height="45" colspan="3"><div align="center"><strong>Please give some information about the patient. </strong></div></td>
    </tr>
    <tr>
      <td width="140" height="49"> Blood Group: </td>
      <td width="471"><label>
        <select name="blood_group">
          <option>-Select One-</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
      </label></td>
      <td width="110"><pre>
</pre></td>
    </tr>
    <tr>
      <td height="44"> Patient's Name: </td>
      <td><label>
        <input name="textfield" type="text"  size="30"/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="48"> Hospital's Name: </td>
      <td><label>
        <input name="textfield2" type="text" size="60" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="44"> Doctor's Name : </td>
      <td><label>
        <input name="textfield3" type="text" size="30" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="45"> Phone No:</td>
      <td><label>
        <input name="textfield4" type="text" size="10" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="44">City:</td>
      <td><select name="city">
        <option value="none"> - Select one - </option>
        <option value="Adilabad"> Adilabad</option>
        <option value="Agartala"> Agartala</option>
        <option value="Agra"> Agra</option>
        <option value="Ahmedabad"> Ahmedabad</option>
        <option value="Ahmednagar"> Ahmednagar</option>
        <option value="Ahwa"> Ahwa</option>
        <option value="Aizawl"> Aizawl</option>
        <option value="Ajmer"> Ajmer</option>
        <option value=" Akbarpur"> Akbarpur</option>
        <option value="Akbarpur"> Akbarpur</option>
        <option value="Akola"> Akola</option>
        <option value="Alappuzha"> Alappuzha</option>
        <option value="Alibag"> Alibag</option>
        <option value="Aligarh"> Aligarh</option>
        <option value="Alipore"> Alipore</option>
        <option value="Alirajpur"> Alirajpur</option>
        <option value="Allahabad"> Allahabad</option>
        <option value="Almora"> Almora</option>
        <option value="Along"> Along</option>
        <option value="Alwar"> Alwar</option>
        <option value="Ambala"> Ambala</option>
        <option value="Ambassa"> Ambassa</option>
        <option value="Ambikapur"> Ambikapur</option>
        <option value="Amravati"> Amravati</option>
        <option value="Amreli"> Amreli</option>
        <option value="Amritsar"> Amritsar</option>
        <option value="Amroha"> Amroha</option>
        <option value="Anand"> Anand</option>
        <option value="Anantapur"> Anantapur</option>
        <option value="Anantnag"> Anantnag</option>
        <option value="Anini"> Anini</option>
        <option value="Anuppur"> Anuppur</option>
        <option value="Araria"> Araria</option>
        <option value="Ariyalur"> Ariyalur</option>
        <option value="Arrah"> Arrah</option>
        <option value="Arwal"> Arwal</option>
        <option value="Ashok Nagar"> Ashok Nagar</option>
        <option value="Auraiya"> Auraiya</option>
        <option value="Aurangabad"> Aurangabad</option>
        <option value="Aurangabad"> Aurangabad</option>
        <option value="Azamgarh"> Azamgarh</option>
        <option value="Badgam"> Badgam</option>
        <option value="Bagalkot"> Bagalkot</option>
        <option value="Bageshwar"> Bageshwar</option>
        <option value="Baghmara"> Baghmara</option>
        <option value="Bagpat"> Bagpat</option>
        <option value="Baharampur"> Baharampur</option>
        <option value="Bahraich"> Bahraich</option>
        <option value="Balaghat"> Balaghat</option>
        <option value="Ballia"> Ballia</option>
        <option value="Balrampur"> Balrampur</option>
        <option value="Balurghat"> Balurghat</option>
        <option value="Banda"> Banda</option>
        <option value="Bandipore"> Bandipore</option>
        <option value="Bandra?(East)"> Bandra?(East)</option>
        <option value="Bangalore"> Bangalore</option>
        <option value="Banka"> Banka</option>
        <option value="Bankura"> Bankura</option>
        <option value="Banswara"> Banswara</option>
        <option value="Barabanki"> Barabanki</option>
        <option value="Baramula"> Baramula</option>
        <option value=" Baran"> Baran</option>
        <option value="Barasat"> Barasat</option>
        <option value="Bardhaman"> Bardhaman</option>
        <option value="Bareilly"> Bareilly</option>
        <option value="Barmer"> Barmer</option>
        <option value="Barwani"> Barwani</option>
        <option value="Basti"> Basti</option>
        <option value="Bathinda"> Bathinda</option>
        <option value="Beed"> Beed</option>
        <option value="Begusarai"> Begusarai</option>
        <option value="Belgaum"> Belgaum</option>
        <option value="Bellary"> Bellary</option>
        <option value="Bettiah"> Bettiah</option>
        <option value="Betul"> Betul</option>
        <option value="Bhabua"> Bhabua</option>
        <option value="Bhagalpur"> Bhagalpur</option>
        <option value="Bhandara"> Bhandara</option>
        <option value="Bharatpur"> Bharatpur</option>
        <option value="Bharuch"> Bharuch</option>
        <option value="Bhavnagar"> Bhavnagar</option>
        <option value="Bhilwara"> Bhilwara</option>
        <option value="Bhind"> Bhind</option>
        <option value="Bhiwani"> Bhiwani</option>
        <option value="Bhopal"> Bhopal</option>
        <option value="Bhuj"> Bhuj</option>
        <option value="Bidar"> Bidar</option>
        <option value="Bihar Sharif"> Bihar Sharif</option>
        <option value="Bijapur"> Bijapur</option>
        <option value="Bijnor"> Bijnor</option>
        <option value="Bikaner"> Bikaner</option>
        <option value="Bilaspur"> Bilaspur</option>
        <option value="Bilaspur"> Bilaspur</option>
        <option value="Bishnupur"> Bishnupur</option>
        <option value="Bokaro"> Bokaro</option>
        <option value="Bomdila"> Bomdila</option>
        <option value="Budaun"> Budaun</option>
        <option value="Bulandshahar"> Bulandshahar</option>
        <option value="Buldhana"> Buldhana</option>
        <option value="Bundi"> Bundi</option>
        <option value="Burhanpur"> Burhanpur</option>
        <option value="Buxar"> Buxar</option>
        <option value="Chaibasa"> Chaibasa</option>
        <option value="Chamarajanagar"> Chamarajanagar</option>
        <option value="Chamba"> Chamba</option>
        <option value="Champawat"> Champawat</option>
        <option value="Champhai"> Champhai</option>
        <option value="Chandauli"> Chandauli</option>
        <option value="Chandel"> Chandel</option>
        <option value="Chandigarh"> Chandigarh</option>
        <option value="Chandrapur"> Chandrapur</option>
        <option value="Changlang"> Changlang</option>
        <option value="Chatra"> Chatra</option>
        <option value="Chennai?(Madras)"> Chennai?(Madras)</option>
        <option value="Chhapra"> Chhapra</option>
        <option value="Chhatarpur"> Chhatarpur</option>
        <option value="Chhindwara"> Chhindwara</option>
        <option value="Chikballapur"> Chikballapur</option>
        <option value="Chikmagalur"> Chikmagalur</option>
        <option value="Chitradurga"> Chitradurga</option>
        <option value="Chitrakoot"> Chitrakoot</option>
        <option value="Chittoor"> Chittoor</option>
        <option value="Chittorgarh"> Chittorgarh</option>
        <option value="Churachandpur"> Churachandpur</option>
        <option value="Churu"> Churu</option>
        <option value="Coimbatore"> Coimbatore</option>
        <option value="Connaught Place"> Connaught Place</option>
        <option value="Cooch Behar"> Cooch Behar</option>
        <option value="Cuddalore"> Cuddalore</option>
        <option value="Dahod"> Dahod</option>
        <option value="Daltonganj"> Daltonganj</option>
        <option value="Damoh"> Damoh</option>
        <option value="Dantewada"> Dantewada</option>
        <option value="Daporijo"> Daporijo</option>
        <option value="Darbhanga"> Darbhanga</option>
        <option value="Darjeeling"> Darjeeling</option>
        <option value="Darya Ganj"> Darya Ganj</option>
        <option value="Datia"> Datia</option>
        <option value="Dausa"> Dausa</option>
        <option value="Davanagere"> Davanagere</option>
        <option value="Dehradun"> Dehradun</option>
        <option value="Deoghar"> Deoghar</option>
        <option value="Deoria"> Deoria</option>
        <option value="Dewas"> Dewas</option>
        <option value="Dhamtari"> Dhamtari</option>
        <option value="Dhanbad"> Dhanbad</option>
        <option value="Dhar"> Dhar</option>
        <option value="Dharamasala"> Dharamasala</option>
        <option value="Dharmapuri"> Dharmapuri</option>
        <option value="Dharwad"> Dharwad</option>
        <option value="Dholpur"> Dholpur</option>
        <option value="Dhule"> Dhule</option>
        <option value="Dimapur"> Dimapur</option>
        <option value="Dindigul"> Dindigul</option>
        <option value="Dindori"> Dindori</option>
        <option value="Doda"> Doda</option>
        <option value="Dumka"> Dumka</option>
        <option value="Dungarpur"> Dungarpur</option>
        <option value="Durg"> Durg</option>
        <option value="Eluru"> Eluru</option>
        <option value="English Bazar"> English Bazar</option>
        <option value="Erode"> Erode</option>
        <option value="Etah"> Etah</option>
        <option value="Etawah"> Etawah</option>
        <option value="Faizabad"> Faizabad</option>
        <option value="Faridabad"> Faridabad</option>
        <option value="Faridkot"> Faridkot</option>
        <option value="Fatehabad"> Fatehabad</option>
        <option value="Fatehgarh"> Fatehgarh</option>
        <option value="Fatehgarh Sahib"> Fatehgarh Sahib</option>
        <option value="Fatehpur"> Fatehpur</option>
        <option value="Ferozepur"> Ferozepur</option>
        <option value="Firozabad"> Firozabad</option>
        <option value="Gadag"> Gadag</option>
        <option value="Gadchiroli"> Gadchiroli</option>
        <option value="Gandhinagar"> Gandhinagar</option>
        <option value="Ganganagar"> Ganganagar</option>
        <option value="Gangtok"> Gangtok</option>
        <option value="Garhwa"> Garhwa</option>
        <option value="Gaya"> Gaya</option>
        <option value="Geyzing"> Geyzing</option>
        <option value="Ghaziabad"> Ghaziabad</option>
        <option value="Ghazipur"> Ghazipur</option>
        <option value="Giridih"> Giridih</option>
        <option value="Godda"> Godda</option>
        <option value="Godhra"> Godhra</option>
        <option value="Gonda"> Gonda</option>
        <option value="Gondia"> Gondia</option>
        <option value="Gopalganj"> Gopalganj</option>
        <option value="Gopeshwar"> Gopeshwar</option>
        <option value="Gorakhpur"> Gorakhpur</option>
        <option value="Gulbarga"> Gulbarga</option>
        <option value="Gumla"> Gumla</option>
        <option value="Guna"> Guna</option>
        <option value="Guntur"> Guntur</option>
        <option value="Gurdaspur"> Gurdaspur</option>
        <option value="Gurgaon"> Gurgaon</option>
        <option value="Gwalior"> Gwalior</option>
        <option value="Gyanpur"> Gyanpur</option>
        <option value="Hajipur"> Hajipur</option>
        <option value="Hamirpur"> Hamirpur</option>
        <option value="Hamirpur"> Hamirpur</option>
        <option value="Hanumangarh"> Hanumangarh</option>
        <option value="Harda"> Harda</option>
        <option value="Hardoi"> Hardoi</option>
        <option value="Haridwar"> Haridwar</option>
        <option value="Hassan"> Hassan</option>
        <option value="Hathras"> Hathras</option>
        <option value="Haveri"> Haveri</option>
        <option value="Hawai"> Hawai</option>
        <option value="Hazaribag"> Hazaribag</option>
        <option value="Himmatnagar"> Himmatnagar</option>
        <option value="Hingoli"> Hingoli</option>
        <option value="Hissar"> Hissar</option>
        <option value="Hoshangabad"> Hoshangabad</option>
        <option value="Hoshiarpur"> Hoshiarpur</option>
        <option value="Howrah"> Howrah</option>
        <option value="Hugli-Chuchura"> Hugli-Chuchura</option>
        <option value="220"> Hyderabad</option>
        <option value="Hyderabad"> Hyderabad</option>
        <option value="Indore"> Indore</option>
        <option value="Jabalpur"> Jabalpur</option>
        <option value="Jagdalpur"> Jagdalpur</option>
        <option value="Jaipur"> Jaipur</option>
        <option value="Jaisalmer"> Jaisalmer</option>
        <option value="Jalandhar"> Jalandhar</option>
        <option value="Jalgaon"> Jalgaon</option>
        <option value="Jalna"> Jalna</option>
        <option value="Jalore"> Jalore</option>
        <option value="Jalpaiguri"> Jalpaiguri</option>
        <option value="Jammu"> Jammu</option>
        <option value="Jamnagar"> Jamnagar</option>
        <option value="Jamshedpur"> Jamshedpur</option>
        <option value="Jamui"> Jamui</option>
        <option value="Jashpur"> Jashpur</option>
        <option value="Jaunpur"> Jaunpur</option>
        <option value="Jehanabad"> Jehanabad</option>
        <option value="Jhabua"> Jhabua</option>
        <option value="Jhajjar"> Jhajjar</option>
        <option value="Jhalawar"> Jhalawar</option>
        <option value="Jhansi"> Jhansi</option>
        <option value="Jhunjhunu"> Jhunjhunu</option>
        <option value="Jind"> Jind</option>
        <option value="Jodhpur"> Jodhpur</option>
        <option value="Jowai"> Jowai</option>
        <option value="Junagadh"> Junagadh</option>
        <option value="Kadapa"> Kadapa</option>
        <option value="Kailasahar"> Kailasahar</option>
        <option value="Kaithal"> Kaithal</option>
        <option value="Kakinada"> Kakinada</option>
        <option value="Kakkanad"> Kakkanad</option>
        <option value="Kalpetta"> Kalpetta</option>
        <option value="Kanchipuram"> Kanchipuram</option>
        <option value="Kanjhawala"> Kanjhawala</option>
        <option value="Kanker"> Kanker</option>
        <option value="Kannauj"> Kannauj</option>
        <option value="Kannur"> Kannur</option>
        <option value="Kanpur"> Kanpur</option>
        <option value="Kapurthala"> Kapurthala</option>
        <option value="Karaikal"> Karaikal</option>
        <option value="Karauli"> Karauli</option>
        <option value="Kargil"> Kargil</option>
        <option value="Karimnagar"> Karimnagar</option>
        <option value="Karnal"> Karnal</option>
        <option value="Karur"> Karur</option>
        <option value="Karwar"> Karwar</option>
        <option value="Kasaragod"> Kasaragod</option>
        <option value="Kasganj"> Kasganj</option>
        <option value="Kathua"> Kathua</option>
        <option value="Katihar"> Katihar</option>
        <option value="Katni"> Katni</option>
        <option value="Kawardha"> Kawardha</option>
        <option value="Keylong"> Keylong</option>
        <option value="Khagaria"> Khagaria</option>
        <option value="Khalilabad"> Khalilabad</option>
        <option value="Khammam"> Khammam</option>
        <option value="Khandwa"> Khandwa</option>
        <option value="Khargone"> Khargone</option>
        <option value="Kheda"> Kheda</option>
        <option value="Kheri"> Kheri</option>
        <option value="Khonsa"> Khonsa</option>
        <option value="Kishanganj"> Kishanganj</option>
        <option value="Koderma"> Koderma</option>
        <option value="Kohima"> Kohima</option>
        <option value="Kolar"> Kolar</option>
        <option value="Kolasib"> Kolasib</option>
        <option value="Kolhapur"> Kolhapur</option>
        <option value="Kolkata"> Kolkata</option>
        <option value="Kollam"> Kollam</option>
        <option value="Koppal"> Koppal</option>
        <option value="Korba"> Korba</option>
        <option value="Koriya"> Koriya</option>
        <option value="Kota"> Kota</option>
        <option value="Kottayam"> Kottayam</option>
        <option value="Kozhikode"> Kozhikode</option>
        <option value="Krishnanagar"> Krishnanagar</option>
        <option value="Kulu"> Kulu</option>
        <option value="Kupwara"> Kupwara</option>
        <option value="Kurnool"> Kurnool</option>
        <option value="Kurukshetra"> Kurukshetra</option>
        <option value="Lakhisarai"> Lakhisarai</option>
        <option value="Lalitpur"> Lalitpur</option>
        <option value="Lamphelpat"> Lamphelpat</option>
        <option value="Latur"> Latur</option>
        <option value="Lawngtlai"> Lawngtlai</option>
        <option value="Leh"> Leh</option>
        <option value="Lohardaga"> Lohardaga</option>
        <option value="Lucknow"> Lucknow</option>
        <option value="Ludhiana"> Ludhiana</option>
        <option value="Lunglei"> Lunglei</option>
        <option value="Machilipatnam"> Machilipatnam</option>
        <option value="Madhepura"> Madhepura</option>
        <option value="Madhubani"> Madhubani</option>
        <option value="Madikeri"> Madikeri</option>
        <option value="Madurai"> Madurai</option>
        <option value="Mahabubnagar"> Mahabubnagar</option>
        <option value="Maharajganj"> Maharajganj</option>
        <option value="Mahasamund"> Mahasamund</option>
        <option value="Mahoba"> Mahoba</option>
        <option value="Mainpuri"> Mainpuri</option>
        <option value="Malappuram"> Malappuram</option>
        <option value="Mamit"> Mamit</option>
        <option value="Mandi"> Mandi</option>
        <option value="Mandla"> Mandla</option>
        <option value="Mandsaur"> Mandsaur</option>
        <option value="Mandya"> Mandya</option>
        <option value="Mangalore"> Mangalore</option>
        <option value="Mangan"> Mangan</option>
        <option value="Manjhanpur"> Manjhanpur</option>
        <option value="Mansa"> Mansa</option>
        <option value="Margao"> Margao</option>
        <option value="Mathura"> Mathura</option>
        <option value="Mau"> Mau</option>
        <option value="Meerut"> Meerut</option>
        <option value="Mehsana"> Mehsana</option>
        <option value="Midnapore"> Midnapore</option>
        <option value="Mirzapur"> Mirzapur</option>
        <option value="Moga"> Moga</option>
        <option value="Mokokchung"> Mokokchung</option>
        <option value="Mon"> Mon</option>
        <option value="Moradabad"> Moradabad</option>
        <option value="Morena"> Morena</option>
        <option value="Motihari"> Motihari</option>
        <option value="Mukatsar"> Mukatsar</option>
        <option value="Mumbai City"> Mumbai City</option>
        <option value="Munger"> Munger</option>
        <option value="Muzaffarnagar"> Muzaffarnagar</option>
        <option value="Muzaffarpur"> Muzaffarpur</option>
        <option value="Mysore"> Mysore</option>
        <option value="Nagapattinam"> Nagapattinam</option>
        <option value="Nagaur"> Nagaur</option>
        <option value="Nagercoil"> Nagercoil</option>
        <option value="Nagercoil"> Nagercoil</option>
        <option value="Nahan"> Nahan</option>
        <option value="Naila Janjgir"> Naila Janjgir</option>
        <option value="Nainital"> Nainital</option>
        <option value="Nalgonda"> Nalgonda</option>
        <option value="Namakkal"> Namakkal</option>
        <option value="Namchi"> Namchi</option>
        <option value="Nanded"> Nanded</option>
        <option value="Nandurbar"> Nandurbar</option>
        <option value="Narnaul"> Narnaul</option>
        <option value="Narsinghpur"> Narsinghpur</option>
        <option value="Nashik"> Nashik</option>
        <option value="Navgarh"> Navgarh</option>
        <option value="Navsari"> Navsari</option>
        <option value="Nawada"> Nawada</option>
        <option value="Nawanshahr"> Nawanshahr</option>
        <option value="Neemuch"> Neemuch</option>
        <option value="Nellore"> Nellore</option>
        <option value="New Tehri"> New Tehri</option>
        <option value="Nizamabad"> Nizamabad</option>
        <option value="NOIDA"> NOIDA</option>
        <option value="Nongpoh"> Nongpoh</option>
        <option value="Nongstoin"> Nongstoin</option>
        <option value="Nuh"> Nuh</option>
        <option value="Ongole"> Ongole</option>
        <option value="Orai"> Orai</option>
        <option value="Oras"> Oras</option>
        <option value="Osmanabad"> Osmanabad</option>
        <option value="Padarauna"> Padarauna</option>
        <option value="Painavu"> Painavu</option>
        <option value="Pakur"> Pakur</option>
        <option value="Palakkad"> Palakkad</option>
        <option value="Palanpur"> Palanpur</option>
        <option value="Pali"> Pali</option>
        <option value="Palwal"> Palwal</option>
        <option value="Panaji"> Panaji</option>
        <option value="Panchkula"> Panchkula</option>
        <option value="Pandakkal"> Pandakkal</option>
        <option value="Panipat"> Panipat</option>
        <option value="Panna"> Panna</option>
        <option value="Parbhani"> Parbhani</option>
        <option value="Pasighat"> Pasighat</option>
        <option value="Patan"> Patan</option>
        <option value="Pathanamthitta"> Pathanamthitta</option>
        <option value="Patiala"> Patiala</option>
        <option value="Patna"> Patna</option>
        <option value="Pauri"> Pauri</option>
        <option value="Perambalur"> Perambalur</option>
        <option value="Phek"> Phek</option>
        <option value="Pilibhit"> Pilibhit</option>
        <option value="Pithoragarh"> Pithoragarh</option>
        <option value="Poonch"> Poonch</option>
        <option value="Porbandar"> Porbandar</option>
        <option value="Porompat"> Porompat</option>
        <option value="Pratapgarh"> Pratapgarh</option>
        <option value="Pratapgarh"> Pratapgarh</option>
        <option value="Preet Vihar"> Preet Vihar</option>
        <option value="Puducherry"> Puducherry</option>
        <option value="Pudukkottai"> Pudukkottai</option>
        <option value="Pulwama"> Pulwama</option>
        <option value="Pune"> Pune</option>
        <option value="Purnia"> Purnia</option>
        <option value="Purulia"> Purulia</option>
        <option value="Raebareli"> Raebareli</option>
        <option value="Raichur"> Raichur</option>
        <option value="Raiganj"> Raiganj</option>
        <option value="Raigarh"> Raigarh</option>
        <option value="Raipur"> Raipur</option>
        <option value="Raisen"> Raisen</option>
        <option value="Rajauri"> Rajauri</option>
        <option value="Rajgarh"> Rajgarh</option>
        <option value="Rajkot"> Rajkot</option>
        <option value="Rajnandgaon"> Rajnandgaon</option>
        <option value="Rajouri Garden"> Rajouri Garden</option>
        <option value="Rajpipla"> Rajpipla</option>
        <option value="Rajsamand"> Rajsamand</option>
        <option value="Ramanagara"> Ramanagara</option>
        <option value="Ramanathapuram"> Ramanathapuram</option>
        <option value="Ramgarh"> Ramgarh</option>
        <option value="Rampur"> Rampur</option>
        <option value="Ranchi"> Ranchi</option>
        <option value="Ratlam"> Ratlam</option>
        <option value="Ratnagiri"> Ratnagiri</option>
        <option value="Reckong Peo"> Reckong Peo</option>
        <option value="Rewa"> Rewa</option>
        <option value="Rewari"> Rewari</option>
        <option value="Robertsganj"> Robertsganj</option>
        <option value="Rohtak"> Rohtak</option>
        <option value="Rudraprayag"> Rudraprayag</option>
        <option value="Rudrapur"> Rudrapur</option>
        <option value="Rupnagar"> Rupnagar</option>
        <option value="Sadar Bazar"> Sadar Bazar</option>
        <option value="Sagar"> Sagar</option>
        <option value="Saharanpur"> Saharanpur</option>
        <option value="Saharsa"> Saharsa</option>
        <option value="Sahibganj"> Sahibganj</option>
        <option value="Sahibzada Ajit Singh (Mohali)"> Sahibzada Ajit Singh (Mohali)</option>
        <option value="Saiha"> Saiha</option>
        <option value="Saket"> Saket</option>
        <option value="Salem"> Salem</option>
        <option value="Samastipur"> Samastipur</option>
        <option value="Samba"> Samba</option>
        <option value="Sangareddi"> Sangareddi</option>
        <option value="Sangli"> Sangli</option>
        <option value="Sangrur"> Sangrur</option>
        <option value="Sasaram"> Sasaram</option>
        <option value="Satara"> Satara</option>
        <option value="Satna"> Satna</option>
        <option value="Sawai Madhopur"> Sawai Madhopur</option>
        <option value="Sehore"> Sehore</option>
        <option value="Senapati"> Senapati</option>
        <option value="Seoni"> Seoni</option>
        <option value="Seppa"> Seppa</option>
        <option value="Seraikela"> Seraikela</option>
        <option value="Serchhip"> Serchhip</option>
        <option value="Shahdara"> Shahdara</option>
        <option value="Shahdol"> Shahdol</option>
        <option value="Shahjahanpur"> Shahjahanpur</option>
        <option value="Shajapur"> Shajapur</option>
        <option value="Sheikhpura"> Sheikhpura</option>
        <option value="Sheohar"> Sheohar</option>
        <option value="Sheopur"> Sheopur</option>
        <option value="Shillong"> Shillong</option>
        <option value="Shimla"> Shimla</option>
        <option value="Shimoga"> Shimoga</option>
        <option value="Shivpuri"> Shivpuri</option>
        <option value="Shravasti"> Shravasti</option>
        <option value="Sidhi"> Sidhi</option>
        <option value="Sikar"> Sikar</option>
        <option value="Singrauli"> Singrauli</option>
        <option value="Sirohi"> Sirohi</option>
        <option value="Sirsa"> Sirsa</option>
        <option value="Sitamarhi"> Sitamarhi</option>
        <option value="Sitapur"> Sitapur</option>
        <option value="Sivaganga"> Sivaganga</option>
        <option value="Siwan"> Siwan</option>
        <option value="Solan"> Solan</option>
        <option value="Solapur"> Solapur</option>
        <option value="Sonepat"> Sonepat</option>
        <option value="Srikakulam"> Srikakulam</option>
        <option value="Srinagar"> Srinagar</option>
        <option value="Sultanpur"> Sultanpur</option>
        <option value="Supaul"> Supaul</option>
        <option value="Surat"> Surat</option>
        <option value="Surendranagar"> Surendranagar</option>
        <option value="Suri"> Suri</option>
        <option value="Tamenglong"> Tamenglong</option>
        <option value="Tamluk"> Tamluk</option>
        <option value="Tawang Town"> Tawang Town</option>
        <option value="Tezu"> Tezu</option>
        <option value="Thane"> Thane</option>
        <option value="Thanjavur"> Thanjavur</option>
        <option value="Theni"> Theni</option>
        <option value="Thiruvallur"> Thiruvallur</option>
        <option value="5Thiruvananthapuram"> Thiruvananthapuram</option>
        <option value="Thiruvarur"> Thiruvarur</option>
        <option value="Thoothukudi?(Tuticorin)"> Thoothukudi?(Tuticorin)</option>
        <option value="Thoubal"> Thoubal</option>
        <option value="Thrissur"> Thrissur</option>
        <option value="Tikamgarh"> Tikamgarh</option>
        <option value="Tiruchirappalli"> Tiruchirappalli</option>
        <option value="Tirunelveli"> Tirunelveli</option>
        <option value="Tiruppur"> Tiruppur</option>
        <option value="Tiruvannamalai"> Tiruvannamalai</option>
        <option value="Tonk"> Tonk</option>
        <option value="Tuensang"> Tuensang</option>
        <option value="Tumkur"> Tumkur</option>
        <option value="Tura"> Tura</option>
        <option value="Udagamandalam?(Ootacamund)"> Udagamandalam?(Ootacamund)</option>
        <option value="Udaipur"> Udaipur</option>
        <option value="Udaipur"> Udaipur</option>
        <option value="Udhampur"> Udhampur</option>
        <option value="Udupi"> Udupi</option>
        <option value="Ujjain"> Ujjain</option>
        <option value="Ukhrul"> Ukhrul</option>
        <option value="Umaria"> Umaria</option>
        <option value="Una"> Una</option>
        <option value="Unnao"> Unnao</option>
        <option value="Uttarkashi"> Uttarkashi</option>
        <option value="Vadodara"> Vadodara</option>
        <option value="Valsad"> Valsad</option>
        <option value="Varanasi"> Varanasi</option>
        <option value="Vasant Vihar"> Vasant Vihar</option>
        <option value="Vellore"> Vellore</option>
        <option value="Vidisha"> Vidisha</option>
        <option value="Viluppuram"> Viluppuram</option>
        <option value="Viluppuram"> Virudhunagar</option>
        <option value="Vishakhapatnam"> Vishakhapatnam</option>
        <option value="Vizianagaram"> Vizianagaram</option>
        <option value="Warangal"> Warangal</option>
        <option value="Wardha"> Wardha</option>
        <option value="Washim"> Washim</option>
        <option value="Williamnagar"> Williamnagar</option>
        <option value="Wokha"> Wokha</option>
        <option value="Yadgir"> Yadgir</option>
        <option value="Yamuna Nagar"> Yamuna Nagar</option>
        <option value="Yanam"> Yanam</option>
        <option value="Yavatmal"> Yavatmal</option>
        <option value="Yingkiong"> Yingkiong</option>
        <option value="Yupia"> Yupia</option>
        <option value="Ziro"> Ziro</option>
        <option value="Zunheboto"> Zunheboto</option>
      </select>
        , INDIA </td>
      <td></td>
    </tr>
    <tr>
      <td height="42"> Disease or Illness : </td>
      <td><label>
        <input name="textfield5" type="text" size="50" />
      </label></td>
      <pre>
</pre>
    </tr>
    <tr>
      <td height="40">Description:</td>
      <td><label>
        <input name="textfield6" type="text" maxlength="300" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="39" colspan="3"><label> </label>
          <div align="center">
            <input type="submit" name="Submit3" value="Search Blood Donor" />
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>
