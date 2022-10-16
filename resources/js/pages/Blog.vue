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
      <li v-for="category in categories" :key="category.id">
        <a href="#" @click="filterByCategory(category.name)">{{
          category.name
        }}</a>
      </li>
    </ul>
  </div>
  <section class="cards-blog latest-blog">
    <div class="card-blog-content" v-for="post in posts" :key="post.id">
      <img :src="post.imagePath" alt="" />
      <p>
        {{ post.created_at }}
        <span style="float: right">Written By {{ post.user }}</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="single-blog.html"></a>
        <router-link
          :to="{
            name: 'SingleBlog',
            params: { slug: post.slug },
          }"
          >{{ post.title }}</router-link
        >
      </h4>
    </div>
  </section>
</template>
<script>
export default {
  emits: ["updateSidebar"],
  data() {
    return {
      posts: [],
      categories: [],
    };
  },

  methods: {
    filterByCategory(name) {
      axios
        .get("/api/posts", {
          params: {
            category: name,
          },
        })
        .then((response) => {
          this.posts = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },

  mounted() {
    axios
      .get("/api/posts")
      .then((response) => (this.posts = response.data.data))
      .catch((error) => {
        console.log(error);
      });

    axios
      .get("/api/categories")
      .then((response) => (this.categories = response.data))
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>