<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="calculator.css" />
</head>
<body>
<div id="content">
    <h1>Simple Calculator</h1>
    <form method="post" action="displayCalculator.php">
        <div id="data">
            <label>First Operand:</label>
            <input type="text" name="num1"/><br/>
            <label>Operator:</label>
            <select id="operator" name="pheptinh">
                <option>Addition</option>
                <option>Substraction</option>
                <option>Multiply</option>
                <option>Division</option>
            </select><br/>
            <label>Second Operand:</label>
            <input type="text" name="num2"/><br/>

        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/>
        </div>
    </form>
</div>
</body>
</html>