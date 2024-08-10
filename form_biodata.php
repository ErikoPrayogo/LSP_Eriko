<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Biodata</title>
</head>

<body>
    <div class="container">
        <h2>Input Biodata</h2>
        <form action="/">
                <div>
                    <span>NIK : </span>
                    <input type="text">
                </div>
                <div>
                    <span>Nama : </span>
                    <input type="text"></div>            
                <div>
                    <span>Tempat Lahir : </span>
                    <input type="text">
                </div>            
                <div>
                    <span>Tanggal Lahir : </span>
                    <input type="text">
                </div>            
                <div>
                    <span>Jenis Kelamin : </span>
                    <input type="text">
                </div>
            
                <div>
                    <span>Alamat : </span>
                    <input type="text">
                </div>
                <div>
                    <span>Agama : </span>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            <div class="footer">
                <button type="button">Send</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
    </div>

</body>

</html>