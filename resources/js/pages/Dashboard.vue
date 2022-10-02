<template>
  <div id="backend-view">
    <div class="logout"><a href="#" @click="logout">Log out</a></div>
    <h1 class="heading">Dashboard</h1>
    <span>Hi {{ name }}!</span>
    <div class="links">
      <ul>
        <li><a href="">Create Post</a></li>

        <li><a href="">Create Category</a></li>

        <li><a href="">Categories List</a></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: "",
    };
  },
  mounted() {
    axios
      .get("/api/user")
      .then((response) => (this.name = response.data.name))
      .catch((error) => console.log(error));
  },

  methods: {
    logout() {
      axios
        .post("/api/logout")
        .then((response) => this.$router.push({ name: "Home" }))
        .catch((error) => console.log(error));
    },
  },
};
</script>

<style scoped>
/* dashboard */
#backend-view {
  text-align: center;
  background-color: #f3f4f6;
  height: 100vh;
  padding-top: 15vh;
}

.logout {
  position: absolute;
  top: 30px;
  right: 40px;
}
.heading {
  margin-bottom: 5px;
}
.links {
  margin-top: 30px;
  margin-left: auto;
  margin-right: auto;
  background: #ffffff;
  max-width: 500px;
  padding: 15px;
  border-radius: 15px;
}
.links ul {
  list-style: none;
}
.links a {
  all: revert;
  font-size: 26px;
  display: inline-block;
  margin: 10px 0;
}
</style>
