// Fungsi untuk memvalidasi dan mengirimkan komentar
  const submitComment = () => {
    const rating = document.querySelector('input[name="rating"]:checked');
    const comment = document.getElementById('comment').value;

    // Periksa apakah rating dan komentar telah diberikan
    if (!rating || comment.trim() === '') {
      alert('Harap Beri Rating & Komentar');
      return;
    }

    // Dapatkan elemen daftar komentar
    const commentList = document.getElementById('commentList');

    // Buat elemen daftar baru untuk komentar
    const listItem = document.createElement('li');

    // Tampilkan bintang rating dengan warna yang diinginkan (#ffc107) untuk yang dipilih
    const ratingValue = rating.value;
    const starsSelected = '★ '.repeat(ratingValue);
    const starsUnselected = '☆ '.repeat(5 - ratingValue);

    const ratingElement = document.createElement('div');
    ratingElement.className = 'rating';
    ratingElement.innerHTML = starsSelected + starsUnselected;
    ratingElement.style.color = '#ffc107'; // Warna bintang yang dipilih
    listItem.appendChild(ratingElement);


    // Tampilkan tanggal saat ini
    const currentDate = new Date().toLocaleDateString();
    const dateElement = document.createElement('span');
    dateElement.textContent = ` | ${currentDate} | `;
    listItem.appendChild(dateElement);

    // Tampilkan komentar
    const commentText = document.createElement('span');
    commentText.textContent = comment;
    listItem.appendChild(commentText);

    // Tambahkan komentar baru ke daftar komentar
    commentList.appendChild(listItem);

    // Tutup popup komentar
    closeCommentPopup();
  };

  // Fungsi untuk menutup popup komentar
  const closeCommentPopup = () => {
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
  };

  // Fungsi untuk membuka popup komentar
  const openCommentPopup = () => {
  const modal = document.getElementById('myModal');
  modal.style.display = 'block';

  // Set nilai-nilai default untuk formulir komentar
  const ratingInputs = document.querySelectorAll('input[name="rating"]');
  ratingInputs.forEach(input => (input.checked = false));

  const commentInput = document.getElementById('comment');
  commentInput.value = '';
};
