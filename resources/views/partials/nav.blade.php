 <!-- Top Header (Black Bar) -->
 <div class="top-header">
     <div class="container top-header-content">
         <div class="promo-text">
             Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%!
             <a href="#" class="shop-now-link">ShopNow</a>
         </div>
         <div class="language-selector">
             English <i class="fas fa-chevron-down"></i>

         </div>
     </div>
 </div>

 <!-- Main Navigation -->
 <nav class="navbar">
     <div class="container nav-content">
         <div class="logo">
             <h1>Exclusive</h1>
         </div>

         <ul class="nav-links">
             <li><a href="#" class="active">Home</a></li>
             <li><a href="#">Contact</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Sign Up</a></li>
         </ul>

         <div class="nav-actions">
             <div class="search-box">
                 <input type="text" placeholder="What are you looking for?">
                 <button><i class="fas fa-search"></i></button>
             </div>
             <div class="icons">
                 <a href="#"><i class="far fa-heart"></i></a>
                 <a href="#"><i class="fas fa-shopping-cart"></i></a>
             </div>
         </div>
     </div>
 </nav>


 <style>
/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    color: #000;
}

a {
    text-decoration: none;
    color: inherit;
}

ul {
    list-style: none;
}

.container {
    max-width: 1170px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Top Header */
.top-header {
    background-color: #000;
    color: #FAFAFA;
    font-size: 14px;
    padding: 12px 0;
}

.top-header-content {
    display: flex;
    justify-content: space-between;
    /* Creates space between text and language selector */
    align-items: center;
    position: relative;
}

.promo-text {
    flex: 1;
    /* Allows centering */
    text-align: center;
}

.shop-now-link {
    font-weight: 600;
    text-decoration: underline;
    margin-left: 8px;
    color: #FAFAFA;
}

.language-selector {
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Navbar */
.navbar {
    border-bottom: 1px solid #D9D9D9;
    padding-top: 40px;
    padding-bottom: 16px;
}

.nav-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo h1 {
    font-size: 24px;
    font-weight: 700;
    letter-spacing: 0.03em;
    /* Slightly wider letter spacing */
}

.nav-links {
    display: flex;
    gap: 48px;
    /* Space between links */
}

.nav-links a {
    font-size: 16px;
    color: #000;
    position: relative;
    padding-bottom: 4px;
}

.nav-links a.active {
    border-bottom: 1px solid #000;
}

.nav-links a:hover {
    color: #DB4444;
    /* Red hover color */
}

.nav-actions {
    display: flex;
    align-items: center;
    gap: 24px;
}

.search-box {
    background-color: #F5F5F5;
    border-radius: 4px;
    padding: 7px 12px;
    display: flex;
    align-items: center;
    width: 243px;
    /* Fixed width as per design */
}

.search-box input {
    border: none;
    background: transparent;
    outline: none;
    font-size: 12px;
    width: 100%;
    color: #000;
}

.search-box input::placeholder {
    color: #7D8184;
}

.search-box button {
    border: none;
    background: transparent;
    cursor: pointer;
}

.icons {
    display: flex;
    gap: 16px;
    font-size: 20px;
    /* Icon size */
}
</style>