<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        table , th , td {
            width: 100%;
            border: 2px solid black;
            text-align: center;
        }
       
    </style>
</head>
<body>
    <center>
    <img src="logo.png" alt="logo">
    
        <?php echo "    <h1 style="margin-top: 100px;">Student information</h1>" ?>
    </center>

    <h3 style="margin-top: 230px;">FullName : {{name}}</h3>
    <table >
        <thead>
            <tr>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Code Massar</th>
                <th>Moyenne Note</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{adress}}</td>
                <td>{{Tel}}</td>
                <td>{{cMassar}}</td>
                <td>{{moy}}</td>
            </tr>
        </tbody>
    </table>



    <div>
        <p style="text-align:center; margin-top: 220px; ">Signature :</p>
    </div>
    
 
    
</body>
</html>
