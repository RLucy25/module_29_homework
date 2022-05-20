<h1>Портфолио</h1>
<p>
    <table border="1">
       <strong> Вниманию предлагаются следующие работы:</strong>
        <tr><td>год</td><td>сайт</td><td>описание</td></tr>
        <?php
        foreach($data as $row)
        {
            echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
        }
        ?> 
    </table>
</p>