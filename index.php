<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form style="text-align: center;" action="calc.php" method="post">
        <label for="side_one">Side One</label>
        <input type="number" name="side_one" id="side_one" placeholder="Enter Side One" min="0" max="100" step="0.01">
        <br><br>
        <label for="side_two">Side Two</label>
        <input type="number" name="side_two" id="side_two" placeholder="Enter Side Two" min="0" max="100" step="0.01">
        <br><br>
        <label for="side_three">Side Three</label>
        <input type="number" name="side_three" id="side_three" placeholder="Enter Side Three" min="0" max="100" step="0.01">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <script>
        let side_one = document.getElementById('side_one');
        let side_two = document.getElementById('side_two');
        let side_three = document.getElementById('side_three');

        side_one.addEventListener('input', function(){
            if(side_one.value > 100 || side_one.value < 0){
                alert('Please enter value between 0 to 100');
                side_one.value = '';
            }
            if(side_one.type != 'number'){
                alert('นายแอบเปลี่ยน type หรอ');
                side_one.value = '';
                side_one.type = 'number';
            }
        });
        side_two.addEventListener('input', function(){
            if(side_two.value > 100 || side_two.value < 0){
                alert('Please enter value between 0 to 100');
                side_two.value = '';
            }
            if(side_two.type != 'number'){
                alert('นายแอบเปลี่ยน type หรอ');
                side_one.value = '';
                side_one.type = 'number';

            }
        });
        side_three.addEventListener('input', function(){
            if(side_three.value > 100 || side_three.value < 0){
                alert('Please enter value between 0 to 100');
                side_three.value = '';
            }
            if(side_three.type != 'number'){
                alert('นายแอบเปลี่ยน type หรอ');
                side_one.value = '';
                side_one.type = 'number';
            }
        });
    </script>
</body>
</html>