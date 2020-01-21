<style>

.menu {
  position: absolute;
  background: transparent;
  top: 20px;
  right: 20px;
}

nav {
  position: relative;
  float: right;
}
nav ul {
  margin: 0;
  padding: 0;
  display: flex;
}
nav ul li {
  list-style: none;
}
nav ul li a {
  display: block;
  color: rgb(255, 255, 255);
  text-transform: uppercase;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 500;
  padding: 15px 20px;
  text-decoration: none;

}
nav ul li a:hover {
  background: transparent;
  color: rgb(0, 0, 0);
  text-decoration: none;
}
nav ul li ul {
  display: block;
  background: rgba(0, 0, 0, 0.5);
  min-width: 150px;
  position: absolute;
  margin-top: 1px;
  box-shadow: 0 2px 5px, rgba(0, 0, 0, 0.5);
  opacity: 0;
  visibility: hidden;
  transition: 0.5s;
  transform: translateY(40px);
}
nav ul li:hover ul {
  opacity: 1;
  visibility: visible;
  transform: translateY(0px);
}
nav ul li ul li a {
  display: block;
}

</style>

<nav class="menu">
    <div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Cities</a>
                <ul>
                    <li><a href="#">Dhaka</a></li>
                    <li><a href="#">Chittagong</a></li>
                    <li><a href="#">Rajshahi</a></li>
                    <li><a href="#">Rangpur</a></li>
                    <li><a href="Sylhet.php">Sylhet</a></li>
                    <li><a href="#">Khulna</a></li>
                    <li><a href="#">Barishal</a></li>
                </ul>    
            </li>       
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Sign in</a></li>
        </ul>
    </div>
</nav>
