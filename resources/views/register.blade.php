<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Halaman pertamaku</title>


                    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

            <!-- Styles -->
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }

                .full-height {
                    height: 100vh;
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>

     </head>
     <body>
            <h2>Buat Account Baru!</h2>
                <h4>Sign Up Form</h4>
                <form action="/welcomes">
                    <p>First name:</p>
                    <input type="text" name="first_name">

                    <p>Last name:</p>
                    <input type="text" name="last_name">

                    <p>Gender:</p>
                    <input type="radio" name="gender" valeu="L" checked>Male

                    <br>

                    <input type="radio" name="gender" value="P" checked>Female

                    <br>

                    <input type="radio" name="gender" value="0" checked>Other

                    <br>
                    
                    <p>Nationality:</p>
                    <select>
                        <option>Indonesian</option>
                        <option>Singapuran</option>
                        <option>Malaysian</option>
                        <option>Australian</option>
                    </select>

                    <p>Language Spoken:</p>
                    <input type="checkbox">Bahasa Indonesia

                    <br>

                    <input type="checkbox">English

                    <br>

                    <input type="checkbox">Other
                    
                    <br>

                    <p>Bio:</p>
                    <textarea cols="30" rows="10"></textarea>
                    
                    <br>
                
                    <input type="submit" value="Sign Up">
                </form>
     </body>
</html>