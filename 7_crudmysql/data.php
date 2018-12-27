<!DOCTYPE html>
<html>
    <head>
        <title>menampilkan data</title>
    </head>
    <body>
        <table border="1px">
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>password</th>
                <th>telepon</th>
                <th></th>
            </tr>
            <?php
                include('config.php');
                $hasil = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id ASC");
                
                while($data = mysqli_fetch_array($hasil)){
                    echo"<tr>";
                        echo"<td>".$data['id']."</td>";
                        echo"<td>".$data['nama']."</td>";
                        echo"<td>".$data['password']."</td>";
                        echo"<td>".$data['telepone']."</td>";
                        echo "<td><a href=\"edit.php?id=$data[id]\">Edit</a>
                        |<a href=\"delete.php?id=$data[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                        echo"</tr>";
                }
            ?>
            
        </table>        
    </body>
</html>