<template>
  <div class="categories-list">
    <h1>Posts List</h1>
    <!-- success message -->
    <div class="success-msg">
      <i class="fa fa-check"></i>
      Post deleted successfully
    </div>
    <div class="item">
      <span>1.</span>
      <p>First title</p>
      <div>
        <a href="" class="edit-link">Edit</a>
      </div>

      <input type="submit" value="Delete" class="delete-btn" />
    </div>
    <div class="index-categories">
      <router-link :to="{ name: 'CreatePosts' }"
        >Create post<span>&#8594;</span></router-link
      >
    </div>
  </div>
</template>

<style scoped >
.categories-list {
  min-height: 100vh;
  background: #fff;
}

.categories-list h1 {
  font-weight: 300;
  padding: 50px 0 30px 0;
  text-align: center;
}

.categories-list .item {
  display: flex;
  justify-content: right;
  align-items: center;
  max-width: 300px;
  margin: 0 auto !important;
}

.categories-list .item p {
  font-size: 16px;
}

.categories-list .item p,
.categories-list .item div,
.categories-list .item {
  margin: 15px 8px;
}

.categories ul li {
  list-style: none;
  background-color: #494949;
  margin: 20px 5px;

  border-radius: 15px;
}

.categories ul {
  display: flex;
  justify-content: center;
}

.categories a {
  color: white;
  padding: 10px 20px;
  display: inline-block;
}

.create-categories a,
.index-categories a {
  all: revert;
  margin: 20px 0;
  display: inline-block;
  text-decoration: none;
}

.create-categories a span,
.index-categories a span {
  font-size: 22px;
}

.index-categories {
  text-align: center;
}
</style>