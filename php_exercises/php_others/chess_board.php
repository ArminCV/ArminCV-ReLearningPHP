<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<body>
<h1>Chess Board</h1>
<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    for($row=1; $row<=8; $row++)
    {
        echo "<tr>";
        for($column=1; $column<=8; $column++)
        {
            $total = $row + $column;
            if($total % 2 == 0)
            {
                echo "<td height=30px width=30px bgcolor=white>";
            }
            else 
            {
                echo "<td height=30px width=30px bgcolor=black>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>