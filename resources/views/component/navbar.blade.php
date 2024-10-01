<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .navbar {
    background: linear-gradient(90deg, #003078, #4804b5);
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000; 
}
.navbar-brand a {
    color: #ffffff; 
    font-size: 28px;
    font-weight: bold;
    letter-spacing: 1px;
  }
  

.navbar-menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.navbar-menu li {
    margin-left: 30px;
}

.navbar-menu a {
    color: #ffffff; /* darker blue */
    font-size: 18px;
    position: relative;
    transition: color 0.3s;
  }

.navbar-menu a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    background-color: #ffcc00;
    left: 0;
    bottom: -5px;
    transition: width 0.3s;
}

.navbar-menu a:hover {
    color: #ffcc00; /* bright orange */
  }

.navbar-menu a:hover::after {
    width: 100%;
    background-color: #ffcc00; /* bright orange */
}

</style>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="#">BandungAppFAQ</a>
        </div>
        <ul class="navbar-menu">
            <li><a href="/home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="/FAQ">FAQ</a></li>
            <li><a href="/contact">Kontak</a></li>
        </ul>
    </nav>
</body>
</html>