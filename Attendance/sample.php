<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var tot_amt=0;
        function fun_apple(){
            var apple_q=document.getElementById("apple_count").value;
            if(apple_q>=1){
                var apple_amt=apple_q*59;
                if(document.getElementById("apple_check").checked)
                tot_amt+=apple_amt;
                else
                tot_amt-=apple_amt;
            }
        }
        function fun_orange(){
            var orange_q=document.getElementById("orange_count").value;
            if(orange_q>=1){
                var orange_amt=orange_q*49;
                if(document.getElementById("orange_check").checked)
                tot_amt+=orange_amt;
                else
                tot_amt-=orange_amt;
            }
            
        }
        function fun_banana(){
            var banana_q=document.getElementById("banana_count").value;
            if(banana_q>=1){
                var banana_amt=banana_q*39;
                if(document.getElementById("banana_check").checked)
                tot_amt+=banana_amt;
                else
                tot_amt-=banana_amt;
            }
        }
        function final_amt(){
            tot_amt+=tot_amt*0.05;
            alert("Your total cost is "+tot_amt);
        }
    </script>
</head>
<body style="padding: 200px;">
    <form action="" onsubmit="final_amt();">
        <b><label>Fruit</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Quantity</label></b><br/><br/>
        <label>Apple</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="apple_count" type="number">
        <input id="apple_check" type="checkbox" onclick="fun_apple()"><br/><br/>
        <label>Orange</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="orange_count" type="number">
        <input id="orange_check" type="checkbox" onclick="fun_orange()"><br/><br/>
        <label>Banana</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="banana_count" type="number">
        <input id="banana_check" type="checkbox" onclick="fun_banana()"><br/><br/>
       <input type="submit" value="submit">
        <!-- <button onclick="final_amt()">Submit</button> -->
    </form>
</body>
</html>