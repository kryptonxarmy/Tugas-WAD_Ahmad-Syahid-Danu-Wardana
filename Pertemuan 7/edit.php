<?php
// include database connection file
require("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama_barang=$_POST['nama_barang'];
    $harga=$_POST['harga'];
    $kategori=$_POST['kategori'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE table_barang SET nama_barang='$nama_barang',kategori='$kategori',harga='$harga' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM table_barang WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama_barang = $user_data['nama_barang'];
    $kategori = $user_data['kategori'];
    $harga = $user_data['harga'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
 
<body>
    
    
    <div class="w-screen h-screen" data-theme="light">
        <div class="h-screen w-screen justify-center py-[6em] flex bg-[#6372B3]">
            <form name="update_user" method="post" action="edit.php" class="px-[4em] justify-center items-start  bg-white shadow-xl rounded-xl gap-4 flex flex-col"
            style="box-shadow:  20px 20px 60px black;"
            >
                        <div>
                            <h1 class="font-semibold">Nama Barang</h1>
                            <input type="text" name="nama_barang" class="input input-bordered w-full" value=<?php echo $nama_barang;?>>
                        </div>
                   
                        <div>
                            <h1 class="font-semibold">Kategori</h1>
                            <!-- <input type="text" name="email" class="input input-bordered w-full"  value=<?php echo $kategori;?>> -->
                            <select name="kategori" class="input input-bordered w-full">
                                <option value="Kategori 1" <?php echo ($kategori == 'Kategori 1') ? 'selected' : ''; ?>>Kategori 1</option>
                                <option value="Kategori 2" <?php echo ($kategori == 'Kategori 2') ? 'selected' : ''; ?>>Kategori 2</option>
                                <option value="Kategori 3" <?php echo ($kategori == 'Kategori 3') ? 'selected' : ''; ?>>Kategori 3</option>
                                <option value="Kategori 4" <?php echo ($kategori == 'Kategori 4') ? 'selected' : ''; ?>>Kategori 4</option>
                            </select>
                        </div>kategori
                        <div>
                            <h1 class="font-semibold">Harga</h1>
                            <input type="text" name="harga" class="input input-bordered w-full" value=<?php echo $harga;?>>                     
                        </div>
                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

                                <div class="w-full mt-4 flex flex-col justify-center items-center gap-3">
                                    <input type="submit" name="update" value="Update" class="btn bg-green-500 w-[80%] shadow-xl">
                                    <a href="index.php" class="btn bg-warning w-[80%] shadow-xl">CANCEL</a>
                                </div>
                            </div>
                   
            </form>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>

?>