<!doctype html>
<html>
    <head>
        <title>APPLICATION</title>
        <style>
            h2{color: aqua;}
            body{
                background-color: blue;
                color: #f2b3d5;
                opacity: 1;
                padding: 2px;
            }
            form{
                background-color: #b2cdf3;
                color: brown;
                font: optional;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h2><b><i><u>Input Form</u></i></b></h2>
        <form action="" method="post">
            <fieldset>
                <legend>Personal Details</legend>
                First Name:<input type="text" name="fn" value="first"> <br><br>
                Second Name:<input type="text" name="sn" value="second"> <br><br>
                Last Name:<input type="text" name="ln" value="last"> <br><br>
                Gender: <input type="checkbox" name="male" value="male">Male
                <input type="checkbox" name="female" value="female">Female 
                <input type="checkbox" name="other" value="other">Other <br><br>
                Phone No:<input type="number" name="pn" value="phone"> <br><br>
                Email Address:<input type="email" name="eml" value="email">
            </fieldset><br>
            <fieldset>
                <legend>Family Details</legend>
                Father's Name: <input type="text" name="fan" value="father"><br><br>
                Phone No: <input type="number" name="fpn" value="no"><br><br>
                Occupation: <input type="text" name="oc" value="occ"><br><br>
                Mother's Name: <input type="text" name="mn" value="mother"><br><br>
                Phone No: <input type="number" name="mpn" value="num"><br><br>
                Occupation: <input type="text" name="occ" value="mcc"><br><br>
                Guardian's Name: <input type="text" name="gn" value="guard"><br><br>
                Phone No: <input type="number" name="gpn" value="gum"><br><br>
                Occupation: <input type="text" name="ogc" value="gcc">
            </fieldset><br>
            <fieldset>
                <legend>School Details</legend>
                Adm No:
            </fieldset>
        </form>
    </body>
</html>