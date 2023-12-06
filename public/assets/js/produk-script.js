function openPopup(message) {
    const popup = document.getElementById('popup');
    const successMessage = document.getElementById('popupMessage'); // Sesuaikan ID ini dengan ID elemen pesan popup

    // Mengganti pesan pop-up
    successMessage.textContent = message;

    // Menampilkan pop-up
    popup.style.display = 'flex';

}

document.getElementById('submitBtn').addEventListener('click', function() {
    if (!isFormValid()) {
        openPopup('Silakan Isi Semua Form');
    } else {
        // Logika untuk handle form submission
        addDataToTable();

        // Reset form setelah data berhasil disimpan
        productForm.reset();

        // Tampilkan pop-up "Produk Berhasil Ditambahkan"
        openPopup('Produk Berhasil Ditambahkan');
    }
});

document.getElementById('cancelBtn').addEventListener('click', function() {
    closePopup();
});

function isFormValid() {
    const productName = document.getElementById('productName').value;
    const productPrice = document.getElementById('productPrice').value;
    const productCategory = document.getElementById('productCategory').value;
    const productPhoto = document.getElementById('productPhoto').value;
    const productDetail = document.getElementById('productDetail').value;

    return productName && productPrice && productCategory && productPhoto && productDetail;
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}

function closeSuccessPopup() {
    document.getElementById('popup').style.display = 'none';

    // Menentukan elemen "Data Produk" dan menggulir ke bawah
    const dataProdukElement = document.getElementById('dataProduk');
    dataProdukElement.scrollIntoView({ behavior: 'smooth' });
}

    function addDataToTable() {
        const productName = document.getElementById('productName').value;
        const productPrice = document.getElementById('productPrice').value;
        const productDetail = document.getElementById('productDetail').value;

        const newRow = productTable.insertRow(-1);
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3);
        const cell5 = newRow.insertCell(4);

        cell1.textContent = productTable.rows.length - 1;
        cell2.textContent = productName;
        cell3.textContent = productPrice;
        cell4.textContent = productDetail;
        cell5.innerHTML = '<button class="edit-btn" type="button" onclick="editRow(this)">Edit</button>' +
                        '<button class="delete-btn" type="button" onclick="deleteRow(this)">Hapus</button>';
    }


    function editRow(button) {
        // Tampilkan pop up konfirmasi
        document.getElementById('editConfirmationPopup').style.display = 'block';
        
        // Simpan referensi ke tombol edit yang diklik
        window.editButton = button;
    }
    
    function closeEditConfirmationPopup() {
        // Tutup pop up konfirmasi
        document.getElementById('editConfirmationPopup').style.display = 'none';
    }
    
    function proceedWithEdit() {
        // Tutup pop up konfirmasi
        closeEditConfirmationPopup();
        
        // Dapatkan baris tabel yang berisi tombol edit yang diklik
        const row = window.editButton.parentNode.parentNode;
        
        // Dapatkan data dari baris tabel
        const productName = row.cells[1].textContent;
        const productPrice = row.cells[2].textContent;
        const productDetail = row.cells[3].textContent;
        
        // Isi form produk dengan data dari baris tabel
        document.getElementById('productName').value = productName;
        document.getElementById('productPrice').value = productPrice;
        document.getElementById('productDetail').value = productDetail;
        
        // Hapus baris tabel
        row.parentNode.removeChild(row);
    }
    

    function deleteRow(btn) {
        const row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

    cancelBtn.addEventListener('click', function() {
        productForm.reset();
    });
