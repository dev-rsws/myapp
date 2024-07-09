<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>


    <body>
        <h1>EDIT ARTIKEL</h1>   

        <form method="POST"> <!--ACTION TDK PERLU DI ISI KARENA DIARAHKAN KE METHOD / URL YG SAMA, baru klo mau di arahkan ke mrthod yg lain maka perlu diisi-->
            <!-- sementara di form method di isi method get/post untuk kirim data  -->
            
            <div class="judul">
                <label>JUDUL</label>
                <input type="text" name="title" value="<?php echo $blog['title']; ?>">
            </div>

            <div class="judul">
                <label>URL</label>
                <input type="text" name="url" value="<?php echo $blog['url']; ?>">
            </div>

            <div class="konten">
                <label>KONTEN</label>
                <textarea name="content" id="" cols="30" rows="10" >
                <?php echo $blog['content']; ?>"
                </textarea><br>
            </div>

            
            <button type="submit">Simpan</button>

        </form> <!--jika action dikosongi maka akan mengarah ke method yang sama, namun method harus POST agar data tidak telanjang -->
        
    </body>
</html>