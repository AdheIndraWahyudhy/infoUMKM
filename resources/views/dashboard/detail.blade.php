<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="detail.css">
    <title>Document</title>
    <style>
        .detail-card .detail {
    display: flex;
    flex-direction: row;
    align-self: flex-start;
    padding: 15px;
    border-radius: 30px;
    box-shadow: 2px 4px 8px 2px rgba(0.5, 0, 0, 0.5);
}

.left {
    padding: 30px;
}

.left img {
    height: 300px;
    border-radius: 15px;
    flex-direction: column; 
}

.small-image img {
    height: 90px;
    padding: 5px;
}

.small-image {
    display: flex; 
    justify-content: center; 
}

.right {
    display: flex;
    flex-direction: column;
    position: relative;
}

#title h1,
.desc h3 {
    margin: 0;
    padding-top: 30px;
}

button {
    width: 200px;
    height: 30px;
    background-color: rgb(17, 199, 227);
    border-radius: 15px;
    color: white;
    border: none;
}

button:hover {
    background-color: rgb(0, 150, 170); 
}

p {
    text-align: justify;
}

.produk .title-produk{
    text-align: center;
}

.list {
    width: 100%;
    text-align: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
  
.list-item {
    flex: 0 1 calc(20% - 20px);
    padding: 20px;
    margin: 10px;
    box-shadow: 2px 4px 8px 2px rgba(0.5, 0, 0, 0.5);
    border-radius: 5px;
}

.name h2 {
    margin-top: 10px;
    margin-bottom: 0;
}

.list-item h3 {
    margin-top: 0;
}

.list img {
    height: 170px;
    border-radius: 5px;
}
    </style>
</head>
<body>
        <div class="detail-card">
            <div class="detail">
                <div class="left">
                    <img src="./img/resto.webp" alt="resto">
                    <div class="small-image">
                        <img src="./img/resto.webp" alt="resto">
                        <img src="./img/resto.webp" alt="resto">
                        <img src="./img/resto.webp" alt="resto">
                    </div>
                </div>

                <div class="right">
                    <div id="title">
                        <h1>Warung Kalimantan</h1>
                    </div>
                    <div class="desc">
                        <h3>★ ★ ★ ★ ★ | 40 Penilian | Jl. Kalimantan No. 57</h3>
                        <p>Lokasi : <a href="https://maps.app.goo.gl/X6oSW9FbT86SDNUR8">https://maps.app.goo.gl/X6oSW9FbT86SDNUR8</a></p>
                        <p>Website : -</p>
                        <p>Contact : -</p>
                        <p>Deskripsi : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button>Beri Komentar</button>
                </div>
            </div>
        </div>

        <div class="produk">
            <div class="title-produk">
                <h1>Produk</h1>
                <div class="list">
                    <div class="list-item">
                        <img src="./img/resto.webp" alt="resto">
                        <div class="name"><h2>Bakso</h2></div>
                        <h3>Rp. 15.000</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="list-item">
                        <img src="./img/resto.webp" alt="resto">
                        <div class="name"><h2>Ketoprak</h2></div>
                        <h3>Rp. 15.000</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="list-item">
                        <img src="./img/resto.webp" alt="resto">
                        <div class="name"><h2>Rendang</h2></div>
                        <h3>Rp. 15.000</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
