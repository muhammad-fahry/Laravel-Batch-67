<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Create New Account</h1>

    <h2>Sign Up Form</h2>

    <form action="{{ route('form.welcome') }}" method="post">
        @csrf
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="First Name"><br><br>
        
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" placeholder="Last Name"><br><br>

        <label>Gender :</label>
        <br>
        <input type="radio" name="Male" value="1"/> Male <br/>
        <input type="radio" name="Female" value="2"/> Female <br/>
        <input type="radio" name="Other" value="3"/> Other <br/><br>

        <label> Nationality </label><br>
        <select name="kota">

            <option value="jakarta">Jakarta</option>
            <option value="bandung">Bandung</option>
            <option value="surabaya">Surabaya</option>
            <option value="yogyakarta">Yogyakarta</option>
            <option value="medan">Medan</option>
        </select><br><br>

        <label>LANGUAGE</label><br>
        <input type="checkbox" name="bahasa" value="Bahasa Indonesia"> Bahasa Indonesia<br>
        <input type="checkbox" name="bahasa" value="English"> English<br>
        <input type="checkbox" name="bahasa" value="Other"> Other<br><br>


        <label for="usia">Age:</label><br>
        <input type="number" id="usia" name="usia"><br><br>

        <label for="password">Password</label>
        <br>
        <input type="password" id="password" name="password" placeholder="Password"><br><br>


        <label>Address</label><br>
        <textarea name="alamat" rows="5" cols="30"></textarea><br><br>
        <button type="submit">Register</button>
        <br><br>
        <label for="newsletter">I want to join the SanberBook newsletter</label>
        <input type="checkbox" id="newsletter" name="newsletter" value="yes"><br><br>
        </form>


</body>

</html>