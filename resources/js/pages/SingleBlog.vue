<template>
  <section class="single-blog-post">
    <h1>{{ post.title }}</h1>

    <p class="time-and-author">
      {{ post.created_at }}
      <span>Written By {{ post.user }}</span>
    </p>

    <div class="single-blog-post-ContentImage" data-aos="fade-left">
      <img :src="`/${post.imagePath}`" alt="" />
    </div>

    <div class="about-text">
      <p>
        {{ post.body }}
      </p>
    </div>
  </section>
  <section class="recommended">
    <p>Related</p>
    <div class="recommended-cards">
      <router-link
        v-for="relatedPost in relatedPosts"
        :key="relatedPost.id"
        :to="{
          name: 'SingleBlog',
          params: { slug: relatedPost.slug },
        }"
      >
        <div class="recommended-card">
          <img :src="`/${relatedPost.imagePath}`" alt="" loading="lazy" />
          <h4>{{ relatedPost.title }}</h4>
        </div>
      </router-link>
    </div>
  </section>
</template>
<script>
export default {
  emits: ["updateSidebar"],
  props: ["slug"],
  data() {
    return {
      post: {},
      relatedPosts: [],
    };
  },
  mounted() {
    axios
      .get("/api/posts/" + this.slug)
      .then((response) => (this.post = response.data.data))
      .catch((error) => {
        console.log(error);
      });

    axios
      .get("/api/related-posts/" + this.slug)
      .then((response) => (this.relatedPosts = response.data.data))
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>