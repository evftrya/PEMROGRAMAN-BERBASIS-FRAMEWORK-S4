// Ambil elemen tombol yang ada di dalam div dengan kelas 'edit-button'
const editButton = document.querySelector('.edit-button button');
const deleteButton = document.querySelector('.delete-button button');



// Tambahkan event listener untuk menangkap klik pada tombol
editButton.addEventListener('click', function() {
    // Ambil elemen span dengan kelas 'edit-icon'
    let looks = document.querySelectorAll("#detil");
    let edits = document.querySelectorAll("#detiledit");
    let dels = document.querySelectorAll("#detildelete");


    // console.log(looks[1].textContent);
    const spanElement = document.querySelector('.edit-icon');
    // console.log(delBut.length);

    // Memeriksa apakah elemen span ditemukan
    // console.log('Isi dari span:', spanElement.textContent);
    if (spanElement.textContent === '✎') {
        // Tampilkan isi dari elemen span menggunakan alert atau console log
        // Jika ingin menampilkan di console log

        // console.log('Isi dari span:', spanElement.textContent);
        spanElement.textContent = '✖';
        looks.forEach(e => {
            e.hidden = true;
        });

        edits.forEach(e => {
            e.hidden = false;
        });

        dels.forEach(e => {
            e.hidden = true;
        });
        deleteButton.disabled = true;


    } else {
        looks.forEach(e => {
            e.hidden = false;
        });

        edits.forEach(e => {
            e.hidden = true;
        });
        edits.forEach(e => {
            e.hidden = true;
        });
        deleteButton.disabled = false;
        spanElement.textContent = '✎';

    }
});

deleteButton.addEventListener('click', function() {
    // Ambil elemen span dengan kelas 'edit-icon'
    const spanElement = document.querySelector('.delete-icon');
    let looks = document.querySelectorAll("#detil");
    let edits = document.querySelectorAll("#detiledit");
    let dels = document.querySelectorAll("#detildelete");

    // Memeriksa apakah elemen span ditemukan
    // console.log('Isi dari span:', spanElement.textContent);
    if (spanElement.textContent === '🗑') {
        // Tampilkan isi dari elemen span menggunakan alert atau console log
        // Jika ingin menampilkan di console log

        // console.log('Isi dari span:', spanElement.textContent);
        looks.forEach(e => {
            e.hidden = true;
        });

        edits.forEach(e => {
            e.hidden = true;
        });

        dels.forEach(e => {
            e.hidden = false;
        });
        editButton.disabled = true;
        spanElement.textContent = '✖';

    } else {
        looks.forEach(e => {
            e.hidden = false;
        });

        edits.forEach(e => {
            e.hidden = true;
        });

        dels.forEach(e => {
            e.hidden = true;
        });
        editButton.disabled = false;
        spanElement.textContent = '🗑';
    }
});