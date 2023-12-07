<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/header-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/detail-style.css')}}">
</head>
<body>
    <!-- NAVBAR -->
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{url('user/')}}">UMKM</a></li>
                <li><a href="{{url('user/account')}}">Account</a></li>
                <li><a href="{{url('user/store')}}">Store</a></li>
                @if ($store != null)
                    <li><a href="{{url('user/product')}}">Product</a></li>
                @endif
                <li><i class="fa-solid fa-user" ></i>Hallo, {{$user}}</li>
                <li><a href="{{url('auth/logout/user')}}">Logout <i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="open"></i>
            </label>
            <div class="sidebar">
                <label for="check">
                    <i class="fas fa-bars" id="btn"></i>
                </label>
                <ul>
                    <li><a href="">UMKM</a></li>
                    <li><a href="">Account</a></li>
                    <li><a href="">Store</a></li>
                    @if ($store != null)
                    <li><a href="">Product</a></li>
                    @endif
                    <li><a href="{{url('auth/logout/user')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="main-content">
            <div class="detail-card">
                <div class="detail">
                    <div class="left">
                        <img src="{{url('StoresImg/'.$store->store_image)}}" style="object-fit: cover" alt="resto">
                        <div class="small-image">
                            @foreach ($products as $key => $product)
                                @if($key < 3)
                                    <img src="{{ url('ProductsImg/'.$product->product_image) }}" alt="resto">
                                @endif
                            @endforeach
                        </div>                        
                    </div>
                    <div class="right">
                        <div id="title">
                            <h1>{{$store->store_name}}</h1>
                        </div>
                        <div class="desc">
                            <h3>
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < round($store->rating))
                                        <span class="star">&#9733;</span>
                                    @else
                                        <span class="star">&#9734;</span>
                                    @endif
                                @endfor
                             | {{$store->rating}} Penilian</h3>
                            <p>Lokasi : <a href="{{$store->link_address}}">{{$store->store_address}}</a> </i></p>
                            <p>Contact : {{$owner->number_phone}}</p>
                            <p>Deskripsi : {{$store->description}}</p>
                        </div>
                        <a class="button" onclick="openCommentPopup()">Beri Komentar</a>

                    </div>
                </div>
            </div>
    
            <div class="produk">
                <div class="title-produk">
                    <h1>Produk</h1>
                    <div class="list">
                        @foreach ($products as $product)
                            <div class="list-item">
                                <img src="{{url('ProductsImg/'.$product->product_image)}}" alt="resto">
                                <div class="name"><h2>{{$product->product_name}}</h2></div>
                                <h3>Rp. {{ number_format($product->product_price, 0, ',', '.') }}</h3>
                                <p>{{$product->description}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close" onclick="closeCommentPopup()">&times;</span>
              <h2>Beri Komentar</h2>
              <form id="commentForm" action="{{url('store/'.$id.'/send')}}" method="POST">
                    @csrf
                    <div class="rating-container">
                        <label for="rating"></label>
                        <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5" required>
                            <label for="star5" title="5 stars">★</label>
                            <input type="radio" id="star4" name="rating" value="4" required>
                            <label for="star4" title="4 stars">★</label>
                            <input type="radio" id="star3" name="rating" value="3" required>
                            <label for="star3" title="3 stars">★</label>
                            <input type="radio" id="star2" name="rating" value="2" required>
                            <label for="star2" title="2 stars">★</label>
                            <input type="radio" id="star1" name="rating" value="1" required>
                            <label for="star1" title="1 star">★</label>
                        </div>
                    </div>
    
                    <label for="suggestion">Komentar :</label>
                    <textarea id="suggestion" name="suggestion" rows="4" required></textarea>
                    <button type="submit" onclick="submitComment()">Submit</button>
                    {{-- <input type="submit" value="Submit"> --}}
              </form>
            </div>
        </div>

        <div class="Komentar">
            <div class="comments-section">
                <h2>Komentar</h2>
                <ul id="commentList">
                    @foreach ($comments as $comment)
                        <div class="rating" style="color: #ffc107">
                            @foreach ($ratings as $rating)
                                @if ($comment->created_at == $rating->created_at)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < round($rating->rating))
                                        ★
                                    @else
                                        ☆
                                    @endif
                                @endfor
                                @endif                                
                            @endforeach
                            {{-- ★ ★ ★ ★ ★ ☆  --}}
                        </div>
                        <span> | {{$comment->created_at}} | </span>
                        <span>{{$comment->message}}</span>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
    <script src="{{url('assets/js/detail-script.js')}}"></script>
</body>
</html>
