<!DOCTYPE html>

<head>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

form {
  /* Center the form on the page */
  margin: 0 auto;
  width: 500px;
  /* Form outline */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}

label {
  /* Uniform size & alignment */
  display: inline-block;
  width: 90px;
  text-align: center;
}

input, 
textarea {
  /* To make sure that all text fields have the same font settings
     By default, textareas have a monospace font */
  font: 1em sans-serif;

  /* Uniform text field size */
  width: 300px;
  box-sizing: border-box;

  /* Match form field borders */
  border: 1px solid #999;
}

input:focus, 
textarea:focus {
  /* Additional highlight for focused elements */
  border-color: #000;
}

textarea {
  /* Align multiline text fields with their labels */
  vertical-align: top;

  /* Provide space to type some text */
  height: 5em;
}

.button {
  /* Align buttons with the text fields */
  padding-left: 90px; /* same size as the label elements */
}

button {
  /* This extra margin represent roughly the same space as the space
     between the labels and their text fields */
  margin-left: .5em;
}


</style>
<title> Tema </title>
</head>

<body style="background-color:powderblue;">

    <form action="/my-handling-form-page" method="post">
        <ul>
         <li>
           <label for="Nume">Nume:</label>
           <input type="text" id="name" name="user_name">
         </li>
         <li>
            <label for="Domiciliu">Domiciliu:</label>
            <input type="text" id="Domiciliu" name="user_domiciliu">
          </li>
          <li>
            <label for="Str.">Str. :</label>
            <input type="text" id="Str" name="user_str">
          </li>
          <li>
            <label for="Bl.">Bl.:</label>
            <input type="text" id="Bl." name="user_bl">
          </li>
          <li>
            <label for="Sc.">Sc.:</label>
            <input type="text" id="name" name="user_sc">
          </li>
          <li>
            <label for="Ap.">Ap.:</label>
            <input type="text" id="name" name="user_ap">
          </li>
          <li>
            <label for="Jud.">Jud.:</label>
            <input type="text" id="name" name="user_Jud.">
          </li>
          <li>
            <label for="CI"> CI / Pasaport:</label>
            <input list="browsers" name="user_CI">
          </li>
          <datalist id="browsers">
            <option value="CI">
            <option value="Pasaport">
          </datalist>
          <p></p>
          <li>
            <label for="Seria">Seria:</label>
            <input type="text" id="name" name="user_serie.">
          </li>
          <li>
            <label for="Nr.">Nr.:</label>
            <input type="text" id="name" name="user_nr.">
          </li>
          <li>
            <label for="CNP">CNP:</label>
            <input type="text" id="name" name="user_cnp">
          </li>
          <li>
            <label for="Avocat">Doresc sa fiu asistat/a de un avocat.</label>
            <input type="checkbox" id="avocat" name="user_avocat">
          </li>
          <li>
            <label for="CI"> Alege inspectoratul: </label>
            <input list="inspectorat" name="user_inspectorat">
          </li>
          <datalist id="inspectorat">
            <option value="Text holder 1">
            <option value="Text holder 2">
            <option value="Text holder 2">
            <option value="Text holder 2">
            <option value="Text holder 2">  
            <option value="Text holder 2">
            </option>
          </datalist>
          <p></p>
          <li>
            <label for="Avocat">Plangere contraventionala </label>
            <input type="text" id="plangere" name="user_plangere">
          </li>
          <li>
            <label for="Seria">Seria:</label>
            <input type="text" id="name" name="user_serie_s.">
          </li>
          <li>
            <label for="Nr.">Nr.:</label>
            <input type="text" id="name" name="user_nr_s.">
          </li>
          <li>
          <label for="start">Data contraventie:</label>
            <input type="date" id="start" name="trip-start"
          </li>
          <li>
            <label for="start">Data comunicare:</label>
              <input type="date" id="start" name="trip-start_2"
        </li>
        <li>
            <label for="Suma">Suna RON:</label>
            <input type="text" id="name" name="user_RON">
          </li>

         <li>
           <label for="msg">Motive:</label>
           <textarea id="msg" name="user_motiv"></textarea>
         </li>
         <li>
            <label for="Seria">Serie sanctiune:</label>
            <input type="text" id="name" name="user_serieS.">
          </li>
         <li>
            <label for="CI"> Sanctiune: </label>
            <input list="sanctiune" name="user_list">
          </li>
          <datalist id="sanctiune">
            <option value="Text holder 1">
            <option value="Text holder 2">
            <option value="Text holder 2">
            <option value="Text holder 2">
            <option value="Text holder 2">  
            <option value="Text holder 2">
            </option>



        </ul>
       </form>

       <form action="signup.inc.php" method="POST">
        <ul>
            <li>
                <label for="Avocat">Acord semnatura</label>
                <input type="checkbox" id="acord" name="user_acord">
              </li>
              <li>
                <label for="Suma">Cuantum Amenda (RON):</label>
                <input type="text" id="A_RON" name="user_A_RON">
              </li>
              <li>
                <label for="Art">Art.: </label>
                <input type="text" id="art" name="user_art">
              </li>
              <li>
                <label for="Martori">Martori: </label>
                <input type="text" id="martori" name="user_martori">
              </li>
              <button type="submit" name="submit" >Sign up< /button>



        </ul>
       </form>







</body>

