<?php


// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM table_barang ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Indomart Frienchise Danu</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
 
<body>
    <div class="min-h-screen w-screen pt-[3em]" data-theme="light" 
    style="
  background-color: #fff;"
    >

    <div class="flex w-screen justify-center items-center flex-col mb-[3em]">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Logo_Indomaret.png/800px-Logo_Indomaret.png" alt="indo" class="h-[8em] w-fit shadow-xl rouded-xl">
        <h1 class="font-bold text-black text-lg">Franchise PT.Danu Sejahtera</h1>
    </div>
        
        <div class="mx-[20vw]" 
        
        >
            <div class="flex w-full justify-end">
                <a href="add.php" class="btn btn-sm p-2 btn-md font-bold mb-4 text-white shadow-xl hover:shadow-sm"
                style="

             background: #7918f2;
  background: -webkit-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: -o-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: -moz-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: linear-gradient(-68deg, #ac32e4 , #4801ff);""
                >Tambah Barang Baru</a>
            </div>
         <div class="overflow-hidden bg-red-500 rounded-xl shadow-md"
         style="
background: #e0e0e0;
box-shadow:  20px 20px 60px #bebebe,
             -20px -20px 60px #ffffff;"
         >
             <table class="table border text-black"
             style=" border-radius: 16px;
  overflow: hidden;
  background: #7918f2;
  background: -webkit-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: -o-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: -moz-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: linear-gradient(-68deg, #ac32e4 , #4801ff);"
             >
             <thead class="text-xs text-black uppercase">
                 <tr class="text-white">
                 <th class="text-center">No</th> 
                 <th class="text-center">Nama Barang</th> 
                 <th class="text-center">Harga</th> 
                 <th class="text-center">Kategori</th> 
                 <th class="text-center">Action</th>
                 </tr>
             </thead>
             <tbody class="bg-white">
             <?php
             $i = 1;
while ($user_data = mysqli_fetch_array($result)) :
?>
    <tr>
        <td class="font-semibold text-center"><?= $i ?></td>
        <td class="font-semibold text-center"><?= $user_data['nama_barang'] ?></td>
        <td class="font-semibold text-center">Rp. <?= $user_data['harga'] ?>, 00</td>
        <td class="font-semibold text-center"><?= $user_data['kategori'] ?></td>
        <td class="text-center">
            <a href="edit.php?id=<?= $user_data['id'] ?>" class="text-yellow-500">
                <span class="material-symbols-outlined">
                    edit_square
                </span>
            </a> 
            <span class="relative bottom-[7] font-bold">|</span>
            <a href="delete.php?id=<?= $user_data['id'] ?>" onclick="return confirm('Apakah Kamu Yakin ingin menghapus data ini?')" class="text-red-600">
                <span class="material-symbols-outlined">
                    delete
                </span>
            </a>
        </td>
    </tr>
    <?php
    $i++;
endwhile;
?>
             </tbody>
             </table>
         </div>
     </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    
</body>
</html>

