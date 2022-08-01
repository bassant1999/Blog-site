<div class="sheader">
    <h3>Buisness casual</h3>
    <a onclick="menu()">
        <i class="material-icons" style="font-size:36px; cursor:pointer;">menu</i>
    </a>
</div>

<!-- Navbar Section Starts Here -->
<div class="navbar" id="navb">
        <div>
            <a href="index.php"> Home </a>
        </div>
        <div>
            <a href="about.php"> About </a>
        </div>
        <div>
            <a href="blog.php?oid=1&nid=1&d=1"> BLOG </a>
        </div>  
        <div>
            <a href="contact.php"> Contact </a>
        </div>
</div>
<!-- Navbar Section ends Here -->

<script>
function menu(){
    let x = document.getElementById('navb').style.display;
    if(x == '' || x =='none'){
        document.getElementById('navb').style.display='flex';
    }
    else{
        document.getElementById('navb').style.display='none';
    }

}
</script>