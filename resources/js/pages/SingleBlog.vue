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
      <a href="">
        <div class="recommended-card">
          <img src="/images/pic5.jpg" alt="" loading="lazy" />
          <h4>12 Health Benefits Of Pomegranate Fruit</h4>
        </div>
      </a>
      <a href="">
        <div class="recommended-card">
          <img src="/images/pushups.jpg" alt="" loading="lazy" />
          <h4>The Truth About Pushups</h4>
        </div>
      </a>
      <a href="">
        <div class="recommended-card">
          <img src="/images/smoothies.jpg" alt="" loading="lazy" />
          <h4>Healthy Smoothies</h4>
        </div>
      </a>
    </div>
  </section>
</template>
<script>
export default {
  props: ["slug"],
  data() {
    return {
      post: {},
    };
  },
  mounted() {
    axios
      .get("/api/posts/" + this.slug)
      .then((response) => (this.post = response.data.data))
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>