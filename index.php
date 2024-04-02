<html>
    <head>
        <title>CRUD-OPERATION</title>
    </head>
    <style>
        body{
            margin : 0;
            padding : 0; 
            background-color: #72bcf9;
        }
        .root{
            display: flex;
            flex-direction: row;
            gap: 20px;
            margin-left : 120px;
        }
        .insert{
            border-radius: 20px;
            box-shadow: 10px 10px 80px rgba(0, 0, 0, 0.5);
            margin-top: 160px;
            background-color: #1d415f;
            height : 300px;
            width: 300px;
            text-align: center;
        }
        .read{
            border-radius: 20px;
            box-shadow: 10px 10px 80px rgba(0, 0, 0, 0.5);
            margin-top: 160px;
            background-color:#1d415f;
            height : 300px;
            width: 300px;
            text-align: center;
        }
        .update{
            border-radius: 20px;
            box-shadow: 10px 10px 80px rgba(0, 0, 0, 0.5);
            margin-top: 160px;
            background-color: #1d415f;
            height : 300px;
            width: 300px;
            text-align: center;

        }
        .delete{
            border-radius: 20px;
            box-shadow: 10px 10px 80px rgba(0, 0, 0, 0.5);
            margin-top: 160px;
            background-color: #1d415f;
            height : 300px;
            width: 300px;
            text-align: center;
        }
        #but {
            background-color: black;
            color: white; 
            padding: 8px 16px;
            text-align: center; 
            display: inline-block; 
            font-size: 16px; 
            margin: 4px 2px;
            cursor: pointer; 
            border-radius: 10px;
        }
        #inp{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            width: 250px;
            height: 35px; 
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px; 
            font-size: 20px;
        } 
        #but:hover {
         background-color: #72bcf9; 
        }
    </style>
    <body>
        <div class="root">
            <div class="insert">
                <form action="insert.php" method="post"><br><br>
                    <input type="text" name="name" placeholder="name" id ="inp"><br><br>
                    <input type="text" name="email" placeholder="email" id ="inp"><br><br>
                    <input type="text" name="age" placeholder="age" id ="inp"><br><br>
                    <input type="submit" value="insert" id="but">
                </form>
            </div>
            <div class="update">
                <form action="update.php" method="post"><br><br>
                    <input type="text" name="name" placeholder="name" id ="inp"><br><br>
                    <input type="text" name="email" placeholder="email" id ="inp"><br><br>
                    <input type="text" name="age" placeholder="age" id ="inp"><br><br>
                    <input type="submit" value="update" id="but">
                </form>
            </div>
            <div class="read">
                <form action="read.php" method="post"><br><br>
                    <input type="text" name="email" placeholder="email" id ="inp"><br><br>
                    <input type="submit" value="read" id="but">
                </form>
            </div>
            <div class="delete">
                <form action="delete.php" method="post"><br><br>
                    <input type="text" name="email" placeholder="email" id ="inp"><br><br>
                    <input type="submit" value="delete" id="but">
                </form>
            </div>
        </div>
    </body>
</html>