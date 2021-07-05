<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            *{
                margin: 5;
                padding: 5;
            }
            .body{
                text-align: center;
            }
            .container{
                text-align: center;
                border: 7px rgb(30, 52, 124);
                width: 1400px;
                height: 1400px;
                padding: top 2px;
            }
            .btn{
                border:  1px solid #1d1c7a;
                background: none;
                padding: 10px 20px;
                font-size: 20px;
            }
            .slidecontainer {
                width: 68%;
                margin: 0.5% auto;
                position: relative;
            }
            .slider {
                -webkit-appearance: none;
                width: 40%;
                height: 30px;
                background: #bdbeff;
                outline: none;
                opacity: 0.7; 
            }
            .slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 15px;
                height: 15px;
                background: #1d1c7a;
            }
            #myRange1{
                -webkit-appearance:none;
                width: 90%;
                height: 7px;
                outline: none;
                border-radius: 3px;
            }
            #myRange2{
                -webkit-appearance:none;
                width: 90%;
                height: 7px;
                outline: none;
                border-radius: 3px;
            }
            #myRange3{
                -webkit-appearance:none;
                width: 90%;
                height: 7px;
                outline: none;
                border-radius: 3px;
            }
            #myRange4{
                -webkit-appearance:none;
                width: 90%;
                height: 7px;
                outline: none;
                border-radius: 3px;
            }
            #myRange5{
                -webkit-appearance:none;
                width: 90%;
                height: 7px;
                outline: none;
                border-radius: 3px;
            }
            #myRange6{
                -webkit-appearance:none;
                width: 90%;
                height: 7px;
                outline: none;
                border-radius:3px;
            }
        </style>
    </head>
    <body>
        <div class="slidecontainer">
            <form  action="db_connection.php" method = "POST">
                <h1 style="text-align: center; color: #34187a;">Control Panel</h1>

                <h3 style="text-align: center;"> motor 1</h3>
                <input type="range" min="0" max="180" value="90" class="slider" onchange="setData();" id="myRange1" name="m1">
                <p >Value: <span id="demo1"></span></p>

                <h3 style="text-align: center;"> motor 2</h3>
                <input type="range" min="0" max="180" value="90" class="slider" onchange="setData();" id="myRange2" name="m2">
                <p>Value: <span id="demo2"></span></p>

                <h3 style="text-align: center;"> motor 3</h3>
                <input type="range" min="0" max="180" value="90" class="slider" onchange="setData();" id="myRange3" name="m3">
                <p>Value: <span id="demo3"></span></p>

                <h3 style="text-align: center;"> motor 4</h3>
                <input type="range" min="0" max="180" value="90" class="slider" onchange="setData();" id="myRange4" name="m4">
                <p>Value: <span id="demo4"></span></p>

                <h3 style="text-align: center;"> motor 5</h3>
                <input type="range" min="0" max="180" value="90" class="slider" onchange="setData();" id="myRange5" name="m5">
                <p>Value: <span id="demo5"></span></p>

                <h3 style="text-align: center;"> motor 6</h3>
                <input type="range" min="0" max="180" value="90" class="slider" onchange="setData();" id="myRange6" name="m6">
                <p>Value: <span id="demo6"></span></p>
       
      
                <div class="container">     
                  <input type="submit"  class="btn btn1" value = "Save" name = "save"  style="border: 1px solid #1d1c7a ; background: none ; padding: 10px 20px ; font-size: 20px;" > 
                  <input type="button"  class="btn btn2" value = "Running" name = "Running"  onclick="GetData();"   style="border: 1px solid #1d1c7a ; background: none ; padding: 10px 20px ; font-size: 20px;" >
                </div>
            </form>
        </div>
    <script>
        function GetData() {
            var Test1 = document.getElementById("test11");
            const xhttp = new XMLHttpRequest();
            
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    mydata= JSON.parse(this.responseText);
                    if(mydata.op_id > 0){
                        document.getElementById("myRange1").value = mydata.motor1 ;
                        document.getElementById("myRange2").value = mydata.motor2 ;
                        document.getElementById("myRange3").value = mydata.motor3 ;
                        document.getElementById("myRange4").value = mydata.motor4 ;
                        document.getElementById("myRange5").value = mydata.motor5 ;
                        document.getElementById("myRange6").value = mydata.motor6 ;
                        setData();
                    }
                }
            };
            
            xhttp.open("GET", "db_connection.php?Running=Running");
            xhttp.send();
        }

        function setData(){ 
            var slider1 = document.getElementById("myRange1");
            var output1 = document.getElementById("demo1");
            output1.innerHTML = slider1.value;
     
            var slider2 = document.getElementById("myRange2");
            var output2 = document.getElementById("demo2");
            output2.innerHTML = slider2.value;
     
            var slider3 = document.getElementById("myRange3");
            var output3 = document.getElementById("demo3");
            output3.innerHTML = slider3.value;
     
            var slider4 = document.getElementById("myRange4");
            var output4 = document.getElementById("demo4");
            output4.innerHTML = slider4.value;
     
            var slider5 = document.getElementById("myRange5");
            var output5 = document.getElementById("demo5");
            output5.innerHTML = slider5.value;
     
            var slider6 = document.getElementById("myRange6");
            var output6 = document.getElementById("demo6");
            output6.innerHTML = slider6.value;        
        }
        </script> 
    </body>
</html>