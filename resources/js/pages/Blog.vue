<template>
  <h2 class="header-title">All Blog Posts</h2>
  <div class="searchbar">
    <form action="">
      <input type="text" placeholder="Search..." name="search" />

      <button type="submit">
        <i class="fa fa-search"></i>
      </button>
    </form>
  </div>
  <div class="categories">
    <ul>
      <li><a href="">Health</a></li>
      <li><a href="">Entertainment</a></li>
      <li><a href="">Sports</a></li>
      <li><a href="">Nature</a></li>
    </ul>
  </div>
  <section class="cards-blog latest-blog">
    <div class="card-blog-content">
      <img src="images/pic1.jpg" alt="" />
      <p>
        2 hours ago
        <span>Written By Alphayo Wakarindi</span>
      </p>
      <h4>
        <a href="single-blog.html">Benefits of getting covid 19 vaccination</a>
      </h4>
    </div>

    <div class="card-blog-content">
      <img src="images/pic2.jpg" alt="" />
      <p>
        23 hours ago
        <span>Written By Alphayo Wakarindi</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="single-blog.html">Top 10 Music Stories Never Told</a>
      </h4>
    </div>

    <div class="card-blog-content">
      <img src="images/pic3.jpg" alt="" />
      <p>
        2 days ago
        <span>Written By Alphayo Wakarindi</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="single-blog.html"
          >WRC Safari Rally Back To Kenya After 19 Years</a
        >
      </h4>
    </div>

    <div class="card-blog-content">
      <img src="images/pic4.jpg" alt="" />
      <p>
        3 days ago
        <span>Written By Alphayo Wakarindi</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="single-blog.html">Premier League 2021/2022 Fixtures</a>
      </h4>
    </div>

    <div class="card-blog-content">
      <img src="images/pic5.jpg" alt="" />
      <p>
        2 weeks ago
        <span>Written By Alphayo Wakarindi</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="single-blog.html">12 Health Benefits Of Pomegranate Fruit</a>
      </h4>
    </div>

    <div class="card-blog-content">
      <img src="images/pic6.jpg" alt="" />
      <p>
        1 month ago
        <span>Written By Alphayo Wakarindi</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="single-blog.html"
          >Nairobi, The Only City In The World With A National Park</a
        >
      </h4>
    </div>

    <!-- pagination -->
    <div class="pagination" id="pagination">
      <a href="">&laquo;</a>
      <a class="active" href="">1</a>
      <a href="">2</a>
      <a href="">3</a>
      <a href="">4</a>
      <a href="">5</a>
      <a href="">&raquo;</a>
    </div>
  </section>
</template>