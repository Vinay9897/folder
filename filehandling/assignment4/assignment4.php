<form action="" method="POST">
            <div class="leftboxes">
                <input type="submit" value="Md5()"  id="md5" name="md5">
                <input type="submit" value="Number_format()"  id="numberformat" name="numberformat">
                <input type="submit" value="Ord()"  id="ord" name="ord">
                <input type="submit" value="Rtrim()"  id="Rtrim" name="Rtrim">
            </div>
            <div class="midboxes">
                <input type="submit" value="Str_replace()"  id="strreplace" name="strreplace">
                <input type="submit" value="Str_len()"  id="strlen" name="strlen">
                <input type="submit" value="Strcasecmp()"  id="Strcasecmp" name="Strcasecmp">
                <input type="submit" value="Strpos()"  id="strpos" name="strpos">
            </div>
            <div class="rightboxes">
                <input type="submit" value="Substr()"  id="substr" name="substr">
                <input type="submit" value="Strlower()"  id="strlower" name="strlower">
                <input type="submit" value="Bintohex()"  id="bintohex" name="bintohex">
                <input type="submit" value="Chop()"  id="chop" name="chop">
            </div>
        </form>
    </div>
    <div class="midrow">
        <table cellpadding=10 cellspacing=5>
            <?php
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if(isset($_POST['md5']))
                    {
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = str >Enter The String :</label>
                                    <input type=text name =str id=str>
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output']))
                    {   
                        $data = $_POST['str'];
                        if(empty($data)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = md5($data);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['ord']))
                    {
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = str >Enter The String :</label>
                                    <input type=text name =str id=str>
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output1 value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output1']))
                    {   
                        $data = $_POST['str'];
                        if(empty($data)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = ord($data);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['Rtrim']))
                    {
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = str >Enter The String :</label>
                                    <input type=text name =str id=str>
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output2 value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output2']))
                    {   
                        $data = $_POST['str'];
                        if(empty($data)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = rtrim($data);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['strlower']))
                    {
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = str >Enter The String :</label>
                                    <input type=text name =str id=str>
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output3 value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output3']))
                    {   
                        $data = $_POST['str'];
                        if(empty($data)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = strtolower($data);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['bintohex']))
                    {
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = str >Enter The String :</label>
                                    <input type=text name =str id=str>
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output4 value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output4']))
                    {   
                        $data = $_POST['str'];
                        if(empty($data)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = bin2hex($data);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['strlen']))
                    {
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = str >Enter The String :</label>
                                    <input type=text name =str id=str>
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output5 value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output5']))
                    {   
                        $data = $_POST['str'];
                        if(empty($data)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = strlen($data);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['numberformat']))
                    {
                        echo "<form method=post action= >
                        <tr>
                            <td>
                                <label>Enter The Number :</label>
                                <input type=number name = num >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Enter The Decimal :</label>
                                <input type=number name = num1 >
                            </td>
                        </tr> 
                        <tr><td><input type =submit name=output6 value=Output></td></tr>
                        </form>"; 
                    }
                    if(isset($_POST['output6']))
                    {   
                        $data = $_POST['num'];
                        $data2 = $_POST['num1'];
                        if(empty($data)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = number_format($data,$data2);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['Strcasecmp']))
                    {
                        echo "<form method=post action= >
                        <tr>
                            <td>
                                <label>Enter The String :</label>
                                <input type=text name = st1 >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Enter The String :</label>
                                <input type=text name = st2 >
                            </td>
                        </tr> 
                        <tr><td><input type =submit name=output7 value=Output></td></tr>
                        </form>";   
                        
                    }
                    if(isset($_POST['output7']))
                    {   
                        $data = $_POST['st1'];
                        $data2 = $_POST['st2'];
                        if(empty($data) || empty($data2)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = strcasecmp($data,$data2);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['chop']))
                    {
                        echo "<form method=post action= >
                        <tr>
                            <td>
                                <label>Enter The String :</label>
                                <input type=text name = st3 >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Enter The String :</label>
                                <input type=text name = st4 >
                            </td>
                        </tr> 
                        <tr><td><input type =submit name=output8 value=Output></td></tr>
                        </form>"; 
                    }
                    if(isset($_POST['output8']))
                    {   
                        $data = $_POST['st3'];
                        $data2 = $_POST['st4'];
                        if(empty($data)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = chop($data,$data2);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['strreplace']))
                    {
                        $strreplace = true;
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = ss1>Enter The String :</label>
                                    <input type=text name =ss1 id=ss1 placeholder = search >
                                </td>
                                <td>
                                    <label for = ss2 >Enter The String :</label>
                                    <input type=text name =ss2 id=ss2 placeholder = replace >
                                </td>
                                <td>
                                    <label for = ss4 >Enter The String :</label>
                                    <input type=text name =ss3 id=ss4 placeholder = String >
                                </td>
                                <td>
                                    <label for = ss5 >Enter The String :</label>
                                    <input type=text name =ss4 id=ss5 placeholder = count >
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output9 value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output9']))
                    {   
                        $data = $_POST['ss1'];
                        $data2 = $_POST['ss2'];
                        $data3 = $_POST['ss3'];
                        $data4 = $_POST['ss4'];
                        if(empty($data) || empty($data2) || empty($data3) || empty($data4)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = str_replace($data,$data2,$data3,$data4);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['substr']))
                    {
                        
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = strr1 >Enter The String :</label>
                                    <input type=text name =strr1 id=strr1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for = str12 >Enter The Start Index :</label>
                                    <input type=text name =str12 id=str12>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for = str13 >Enter The Length :</label>
                                    <input type=text name =str13 id=str13>
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output10 value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output10']))
                    {   
                        $data = $_POST['strr1'];
                        $data2 = $_POST['str12'];
                        $data3 = $_POST['str13'];
                        if(empty($data) || empty($data2) || empty($data3)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = substr($data,$data2,$data3);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                    if(isset($_POST['strpos']))
                    {
                        echo "<form method=post action= >
                            <tr>
                                <td>
                                    <label for = trr1 >Enter The String :</label>
                                    <input type=text name =trr1 id=trr1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for = tr12 >Enter The Start Index :</label>
                                    <input type=text name =tr12 id=tr12>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for = tr13 >Enter The Length :</label>
                                    <input type=text name =tr13 id=tr13>
                                </td>
                            </tr>
                            <tr><td><input type =submit name=output11 value=Output></td></tr>
                            </form>";
                    }
                    if(isset($_POST['output11']))
                    {   
                        $data = $_POST['trr1'];
                        $data2 = $_POST['tr12'];
                        $data3 = $_POST['tr13'];
                        if(empty($data) || empty($data2) || empty($data3)){
                            echo "<tr><td>Can Not Be Empty!</td></tr>";
                        }
                        else{
                            $val = substr($data,$data2,$data3);
                            echo "<tr><td> Output : <input type=button value=$val </td></tr>";
                        }
                        echo "<form method=post action = >
                            <tr><td><input type=submit name = reset value=Reset </td></tr>
                        </form>";
                        if(isset($_POST['reset']))
                        {
                            header("refresh:0; url=index.html");
                        }
                    }
                }
            ?>