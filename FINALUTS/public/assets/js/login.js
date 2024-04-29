document.addEventListener('DOMContentLoaded', function(event) {
    // Ambil tombol-tombol dengan menggunakan ID atau class masing-masing
    const uploadButton = document.getElementById('DivButUp');
    const linkButton = document.getElementById('DivButLink');

    // Menambahkan event listener untuk tombol Upload Foto
    uploadButton.addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan aksi bawaan dari tombol
        // Tambahkan kode JavaScript yang ingin dijalankan saat tombol di klik
        console.log('Tombol Upload Foto ditekan!');
        // Misalnya, tampilkan pesan atau lakukan tindakan lain
    });

    // Menambahkan event listener untuk tombol Link Image
    linkButton.addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan aksi bawaan dari tombol
        // Tambahkan kode JavaScript yang ingin dijalankan saat tombol di klik
        console.log('Tombol Link Image ditekan!');
        // Misalnya, tampilkan pesan atau lakukan tindakan lain
    });
    event.preventDefault();
    console.log("Tes");
});
