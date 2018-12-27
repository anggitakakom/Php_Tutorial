<!DOCTYPE html>
<html>
    <head>
        <title>Simple Crud</title>
    </head>
    <body>
        <div>
           <a href="data.php">lihat data</a>
        </div>

        <div>
            <form method="POST" action="simpan.php">
                <table>
                    <tr>
                        <td>Id</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Telephone</td>
                        <td><input type="text" name="telepon"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="tambah" value="Tambah"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>