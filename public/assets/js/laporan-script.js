window.onload = function() {
    const table = document.getElementById("laporanTable");

    // Data untuk mengisi tabel
    const data = [
        ["1", "User 1", "Toko 1", "user1@example.com", "10"],
        ["2", "User 2", "Toko 2", "user2@example.com", "15"],
        ["3", "User 3", "Toko 3", "user3@example.com", "20"]
    ];

    // Membuat elemen tombol
    const button = document.createElement("button");
    button.innerHTML = "Lihat Laporan";
    button.className = "aksi-btn";

    // Mengisi tabel dengan data
    for (let i = 0; i < data.length; i++) {
        let row = table.insertRow(i + 1); // Menambahkan baris baru
        for (let j = 0; j < data[i].length; j++) {
            let cell = row.insertCell(j); // Menambahkan sel baru
            cell.innerHTML = data[i][j]; // Mengisi sel dengan data
        }
        let cell = row.insertCell(data[i].length); // Menambahkan sel untuk tombol
        cell.appendChild(button.cloneNode(true)); // Menambahkan tombol ke sel
    }
};
