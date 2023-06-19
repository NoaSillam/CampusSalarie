

<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 100%;
 }
 .label{
    font-weight : bold;
    font-size: 20px;
 }
 .center{
     align-items: center;
    justify-content: center;
    width: 8%;
    display: flex;
 }
 label .required {
  color: red;
}
.required{
     color: red;  
}
</style>



<h2 style="text-align: center;">S'inscrire à notre newsletter</h2>
<br>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=ajoutNewsletters" method="post">

<div class="row justify-content-center align-items-center">
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="civilite" class="col-form-label label" style="width: 35%;" class="label">Civilité :  <sup class="required">*</sup></label>
  <div style="display: flex; align-items: center; justify-content: center; width: 50%;" class="form-check form-check-inline">

<input class="form-check-input" type="radio" name="civilite" id="inlineRadio1" value="Madame">
<label class="form-check-label" for="inlineRadio1">Madame</label>
</div>
<div style="display: flex; align-items: center; justify-content: center; width: 50%;" class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="civilite" id="inlineRadio2" value="Monsieur">
<label class="form-check-label" for="inlineRadio2">Monsieur</label>
</div>
  </div>

  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="nom" class="col-form-label label" style="width: 25%;">Nom : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 60%;" class="form-control" name="nom"  required>
  </div>

  <div class="col-md-3 form-group d-flex align-items-center">
  <label for="prenom" class="col-form-label label" style="width: 80%;">Prénom : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 100%;" class="form-control" name="prenom" required>
  </div>
  <!-- <div class="col-md-4 form-group d-flex align-items-center">
  <label for="mail" class="col-form-label" style="width: 50%;">Mail du bénévole: </label>
  <input type="text"  style="text-align: center; width: 70%;" class="form-control" name="mail" value="<?= $inscrt['mail'] ?>" required>
  </div> -->
</div>
<br>
<div class="row justify-content-center align-items-center">
  <div class="col-md-3 form-group d-flex align-items-center">
  <label for="mail" class="col-form-label label" style="width: 40%;">Mail : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 100%;" class="form-control" name="mail" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="numTelephone" class="col-form-label label" style="width: 45%;">Téléphone : </label>
    <input type="text"  style="text-align: center; width: 60%" class="form-control" name="numTelephone">
  </div>
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="adresse" class="col-form-label label" style="width: 65%;">Adresse postale : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 80%;" class="form-control" name="adresse"  required>
  </div>
</div>
<br>
<div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="codePostal" class="col-form-label label" style="width: 55%;">Code Postal : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 55%;" class="form-control" name="codePostal" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="ville" class="col-form-label label" style="width: 25%;">Ville : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 60%;" class="form-control" name="ville" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="anneeNaissance" class="col-form-label label" style="width: 100%;">Année de naissance : <sup class="required">*</sup></label>
  <select class="form-select" aria-label="Default select example" style="text-align: center; width: 40%;"  name="anneeNaissance" required>
    <option value="1922">1922</option>
    <option value="1923">1923</option>
    <option value="1924">1924</option>
    <option value="1925">1925</option>
    <option value="1926">1926</option>
    <option value="1927">1927</option>
    <option value="1928">1928</option>
    <option value="1929">1929</option>
    <option value="1930">1930</option>
    <option value="1931">1931</option>
    <option value="1932">1932</option>
    <option value="1933">1933</option>
    <option value="1934">1934</option>
    <option value="1935">1935</option>
    <option value="1936">1936</option>
    <option value="1937">1937</option>
    <option value="1938">1938</option>
    <option value="1939">1939</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950" selected>1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
    <option value="2032">2032</option>
</select>
  </div>
</div>



<!-- 

    <label style="display: flex; align-items: center; justify-content: center;" class="label" for="civilite">Civilite:</label>
<div  style="display: flex; align-items: center; justify-content: center;" class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1" value="Madame">
        <label class="form-check-label" for="inlineRadio1">Madame</label>
    </div>
    <div style="display: flex; align-items: center; justify-content: center;" class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2" value="Monsieur">
        <label class="form-check-label" for="inlineRadio2">Monsieur</label>
    </div>
<br>
    <label style="display: flex; align-items: center; justify-content: center;" class="label" for="nom">Nom:</label>
    <div style="display: flex; align-items: center; justify-content: center;" class="row justify-content-center">
         <div class="col-2">
    <input type="text" class="form-control" style="text-align: center;"  name="nom"  required>
    </div>
    </div>
<br>
    <label style="display: flex; align-items: center; justify-content: center;" class="label" for="prenom">Prenom:</label>
    <div style="display: flex; align-items: center; justify-content: center;" class="row justify-content-center">
         <div class="col-2">
    <input type="text" class="form-control" style="text-align: center;"  name="prenom"  required>
    </div>
    </div>
<br>
    <label style="display: flex; align-items: center; justify-content: center;" class="label" for="mail">Mail:</label>
    <div style="display: flex; align-items: center; justify-content: center;" class="row justify-content-center">
         <div class="col-3">
    <input type="text" class="form-control" style="text-align: center;"  name="mail" required>
    </div>
    </div>
<br>
    <label style="display: flex; align-items: center; justify-content: center;" class="label" for="numTelephone">Numéro de téléphone:</label>
    <div style="display: flex; align-items: center; justify-content: center;" class="row justify-content-center">
         <div class="col-2">
    <input type="text"class="form-control" style="text-align: center;"  name="numTelephone"  required>
    </div>
    </div>
<br>
    <label style="display: flex; align-items: center; justify-content: center;" class="label" for="adresse">Adresse postale:</label>
    <div style="display: flex; align-items: center; justify-content: center;" class="row justify-content-center">
         <div class="col-4">
    <input type="text" class="form-control" style="text-align: center;"  name="adresse" required>
    </div>
    </div>
<br>
    <label style="display: flex; align-items: center; justify-content: center;" class="label" for="codePostal">Code Postal:</label>
    <div style="display: flex; align-items: center; justify-content: center;" class="row justify-content-center">
         <div class="col-1">
    <input type="text" class="form-control" style="text-align: center;"  name="codePostal"  required>
    </div>
    </div>
  <br>

    <label style="display: flex; align-items: center; justify-content: center;" class="label" for="ville">Ville:</label>
    <div style="display: flex; align-items: center; justify-content: center;" class="row justify-content-center">
         <div class="col-2">
    <input type="text"  class="form-control" style="text-align: center;" name="ville"  required>
         </div>
    </div>
<br>
   <input type="date" class="form-control" style="text-align: center;"  name="anneeNaissance" placeholder="anneeNaissance" required> -->
    <!-- <label style="display: flex; align-items: center; justify-content: center;" class="label" for="anneeNaissance">Année de naissance:</label>
    <div class="row justify-content-center">
         <div class="col-1">
    <select class="form-select" aria-label="Default select example" style="text-align: center;"   name="anneeNaissance">
    <option value="1922">1922</option>
    <option value="1923">1923</option>
    <option value="1924">1924</option>
    <option value="1925">1925</option>
    <option value="1926">1926</option>
    <option value="1927">1927</option>
    <option value="1928">1928</option>
    <option value="1929">1929</option>
    <option value="1930">1930</option>
    <option value="1931">1931</option>
    <option value="1932">1932</option>
    <option value="1933">1933</option>
    <option value="1934">1934</option>
    <option value="1935">1935</option>
    <option value="1936">1936</option>
    <option value="1937">1937</option>
    <option value="1938">1938</option>
    <option value="1939">1939</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950" selected>1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
    <option value="2032">2032</option>
</select>
</div>
    </div> -->
 <br>

   
 <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 30%;"  value="Valider">
    </div>
    <br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
</form>
</div>