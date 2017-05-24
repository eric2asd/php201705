<form action="eric18.php" method="get">
    Name:<input type="text" name="account"><br>
    Password:<input type="password" name="passwd"><br>
    birthday:<input type="date" name="birthday"><br>
    <select name="area">
        <option value="406">北屯區</option>
        <option value="407">西屯區</option>
        <option value="408">南屯區</option>
        <option value="404">北區</option>
    </select><br>
    <input type="radio" name="gender" value="F" checked>female
    <input type="radio" name="gender" value="M">male<br>
    <input type="checkbox" name="like[]" value="1"> <label>禪定</label>
    <input type="checkbox" name="like[]" value="2"><label>法會</label>
    <input type="checkbox" name="like[]" value="3"><label>教導會</label>
    <input type="checkbox" name="like[]" value="4"><label>接引利他</label>
    <br>
    <textarea name="memo"></textarea><br>
    <input type="file" name="file"><br>
    <input type="submit" value="送出">

</form>