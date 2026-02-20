@extends('home.layout')


@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-container">
        <!-- Sidebar Categories -->
        <aside class="sidebar">
            <ul>
                <li><a href="#">Woman's Fashion <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Men's Fashion <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Electronics</a></li>
                <li><a href="#">Home & Lifestyle</a></li>
                <li><a href="#">Medicine</a></li>
                <li><a href="#">Sports & Outdoor</a></li>
                <li><a href="#">Baby's & Toys</a></li>
                <li><a href="#">Groceries & Pets</a></li>
                <li><a href="#">Health & Beauty</a></li>
            </ul>
        </aside>

        <!-- Hero Banner -->
        <div class="hero-banner">
            <div class="banner-content">
                <div class="brand-row">
                    <i class="fab fa-apple"></i>
                    <span>iPhone 14 Series</span>
                </div>
                <h2>Up to 10% <br> off Voucher</h2>
                <a href="#" class="shop-now-btn">Shop Now <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="banner-image">
                <!-- Placeholder image for iPhone -->
                <img src="https://images.unsplash.com/photo-1678652197831-2d180705cd2c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="iPhone 14">
            </div>

            <!-- Pagination Dots -->
            <div class="pagination-dots">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
</section>


<!-- Flash Sales Section -->
<section class="flash-sales-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="today-tag">
                <span class="red-block"></span>
                <span class="tag-text">Today's</span>
            </div>
            <div class="flash-sales-row">
                <div class="title-timer">
                    <h2>Flash Sales</h2>
                    <div class="countdown">
                        <div class="time-unit">
                            <span class="label">Days</span>
                            <span class="value">03</span>
                        </div>
                        <span class="separator">:</span>
                        <div class="time-unit">
                            <span class="label">Hours</span>
                            <span class="value">23</span>
                        </div>
                        <span class="separator">:</span>
                        <div class="time-unit">
                            <span class="label">Minutes</span>
                            <span class="value">19</span>
                        </div>
                        <span class="separator">:</span>
                        <div class="time-unit">
                            <span class="label">Seconds</span>
                            <span class="value">56</span>
                        </div>
                    </div>
                </div>

                <div class="nav-arrows">
                    <button class="arrow-btn"><i class="fas fa-arrow-left"></i></button>
                    <button class="arrow-btn"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <!-- Product List -->
        <div class="product-list">
            <!-- Product Card 1 -->
            <div class="product-card">
                <div class="card-header">
                    <span class="discount-badge">-40%</span>
                    <div class="card-icons">
                        <button><i class="far fa-heart"></i></button>
                        <button><i class="far fa-eye"></i></button>
                    </div>
                    <img src="https://images.unsplash.com/photo-1600080972464-8e5f35f63d88?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Gamepad">
                    <button class="add-to-cart-btn">Add To Cart</button>
                </div>
                <div class="card-details">
                    <h3 class="product-name">HAVIT HV-G92 Gamepad</h3>
                    <div class="price">
                        <span class="current-price">$120</span>
                        <span class="original-price">$160</span>
                    </div>
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="review-count">(88)</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="card-header">
                    <span class="discount-badge">-35%</span>
                    <div class="card-icons">
                        <button><i class="far fa-heart"></i></button>
                        <button><i class="far fa-eye"></i></button>
                    </div>
                    <img src="https://images.unsplash.com/photo-1587829741301-dc798b91a603?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Keyboard">
                    <button class="add-to-cart-btn">Add To Cart</button>
                </div>
                <div class="card-details">
                    <h3 class="product-name">AK-900 Wired Keyboard</h3>
                    <div class="price">
                        <span class="current-price">$960</span>
                        <span class="original-price">$1160</span>
                    </div>
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="review-count">(75)</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="card-header">
                    <span class="discount-badge">-30%</span>
                    <div class="card-icons">
                        <button><i class="far fa-heart"></i></button>
                        <button><i class="far fa-eye"></i></button>
                    </div>
                    <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Monitor">
                    <button class="add-to-cart-btn">Add To Cart</button>
                </div>
                <div class="card-details">
                    <h3 class="product-name">IPS LCD Gaming Monitor</h3>
                    <div class="price">
                        <span class="current-price">$370</span>
                        <span class="original-price">$400</span>
                    </div>
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="review-count">(99)</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card">
                <div class="card-header">
                    <span class="discount-badge">-25%</span>
                    <div class="card-icons">
                        <button><i class="far fa-heart"></i></button>
                        <button><i class="far fa-eye"></i></button>
                    </div>
                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Chair">
                    <button class="add-to-cart-btn">Add To Cart</button>
                </div>
                <div class="card-details">
                    <h3 class="product-name">S-Series Comfort Chair</h3>
                    <div class="price">
                        <span class="current-price">$375</span>
                        <span class="original-price">$400</span>
                    </div>
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="review-count">(99)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="view-all-container">
            <button class="view-all-btn">View All Products</button>
        </div>

        <hr class="section-divider">
    </div>
</section>
@endsection

@push('styles')
<style>
/* Hero Section */
.hero-section {
    padding-top: 40px;
}

.hero-container {
    display: flex;
}

/* Sidebar */
.sidebar {
    width: 217px;
    border-right: 1px solid #D9D9D9;
    /* Divider line */
    padding-right: 16px;
    margin-right: 45px;
}

.sidebar ul li {
    margin-bottom: 16px;
}

.sidebar ul li a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
    color: #000;
    transition: color 0.3s;
}

.sidebar ul li a:hover {
    color: #DB4444;
}

/* Hero Banner */
.hero-banner {
    flex: 1;
    background-color: #000;
    color: #FAFAFA;
    display: flex;
    align-items: center;
    padding: 0 64px;
    position: relative;
    overflow: hidden;
    height: 344px;
    /* Fixed height for banner */
}

.banner-content {
    z-index: 2;
    max-width: 50%;
}

.brand-row {
    display: flex;
    align-items: center;
    gap: 24px;
    margin-bottom: 20px;
}

.brand-row i {
    font-size: 40px;
}

.brand-row span {
    font-size: 16px;
}

.hero-banner h2 {
    font-size: 48px;
    font-weight: 600;
    line-height: 60px;
    letter-spacing: 0.04em;
    margin-bottom: 22px;
}

.shop-now-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 16px;
    font-weight: 500;
    border-bottom: 1px solid #FAFAFA;
    padding-bottom: 4px;
    color: #FAFAFA;
}

.banner-image {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    max-width: 50%;
}

.banner-image img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
}

/* Pagination Dots */
.pagination-dots {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 12px;
}

.dot {
    width: 12px;
    height: 12px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    cursor: pointer;
}

.dot.active {
    background-color: #DB4444;
    /* Red active dot */
    border: 2px solid #fff;
    /* White border for active dot */
}


/* Flash Sales Section */
.flash-sales-section {
    padding-top: 140px;
    padding-bottom: 60px;
}

.section-header {
    margin-bottom: 40px;
}

.today-tag {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
}

.red-block {
    width: 20px;
    height: 40px;
    background-color: #DB4444;
    border-radius: 4px;
}

.tag-text {
    font-size: 16px;
    font-weight: 600;
    color: #DB4444;
}

.flash-sales-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
}

.title-timer {
    display: flex;
    align-items: flex-end;
    gap: 87px;
}

.title-timer h2 {
    font-size: 36px;
    font-weight: 600;
    letter-spacing: 0.04em;
    line-height: 1.2;
}

.countdown {
    display: flex;
    align-items: center;
    gap: 17px;
    margin-bottom: 4px; /* Align visually with text */
}

.time-unit {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.time-unit .label {
    font-size: 12px;
    font-weight: 500;
}

.time-unit .value {
    font-size: 32px;
    font-weight: 700;
    line-height: 30px;
    letter-spacing: 0.04em;
}

.separator {
    color: #E07575;
    font-size: 24px;
    font-weight: 600;
    margin-top: 15px; /* Adjust to align with numbers */
}

.nav-arrows {
    display: flex;
    gap: 8px;
}

.arrow-btn {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background-color: #F5F5F5;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
}

.arrow-btn i {
    font-size: 16px;
}

.arrow-btn:hover {
    background-color: #E0E0E0;
}

/* Product List Grid */
.product-list {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-bottom: 60px;
    overflow-x: auto; /* Allow scrolling if needed on smaller screens */
    padding-bottom: 10px;
}

.product-card {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.card-header {
    position: relative;
    background-color: #F5F5F5;
    height: 250px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* For the button slide up */
}

.card-header img {
    max-width: 80%;
    max-height: 80%;
    object-fit: contain;
}

.discount-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background-color: #DB4444;
    color: #fff;
    font-size: 12px;
    padding: 4px 12px;
    border-radius: 4px;
}

.card-icons {
    position: absolute;
    top: 12px;
    right: 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.card-icons button {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background-color: #fff;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    transition: all 0.3s;
}

.card-icons button:hover {
    background-color: #DB4444;
    color: #fff;
}

.add-to-cart-btn {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #000;
    color: #fff;
    border: none;
    padding: 10px 0;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transform: translateY(100%); /* Hidden by default */
    transition: transform 0.3s ease;
}

.card-header:hover .add-to-cart-btn {
    transform: translateY(0); /* Slide up on hover */
}

.card-details {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.product-name {
    font-size: 16px;
    font-weight: 500;
}

.price {
    display: flex;
    gap: 12px;
    font-size: 16px;
    font-weight: 500;
}

.current-price {
    color: #DB4444;
}

.original-price {
    color: #7D8184; /* Gray color */
    text-decoration: line-through;
}

.rating {
    display: flex;
    align-items: center;
    gap: 8px;
}

.stars {
    color: #FFAD33; /* Star color */
    font-size: 14px;
}

.review-count {
    font-size: 14px;
    font-weight: 600;
    color: #7D8184; /* Gray color */
}

/* View All Button */
.view-all-container {
    text-align: center;
    margin-bottom: 60px;
}

.view-all-btn {
    background-color: #DB4444;
    color: #fff;
    padding: 16px 48px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s;
}

.view-all-btn:hover {
    background-color: #E07575;
}

.section-divider {
    border: none;
    border-top: 1px solid #D9D9D9; /* Light gray line */
    opacity: 0.3; /* Make it subtle */
}

</style>
@endpush